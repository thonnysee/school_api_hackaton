<?php

namespace App\Http\Controllers;

use App\Roles;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use PHPUnit\Util\Json;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($roles = Roles::all())return response()->json($roles,'200');
        return response()->json("Data not found",'404');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Json Response
     */
    public function store(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')){
            if(!$find = Roles::where('type','ilike','%'.$request->type.'%')->first() && $request->type && $request->name){
                $rol = Roles::create([
                    'id' => \Webpatser\Uuid\Uuid::generate()->string,
                    'name'=> $request->name,
                    'type' => $request->type,
                    'description' => ($request->description)?$request->description:"N/A"
                ]);
                return response()->json($rol, 201);
            }
            return response()->json('http_response_bad_request',400);
        }
        return response()->json('http_response_bad_request', 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schools  $schools
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schools  $schools
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schools  $schools
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schools  $schools
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $roles)
    {
        //
    }
}
