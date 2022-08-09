<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

class ExportController extends Controller
{
    private $excel;
    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }
    public function index(Excel $excel)
    {
        return $this->excel->download(new UserExport, 'users.pdf', Excel::DOMPDF);
    }
}
