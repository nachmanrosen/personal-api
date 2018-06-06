<?php

namespace App\Http\Controllers;
use App\Institution;
use App\User;
use App\Http\Resources\Institution as InstitutionResource;
use App\Http\Resources\inst as instResource;
use App\Http\Controllers\Controller;
use App\Request as REQU;
use Illuminate\Http\Request;


class InstitutionController extends Controller
{  
    public function institution () {
     
    return  instResource::collection(Institution::all());
    }

    public function institutionId($id,Request $request){
        $req=new REQU;

        
        $req->IP_Address=$request->ip();
        $req->method=$request->method();
        //$req->headers=implode( $request->header('content-type'), ',');
       // var_dump($request->header());
        $req->url_content=$request->url();
        
        $req->query_params=implode( $request->query(), ',');
        $req->query_keys=implode( $request->keys(), ',');
        $req->save();
     
     $result=Institution::find($id);
        if ( !$result)
    {
        return response()->json(['errors' => [ 
            'status'=> '404', 
            'source'=>[
                'pointer'=>'institutions/id'],
             'detail'=>'Record not found'
            ]], 404);
    } else{
        return new InstitutionResource(Institution::find($id));
    }
     
    }
   
    public function store(Request $request)
    {
        
        $req=new REQU;

        
        $req->IP_Address=$request->ip();
        $req->method=$request->method();
        //$req->headers=implode( $request->keys(), ',');
        //var_dump($request->header());
        $req->url_content=$request->url();
        
        $req->query_params=implode( $request->query(), ',');
        $req->query_keys=implode( $request->keys(), ',');
        $req->save();
        return  instResource::collection(Institution::all());
       
    }
    public function getRequests(){
        return REQU::all();
    
    }
    public function getRequestsId($id){
        return REQU::find($id);
    
    }

   
}   


?>