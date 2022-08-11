<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UserExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::with('userinfo')->get();
    }
    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->username,
            $user->email,
            $user->created_at
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Username',
            'Email',
            'Created_at'
        ];
    }
}
