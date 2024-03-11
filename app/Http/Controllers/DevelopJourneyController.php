<?php

namespace App\Http\Controllers;

use App\Models\Develop_Detail;
use App\Models\Develop_Timeline;
use Illuminate\Http\Request;
use App\Models\Develop_Journey;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DevelopJourneyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dev_logbook_ex(Request $req)
{
    $sort = $req->sort;
    $nama_item = $req->nama_item;

    $develop = DB::table('develop_journey')
    ->where('jenis_journey', 'External')
    ->select("*");
    if (!empty($nama_item)) {
        $develop = $develop->Where([["develop_journey.nama_item", $nama_item]]);
    }

    $selectProduct = DB::table('develop_journey')
    ->select('nama_item')
    ->where('jenis_journey', 'External')
    ->groupBy('nama_item')
    ->get();

    $addJourney = DB::table('develop_journey')->where('jenis_journey', 'External')->where('nama_item', $nama_item)->first();

 
    $products = $develop->orderBy("develop_journey.created_at", "desc")->paginate(20);
    
    return view("front-view.pages.development-journey.eksternal.index", compact("products",'selectProduct','addJourney'));
}


    public function eksternal_timeline(Request $req)
    {
        $sort = $req->sort;
        $nama_item = $req->nama_item;
        $category = $req->category;
        $develop = DB::table('develop_tl')
        ->where('jenis_journey', 'External')
        ->select("*");
        
        if (!empty($category)) {
            $develop = $develop->where('develop_tl.nama_item', $nama_item)
                               ->where('develop_tl.zat_aktif', $category);
        }

        $products = $develop->orderBy("develop_tl.created_at", "desc")->paginate(20);
        
        return view("front-view.pages.development-journey.eksternal.time_line", compact("products"));
    }

    public function external_timeline_detail(Request $req)
    {
        $sort = $req->sort;
        $nama_item = $req->nama_item;
        $category = $req->category;
        $time_line = $req->time_line;
        $detail = $req->detail;
        $develop = DB::table('develop_document')
        ->where('jenis_journey', 'External')
        ->select("*");
        
        if (!empty($category)) {
            $develop = $develop->where('develop_document.nama_item', $nama_item)
                               ->where('develop_document.zat_aktif', $category)
                               ->where('develop_document.time_line', $time_line);
        }
        $body = DB::table('develop_tl')->where('jenis_journey', 'External')->where('time_line', $time_line)->first();
        $products = $develop->orderBy("develop_document.created_at", "desc")->paginate(20);
        
        return view("front-view.pages.development-journey.eksternal.detail", compact("products","body"));
    }



    //////////////////////////////////////////////////////////////////////////////////////////

     public function dev_logbook_fg(Request $req)
{
    $sort = $req->sort;
    $nama_item = $req->nama_item;

    $develop = DB::table('develop_journey')
    ->where('jenis_journey', 'Finish Good')
    ->select("*");
    if (!empty($nama_item)) {
        $develop = $develop->Where([["develop_journey.nama_item", $nama_item]]);
    }

    $selectProduct = DB::table('develop_journey')
    ->select('nama_item')
    ->where('jenis_journey', 'Finish Good')
    ->groupBy('nama_item')
    ->get();

    $addJourney = DB::table('develop_journey')->where('jenis_journey', 'Finish Good')->where('nama_item', $nama_item)->first();

 
    $products = $develop->orderBy("develop_journey.created_at", "desc")->paginate(20);
    
    return view("front-view.pages.development-journey.finish-good.index", compact("products",'selectProduct','addJourney'));
}


    public function fg_timeline(Request $req)
    {
        $sort = $req->sort;
        $nama_item = $req->nama_item;
        $category = $req->category;
        $develop = DB::table('develop_tl')
        ->where('jenis_journey', 'Finish Good')
        ->select("*");
        
        if (!empty($category)) {
            $develop = $develop->where('develop_tl.nama_item', $nama_item)
                               ->where('develop_tl.zat_aktif', $category);
        }

        $products = $develop->orderBy("develop_tl.created_at", "desc")->paginate(20);
        
        return view("front-view.pages.development-journey.finish-good.time_line", compact("products"));
    }

    public function fg_timeline_detail(Request $req)
    {
        $sort = $req->sort;
        $nama_item = $req->nama_item;
        $category = $req->category;
        $time_line = $req->time_line;
        $detail = $req->detail;
        $develop = DB::table('develop_document')
        ->where('jenis_journey', 'Finish Good')
        ->select("*");
        
        if (!empty($category)) {
            $develop = $develop->where('develop_document.nama_item', $nama_item)
                               ->where('develop_document.zat_aktif', $category)
                               ->where('develop_document.time_line', $time_line);
        }
        $body = DB::table('develop_tl')->where('jenis_journey', 'Finish Good')->where('time_line', $time_line)->first();
        $products = $develop->orderBy("develop_document.created_at", "desc")->paginate(20);
        
        return view("front-view.pages.development-journey.finish-good.detail", compact("products","body"));
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////

public function dev_logbook_rm(Request $req)
{
    $sort = $req->sort;
    $nama_item = $req->nama_item;

    $develop = DB::table('develop_journey')
    ->where('jenis_journey', 'Raw Material')
    ->select("*");
    if (!empty($nama_item)) {
        $develop = $develop->Where([["develop_journey.nama_item", $nama_item]]);
    }

    $selectProduct = DB::table('develop_journey')
    ->select('nama_item')
    ->where('jenis_journey', 'Raw Material')
    ->groupBy('nama_item')
    ->get();

    $addJourney = DB::table('develop_journey')->where('jenis_journey', 'Raw Material')->where('nama_item', $nama_item)->first();

 
    $products = $develop->orderBy("develop_journey.created_at", "desc")->paginate(20);
    
    return view("front-view.pages.development-journey.raw-material.index", compact("products",'selectProduct','addJourney'));
}

public function rm_timeline(Request $req)
    {
        $sort = $req->sort;
        $nama_item = $req->nama_item;
        $category = $req->category;
        $develop = DB::table('develop_tl')
        ->where('jenis_journey', 'Raw Material')
        ->select("*");
        
        if (!empty($nama_item)) {
            $develop = $develop->Where([["develop_tl.nama_item", $nama_item]]);
        }
        if (!empty($category)) {
            $develop = $develop->where('develop_tl.nama_item', $nama_item)
                               ->where('develop_tl.zat_aktif', $category);
        }

        $products = $develop->orderBy("develop_tl.created_at", "desc")->paginate(20);
        
        return view("front-view.pages.development-journey.raw-material.time_line", compact("products"));
    }

    public function rm_timeline_detail(Request $req)
    {
        $sort = $req->sort;
        $nama_item = $req->nama_item;
        $category = $req->category;
        $time_line = $req->time_line;
        $detail = $req->detail;
        $develop = DB::table('develop_document')
        ->where('jenis_journey', 'Raw Material')
        ->select("*");
        
        if (!empty($category)) {
            $develop = $develop->where('develop_document.nama_item', $nama_item)
                               ->where('develop_document.time_line', $time_line);
        }
        $body = DB::table('develop_tl')->where('jenis_journey', 'Raw Material')->where('time_line', $time_line)->first();
        $products = $develop->orderBy("develop_document.created_at", "desc")->paginate(20);
        
        return view("front-view.pages.development-journey.raw-material.detail", compact("products","body"));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////


public function dev_logbook_mikro(Request $req)
{
    $sort = $req->sort;
    $nama_item = $req->nama_item;

    $develop = DB::table('develop_journey')
    ->where('jenis_journey', 'Mikrobiologi')
    ->select("*");
    if (!empty($nama_item)) {
        $develop = $develop->Where([["develop_journey.nama_item", $nama_item]]);
    }

    $selectProduct = DB::table('develop_journey')
    ->select('nama_item')
    ->where('jenis_journey', 'Mikrobiologi')
    ->groupBy('nama_item')
    ->get();

    $addJourney = DB::table('develop_journey')->where('jenis_journey', 'Mikrobiologi')->where('nama_item', $nama_item)->first();

 
    $products = $develop->orderBy("develop_journey.created_at", "desc")->paginate(20);
    
    return view("front-view.pages.development-journey.mikrobiologi.index", compact("products",'selectProduct','addJourney'));
}

public function mikro_timeline(Request $req)
    {
        $sort = $req->sort;
        $nama_item = $req->nama_item;
        $category = $req->category;
        $develop = DB::table('develop_tl')
        ->where('jenis_journey', 'Mikrobiologi')
        ->select("*");
        
        if (!empty($nama_item)) {
            $develop = $develop->Where([["develop_tl.nama_item", $nama_item]]);
        }
        if (!empty($category)) {
            $develop = $develop->where('develop_tl.nama_item', $nama_item)
                               ->where('develop_tl.zat_aktif', $category);
        }

        $products = $develop->orderBy("develop_tl.created_at", "desc")->paginate(20);
        
        return view("front-view.pages.development-journey.mikrobiologi.time_line", compact("products"));
    }

    public function mikro_timeline_detail(Request $req)
    {
        $sort = $req->sort;
        $nama_item = $req->nama_item;
        $category = $req->category;
        $time_line = $req->time_line;
        $detail = $req->detail;
        $develop = DB::table('develop_document')
        ->where('jenis_journey', 'Mikrobiologi')
        ->select("*");
        
        if (!empty($category)) {
            $develop = $develop->where('develop_document.nama_item', $nama_item)
                               ->where('develop_document.time_line', $time_line);
        }
        $body = DB::table('develop_tl')->where('jenis_journey', 'Mikrobiologi')->where('time_line', $time_line)->first();
        $products = $develop->orderBy("develop_document.created_at", "desc")->paginate(20);
        
        return view("front-view.pages.development-journey.mikrobiologi.detail", compact("products","body"));
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function addProduct(Request $request)
    {   
    
        $amr = Develop_Journey::create([
            'id_devlop' => $request->id_devlop,
            'user_id' => Auth::user()->id,
            'jenis_journey' => $request->jenis_journey,
            'nama_item' => $request->nama_item,
        ]);
    
        if ($amr) {
            return redirect()->back()->with('success', 'Data berhasil Ditambahkan !');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
        }
    }

    public function addZatAktif(Request $request)
    {   
        // $scar = Develop_Journey::find($request->id);
        // if ($request->id != NULL) {
        //     $data = [
        //         'zat_aktif' => $request->zat_aktif,
        //     ];
        //     $scar->update($data);
        //     } else {
                $scar = Develop_Journey::create([
                    'id_devlop' => $request->id_devlop,
                    'user_id' => Auth::user()->id,
                    'jenis_journey' => $request->jenis_journey,
                    'nama_item' => $request->nama_item,
                    'zat_aktif' => $request->zat_aktif,
                ]);
                
            // }
    
        if ($scar) {
            return redirect()->back()->with('success', 'Data berhasil Ditambahkan !');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
        }
    }

    public function delete_product(Request $req)
    {
        $delete = $req->id_delete;
        $deleteItem = $req->nama_item;
    
        $del = DB::table('develop_journey')->where("id_devlop", $delete)->delete();
    
        if ($del) {
            DB::table('develop_tl')->where("nama_item", $deleteItem)->delete();
            DB::table('develop_document')->where("nama_item", $deleteItem)->delete();
            
            return redirect()->back()->with('success', 'Data berhasil Dihapus !');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus !');
        }
    }
    

    public function addTimeline(Request $request)
    {   
        $scar = Develop_Timeline::find($request->id);
        if ($request->id != NULL) {
            $data = [
                'time_line' => $request->time_line,
                'status' => $request->status,
            ];
            $scar->update($data);
            } else {
                $scar = Develop_Timeline::create([
                    'id_dev_lt' => $request->id_dev_lt,
                    'user_id' => Auth::user()->id,
                    'jenis_journey' => $request->jenis_journey,
                    'nama_item' => $request->nama_item,
                    'zat_aktif' => $request->zat_aktif,
                    'time_line' => $request->time_line,
                    'body' => $request->body,
                    'status' => $request->status,
                ]);
            }
    
        if ($scar) {
            return redirect()->back()->with('success', 'Data berhasil Ditambahkan !');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
        }
    }
    
    public function delete_Timeline(Request $req)
    {
        $delete = $req->id_delete;
        $del = DB::table('develop_tl')->where("id_dev_tl", $delete)->delete();

        if ($del) {
            DB::table('develop_tl')->where("id_dev_tl", $delete)->delete();
            return redirect()->back()->with('success', 'Data berhasil Dihapus !');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus !');
        }
    }


    public function addDocument(Request $request)
    {   
        $scar = Develop_Detail::find($request->id);
        if ($request->id != NULL) {
            $data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'nama_document' => $request->nama_document,
                'status' => $request->status,
                'keterangan' => $request->keterangan,
                'file' => $request->file,
            ];
            if ($request->hasFile('file')) {
                $fileRefGambar = $request->file('file');
                $filenameRefGambar = $fileRefGambar->getClientOriginalName();
                $fileRefGambar->storeAs('dokumen', $filenameRefGambar, 'public'); 
                $data['file'] = 'dokumen/' . $filenameRefGambar;
            }
            $scar->update($data);
            } else {
                $scar = Develop_Detail::create([
                    'id_dev_doc' => $request->id_dev_doc,
                    'user_id' => Auth::user()->id,
                    'jenis_journey' => $request->jenis_journey,
                    'nama_item' => $request->nama_item,
                    'zat_aktif' => $request->zat_aktif,
                    'time_line' => $request->time_line,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'nama_document' => $request->nama_document,
                    'status' => $request->status,
                    'keterangan' => $request->keterangan,
                    'file' => $request->file,
                ]);
                if ($request->hasFile('file')) {
                    $fileRefGambar = $request->file('file');
                    $filenameRefGambar = $fileRefGambar->getClientOriginalName();
                    $fileRefGambar->storeAs('dokumen', $filenameRefGambar, 'public'); 
                    $data['file'] = 'dokumen/' . $filenameRefGambar;
                }
                $scar->update($data);
            }
        if ($scar) {
            return redirect()->back()->with('success', 'Data berhasil Ditambahkan !');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
        }
    }
    
    
    

    public function delete_document(Request $req)
    {
        $delete = $req->id_delete;
        $del = DB::table('develop_document')->where("id_dev_doc", $delete)->delete();

        if ($del) {
            DB::table('develop_document')->where("id_dev_doc", $delete)->delete();
            return redirect()->back()->with('success', 'Data berhasil Dihapus !');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus !');
        }
    }


 public function updateTimeline1(Request $request)
    {   
        $scar = Develop_Timeline::find($request->id);
        if ($scar) {
            $data = [
                'body' => $request->body,
            ];
        }
            
        $scar->update($data);
        if ($scar) {
            return redirect()->back()->with('success', 'Data berhasil Ditambahkan !');
        } else {
            return redirect()->back()->with('error', 'Data Gagal Ditambahkan !');
        }
    }
    

}
