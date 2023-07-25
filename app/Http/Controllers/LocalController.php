<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LocalController extends Controller
{
    public function getAllLocals() {

        try {
            $locals = Local::with(['localSpecification'=> ['specification']])->with(['review'])->get();
            // $locals = Local::get();
            
            // foreach ($locals as $local) {
            //     $local->image = 'http://localhost:5173/uploads/' . $local->image;
            // }

            return response()->json([
                'message'=> 'Locals retrieved',
                'data'=> $locals
            ], Response::HTTP_OK);
            
        } catch (\Throwable $th) {
            Log::error('Error getting locals ' . $th->getMessage());
    
            return response()->json([
                'message' => 'Error retrieving locals'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function filterLocals(Request $request) {

        try {

            $searchTerm = $request->input('search');
            $type = $request->input('type');
            $specification = $request->input('specification');
            
            $query = Local::query();
            
            if ($searchTerm) {
                $query->where(function ($query) use ($searchTerm) {
                    $query->where('name', 'like', "%$searchTerm%")
                          ->orWhere('type', 'like', "%$searchTerm%");
                });
            }
        
            if ($type) {
                $query->where('type', $type);
            }
        
            if ($specification) {
                $query->whereHas('localSpecification.specification', function ($query) use ($specification) {
                    $query->where('name', 'LIKE', "%$specification%");
                });
            }
        
            $locals = $query->get();


            return response()->json([
                'message'=> 'Locals retrieved',
                'data'=> $locals
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error getting locals ' . $th->getMessage());
    
            return response()->json([
                'message' => 'Error retrieving locals'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
