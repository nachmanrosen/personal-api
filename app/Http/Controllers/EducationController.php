<?php

namespace App\Http\Controllers;
use App\Institution;
use App\User;
use App\Http\Resources\Institution as InstitutionResource;
use App\Http\Resources\inst as instResource;
use App\Http\Controllers\Controller;

class InstitutionController extends Controller
{  
    public function institution () {
     //echo " https://api.nachman-rosen.local/api/institutions";
     //$institution=App/Institution::all();
    // echo $institution;
    return  instResource::collection(Institution::all());
    }

    public function institutionId($id){
     
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


}   


?>