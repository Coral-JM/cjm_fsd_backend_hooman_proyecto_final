<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
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

    public function getAllReviewsById(Request $request){
        try {
            
            $user = $request->user();
            $reviews = Review::where('user_id', $user->id)->get();

            return response()->json([
                'message' => 'Reviews retrieved',
                'data' => $reviews
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error retrieving reviews ' . $th->getMessage());

            return response()->json([
                'message' => 'Error retrieving reviews'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function newReview(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'local_id'=> 'required | exists:locals,id',
                'title'=> 'required | string',
                'description' => 'required | string',
                'rating'=> 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }
            $user = auth()->user();

            $local = Local::findOrFail($request->input('local_id'));

            $review = new Review();
            $review->user_id = $user->id;
            $review->local_id = $local->id;
            $review->title = $request->input('title');
            $review->description = $request->input('description');
            $review->rating = $request->input('rating');
            $review->save();

            return response()->json([
                'message'=> 'Review added to local',
                'data' => $review
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            Log::error('Error posting new review 1' . $th->getMessage());

            return response()->json([
                'message' => 'Error posting new review 2'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    
}
