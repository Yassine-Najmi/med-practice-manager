<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function test()
    {
        $data = [
            'foo' => 'gjw9'
        ];

        $pdf = PDF::loadView('admin.pdf.test', $data);

        return $pdf->stream('document.pdf');
    }
}
