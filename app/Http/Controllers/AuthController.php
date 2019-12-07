<?php
namespace App\Http\Controllers;
use App\Roles;
use App\Schools;
use App\User;
use App\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webpatser\Uuid\Uuid;
class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'firstname'     => 'required|string',
            'email'    => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);
        $default_role = Roles::where('name','ilike','Estudiante')->first();
        $default_school = Schools::first();
        $id = Uuid::generate()->string;
        $user = new Users([
            'id'           => $id,
            'firstname'     => $request->firstname,
            'lastname'     => ($request->lastname)?$request->lastname:'N/A',
            'second_lastname'     => ($request->second_lastname)?$request->second_lastname:'N/A',
            'role_id'     => ($request->role_id)?$request->role_id:$default_role->id,
            'is_active'     => true,
            'school_id'     => ($request->school_id)?$request->school_id:$default_school->id,
            'user_code'     => ($request->user_code)?$request->user_code:'123456',
            'gender'     => ($request->gender)?$request->gender:'N/A',
            'blood_group'     => ($request->blood_group)?$request->blood_group:'N/A',
            'nationality'     => ($request->nationality)?$request->nationality:'MX',
            'phone_number'     => ($request->phone_number)?$request->phone_number:'N/A',
            'address'     => ($request->address)?$request->address:'N/A',
            'about'     => ($request->about)?$request->about:'N/A',
            'profile_pic'     => ($request->profile_pic)?$request->profile_pic:'default.jpg',
            'school_grade'     => ($request->school_grade)?$request->school_grade:'1',
            'type'     => ($request->type)?$request->type:'Regular',
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->save();
        return response()->json([
            'message' => 'Successfully created user!'], 201);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'       => 'required|string|email',
            'password'    => 'required|string',
            'remember_me' => 'boolean',
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'], 401);
        }
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type'   => 'Bearer',
            'expires_at'   => Carbon::parse(
                $tokenResult->token->expires_at)
                ->toDateTimeString(),
            'user' => $user
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' =>
            'Successfully logged out']);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
