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
        
         $emailAccount = EmailAccount::orderBy('update_last_time', 'ASC')->first();
         //return json_encode(['data'=>[]]);
        if(!empty($emailAccount)) {
        
            EmailAccount::where('id', $emailAccount['id'])->update(['update_last_time' => date('Y-m-d H:i:s')]);
            return json_encode($emailAccount);
        } else {
            return json_encode($emailAccount);
        }
        
        //return EmailAccount::all('email','password','recover_email')->random(1)->first();
    }
    public function addEmail(){
       $email = request('ls_email','');
       //echo count($email);
       $list_email_strs = explode("\r\n", $email);
       foreach($list_email_strs as $items){
            $word = explode("|", $items);
            EmailAccount::create([
                'email'=>$word[0],
                'password'=>$word[1],
                'recover_email'=>$word[2]
            ]);
        }
       
        return redirect()->guest('listemail');
    }
}