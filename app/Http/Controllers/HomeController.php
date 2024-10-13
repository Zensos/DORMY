<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $dormitoryCategory = DB::table('dormitory_categories')->limit(10)->get();

        if ($dormitoryCategory->isEmpty()) { 
            return response()->json(['error' => 'Dormitory Category not found'], 404);
        }
        // return response()->json($dormitoryCategory);

        return view('home')->with('dormitoryCategories', $dormitoryCategory);
    }

}
