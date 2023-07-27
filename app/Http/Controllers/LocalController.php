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

            $search = $request->input('search');
            $type = $request->input('type');

            $query = Local::query();
            
            if ($search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%$search%")
                          ->orWhere('type', 'like', "%$search%");
                });
            }
            if ($type) {
                $query->where('type', $type);
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

    public function filterSpecifications(Request $request) {

        try {

            $specifications = $request->get('specifications', []);
            
            $locales = Local::whereHas('localSpecification', function ($query) use ($specifications) {
                $query->whereIn('specification_id', $specifications);})->get();

            return response()->json([
                'message'=> 'Locals retrieved',
                'data'=> $locales
            ], Response::HTTP_OK);
        
        } catch (\Throwable $th) {
            Log::error('Error getting locals ' . $th->getMessage());
    
            return response()->json([
                'message' => 'Error retrieving locals'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    public function getLocalById($id)
    {
        try {
            $local = Local::with(['localSpecification'=> ['specification']])->with(['review'])->find($id);

            return response()->json([
                'success' => true,
                'message' => 'Local by id retrieved',
                'data' => $local
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error retrieving local by id ' . $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error retrieving local by id ',
            ]);
        }
    }

}
