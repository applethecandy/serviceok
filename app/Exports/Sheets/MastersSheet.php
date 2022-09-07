<?php

namespace App\Exports\Sheets;

use App\Models\Master;

use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\Color;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class MastersSheet implements FromQuery, WithTitle, WithMapping, WithHeadings, ShouldAutoSize, WithStyles, WithColumnFormatting
{
    public function query()
    {
        return Master::query();
    }

    public function map($master): array
    {
        return [
            $master->surname . ' ' . $master->name,
            $master->city,
            $master->phone,
            $master->created_at,
            implode(PHP_EOL, $master->services->pluck('title')->toArray()),
        ];
    }

    public function headings(): array
    {
        return [
            'master',
            'city',
            'phone',
            'date',
            'services'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $rowsCount = Master::count() + 1;
        $lastColumn = 'E';

        $sheet->getStyle("1")->getFont()->setBold(true);
        $sheet->getStyle("{$lastColumn}1:{$lastColumn}{$rowsCount}")->getAlignment()->setWrapText(true);
        $sheet->getStyle("A1:{$lastColumn}{$rowsCount}")->getAlignment()->setVertical(Alignment::VERTICAL_TOP);
        $sheet->getStyle("1")->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle("A1:{$lastColumn}1")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB('FFCCCCCC');

        for ($i = 1; $i < $rowsCount; $i++) {
            if ($i % 2 && $i > 2) {
                $sheet->getStyle("A{$i}:{$lastColumn}{$i}")->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB('FFDDDDDD');
            }
        }

        $sheet->getStyle("A1:{$lastColumn}{$rowsCount}")->getBorders()->getOutline()->setBorderStyle(Border::BORDER_THIN)->setColor(new Color('00000000'));
        $sheet->getStyle("A1:{$lastColumn}{$rowsCount}")->getBorders()->getVertical()->setBorderStyle(Border::BORDER_THIN)->setColor(new Color('00000000'));
        $sheet->getStyle("A1:{$lastColumn}2")->getBorders()->getHorizontal()->setBorderStyle(Border::BORDER_THIN)->setColor(new Color('00000000'));
    }

    public function title(): string
    {
        return 'Masters';
    }

    public function columnFormats(): array
    {
        return [
            'D' => NumberFormat::FORMAT_DATE_DDMMYYYY
        ];
    }
}