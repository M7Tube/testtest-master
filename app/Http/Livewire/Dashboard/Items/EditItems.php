<?php

namespace App\Http\Livewire\Dashboard\Items;

use Livewire\WithFileUploads;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Item;
use Livewire\Component;

class EditItems extends Component
{
    use LivewireDashboardTrait;
    use WithFileUploads;

    public $item_id;
    public $ar_name;
    public $en_name;
    public $ar_desc;
    public $en_desc;
    public $oldpicture;
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

    public $message;

    public function mount()
    {
        $this->item_id = request('id');
        $data = Item::find($this->item_id);
        if ($data) {
            $this->ar_name = $data->ar_name;
            $this->en_name = $data->en_name;
            $this->ar_desc = $data->ar_desc;
            $this->buy_link = $data->buy_link;
            $this->buy_link_text = $data->buy_link_text;
            $this->ar_buy_link_title_text = $data->ar_buy_link_title_text;
            $this->en_buy_link_title_text = $data->en_buy_link_title_text;
            $this->free_item_with_email_send = $data->free_item_with_email_send;
            $this->email_text = $data->email_text;
            $this->email_file = $data->email_file;
            $this->price = $data->price;
            $this->oldpicture = $data->picture;
            $this->en_desc = $data->en_desc;
        } else {
        }
    }

    public function updatedPicture()
    {
        $this->validate([
            'picture' => ['mimes:jpg,png,jpeg'],
        ]);
        $this->picture->storeAs('img/', $this->picture->getClientOriginalName());
    }

    public function edit()
    {
        $this->validate([
            'ar_name' => ['required', 'string', 'max:28800'],
            'en_name' => ['required', 'string', 'max:28800'],
            'ar_desc' => ['required', 'string', 'max:28800'],
            'en_desc' => ['required', 'string', 'max:28800'],
            'en_desc' => ['required', 'string', 'max:28800'],
            'price' => ['integer'],
            'buy_link' => ['string'],
            'buy_link_text' => ['string'],
            'ar_buy_link_title_text' => ['string'],
            'en_buy_link_title_text' => ['string'],
            'free_item_with_email_send' => ['boolean'],
            'email_text' => ['string'],
            'email_file' => ['string'],
        ]);
        $data = Item::where('item_id', $this->item_id)->first();
        if ($data) {
            $data->ar_name = $this->ar_name;
            $data->en_name = $this->en_name;
            $data->ar_desc = $this->ar_desc;
            $data->en_desc = $this->en_desc;
            $data->buy_link = $this->buy_link ?? null;
            $data->buy_link_text = $this->buy_link_text ?? null;
            $data->ar_buy_link_title_text = $this->ar_buy_link_title_text ?? null;
            $data->en_buy_link_title_text = $this->en_buy_link_title_text ?? null;
            $data->free_item_with_email_send = $this->free_item_with_email_send ?? null;
            $data->email_text = $this->email_text ?? null;
            $data->email_file = $this->email_file ?? null;
            $data->price = $this->price ?? null;
            if (!$this->picture) {
                $data->picture = $this->oldpicture;
            } else {
                $data->picture = $this->picture->getClientOriginalName();
            }
            $data->save();
            return redirect()->route('Items', app()->getLocale());
        } else {
        }
    }

    public function delete()
    {
        Item::where('item_id', $this->item_id)->delete();
        return redirect()->route('Items', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.dashboard.items.edit-items');
    }
}
