<?php

use Illuminate\Database\Seeder;
use App\Schools;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = "http://datamx.io/api/action/datastore_search?resource_id=4c068721-1bcf-4887-b2bc-385b1e450d26&limit=5816";
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url)->getBody();
        $body = json_decode($response);
        foreach ($body->result->records as $record){
            $school = [];
            $school = new Schools();
            $school->id = \Webpatser\Uuid\Uuid::generate()->string;
            $school->name = $record->nombre;
            $school->code = $record->idct;
            $school->city = "HGO";
            $school->state = "HGO";
            $school->country = "México";
            $school->save();
        }
    }
}
