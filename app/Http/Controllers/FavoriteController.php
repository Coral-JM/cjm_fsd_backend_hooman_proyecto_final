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
    public function addFavorite($local_id)
    {
        try {
            $validator = Validator::make(['local_id' => $local_id], [
                'local_id' => 'required|exists:locals,id',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], Response::HTTP_BAD_REQUEST);
            }
    
            $user = auth()->user();
            $local = Local::findOrFail($local_id);
    
            $favorite = new Favorite();
            $favorite->user_id = $user->id;
            $favorite->local_id = $local->id;
            $favorite->save();
    
            return response()->json([
                'message' => 'Local added to favorites',
                'data' => $favorite,
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            Log::error('Error adding to favorites: ' . $th->getMessage());
    
            return response()->json([
                'message' => 'Error adding to favorites',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getFavorites (Request $request) {

        try {
            $user = $request->user();
            $favorites = Favorite::where('user_id', $user->id)->with('local')->get();

            return response()->json([
                'message' => 'Favorites retrieved',
                'data' => $favorites
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error retrieving favorites ' . $th->getMessage());

            return response()->json([
                'message' => 'Error retrieving favorites'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
