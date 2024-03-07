<?php

namespace App\Exports;

use App\Models\LKA;
use Maatwebsite\Excel\Concerns\FromCollection;
use Carbon\Carbon;
use App\Models\lkaAnalysis;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
class LKAExport implements FromCollection, WithHeadings, WithMapping , WithStyles 
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
            return LKA::where('jenis_lka', 'Finish Good')
                                  ->whereBetween('created_at', [$this->startDate, $this->endDate])
                                  ->get();
        } elseif ($this->selected == 'Stabilita') {
            return LKA::where('jenis_lka', 'Stabilita')
                                  ->whereBetween('created_at', [$this->startDate, $this->endDate])
                                  ->get();
        } elseif ($this->selected == 'Raw Material') {
            return LKA::where('jenis_lka', 'Raw Material')
                                  ->whereBetween('created_at', [$this->startDate, $this->endDate])
                                  ->get();
        } elseif ($this->selected == 'Mikrobiologi') {
            return LKA::where('jenis_lka', 'Mikrobiologi')
                                  ->whereBetween('created_at', [$this->startDate, $this->endDate])
                                  ->get();
        } else {
            return LKA::all();
        }
    }

    public function map($lka): array

    {
        static $count = 1;

      
        $created_at = !empty($lka->created_at) ? Carbon::parse($lka->created_at)->format('d-m-Y H:i') : '';
        $updated_at = !empty($lka->updated_at) ? Carbon::parse($lka->updated_at)->format('d-m-Y') : '';
        

        
        return [
            $count++,
            $created_at,
            $lka->nama_item,
            $lka->no_lka,
            $lka->tahun_terbit,
            $lka->keterangan,
            $updated_at
        ];
    }

        public function headings(): array
    {
    
        return [
            'No',
            'Tanggal Pembuatan',
            'Name Item',
            'No. LKA',
            'Tahun Terbit',
            'Keterangan',
            'Perubahan terakhir',
        ];
    }


    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:G1')->applyFromArray([
            'font' => ['bold' => true],
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
        ]);

        $sheet->getStyle('A1:G' . $sheet->getHighestRow())
            ->applyFromArray([
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],
            ]);

        $sheet->getStyle('A1:G' . $sheet->getHighestRow())
            ->getAlignment()
            ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        foreach(range('A', 'G') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        return [];
    }
}
