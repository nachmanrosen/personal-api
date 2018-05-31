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
       return new ExperienceResource(Experience::find($id));
    }



}   


?>