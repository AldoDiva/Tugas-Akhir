<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UseraddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data['users'] = User::orderBy('id','desc')->paginate(5);
   
        return view('useradd',$data);
    }

    public function destroy(Request $request)
    {
        $user = User::where('id',$request->id)->delete();
        

    return response()->json(['success' => true]);
    }
}