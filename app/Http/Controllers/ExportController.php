<?php

namespace App\Http\Controllers;

use App\Exports\LKAExport;
use App\Exports\ReportExport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    public function export_report(Request $request)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $selected = $request->input('jenis_report'); 
        $today = Carbon::now();
        $name_file = 'Report Analysis ' . $selected . $today . '.xlsx';
        return Excel::download(new ReportExport($startDate, $endDate, $selected), $name_file);
    }

    public function export_lka(Request $request)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $selected = $request->input('jenis_lka'); 
        $today = Carbon::now();
        $name_file = 'Lembar Kerja Analis' . $selected . $today . '.xlsx';
        return Excel::download(new LKAExport($startDate, $endDate, $selected), $name_file);
    }
    
    

}
