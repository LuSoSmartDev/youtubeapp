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
    public function get_random_video() {
        return UVideo::all()->random(1)->first();
    }
}
