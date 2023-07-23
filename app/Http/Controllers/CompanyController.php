<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    public function getCompany(){
        try {
            $companies = Company::with('user')->get();

            return response()->json([
                'message'=> 'company retrieved',
                'data'=> $companies
            ], Response::HTTP_OK);
        } catch (\Throwable $th) {
            Log::error('Error getting companies 1' . $th->getMessage());
    
            return response()->json([
                'message' => 'Error retrieving companies 2'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function newCompany(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'company'=> 'required | string',
                'CIF'=> 'required | string',
                'owner_name'=> 'required | string',
                'owner_surname'=> 'required | string',
                'direction'=> 'required | string',
                'zip_code'=> 'required | string',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }
            $user = auth()->user();

            $company = new Company();
            $company->user_id = $user->id;
            $company->company = $request->input('company');
            $company->CIF = $request->input('CIF');
            $company->owner_name = $request->input('owner_name');
            $company->owner_surname = $request->input('owner_surname');
            $company->direction = $request->input('direction');
            $company->zip_code = $request->input('zip_code');
            $company->save();

            return response()->json([
                'message'=> 'Company request added',
                'data' => $company
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            Log::error('Error posting new company' . $th->getMessage());

            return response()->json([
                'message' => 'Error posting new company'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    
}
