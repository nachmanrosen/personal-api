<?php

namespace App\Http\Controllers;
use App\SkillCategories;
 use App\Http\Resources\Skill as SkillResource;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Resources\sk as skResource;
use App\Request as REQU;
use Illuminate\Http\Request;

class CategorySkillController extends Controller
{
    public function skills (Request $request) {
        $req=new REQU;

        
        $req->IP_Address=$request->ip();
        $req->method=$request->method();
        //$req->headers=implode( $request->keys(), ',');
        //var_dump($request->header());
        $req->url_content=$request->url();
        
        $req->query_params=implode( $request->query(), ',');
        $req->query_keys=implode( $request->keys(), ',');
        $req->save();
     //echo " https://api.nachman-rosen.local/api/skills";
     return  skResource::collection(SkillCategories::all());
    }

    public function skillsId($id){
     //echo "https://api.nachman-rosen.local/api/skills/id";

     $result=SkillCategories::find($id);
        if ( !$result)
    {
        return response()->json(['errors' => [ 
            'status'=> '404', 
            'source'=>[
                'pointer'=>'skills/id'],
             'detail'=>'Record not found'
            ]], 404);
    } else{
        return new SkillResource(SkillCategories::find($id));
    }
     
    }



}   


?>