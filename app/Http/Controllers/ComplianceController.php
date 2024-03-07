<?php

namespace App\Http\Controllers;

use App\Models\Compliance;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\LKA;
use App\Models\ReportAnalysis;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ComplianceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function logbook_compliance(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $compliance = DB::table('compliance')->select("*");
        
        if (!empty($fromDate) && !empty($toDate)) {
            $compliance = $compliance
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("compliance.id_compliance", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $compliance = $compliance->where("compliance.area", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $compliance = $compliance->where("compliance.pic", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $compliance = $compliance->where("compliance.nama_alat", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $compliance = $compliance->where("compliance.list_item_check", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 5) {
                $compliance = $compliance->where("compliance.status", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 6) {
                $compliance = $compliance->where("compliance.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $compliance = $compliance->where(function ($query) use ($search) {
                    $query->where("compliance.area", "LIKE", "%" . $search . "%")
                          ->orWhere("compliance.pic", "LIKE", "%" . $search . "%")
                          ->orWhere("compliance.nama_alat", "LIKE", "%" . $search . "%")
                          ->orWhere("compliance.list_item_check", "LIKE", "%" . $search . "%")
                          ->orWhere("compliance.keterangan", "LIKE", "%" . $search . "%")
                          ->orWhere("compliance.status", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $compliance->orderBy("compliance.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $compliance->orderBy("compliance.id_compliance", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $compliance->orderBy("compliance.id_compliance", "desc")->paginate(50);
        } else {
            $products = $compliance->orderBy("compliance.created_at", "desc")->paginate(50);
        }

        $totalYaArray = [];
        $percentageArray = [];
        
        // Lakukan perulangan untuk menghitung totalYa dan percentage
        for ($i = 1; $i <= 12; $i++) {
            $totalYa = DB::table('compliance')->where('status' . $i, 'Ya')->count();
            $totalYaArray["totalYa{$i}"] = $totalYa;
        
            $totalCompliance =DB::table('compliance')->count();
            $percentageArray["percentage{$i}"] = $totalCompliance > 0 ? ($totalYa / $totalCompliance) * 100 : 0;
        }

     return view("front-view.pages.other.compliance", compact("products", "totalCompliance", "totalYaArray", "percentageArray"));
    }

    public function ShowFormCompliance(Request $req)
    {
        return view('front-view.pages.other.addCompliance');
    }
    public function addCompliance(Request $request)
    {   
    
        $add = Compliance::create([
            'id_compliance' => $request->id_compliance,
            'user_id' => Auth::user()->id,
            'area' => $request->area,
            'pic' => $request->pic,
            'nama_alat' => $request->nama_alat,
            'list_item_check' => $request->list_item_check,
             'status1' => $request->status1,
                'status2' => $request->status2,
                'status3' => $request->status3,
                'status4' => $request->status4,
                'status5' => $request->status5,
                'status6' => $request->status6,
                'status7' => $request->status7,
                'status8' => $request->status8,
                'status9' => $request->status9,
                'status10' => $request->status10,
                'status11' => $request->status11,
                'status12' => $request->status12,
            'keterangan' => $request->keterangan,
        ]);
    
        if ($add) {
            return redirect()->route('logbook_compliance')->with('success', 'Data berhasil Ditambahkan !');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
        }
    }

    public function update_compliance(Request $request)
    {   
        $scar = Compliance::find($request->id_compliance);
        if ($scar) {
            $data = [
                 'id_compliance' => $request->id_compliance,
                'user_id' => Auth::user()->id,
                'area' => $request->area,
                'pic' => $request->pic,
                'nama_alat' => $request->nama_alat,
                'list_item_check' => $request->list_item_check,
                'status1' => $request->status1,
                'status2' => $request->status2,
                'status3' => $request->status3,
                'status4' => $request->status4,
                'status5' => $request->status5,
                'status6' => $request->status6,
                'status7' => $request->status7,
                'status8' => $request->status8,
                'status9' => $request->status9,
                'status10' => $request->status10,
                'status11' => $request->status11,
                'status12' => $request->status12,
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

    public function delete_compliance(Request $req)
    {

        $delete = $req->id_delete;
        $del = DB::table('compliance')->where("id_compliance", $delete)->delete();

        if ($del) {
            DB::table('compliance')->where("id_compliance", $delete)->delete();
            return redirect()->back()->with('success', 'Data berhasil Dihapus !');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus !');
        }

    }

}
