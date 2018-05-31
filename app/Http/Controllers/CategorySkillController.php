<?php

namespace App\Http\Controllers;
use App\SkillCategories;
 use App\Http\Resources\Skill as SkillResource;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Resources\sk as skResource;

class CategorySkillController extends Controller
{
    public function skills () {
     //echo " https://api.nachman-rosen.local/api/skills";
     return  skResource::collection(SkillCategories::all());
    }

    public function skillsId($id){
     //echo "https://api.nachman-rosen.local/api/skills/id";
     return  new SkillResource(SkillCategories::find($id));
    }



}   


?>