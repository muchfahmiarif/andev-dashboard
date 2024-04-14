<?php

namespace App\Http\Controllers;

use App\Models\LKA;
use App\Models\Event;
use App\Models\ReportAnalysis;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $event = Event::get();
        $report_all = ReportAnalysis::count();
        $report_fg = ReportAnalysis::where('jenis_report', '=', 'Finish Good')->count();
        $report_mikro = ReportAnalysis::where('jenis_report', '=', 'Mikrobiologi')->count();
        $report_rm = ReportAnalysis::where('jenis_report', '=', 'Raw Material')->count();
        $report_stabilita = ReportAnalysis::where('jenis_report', '=', 'Stabilita')->count();
        
        $lka_all = LKA::count();
        $lka_fg = LKA::where('jenis_lka', '=', 'Finish Good')->count();
        $lka_mikro = LKA::where('jenis_lka', '=', 'Mikrobiologi')->count();
        $lka_rm = LKA::where('jenis_lka', '=', 'Raw Material')->count();
        $lka_stabilita = LKA::where('jenis_lka', '=', 'Stabilita')->count();



        return view('front-view.index', 
        compact('event','report_all','report_fg','report_mikro','report_rm','report_stabilita','report_stabilita',
                'lka_all','lka_fg','lka_mikro','lka_rm','lka_stabilita'));
    }
    public function echart(): JsonResponse
{
    $title = '% The Completeness of
    Document';

    $lka_fg = LKA::where('jenis_lka', '=', 'Finish Good')->count();
    $lka_mikro = LKA::where('jenis_lka', '=', 'Mikrobiologi')->count();
    $lka_rm = LKA::where('jenis_lka', '=', 'Raw Material')->count();
    $lka_stabilita = LKA::where('jenis_lka', '=', 'Stabilita')->count();

    $data = [
        ['Finish Goods', $lka_fg],
        ['Mikrobiologi', $lka_mikro],
        ['Raw Material', $lka_rm],
        ['Stabilita', $lka_stabilita]
    ];
    $result = [
        'title' => $title,
        'data' => $data,
    ];

    return response()->json($result);
}

public function echart2(): JsonResponse
{
    $title = 'Accreditation Cycle';
    $report_fg = ReportAnalysis::where('jenis_report', '=', 'Finish Good')->count();
    $report_mikro = ReportAnalysis::where('jenis_report', '=', 'Mikrobiologi')->count();
    $report_rm = ReportAnalysis::where('jenis_report', '=', 'Raw Material')->count();
    $report_stabilita = ReportAnalysis::where('jenis_report', '=', 'Stabilita')->count();

   
    
    $data = [
        'labels' => ['Finish Goods', 'Mikrobiologi', 'Raw Material', 'Stabilita'], 
        'data' => [$report_fg, $report_mikro, $report_rm,$report_stabilita],
    ];
    $result = [
        'title' => $title,
        'data' => $data,
    ];

    return response()->json($result);
} 
}
