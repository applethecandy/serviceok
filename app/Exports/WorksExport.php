<?php

namespace App\Exports;

use App\Models\Works;
use App\Models\Master;
use App\Exports\Sheets\ClientsSheet;
use App\Exports\Sheets\MastersSheet;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class WorksExport implements WithMultipleSheets
{
    /**
     * @var Item $item
     */
    use Exportable;

    // public function query()
    // {
    //     return Master::query();
    // }

    // public function map($master): array
    // {
    //     return [
    //         $master->name,
    //         // $master->description,
    //         // Color::select('name')->where('id', '=', $master->color_id)->pluck('name')[0],
    //         // $master->price,
    //     ];
    // }
    // public function headings(): array
    // {
    //     return [
    //         'Название',
    //         // 'Описание',
    //         // 'Цвет',
    //         // 'Цена'
    //     ];
    // }
    // public function columnWidths(): array
    // {
    //     return [
    //         'B' => 30
    //     ];
    // }
    // public function styles(Worksheet $sheet)
    // {
    //     $sheet->getStyle('1')->getFont()->setBold(true);
    // }

    public function sheets(): array
    {
        $sheets = [];

        $sheets[] = new MastersSheet();
        $sheets[] = new ClientsSheet();

        return $sheets;
    }
}