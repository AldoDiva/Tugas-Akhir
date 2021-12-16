<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pray;
use Illuminate\Support\Facades\DB;

class PrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function index()
    {
        $data['prays'] = Pray::orderBy('id','desc')->paginate(5);
   
        return view('prayplace',$data);
    }

public function show()
    {
        $data['prays'] = Pray::orderBy('id','desc')->paginate(6);
   
        return view('main/pray',$data);
    }


    public function detail(Request $request, $id)

    {
        
        $where = array('id' => $id);
        $pray  = Pray::where($where)->first();
        
    return view('detail/detail_pray', compact('pray'));

    }
public function store(Request $request)
{
    try {
        DB::beginTransaction();

        $create = new Pray();
        $create->nama = $request->nama; 
        $create->alamat = $request->alamat;
        $create->keterangan = $request->keterangan;
        $create->lati = $request->lati;
        $create->longi = $request->longi;

        if ($request->hasFile('gambar1')) {
            $gambar1 = '01-'.time().'.'.$request->gambar1->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/pray',
                $request->file('gambar1'),
                $gambar1
            );

            $create->gambar1 = $path;
        }

        if ($request->hasFile('gambar2')) {
            $gambar2 = '02-'.time().'.'.$request->gambar2->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/pray',
                $request->file('gambar2'),
                $gambar2
            );

            $create->gambar2 = $path;
        }

        if ($request->hasFile('gambar3')) {
            $gambar3 = '03-'.time().'.'.$request->gambar3->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/pray',
                $request->file('gambar3'),
                $gambar3
            );

            $create->gambar3 = $path;
        }

        if ($request->hasFile('gambar4')) {
            $gambar4 = '04-'.time().'.'.$request->gambar4->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/pray',
                $request->file('gambar4'),
                $gambar4
            );

            $create->gambar4 = $path;
        }

        if ($request->hasFile('gambar5')) {
            $gambar5 = '05-'.time().'.'.$request->gambar5->getClientOriginalExtension();

            $path = Storage::putFileAs(
                'public/pray',
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
}