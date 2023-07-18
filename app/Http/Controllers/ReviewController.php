<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class ReviewController extends Controller
{
    public function getAllReviews(){

        try {
            $reviews = Review::with('user')->with('local')->get();
            

            return response()->json([
                'message'=> 'Reviews retrieved',
                'data'=> $reviews
            ], Response::HTTP_OK);
            
        } catch (\Throwable $th) {
            Log::error('Error getting reviews ' . $th->getMessage());
    
            return response()->json([
                'message' => 'Error retrieving reviews'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
