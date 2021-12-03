<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Hotel;
use App\Models\Food;
use App\Models\Pray;
use App\Models\Situs;
use App\Models\User;
use App\Models\Report;
class DashboardController extends Controller
{
    public function grafik(Request $request)
    {
        $title         = 'Dashboard';
        $user          = User::count();
        $hotel         = Hotel::count();
        $pray          = Pray::count();
        $food          = Food::count();
        $situs         = Situs::count();
        $report        = Report::count();
        $label         = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
        $bulan         = [];


        for ($i=1; $i <= count($label) ; $i++) { 
            $tahun=date('Y');
            $str=strlen($i);
            $month=$i.'-'.$tahun;
            if ($str<2) {
                $month='0'.$i.'-'.$tahun;
            }

            array_push($bulan,$month);

        }
        $jumlah_user=[];
        $jumlah_hotel=[];
        $jumlah_food=[];
        $jumlah_pray=[];
        $jumlah_situs=[];
        $jumlah_report=[];
        
        foreach ($bulan as $key => $value) {
            $count=User::where(DB::raw('date_format(created_at, "%m-%Y")'), $value)->count();
            array_push($jumlah_user,$count);
            $count_hotel=Hotel::where(DB::raw('date_format(created_at, "%m-%Y")'), $value)->count();
            array_push($jumlah_hotel,$count_hotel);
            $count_food=Food::where(DB::raw('date_format(created_at, "%m-%Y")'), $value)->count();
            array_push($jumlah_food,$count_food);
            $count_pray=Pray::where(DB::raw('date_format(created_at, "%m-%Y")'), $value)->count();
            array_push($jumlah_pray,$count_pray);
            $count_situs=Situs::where(DB::raw('date_format(created_at, "%m-%Y")'), $value)->count();
            array_push($jumlah_situs,$count_situs);
            $count_report=Report::where(DB::raw('date_format(created_at, "%m-%Y")'), $value)->count();
            array_push($jumlah_report,$count_report);
        }

        if ($request->mobile==true) {
            return response()->json([
                'jumlah_user'=> $jumlah_user,
                'jumlah_hotel'=> $jumlah_hotel,
                'jumlah_food'=> $jumlah_food,
                'jumlah_pray'=> $jumlah_pray,
                'jumlah_situs'=> $jumlah_situs,
                'jumlah_report'=> $jumlah_report,
                
                'user'=> $user,
                'hotel'=> $hotel,
                'food'=> $food,
                'pray'=> $pray,
                'situs'=> $situs,
                'report'=> $report,
                
            ]);
            
        }
        
        return view('dashboard',compact('title','user','hotel','food','pray','situs','label','jumlah_user','jumlah_hotel','jumlah_food','jumlah_pray','jumlah_situs','jumlah_report','report',));
    }
}