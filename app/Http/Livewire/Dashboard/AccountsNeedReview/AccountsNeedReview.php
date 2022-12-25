<?php

namespace App\Http\Livewire\Dashboard\AccountsNeedReview;

use Livewire\Component;
use Livewire\WithPagination as LivewireWithPagination;
use App\Http\Traits\LivewireDashboardTrait;
use App\Mail\AccountReviewPdf;
use App\Models\AccountsNeedReview as ModelsAccountsNeedReview;
use Illuminate\Support\Facades\Mail;
use Livewire\WithFileUploads;

class AccountsNeedReview extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $pdf;

    public $orderBy = 'email';
    public $orderAsc = true;
    public $search = '';

    public function change_status($id)
    {
        $check = ModelsAccountsNeedReview::where('accounts_need_review_id', $id)->first();
        if ($check) {
            if ($check->status == 1) {
                $check->status = 0;
                $check->save();
            } else {
                $check->status = 1;
                $check->save();
            }
        } else {
        }
    }

    public function UpdatedPdf()
    {
        $this->validate([
            'pdf' => ['required', 'mimes:pdf'],
        ]);
        $this->pdf->storeAs('pdf/', $this->pdf->getClientOriginalName());
    }
    public function submit($id)
    {
        $this->validate([
            'pdf' => ['required', 'mimes:pdf'],
        ]);
        $check = ModelsAccountsNeedReview::where('accounts_need_review_id', $id)->first();
        if ($check) {
            if ($check->status == 1) {
                $files = $this->pdf;
                // Mail::send(new AccountReviewPdf(), compact('data'), function ($message) use ($check, $files) {
                //     $message->to($check->email);
                //     if (count($files) > 0) {
                //         foreach ($files as $file) {
                //             $message->attach(
                //                 $file->getRealPath(),
                //                 array(
                //                     'as' => $file->getClientOriginalName(), // If you want you can chnage original name to custom name
                //                     'mime' => $file->getMimeType()
                //                 )
                //             );
                //         }
                //     }
                // });
                $check->status = 0;
                $check->save();
            } else {
                Mail::to($check->email)->send(new AccountReviewPdf($this->pdf->getClientOriginalName()));
                $check->status = 1;
                $check->save();
            }
        } else {
        }
        $this->reset();
        return redirect()->route('AccountsNeedReview', app()->getLocale());
    }

    public function render()
    {
        return view(
            'livewire.dashboard.accounts-need-review.accounts-need-review',
            [
                'ANR' => ModelsAccountsNeedReview::search($this->search)
                    ->latest()
                    ->paginate(25),
            ]
        );
    }
}
