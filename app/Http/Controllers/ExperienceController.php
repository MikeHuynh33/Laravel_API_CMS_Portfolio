<?php

namespace App\Http\Controllers;
use App\Models\ExperienceModel;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    //
    public function ListExperiences()
    {
        $data = ExperienceModel::get();
        return response()->json($data);
    }
}
