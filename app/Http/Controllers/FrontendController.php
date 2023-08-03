<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NewsModel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $highlights = NewsModel::limit(4)->get();
        return view('frontend.home', ['highlights' => $highlights]);
    }
}
