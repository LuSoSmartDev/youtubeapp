<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailAccount;
class EmailAccountController extends Controller
{
    public function index() {
        return EmailAccount::all();
    }
    public function getrandom(){
        return EmailAccount::all('email','password','recover_email')->random(1)->first();
    }
}