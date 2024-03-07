<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RPV_RIV;
use Illuminate\Http\Request;
use App\Models\ReportAnalysis;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class RPVRIVController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function RPV_logbook_fg(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('rpv_riv')
        ->where('jenis_kegiatan', 'Finish Good')
        ->select("*");
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("rpv_riv.id_kegiatan", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("rpv_riv.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("rpv_riv.pic", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("rpv_riv.status", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("rpv_riv.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("rpv_riv.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.pic", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.status", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.keterangan", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("rpv_riv.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("rpv_riv.id_kegiatan", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("rpv_riv.id_kegiatan", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("rpv_riv.created_at", "desc")->paginate(50);
        }
        
        return view("front-view.pages.rpv-riv.finish-good", compact("products"));
    }

    public function RPV_logbook_eksternal(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('rpv_riv')
        ->where('jenis_kegiatan', 'Eksternal')
        ->select("*");
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("rpv_riv.id_kegiatan", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("rpv_riv.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("rpv_riv.pic", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("rpv_riv.status", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("rpv_riv.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("rpv_riv.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.pic", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.status", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.keterangan", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("rpv_riv.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("rpv_riv.id_kegiatan", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("rpv_riv.id_kegiatan", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("rpv_riv.created_at", "desc")->paginate(50);
        }
        
        return view("front-view.pages.rpv-riv.eksternal", compact("products"));
    }

    public function RPV_logbook_mikro(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('rpv_riv')
        ->where('jenis_kegiatan', 'Mikrobiologi')
        ->select("*");
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("rpv_riv.id_kegiatan", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("rpv_riv.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("rpv_riv.pic", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("rpv_riv.status", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("rpv_riv.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("rpv_riv.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.pic", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.status", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.keterangan", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("rpv_riv.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("rpv_riv.id_kegiatan", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("rpv_riv.id_kegiatan", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("rpv_riv.created_at", "desc")->paginate(50);
        }
        
        return view("front-view.pages.rpv-riv.mikrobiologi", compact("products"));
    }

    public function RPV_logbook_rm(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('rpv_riv')
        ->where('jenis_kegiatan', 'Raw Material')
        ->select("*");
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("rpv_riv.id_kegiatan", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("rpv_riv.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("rpv_riv.pic", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("rpv_riv.status", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("rpv_riv.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("rpv_riv.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.pic", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.status", "LIKE", "%" . $search . "%")
                          ->orWhere("rpv_riv.keterangan", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("rpv_riv.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("rpv_riv.id_kegiatan", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("rpv_riv.id_kegiatan", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("rpv_riv.created_at", "desc")->paginate(50);
        }
        
        return view("front-view.pages.rpv-riv.raw-material", compact("products"));
    }

    public function ShowFormRPVRIV(Request $req)
    {
        $jenis_kegiatan = $req->jenis_kegiatan ?? '';
        $id = $req->query('id');
        $RPVRIV = RPV_RIV::where('id_kegiatan', $id)->first();
        return view('front-view.pages.rpv-riv.addRPV_RIV', compact('jenis_kegiatan' , 'RPVRIV'));
    }
    public function addRPVRIV(Request $request)
    {   
        $recana = implode(',', $request->rencana);
        $aktual = implode(',', $request->aktual);
        $redirectRoute = '';

    switch ($request->jenis_kegiatan) {
        case 'Finish Good':
            $redirectRoute = 'RPV_logbook_fg';
            break;
        case 'Eksternal':
            $redirectRoute = 'RPV_logbook_eksternal';
            break;
        case 'Raw Material':
            $redirectRoute = 'RPV_logbook_rm';
            break;
        case 'Mikrobiologi':
            $redirectRoute = 'RPV_logbook_mikro';
            break;
        default:
            break;
    }
    
        $amr = RPV_RIV::create([
            'id_kegiatan' => $request->id_kegiatan,
            'user_id' => Auth::user()->id,
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'nama_item' => $request->nama_item,
            'pic' => $request->pic	,
            'rencana' => $recana,
            'aktual' => $aktual,
            'keterangan' => $request->keterangan,
        ]);
    
        if ($amr) {
            if ($redirectRoute) {
                return redirect()->route($redirectRoute)->with('success', 'Data berhasil Ditambahkan !');
            }
            return redirect()->back()->with('success', 'Data berhasil Ditambahkan !');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
        }
    }
    
    

    public function update_RPVRIV(Request $request)
    {   
        $recana = implode(',', $request->rencana);
        $aktual = implode(',', $request->aktual);
        $redirectRoute = '';

        switch ($request->jenis_kegiatan) {
            case 'Finish Good':
                $redirectRoute = 'RPV_logbook_fg';
                break;
         case 'Eksternal':
            $redirectRoute = 'RPV_logbook_eksternal';
            break;
            case 'Raw Material':
                $redirectRoute = 'RPV_logbook_rm';
                break;
            case 'Mikrobiologi':
                $redirectRoute = 'RPV_logbook_mikro';
                break;
            default:
                break;
        }
        
        $scar = RPV_RIV::find($request->id_kegiatan);
        if ($scar) {
            $data = [
                'id_kegiatan' => $request->id_kegiatan,
                'user_id' => Auth::user()->id,
                'jenis_kegiatan' => $request->jenis_kegiatan,
                'nama_item' => $request->nama_item,
                'pic' => $request->pic,
                'rencana' => $recana,
                'aktual' =>  $aktual,
                'keterangan' => $request->keterangan,
            ];

            
         
            $scar->update($data);
            if ($scar) {
                if ($redirectRoute) {
                    return redirect()->route($redirectRoute)->with('success', 'Data berhasil Ditambahkan !');
                }
                return redirect()->back()->with('success', 'Data berhasil Ditambahkan !');
            } else {
                return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
            }
        }
    }

    public function approve_1(Request $request)
    {   
       
        $scar = RPV_RIV::find($request->id_kegiatan);
        if ($scar) {
            $data = [
                'verifikasi_1' =>  Auth::user()->name,
                'date_verifikasi_1' => Carbon::now(),
            ];

         
            $scar->update($data);
            if ($scar) {
                return redirect()->back()->with('success', 'Data berhasil Melakukan Verifikasi !');
            } else {
                return redirect()->back()->with('error', 'Gagal  Melakukan Verifikasi !');
            }
        }
    }

    public function approve_2(Request $request)
    {   
       
        $scar = RPV_RIV::find($request->id_kegiatan);
        if ($scar) {
            $data = [
                'verifikasi_2' =>  Auth::user()->name,
                'date_verifikasi_2' => Carbon::now(),
            ];

         
            $scar->update($data);
            if ($scar) {
                return redirect()->back()->with('success', 'Data berhasil Melakukan Verifikasi !');
            } else {
                return redirect()->back()->with('error', 'Gagal  Melakukan Verifikasi !');
            }
        }
    }

    public function delete_RPVRIV(Request $req)
    {

        $delete = $req->id_delete;
        $del = DB::table('rpv_riv')->where("id_kegiatan", $delete)->delete();

        if ($del) {
            DB::table('rpv_riv')->where("id_kegiatan", $delete)->delete();
            return redirect()->back()->with('success', 'Data berhasil Dihapus !');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus !');
        }

    }
}
