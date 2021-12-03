<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Situs;
use Illuminate\Support\Facades\DB;

class SitusaddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function index()
    {
        $data['situses'] = Situs::orderBy('id','desc')->paginate(5);
   
        return view('situsadd',$data);
    }
public function show()
    {
        $data['situses'] = Situs::orderBy('id','desc')->paginate(6);
   
        return view('utama',$data);
    }

public function detail(Request $request, $id)

    {
        
        $where = array('id' => $id);
        $situs  = Situs::where($where)->first();
        
    return view('detail/detail_situs', compact('situs'));

    }


/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Product  $product
 * @return \Illuminate\Http\Response
 */
public function edit(Request $request)
{   

    $where = array('id' => $request->id);
    $situs  = Situs::where($where)->first();

    return response()->json($situs);
}

public function store(Request $request)
{
    // dd($request->all());

    // $request->gambar1->move(public_path('gambar1'), $gambar1);
    // $request->gambar2->move(public_path('gambar2'), $gambar2);
    // $request->gambar3->move(public_path('gambar3'), $gambar3);

    // $situs   =  Situs::updateOrCreate(
    // [
    //     'id' => $request->id
    // ],
    // [
    //     'nama' => $request->nama, 
    //     'alamat' => $request->alamat,
    //     'keterangan' => $request->keterangan,
    //     'lati' => $request->lati,
    //     'longi' => $request->longi,
    //     'progress' => $request->progress,
    //     'gambar1' => $gambar1,
    //     'gambar2' => $gambar2,
    //     'gambar3' => $gambar3,
        
    // ]);
        
    // return response()->json(['success' => true]);

    try {
        DB::beginTransaction();

        $create = new Situs();
        $create->nama = $request->nama; 
        $create->alamat = $request->alamat;
        $create->keterangan = $request->keterangan;
        $create->lati = $request->lati;
        $create->longi = $request->longi;

        if ($request->hasFile('gambar1')) {
            $gambar1 = '01-'.time().'.'.$request->gambar1->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/situs',
                $request->file('gambar1'),
                $gambar1
            );

            $create->gambar1 = $path;
        }

        if ($request->hasFile('gambar2')) {
            $gambar2 = '02-'.time().'.'.$request->gambar2->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/situs',
                $request->file('gambar2'),
                $gambar2
            );

            $create->gambar2 = $path;
        }

        if ($request->hasFile('gambar3')) {
            $gambar3 = '03-'.time().'.'.$request->gambar3->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/situs',
                $request->file('gambar3'),
                $gambar3
            );

            $create->gambar3 = $path;
        }

        if ($request->hasFile('gambar4')) {
            $gambar4 = '04-'.time().'.'.$request->gambar4->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/situs',
                $request->file('gambar4'),
                $gambar4
            );

            $create->gambar4 = $path;
        }

        if ($request->hasFile('gambar5')) {
            $gambar5 = '05-'.time().'.'.$request->gambar5->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/situs',
                $request->file('gambar5'),
                $gambar5
            );

            $create->gambar5 = $path;
        }


        $create->save();

        DB::commit();
        return response()->json(['success' => true]);
    } catch (\Throwable $th) {
        throw $th;
    }
}
                     
       
/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Product  $product
 * @return \Illuminate\Http\Response
 */
public function destroy(Request $request)
{
    $situs = Situs::where('id',$request->id)->delete();
    return response()->json(['success' => true]);
}
}
