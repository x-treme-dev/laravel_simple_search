<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function index(){
        return view('search');
    }

    public function search(Request $request){
       $data = $request->all();
       $rowData = '';
       if($data['trade_mark'] != 'None' && $data['name'] == 'None') $rowData = DB::table('item')->where('trade_mark', $data['trade_mark'])->get(); 
       else if($data['name'] != 'None' && $data['trade_mark'] == 'None') $rowData = DB::table('item')->where('name', $data['name'])->get();
       return view('search', ['rowData' => $rowData]);
    }


}
