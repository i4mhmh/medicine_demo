<?php

namespace App\Http\Controllers\db;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    //新建add类
	public function add(){
        $db = DB::table('chinese_medicine_table');
        $res = $db -> insert(
            [
                'cm_id' => 2,
                'cm_name' => '三味散',
                'cm_price' => 33.20,
                'medicine_number' => 30,
            ]
        );
        dd($res);
    }

    public function update(){
        //where判断('字段','运算符','修改后的值')
        $db = DB::table('chinese_medicine_table');
        $res = $db -> where('cm_id', '=', 2) -> increment('medicine_number',1) -> update(
            [
                'cm_price' => 50,
            ],
            );
        dd($res);
    }
    public function select(){
        $db = DB::table('chinese_medicine_table')-> where('cm_id','<=',2) ->where('medicine_number','<',60) -> get();
        foreach($db as $key => $value){
            echo "药名是:{$value -> cm_name}";
        }
    }
    public function del(){
        $db = DB::table('chinese_medicine_table');
        $res = $db -> where('cm_name','=','三味散') -> delete();
        dd($res);
    }
}
