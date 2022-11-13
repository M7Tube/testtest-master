<?php

namespace App\Http\Livewire\Dashboard\Pdf;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\PdfFile;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;

class Pdf extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $pdf_id;
    public $pdf;

    public $orderBy = 'pdf';
    public $orderAsc = true;
    public $search = '';

    public function clear()
    {
        $this->livewire_clear([
            'pdf_id', 'pdf'
        ]);
    }

    public function delete($id)
    {
        PdfFile::where('pdf_id', $id)->delete();
    }

    public function download($id)
    {
        $pdf = PdfFile::where('pdf_id', $id)->first();
        // $pdf->download();
        return Storage::download('pdf/'.$pdf->pdf);
    }
    public function render()
    {
        return view(
            'livewire.dashboard.pdf.pdf',
            [
                'pdfs' => PdfFile::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
