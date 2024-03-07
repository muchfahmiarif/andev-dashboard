<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\LKA;
use Illuminate\Http\Request;
use App\Models\ReportAnalysis;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LembarKerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function lka_logbook_fg(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('lka')
        ->where('jenis_lka', 'Finish Good')
        ->select("*");

        // if (!empty($category)) {
        //     $document_amr = $document_amr->orWhere([["ra_fg.material_code", $category]]);
        // }
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("lka.id_lka", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("lka.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("lka.no_lka", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("lka.tahun_terbit", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("lka.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("lka.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.no_lka", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.tahun_terbit", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.keterangan", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("lka.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("lka.id_lka", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("lka.id_lka", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("lka.created_at", "desc")->paginate(50);
        }
        
        return view("front-view.pages.lka.finish-good", compact("products"));
    }

    public function lka_logbook_mikro(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('lka')
        ->where('jenis_lka', 'Mikrobiologi')
        ->select("*");

        // if (!empty($category)) {
        //     $document_amr = $document_amr->orWhere([["ra_fg.material_code", $category]]);
        // }
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("lka.id_lka", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("lka.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("lka.no_lka", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("lka.tahun_terbit", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("lka.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("lka.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.no_lka", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.tahun_terbit", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.keterangan", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("lka.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("lka.id_lka", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("lka.id_lka", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("lka.created_at", "desc")->paginate(50);
        }
        
        return view("front-view.pages.lka.mikrobiologi", compact("products"));
    }

    public function lka_logbook_rm(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('lka')
        ->where('jenis_lka', 'Raw Material')
        ->select("*");

        // if (!empty($category)) {
        //     $document_amr = $document_amr->orWhere([["ra_fg.material_code", $category]]);
        // }
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("lka.id_lka", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("lka.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("lka.no_lka", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("lka.tahun_terbit", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("lka.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("lka.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.no_lka", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.tahun_terbit", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.keterangan", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("lka.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("lka.id_lka", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("lka.id_lka", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("lka.created_at", "desc")->paginate(50);
        }
        
        return view("front-view.pages.lka.raw-material", compact("products"));
    }

    public function lka_logbook_stabilita(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('lka')
        ->where('jenis_lka', 'Stabilita')
        ->select("*");

        // if (!empty($category)) {
        //     $document_amr = $document_amr->orWhere([["ra_fg.material_code", $category]]);
        // }
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("lka.id_lka", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("lka.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("lka.no_lka", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("lka.tahun_terbit", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("lka.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("lka.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.no_lka", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.tahun_terbit", "LIKE", "%" . $search . "%")
                          ->orWhere("lka.keterangan", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("lka.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("lka.id_lka", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("lka.id_lka", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("lka.created_at", "desc")->paginate(50);
        }
        
        return view("front-view.pages.lka.stabilita", compact("products"));
    }


    public function ShowFormLKA(Request $req)
    {
        $jenis_lka = $req->jenis_lka ?? '';
        return view('front-view.pages.lka.addData', compact('jenis_lka'));
    }
    public function addLKA(Request $request)
    {   
        $redirectRoute = '';

    switch ($request->jenis_lka) {
        case 'Finish Good':
            $redirectRoute = 'lka_logbook_fg';
            break;
        case 'Stabilita':
            $redirectRoute = 'logbook_stabilita';
            break;
        case 'Raw Material':
            $redirectRoute = 'logbook_rm';
            break;
        case 'Mikrobiologi':
            $redirectRoute = 'logbook_mikro';
            break;
        default:
            break;
    }
    
    
        $amr = LKA::create([
            'id_lka' => $request->id_lka,
            'user_id' => Auth::user()->id,
            'jenis_lka' => $request->jenis_lka,
            'nama_item' => $request->nama_item,
            'no_lka' => $request->no_lka,
            'tahun_terbit' => $request->tahun_terbit,
            'keterangan' => $request->keterangan,
            'file_upload' => $request->file_upload,
        ]);
    
        if ($request->hasFile('file_upload')) {
            $fileRefGambar = $request->file('file_upload');
            $filenameRefGambar = uniqid() . '_' . time() . '.' . $fileRefGambar->getClientOriginalExtension();
            $fileRefGambar->storeAs('dokumen', $filenameRefGambar, 'public'); 
            $data['file_upload'] = 'dokumen/' . $filenameRefGambar;
        }
    
        $amr->update($data);
        if ($amr) {
            if ($redirectRoute) {
                return redirect()->route($redirectRoute)->with('success', 'Data berhasil Ditambahkan !');
            }
            return redirect()->back()->with('success', 'Data berhasil Ditambahkan !');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
        }
    }

    public function update_lka(Request $request)
    {   
        $scar = LKA::find($request->id_lka);
        $todayDate = Carbon::now()->format('d-m-Y');
        if ($scar) {
            $data = [
                'nama_item' => $request->nama_item,
                'no_lka' => $request->no_lka,
                'tahun_terbit' => $request->tahun_terbit,
                'file_upload' => $request->file_upload,
                'keterangan' => $request->keterangan,
            ];

            
        if ($request->hasFile('file_upload')) {
            $fileRefGambar = $request->file('file_upload');
            $filenameRefGambar = uniqid() . '_' . time() . '.' . $fileRefGambar->getClientOriginalExtension();
            $fileRefGambar->storeAs('dokumen', $filenameRefGambar, 'public'); 
            $data['file_upload'] = 'dokumen/' . $filenameRefGambar;
        }else {
            $data['file_upload'] = $scar->file_upload; // Gunakan nama file yang sudah ada jika tidak ada file baru
        }
         
            $scar->update($data);
            if ($scar) {
                return redirect()->back()->with('success', 'Data berhasil Dibuat !');
            } else {
                return redirect()->back()->with('error', 'Gagal Dibuat !');
            }
        }
    }

    public function delete_lka(Request $req)
    {

        $delete = $req->id_delete;
        $del = DB::table('lka')->where("id_lka", $delete)->delete();

        if ($del) {
            DB::table('lka')->where("id_lka", $delete)->delete();
            return redirect()->back()->with('success', 'Data berhasil Dihapus !');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus !');
        }

    }
}
