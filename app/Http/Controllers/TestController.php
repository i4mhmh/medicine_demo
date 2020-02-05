<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function test1(){
        phpinfo();
    }

    public function add(){
        $db = DB::table('drug_table');
        $result = $db -> insert(
            [
            'medicine_number' => 4,
            'medicine_name' => '西药', 
        ]
    );
    }
}
