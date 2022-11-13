<?php

namespace App\Http\Livewire\Dashboard\Pdf;

use Livewire\WithFileUploads;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\PdfFile;
use Livewire\Component;

class CreatePdf extends Component
{

    use WithFileUploads;
    use LivewireDashboardTrait;

    public $pdf_id;
    public $pdf;

    public function UpdatedPdf()
    {
        $this->validate([
            'pdf' => ['required', 'mimes:pdf'],
        ]);
        $this->pdf->storeAs('pdf/', $this->pdf->getClientOriginalName());
    }
    public function create()
    {
        $this->validate([
            'pdf' => ['required', 'mimes:pdf'],
        ]);
        PdfFile::Create([
            'pdf' => $this->pdf->getClientOriginalName(),
        ]);
        $this->clear();
        return redirect()->route('Pdf', app()->getLocale());
    }

    public function clear()
    {
        $this->livewire_clear([
            'pdf_id',
            'pdf',
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.pdf.create-pdf');
    }
}
