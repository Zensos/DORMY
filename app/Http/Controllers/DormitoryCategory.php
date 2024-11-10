<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


class DormitoryCategory extends Controller
{
    // public function displayDormitoryDetailPage()
    // {
    //     $dormitoryCategory = DB::table('dormitory_categories')->get();

    //     if ($dormitoryCategory->isEmpty()) { 
    //         return response()->json(['error' => 'Dormitory Category not found'], 404);
    //     }
    //     return response()->json($dormitoryCategory);

    //     return view('home')->with('dormitoryCategories', $dormitoryCategory);
    // }

    public function displayDormitoryDetailPage($id) {
        $dormitoryCategory = $this->requestDormitoryDetail($id);

        if (!$dormitoryCategory) {
            return response()->json(['error' => 'Dormitory Category not found'], 404);
        }
        $currentDateTime = Carbon::now()->format('d/m/Y h:i A');
        // return response()->json($dormitoryCategory);
        return view('dormitory.id',compact('currentDateTime'))->with('dormitoryCategory', $dormitoryCategory);
    }

    private function requestDormitoryDetail($id) {
        $dormitoryCategory = DB::table('dormitory_categories')->where('id', $id)->first();
        return $dormitoryCategory;
    }

}
