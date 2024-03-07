<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\ReportAnalysis;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class ReportExport implements FromCollection, WithHeadings, WithMapping , WithStyles 
{
    private $startDate;
    private $endDate;
    private $selected;

    public function __construct( $startDate, $endDate, $selected  )
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->selected = $selected;
    }
  
    public function collection()
    {
        if ($this->selected == 'Finish Good') {
            return ReportAnalysis::where('jenis_report', 'Finish Good')
                                  ->whereBetween('created_at', [$this->startDate, $this->endDate])
                                  ->get();
        } elseif ($this->selected == 'Stabilita') {
            return ReportAnalysis::where('jenis_report', 'Stabilita')
                                  ->whereBetween('created_at', [$this->startDate, $this->endDate])
                                  ->get();
        } elseif ($this->selected == 'Raw Material') {
            return ReportAnalysis::where('jenis_report', 'Raw Material')
                                  ->whereBetween('created_at', [$this->startDate, $this->endDate])
                                  ->get();
        } elseif ($this->selected == 'Mikrobiologi') {
            return ReportAnalysis::where('jenis_report', 'Mikrobiologi')
                                  ->whereBetween('created_at', [$this->startDate, $this->endDate])
                                  ->get();
        } else {
            return ReportAnalysis::all();
        }
    }

    public function map($report): array

    {
        static $count = 1;

        $tgl_analisa = Carbon::parse($report->tgl_analisa);
        $tgl_selesai = Carbon::parse($report->tgl_selesai);
        $leadtime = $tgl_analisa->diffInDays($tgl_selesai);

        $created_at = !empty($report->created_at) ? Carbon::parse($report->created_at)->format('d-m-Y H:i') : '';
        $tgl_masuk = !empty($report->tgl_masuk) ? Carbon::parse($report->tgl_masuk)->format('d-m-Y') : '';
        $tgl_analisa = !empty($report->tgl_analisa) ? Carbon::parse($report->tgl_analisa)->format('d-m-Y') : '';
        $tgl_est = !empty($report->tgl_est) ? Carbon::parse($report->tgl_est)->format('d-m-Y') : '';
        $tgl_selesai = !empty($report->tgl_selesai) ? Carbon::parse($report->tgl_selesai)->format('d-m-Y') : '';
        

        
        return [
            $count++,
            $created_at,
            $report->no_permintaan_analisa,
            $report->no_laporan_analisa,
            $report->nama_item,
            $report->category,
            $report->pic,
            $report->kode_racikan,
            $report->no_bets,
            $report->bulan,
            $report->parameter,
            $report->storage,
            $tgl_masuk,
            $tgl_analisa,
            $tgl_est,
            $tgl_selesai,
            $leadtime . ' ' . 'Hari',
            $report->nama_analis,
            $report->status,
            $report->keterangan,
        ];
    }

        public function headings(): array
    {
    
        return [
            'No',
            'Tanggal Pembuatan',
            'No Permintaan Analisa',
            'No Laporan Analisa',
            'Nama Item ',
            'Kategori',
            'PIC',
            'Kode Racikan',
            'No Bets',
            'Bulan',
            'Parameters',
            'Storage',
            'Tgl Masuk',
            'Tgl Analisa',
            'Tgl Estimasi Selesai',
            'Tgl Selesai Analisa',
            'On Time Analysis',
            'Nama Analis',
            'Status',
            'Keterangan',
        ];
    }


    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:T1')->applyFromArray([
            'font' => ['bold' => true],
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
        ]);

        $sheet->getStyle('A1:T' . $sheet->getHighestRow())
            ->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],
            ]);

        $sheet->getStyle('A1:T' . $sheet->getHighestRow())
            ->getAlignment()
            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        foreach(range('A', 'T') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        return [];
    }
}
