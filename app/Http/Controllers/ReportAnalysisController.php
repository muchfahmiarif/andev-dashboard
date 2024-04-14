<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ReportAnalysis;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ReportAnalysisImport;

class ReportAnalysisController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logbook_fg(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('report_analysis')
        ->where('jenis_report', 'Finish Good')
        ->select("*");

        // if (!empty($category)) {
        //     $document_amr = $document_amr->orWhere([["ra_fg.material_code", $category]]);
        // }
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("report_analysis.id_report", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("report_analysis.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("report_analysis.kode_racikan", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("report_analysis.no_bets", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("report_analysis.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("report_analysis.no_permintaan_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.no_laporan_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.category", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.pic", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.kode_racikan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.no_bets", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.bulan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.parameter", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.storage", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_masuk", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_selesai", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.keterangan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.nama_analis", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("report_analysis.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("report_analysis.id_report", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("report_analysis.id_report", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("report_analysis.created_at", "desc")->paginate(50);
        }
        
        return view("front-view.pages.report-analysis.finish-good", compact("products"));
    }


    public function logbook_mikro(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('report_analysis')
        ->where('jenis_report', 'Mikrobiologi')
        ->select("*");

        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("report_analysis.id_report", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("report_analysis.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("report_analysis.kode_racikan", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("report_analysis.no_bets", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("report_analysis.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("report_analysis.no_permintaan_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.no_laporan_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.category", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.pic", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.kode_racikan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.no_bets", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.bulan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.parameter", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.storage", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_masuk", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_selesai", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.keterangan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.nama_analis", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("report_analysis.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("report_analysis.id_report", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("report_analysis.id_report", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("report_analysis.created_at", "desc")->paginate(50);
        }
        return view("front-view.pages.report-analysis.mikrobiologi", compact("products"));
    }

    public function logbook_rm(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('report_analysis')
        ->where('jenis_report', 'Raw Material')
        ->select("*");

        // if (!empty($category)) {
        //     $document_amr = $document_amr->orWhere([["ra_fg.material_code", $category]]);
        // }
        
        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("report_analysis.id_report", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("report_analysis.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("report_analysis.kode_racikan", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("report_analysis.no_bets", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("report_analysis.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("report_analysis.no_permintaan_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.no_laporan_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.category", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.pic", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.kode_racikan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.no_bets", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.bulan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.parameter", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.storage", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_masuk", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_selesai", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.keterangan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.nama_analis", "LIKE", "%" . $search . "%");
                });
            }
        }
        if (empty($sort)) {
            $products = $document_amr->orderBy("report_analysis.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("report_analysis.id_report", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("report_analysis.id_report", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("report_analysis.created_at", "desc")->paginate(50);
        }
        return view("front-view.pages.report-analysis.raw-material", compact("products"));
    }

    public function logbook_stabilita(Request $req)
    {
        $sort = $req->sort;
        $search = $req->q;
        $category = $req->category;
        $fromDate = $req->input('fromDate');
        $toDate = $req->input('toDate');
        $searchBy = $req->input('searchby'); 

        $document_amr = DB::table('report_analysis')
        ->where('jenis_report', 'Stabilita')
        ->select("*");

        if (!empty($fromDate) && !empty($toDate)) {
            $document_amr = $document_amr
                ->where('created_at', '>=', $fromDate)
                ->where('created_at', '<=', $toDate)
                ->orderBy("report_analysis.id_report", "desc");
        }

        if (!empty($search)) {
            if ($searchBy == 1) {
                $document_amr = $document_amr->where("report_analysis.nama_item", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 2) {
                $document_amr = $document_amr->where("report_analysis.kode_racikan", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 3) {
                $document_amr = $document_amr->where("report_analysis.no_bets", "LIKE", "%" . $search . "%");
            } elseif ($searchBy == 4) {
                $document_amr = $document_amr->where("report_analysis.keterangan", "LIKE", "%" . $search . "%");
            } else {
                $document_amr = $document_amr->where(function ($query) use ($search) {
                    $query->where("report_analysis.no_permintaan_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.no_laporan_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.nama_item", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.category", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.pic", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.kode_racikan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.no_bets", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.bulan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.parameter", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.storage", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_masuk", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_analisa", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.tgl_selesai", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.keterangan", "LIKE", "%" . $search . "%")
                          ->orWhere("report_analysis.nama_analis", "LIKE", "%" . $search . "%");
                });
            }
        }

        if (empty($sort)) {
            $products = $document_amr->orderBy("report_analysis.created_at", "desc")->paginate(50);
        } else if ($sort == "asc") {
            $products = $document_amr->orderBy("report_analysis.id_report", "asc")->paginate(50);
        } else if ($sort == "desc") {
            $products = $document_amr->orderBy("report_analysis.id_report", "desc")->paginate(50);
        } else {
            $products = $document_amr->orderBy("report_analysis.created_at", "desc")->paginate(50);
        }

        return view("front-view.pages.report-analysis.stabilita", compact("products"));
    }

    protected function generateRunningNumber($jenis_report) {
        $currentYear = Carbon::now()->format('Y');
        $lastrunning = ReportAnalysis::whereYear('created_at', $currentYear)
                        ->where('jenis_report', $jenis_report)
                        ->orderBy('no_permintaan_analisa', 'desc') 
                        ->first();
                        
        if ($lastrunning) {
            $scarParts = explode('.', $lastrunning->no_permintaan_analisa); 
            $lastRunningNumber = intval($scarParts[1]); 
            $runningNumber = str_pad($lastRunningNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $runningNumber = '001';
        }
    
        return $runningNumber;
    }
    public function ShowFormReportAnalysis(Request $req)
    {
        $jenis_report = $req->jenis_report ?? '';
        return view('front-view.pages.report-analysis.addData', compact('jenis_report'));
    }
    public function addReport(Request $request)
    {   
        $runningNumber = $this->generateRunningNumber($request->jenis_report);
        $parameters = implode(',', $request->parameter);
        $storage = implode(',', $request->storage);
        $prefix = '';
    $prefix_1 = '';
    $redirectRoute = '';

    switch ($request->jenis_report) {
        case 'Finish Good':
            $prefix = 'FG';
            $prefix_1 = 'J';
            $redirectRoute = 'logbook_fg';
            break;
        case 'Stabilita':
            $prefix = 'ST';
            $prefix_1 = 'S';
            $redirectRoute = 'logbook_stabilita';
            break;
        case 'Raw Material':
            $prefix = 'RM';
            $prefix_1 = 'R';
            $redirectRoute = 'logbook_rm';
            break;
        case 'Mikrobiologi':
            $prefix = 'MB';
            $prefix_1 = 'M';
            $redirectRoute = 'logbook_mikro';
            break;
        default:
            break;
    }
    
        $romanMonth = $this->getRomanMonth();
    
        $code_permintaan = $prefix . '.' . $runningNumber . '.' . $romanMonth  . '.' . Carbon::now()->format('Y');
        $code_laporan = $prefix_1 . '.' . $runningNumber . '.' . $romanMonth  . '.' . Carbon::now()->format('Y');
    
        $amr = ReportAnalysis::create([
            'id_report' => $request->id_report,
            'no_permintaan_analisa' => $code_permintaan,
            'no_laporan_analisa' => $code_laporan,
            'jenis_report' => $request->jenis_report,
            'user_id' => Auth::user()->id,
            'nama_item' => $request->nama_item,
            'supplier' => $request->supplier,
            'category' => $request->category,
            'pic' => $request->pic,
            'kode_racikan' => $request->kode_racikan,
            'no_bets' => $request->no_bets,
            'bulan' => $request->bulan,
            'tgl_selesai_report' => $request->tgl_selesai_report,
            'status_lt' => $request->status_lt,
            'parameter' => $parameters,
            'storage' =>  $storage,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_analisa' => $request->tgl_analisa,
            'tgl_est' => $request->tgl_est,
            'tgl_selesai' => $request->tgl_selesai,
            'nama_analis' => $request->nama_analis,
            'file_upload' => $request->file_upload,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
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
    
    function getRomanMonth()
    {
        $monthNumber = Carbon::now()->format('n');
        $romans = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];
    
        return $romans[$monthNumber - 1];
    }

    public function update_report(Request $request)
    {   
        $scar = ReportAnalysis::find($request->id_report);
        $todayDate = Carbon::now()->format('d-m-Y');
        if ($scar) {
            $data = [
                'nama_item' => $request->nama_item,
                'category' => $request->category,
                'pic' => $request->pic,
                'kode_racikan' => $request->kode_racikan,
                'no_bets' => $request->no_bets,
                'bulan' => $request->bulan,
                'supplier' => $request->supplier,
                'parameter' => $request->parameter,
                'storage' => $request->storage,
                'tgl_masuk' => $request->tgl_masuk,
                'tgl_analisa' => $request->tgl_analisa,
                'tgl_est' => $request->tgl_est,
                'tgl_selesai' => $request->tgl_selesai,
                'nama_analis' => $request->nama_analis,
                'file_upload' => $request->file_upload,
                'status' => $request->status,
                'keterangan' => $request->keterangan,
                'tgl_selesai_report' => $request->tgl_selesai_report,
                'status_lt' => $request->status_lt,
            ];
            
        if ($request->hasFile('file_upload')) {
            $fileRefGambar = $request->file('file_upload');
            $filenameRefGambar = uniqid() . '_' . time() . '_' . $scar->jenis_report . '_' .  $fileRefGambar->getClientOriginalName();
            $fileRefGambar->storeAs('dokumen', $filenameRefGambar, 'public'); 
            $data['file_upload'] = 'dokumen/' . $filenameRefGambar;
        } else {
            $data['file_upload'] = $scar->file_upload; // Gunakan nama file yang sudah ada jika tidak ada file baru
        }

        $scar->update($data);
        if ($scar) {
            return redirect()->back()->with('success', 'Data berhasil Diperbarui !');
        } else {
            return redirect()->back()->with('error', 'Gagal Diperbarui !');
        }
        }
    }

    public function delete_report(Request $req)
    {

        $delete = $req->id_delete;
        $del = DB::table('report_analysis')->where("id_Report", $delete)->delete();

        if ($del) {
            DB::table('report_analysis')->where("id_Report", $delete)->delete();
            return redirect()->back()->with('success', 'Data berhasil Dihapus !');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus !');
        }

    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,csv,txt'
        ]);

        try {
            Excel::import(new ReportAnalysisImport, $request->file('file'));

            return redirect()->back()->with('success', 'Data has been imported successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error occurred while importing data: ' . $e->getMessage());
        }
    }
    
}
