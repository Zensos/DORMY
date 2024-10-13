<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


class DormitoryCategory extends Controller
{
    public function index()
    {
        $dormitoryCategory = DB::table('dormitory_categories')->get();

        if ($dormitoryCategory->isEmpty()) { 
            return response()->json(['error' => 'Dormitory Category not found'], 404);
        }
        return response()->json($dormitoryCategory);

        return view('home')->with('dormitoryCategories', $dormitoryCategory);
    }

    public function getDormitoryCategoryById($id) {
         $dormitoryCategory = DB::table('dormitory_categories')
            ->where('id', $id)
            ->first();

        if (!$dormitoryCategory) {
            return response()->json(['error' => 'Dormitory Category not found'], 404);
        }
        $currentDateTime = Carbon::now()->format('d/m/Y h:i A');
        // return response()->json($dormitoryCategory);
        return view('dormitory.id',compact('currentDateTime'))->with('dormitoryCategory', $dormitoryCategory);
    }

}
