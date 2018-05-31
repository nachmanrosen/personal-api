<?php

namespace App\Http\Controllers;
use App\Http\Resources\Experience as ExperienceResource;
use App\User;
use App\Experience;
use App\Http\Controllers\Controller;
use App\Http\Resources\exp as expResource;

class ExperienceController extends Controller
{

   

   
    public function experience(){
        // echo "https://api.nachman-rosen.local/data /experience";
       return  expResource::collection(Experience::all());
     
    }

    public function experienceId($id){
       // echo "https://api.nachman-rosen.local/data/experience/id";
        $result=Experience::find($id);
        if ( !$result)
    {
        return response()->json(['errors' => [ 
            'status'=> '404', 
            'source'=>[
                'pointer'=>'experience/id'],
             'detail'=>'Record not found'
            ]], 404);
    } else{
        return new ExperienceResource(Experience::find($id));
    }

    }



}   


?>