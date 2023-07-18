<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class FavoriteController extends Controller
{
    public function addFavorite(Request $request) {
        try {

            $validator = Validator::make($request->all(), [
                'local_id'=> 'required | exists:locals,id'
            ]);

            if ($validator->fails()) {
                return response()->json(['error'=> $validator->errors()], 400);
            }

            $user = auth()->user();

            $local = Local::findOrFail($request->input('local_id'));

            $favorite = new Favorite();
            $favorite->user_id = $user->id;
            $favorite->local_id = $local->id;
            $favorite->save();

            return response()->json([
                'message'=> 'Local added to favorites',
                'data' => $favorite
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            Log::error('Error adding to favorites ' . $th->getMessage());

            return response()->json([
                'message' => 'Error adding to favorites'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
            
        }
    }
}
