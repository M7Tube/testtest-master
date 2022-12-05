<?php

namespace App\Http\Livewire\Dashboard\Items;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Item;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreateItem extends Component
{
    use LivewireDashboardTrait;
    use WithFileUploads;

    public $item_id;
    public $ar_name;
    public $en_name;
    public $ar_desc;
    public $en_desc;
    public $picture;
    public $price;
    public $buy_link;
    public $buy_link_text;
    public $ar_buy_link_title_text;
    public $en_buy_link_title_text;
    public $free_item_with_email_send;
    public $email_text;
    public $email_file;
    public $user_id;

    public function mount()
    {
        $this->user_id = auth()->id();
    }
    public function updatedPicture()
    {
        $this->validate([
            'picture' => ['required', 'mimes:jpg,png,jpeg'],
        ]);
        $this->picture->storeAs('img/', $this->picture->getClientOriginalName());
    }
    public function updatedEmailFile()
    {
        $this->validate([
            'email_file' => ['mimes:pdf'],
        ]);
        $this->email_file->storeAs('pdf/', $this->email_file->getClientOriginalName());
    }
    //l
    public function create()
    {
        $this->validate([
            'ar_name' => ['required', 'string', 'max:28800'],
            'en_name' => ['required', 'string', 'max:28800'],
            'ar_desc' => ['required', 'string', 'max:28800'],
            'en_desc' => ['required', 'string', 'max:28800'],
            'picture' => ['required', 'mimes:jpg,png,jpeg'],
            'price' => ['integer'],
            'buy_link' => ['string'],
            'buy_link_text' => ['string'],
            'ar_buy_link_title_text' => ['string'],
            'en_buy_link_title_text' => ['string'],
            'free_item_with_email_send' => ['boolean'],
            'email_text' => ['string'],
            // 'email_file' => ['mimes:pdf'],
            'user_id' => ['required', 'integer', 'exists:users,user_id'],
        ]);
        Item::Create([
            'ar_name' => $this->ar_name,
            'en_name' => $this->en_name,
            'ar_desc' => $this->ar_desc,
            'en_desc' => $this->en_desc,
            'picture' => $this->picture->getClientOriginalName(),
            'price' => $this->price ?? null,
            'buy_link' => $this->buy_link ?? null,
            'buy_link_text' => $this->buy_link_text ?? null,
            'ar_buy_link_title_text' => $this->ar_buy_link_title_text ?? null,
            'en_buy_link_title_text' => $this->en_buy_link_title_text ?? null,
            'free_item_with_email_send' => $this->free_item_with_email_send ?? 0,
            'email_text' => $this->email_text ?? null,
            'email_file' => $this->email_file->getClientOriginalName() ?? null,
            'user_id' => $this->user_id,
        ]);
        $this->clear();
        return redirect()->route('Items', app()->getLocale());
    }

    public function clear()
    {
        $this->livewire_clear([
            'item_id',
            'ar_name',
            'en_name',
            'ar_desc',
            'en_desc',
            'picture',
            'price',
            'buy_link',
            'ar_buy_link_title_text',
            'en_buy_link_title_text',
            'buy_link_text',
            'free_item_with_email_send',
            'email_text',
            'email_file',
            'user_id',
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.items.create-item');
    }
}
