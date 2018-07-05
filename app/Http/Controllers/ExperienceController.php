<?php

namespace App\Http\Controllers;
use App\Http\Resources\Experience as ExperienceResource;
use App\User;
use App\Experience;
use App\Http\Controllers\Controller;
use App\Http\Resources\exp as expResource;
use App\Request as REQU;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
   
   

   
    public function experience(Request $request){
       
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