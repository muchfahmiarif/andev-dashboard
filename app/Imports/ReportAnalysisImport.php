<?php

namespace App\Imports;

use App\Models\ReportAnalysis;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

class ReportAnalysisImport implements ToModel
{
    /**
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        dd($row);
        // Mengonversi format tanggal dari dd/mm/yyyy menjadi Y-m-d menggunakan Carbon
        $tgl_masuk = Carbon::createFromFormat('d-m-Y', $row['tgl_masuk'])->format('Y-m-d');
        $tgl_analisa = Carbon::createFromFormat('d-m-Y', $row['tgl_analisa'])->format('Y-m-d');
        $tgl_est = Carbon::createFromFormat('d-m-Y', $row['tgl_est'])->format('Y-m-d');
        $tgl_selesai = Carbon::createFromFormat('d-m-Y', $row['tgl_selesai'])->format('Y-m-d');
        $tgl_selesai_report = Carbon::createFromFormat('d-m-Y', $row['tgl_selesai_report'])->format('Y-m-d');

        return new ReportAnalysis([
            'user_id' => auth()->id(),
            'jenis_report' => $row['0'],
            'no_permintaan_analisa' => $row['1'],
            'no_laporan_analisa' => $row['2'],
            'nama_item' => $row['3'],
            'supplier' => $row['4'],
            'category' => $row['5'],
            'pic' => $row['6'],
            'kode_racikan' => $row['7'],
            'no_bets' => $row['8'],
            'bulan' => $row['9'],
            'parameter' => $row['10'],
            'storage' => $row['11'],
            'tgl_masuk' => $tgl_masuk,
            'tgl_analisa' => $tgl_analisa,
            'tgl_est' => $tgl_est,
            'tgl_selesai' => $tgl_selesai,
            'tgl_selesai_report' => $tgl_selesai_report,
            'ot_analysis' => $row['18'],
            'nama_analis' => $row['19'],
            'file_upload' => $row['20'],
            'status' => $row['21'],
            'keterangan' => $row['22'],
        ]);
    }
}
