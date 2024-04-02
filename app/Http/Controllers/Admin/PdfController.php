<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use App\Models\Consultation;

class PdfController extends Controller
{
    public function generatePdf($id)
    {
        // Fetch specific information about the consultation using $id
        $consultation = Consultation::findOrFail($id);

        // $data = ['consultation' => $consultation];

        $pdf = PDF::loadView('admin.pdf.consultation', compact('consultation'));

        // Return the PDF as a stream
        return $pdf->stream('consultation' . $consultation->id . '.pdf');
    }
}
