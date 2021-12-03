<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Cache;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function index()
    {
        $data['reports'] = Report::orderBy('id','desc')->paginate(5);
   
        return view('report',$data);
    }
   

public function store(Request $request)
    {
    $report   =  Report::updateOrCreate(
    [
        'id' => $request->id
    ],
    [
        'nama' => $request->nama,
        'isi'  => $request->isi,
        
        
    ]);
        
    return response()->json(['success' => true]);
    }
}