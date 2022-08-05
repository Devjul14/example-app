<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Book::all();
    }
    public function headings(): array
    {
        return [
            'Test',
            'Impressions',
            'Clicks',
            'CTR',
            'test',
            'sdf',
            'sdfsg',
            'sdsdf',
            'kykhj',
            'opii'
        ];
    }
}
