<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SuggestionController extends Controller
{
    public function displayHomePage(Request $request)
    {
        $search = $request->input('search');

        $dormitoryCategories = $this->getDormitoryInformation($search);

        if ($dormitoryCategories->isEmpty()) {
            return response()->json(['error' => 'NotFound'], 404);
        }
        return view('HomePage', ['dormitoryCategories' => $dormitoryCategories]);
    }

    private function getDormitoryInformation($search) {
        $query = DB::table('dormitory_categories');

        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        return $query->limit(10)->get();
    }

    public function displayDormitoryDetailPage($id) {
        $dormitoryCategory = $this->getDormitoryInformationById($id);

        if (!$dormitoryCategory) {
            return response()->json(['error' => 'NotFound'], 404);
        }
        $currentDateTime = Carbon::now()->format('d/m/Y h:i A');
        return view('dormitory.DormitoryDetailPage',compact('currentDateTime'))->with('dormitoryCategory', $dormitoryCategory);
    }

    private function getDormitoryInformationById($id) {
        $dormitoryCategory = DB::table('dormitory_categories')->where('id', $id)->first();
        return $dormitoryCategory;
    }
}
