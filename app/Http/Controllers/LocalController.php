<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LocalController extends Controller
{
    public function getAllLocals(){

        try {
            $locals = Local::with(['localSpecification'=> ['specification']])->get();
            // $locals = Local::get();

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
