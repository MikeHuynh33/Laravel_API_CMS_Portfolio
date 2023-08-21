<?php

namespace App\Http\Controllers;
use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function ListAbouts()
    {
        $data = AboutModel::get();
        return response()->json($data);
    }
}
