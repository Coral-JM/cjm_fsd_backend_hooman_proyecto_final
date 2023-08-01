<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class LocalController extends Controller
{
    public function getAllLocals() {

        try {
            $locals = Local::with(['localSpecification'=> ['specification']])->with(['review'])->get();

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

    public function newLocal(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'direction' => 'required|string',
                'url' => 'required|string',
                'phone' => 'required|string',
                'schedule' => 'required|string',
                'type' => 'required|string',
                'image' => 'required|string',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], Response::HTTP_BAD_REQUEST);
            }
    
            $user = auth()->user();
            $company = $user->company;
    
            if (!$company) {
                return response()->json(['error' => 'Debes tener asociada una compañía para crear un local.'], 
                Response::HTTP_FORBIDDEN);
            }
    
            $local = new Local();
            $local->company_id = $company->id;
            $local->name = $request->input('name');
            $local->direction = $request->input('direction');
            $local->url = $request->input('url');
            $local->phone = $request->input('phone');
            $local->schedule = $request->input('schedule');
            $local->type = $request->input('type');
            $local->image = $request->input('image');
            $local->isActive = false;
            $local->save();

            return response()->json([
                'message'=> 'Local created',
                'data' => $local
            ], Response::HTTP_CREATED);
            
        } catch (\Throwable $th) {
            Log::error('Error posting new local' . $th->getMessage());
            dd($th);
            return response()->json([
                'message' => 'Error posting new local'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


}
