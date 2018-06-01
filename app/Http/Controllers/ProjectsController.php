<?php

namespace App\Http\Controllers;
use App\Http\Resources\proj as projResource;
use App\User;
use App\myProject;
use App\Http\Controllers\Controller;
use App\Http\Resources\Projects as ProjectsResource;

class ProjectsController extends Controller
{

   

   
    public function projects(){
        // echo "https://api.nachman-rosen.local/data /experience";
       return  projResource::collection(myProject::all());
     
    }

    public function projectsId($id){
       // echo "https://api.nachman-rosen.local/data/experience/id";
        $result=myProject::find($id);
        if ( !$result)
    {
        return response()->json(['errors' => [ 
            'status'=> '404', 
            'source'=>[
                'pointer'=>'projects/id'],
             'detail'=>'Record not found'
            ]], 404);
    } else{
        return new ProjectsResource(myProject::find($id));
    }

    }



}   


?>