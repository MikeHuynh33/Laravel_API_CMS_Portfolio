<?php

namespace App\Http\Controllers;
use App\Models\SkillModel;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function ListSkills()
    {
        $data = SkillModel::get();
        return response()->json($data);
    }
}
