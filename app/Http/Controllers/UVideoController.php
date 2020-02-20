<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UVideo;
class UVideoController extends Controller
{
    //
    public function index(){
        UVideo::all();
    }
}
