<?php

use Illuminate\Database\Seeder;
use App\EmailAccount;
class EmailAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    var $list_email_strs = ["3fingerspromo@gmail.com |hongpfdsagr223|gfhtyaokhu12.12cuong@gmail.com",
        "therealmatrix82@gmail.com|tuanafdsgrg334|sadhtadsad12.12cuong@gmail.com",
        "bizjumpstart.barnett@gmail.com| mylovfdhrtfe112|sahtranfodo12.12cuong@gmail.com",
        "dogskno1122@gmail.com|dieuemfdsgtrs221|sadhtasedwnfo12.12cuong",
        "mcjalexgru@gmail.com |hondadefsadgr211|sadjyamkh12.12cuong@gmail.com",
        "rparihar8@gmail.com|966nbfdsgra212|adsgrtaionbaa12.12cuong",
        "id1493gaurav@gmail.com|visaodasgfr4a12|isaghahjaed12.12cuong",
        "shirleybension@gmail.com|montefdsgrawe221|sadhtayras12.12cuong",
        "devvydoll@gmail.com|zztamdsagrawe123|sahaweydyt12.12cuong",
        "xtr3m333@gmail.com |titafdgrhr221|sadjyaernte12.12cuong@gmail.com"];
    public function run()
    {
        foreach($this->list_email_strs as $items){
            $word = explode("|", $items);
            EmailAccount::create([
                'email'=>$word[0],
                'password'=>$word[1],
                'recover_email'=>$word[2]
            ]);
        }
        
    }
}
