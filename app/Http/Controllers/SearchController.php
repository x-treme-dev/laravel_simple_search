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
       // получить данные из поля ввода
       $searchTerm = $request->input('search');

       // получить все столбцы и искать в них ключевое слово через foreach()
       $columns = ['trade_mark', 'name', 'description', 'date_manufacture',
                    'date_receipts', 'quantity', 'weight', 
                    'price', 'sale', 'discount', 'size'];
        $query = DB::table('item');
        
        foreach($columns as $column){
           $query->orWhere($column, 'LIKE', '%'. $searchTerm . '%');
        }
        // получить результат запроса
        $searchData = $query->get();
        
      
        return view('search', ['searchData' => $searchData]);
    }


}
