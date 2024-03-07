<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;
use App\Models\Compliance;
use Carbon\Carbon;
use App\Models\LKA;
use App\Models\ReportAnalysis;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class InstrumentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function logbook_instrument(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $instrument = DB::table('instrument')->select("*");
        
        if (!empty($fromDate) && !empty($toDate)) {
            $instrument = $instrument
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("instrument.id_instrument", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $instrument = $instrument->where("instrument.alat_instrument", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $instrument = $instrument->where("instrument.no_asset", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $instrument = $instrument->where("instrument.keterangan", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $instrument = $instrument->where("instrument.kalibarsi", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 5) {
                $instrument = $instrument->where("instrument.peforma", "LIKE", "%" . $search . "%");
            }else {
                $instrument = $instrument->where(function ($query) use ($search) {
                    $query->where("instrument.alat_instrument", "LIKE", "%" . $search . "%")
                          ->orWhere("instrument.no_asset", "LIKE", "%" . $search . "%")
                          ->orWhere("instrument.kalibarsi", "LIKE", "%" . $search . "%")
                          ->orWhere("instrument.peforma", "LIKE", "%" . $search . "%")
                          ->orWhere("instrument.keterangan", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $instrument->orderBy("instrument.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $instrument->orderBy("instrument.id_instrument", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $instrument->orderBy("instrument.id_instrument", "desc")->paginate(50);
        } else {
            $products = $instrument->orderBy("instrument.created_at", "desc")->paginate(50);
        }
        
        
        $totalYaArray = [];
        $percentageArray = [];
          $totalYaArray1 = [];
        $percentageArray1 = [];
        
        // Lakukan perulangan untuk menghitung totalYa dan percentage
        for ($i = 1; $i <= 12; $i++) {
            $totalCompliance =DB::table('instrument')->count();
             
            $totalYa = DB::table('instrument')->where('kalibrasi' . $i, 'Ya')->count();
            $totalYaArray["totalYa{$i}"] = $totalYa;
            $percentageArray["percentage{$i}"] = $totalCompliance > 0 ? ($totalYa / $totalCompliance) * 100 : 0;
            
            $totalYa1 = DB::table('instrument')->where('performa' . $i, 'Ya')->count();
            $totalYaArray1["totalYa{$i}"] = $totalYa1;
            $percentageArray1["percentage{$i}"] = $totalCompliance > 0 ? ($totalYa1 / $totalCompliance) * 100 : 0;
        }

     return view("front-view.pages.other.instrument-andev", compact("products", "totalCompliance", "totalYaArray", "percentageArray", "totalYaArray1", "percentageArray1"));
    }

    public function ShowFormInstrument(Request $req)
    {
        return view('front-view.pages.other.addInstrument');
    }
    public function addInstrument(Request $request)
    {   
    
        $add = Instrument::create([
            'id_instrument' => $request->id_instrument,
            'user_id' => Auth::user()->id,
            'alat_instrument' => $request->alat_instrument,
            'no_asset' => $request->no_asset,
            'kalibrasi1' => $request->kalibrasi1,
            'performa1' => $request->performa1,
            'kalibrasi2' => $request->kalibrasi2,
            'performa2' => $request->performa2,
            'kalibrasi3' => $request->kalibrasi3,
            'performa3' => $request->performa3,
            'kalibrasi4' => $request->kalibrasi4,
            'performa4' => $request->performa4,
            'kalibrasi5' => $request->kalibrasi5,
            'performa5' => $request->performa5,
            'kalibrasi6' => $request->kalibrasi6,
            'performa6' => $request->performa6,
            'kalibrasi7' => $request->kalibrasi7,
            'performa7' => $request->performa7,
            'kalibrasi8' => $request->kalibrasi8,
            'performa8' => $request->performa8,
            'kalibrasi9' => $request->kalibrasi9,
            'performa9' => $request->performa9,
            'kalibrasi10' => $request->kalibrasi10,
            'performa10' => $request->performa10,
            'kalibrasi11' => $request->kalibrasi11,
            'performa11' => $request->performa11,
            'kalibrasi12' => $request->kalibrasi12,
            'performa12' => $request->performa12,
            'keterangan' => $request->keterangan,
        ]);
    
        if ($add) {
            return redirect()->route('logbook_instrument')->with('success', 'Data berhasil Ditambahkan !');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
        }
    }

    public function update_instrument(Request $request)
    {   
        $scar = Instrument::find($request->id_instrument);
        if ($scar) {
            $data = [
                'id_instrument' => $request->id_instrument,
                'user_id' => Auth::user()->id,
                'alat_instrument' => $request->alat_instrument,
                'no_asset' => $request->no_asset,
                'kalibrasi1' => $request->kalibrasi1,
                'performa1' => $request->performa1,
                'kalibrasi2' => $request->kalibrasi2,
                'performa2' => $request->performa2,
                'kalibrasi3' => $request->kalibrasi3,
                'performa3' => $request->performa3,
                'kalibrasi4' => $request->kalibrasi4,
                'performa4' => $request->performa4,
                'kalibrasi5' => $request->kalibrasi5,
                'performa5' => $request->performa5,
                'kalibrasi6' => $request->kalibrasi6,
                'performa6' => $request->performa6,
                'kalibrasi7' => $request->kalibrasi7,
                'performa7' => $request->performa7,
                'kalibrasi8' => $request->kalibrasi8,
                'performa8' => $request->performa8,
                'kalibrasi9' => $request->kalibrasi9,
                'performa9' => $request->performa9,
                'kalibrasi10' => $request->kalibrasi10,
                'performa10' => $request->performa10,
                'kalibrasi11' => $request->kalibrasi11,
                'performa11' => $request->performa11,
                'kalibrasi12' => $request->kalibrasi12,
                'performa12' => $request->performa12,
                'keterangan' => $request->keterangan,
            ];
         
            $scar->update($data);
            if ($scar) {
                return redirect()->back()->with('success', 'Data berhasil Dibuat !');
            } else {
                return redirect()->back()->with('error', 'Gagal Dibuat !');
            }
        }
    }

    public function delete_instrument(Request $req)
    {

        $delete = $req->id_delete;
        $del = DB::table('instrument')->where("id_instrument", $delete)->delete();

        if ($del) {
            DB::table('instrument')->where("id_instrument", $delete)->delete();
            return redirect()->back()->with('success', 'Data berhasil Dihapus !');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus !');
        }

    }
}
