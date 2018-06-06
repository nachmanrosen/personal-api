<?php

namespace App\Http\Controllers;
use App\Http\Resources\proj as projResource;
use App\User;
use App\myProject;
use App\Http\Controllers\Controller;
use App\Http\Resources\Projects as ProjectsResource;
use App\Request as REQU;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

   

   
    public function projects(Request $request){
        $req=new REQU;

        
        $req->IP_Address=$request->ip();
        $req->method=$request->method();
        //$req->headers=implode( $request->keys(), ',');
        //var_dump($request->header());
        $req->url_content=$request->url();
        
        $req->query_params=implode( $request->query(), ',');
        $req->query_keys=implode( $request->keys(), ',');
        $req->save();
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