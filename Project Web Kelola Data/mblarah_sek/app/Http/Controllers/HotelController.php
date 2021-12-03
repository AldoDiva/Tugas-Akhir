<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function index()
    {
        $data['hotels'] = Hotel::orderBy('id','desc')->paginate(5);
   
        return view('hotelplace',$data);
    }
    
public function show()
    {
        $data['hotels'] = Hotel::orderBy('id','desc')->paginate(6);
   
        return view('main/hotel',$data);
    }

    public function detail(Request $request, $id)

    {
        
        $where = array('id' => $id);
        $hotel  = Hotel::where($where)->first();
        
    return view('detail/detail_hotel', compact('hotel'));

    }
public function store(Request $request)
    {
        try {
            DB::beginTransaction();
    
            $create = new Hotel();
            $create->nama = $request->nama; 
            $create->alamat = $request->alamat;
            $create->keterangan = $request->keterangan;
            $create->no_telp = $request->no_telp;
            $create->lati = $request->lati;
            $create->longi = $request->longi;
    
            if ($request->hasFile('gambar1')) {
                $gambar1 = '01-'.time().'.'.$request->gambar1->getClientOriginalExtension();
    
                $path = Storage::putFileAs(
                    'public/hotel',
                    $request->file('gambar1'),
                    $gambar1
                );
    
                $create->gambar1 = $path;
            }
    
            if ($request->hasFile('gambar2')) {
                $gambar2 = '02-'.time().'.'.$request->gambar2->getClientOriginalExtension();
    
                $path = Storage::putFileAs(
                    'public/hotel',
                    $request->file('gambar2'),
                    $gambar2
                );
    
                $create->gambar2 = $path;
            }
    
            if ($request->hasFile('gambar3')) {
                $gambar3 = '03-'.time().'.'.$request->gambar3->getClientOriginalExtension();
    
                $path = Storage::putFileAs(
                    'public/hotel',
                    $request->file('gambar3'),
                    $gambar3
                );
    
                $create->gambar3 = $path;
            }

            if ($request->hasFile('gambar4')) {
                $gambar4 = '04-'.time().'.'.$request->gambar4->getClientOriginalExtension();
    
                $path = Storage::putFileAs(
                    'public/hotel',
                    $request->file('gambar4'),
                    $gambar4
                );
    
                $create->gambar4 = $path;
            }

            if ($request->hasFile('gambar5')) {
                $gambar5 = '05-'.time().'.'.$request->gambar5->getClientOriginalExtension();
    
                $path = Storage::putFileAs(
                    'public/hotel',
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