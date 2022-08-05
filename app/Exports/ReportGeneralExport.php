<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;

class ReportGeneralExport implements FromArray, WithHeadings, WithTitle, ShouldAutoSize, WithColumnFormatting, WithMapping
{
    protected $books;

    public function __construct(array $books)
    {
        $this->books = $books;
    }

    public function map($book): array
    {
        return [
            $book['id'],
            $book['title'],
            $book['slug'],
            $book['sinopsis']
        ];
    }

    public function headings(): array
    {
        return [
            'Test',
            'Impressions',
            'Clicks',
            'CTR'
        ];
    }

    public function array(): array
    {
        return $this->books;
    }

    public function title(): string
    {
        return 'General';
    }

    public function columnFormats(): array
    {
        return [
            'B' => '#,##0',
            'C' => '#,##0',
        ];
    }
}
