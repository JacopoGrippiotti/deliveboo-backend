<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContact;

class LeadController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        $validation = Validator::make($data, [
            'full_name' => ['required', 'max:30'],
            'email' => ['required', 'email'],
            'message' => ['required', 'max: 200']
        ]);

        if($validation->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validation->errors()
            ]);
        }

        $lead = Lead::create($data);
        Mail::to('camaioni.manuel@gmail.com')->send(new NewContact($lead));
        return response()->json([
            'success' => true]);
    }
}
