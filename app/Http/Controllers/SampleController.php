<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SampleController extends Controller {
  public function index(Request $request){

    //追加
    //$insertResult = DB::connection("mysql")->insert("insert into users (id, email, name, password) values(3, 'daihuku@daihuku', 'だいふく', 'daihuku0707')");
    //dd($insertResult);

    //削除
    //$deleteResult = DB::connection("mysql")->delete("delete from users where name = '太郎'");
    //dd($deleteResult);
  }
}