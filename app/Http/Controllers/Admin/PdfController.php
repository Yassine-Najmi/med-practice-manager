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

        // Pass the consultation data to the PDF view
        $data = ['consultation' => $consultation];

        // Load the PDF view with the data
        $pdf = PDF::loadView('admin.pdf.consultation', $data);

        // Return the PDF as a stream
        return $pdf->stream('consultation.pdf');
    }
}
