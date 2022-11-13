<?php

namespace App\Http\Livewire\Dashboard\Statistics;

use App\Models\Statistics as ModelsStatistics;
use Livewire\Component;

class Statistics extends Component
{
    public $work_complated;
    public $years_of_experience;
    public $total_clients;
    public $award_won;

    public $message;


    public function mount()
    {
        $data = ModelsStatistics::first();
        $this->work_complated = $data->work_complated;
        $this->years_of_experience = $data->years_of_experience;
        $this->total_clients = $data->total_clients;
        $this->award_won = $data->award_won;
    }

    public function edit()
    {
        $this->validate([
            'work_complated' => ['required', 'integer'],
            'years_of_experience' => ['required', 'integer'],
            'total_clients' => ['required', 'integer'],
            'award_won' => ['required', 'integer'],
        ]);
        $data = ModelsStatistics::first();
        $data->work_complated = $this->work_complated;
        $data->years_of_experience = $this->years_of_experience;
        $data->total_clients = $this->total_clients;
        $data->award_won = $this->award_won;
        $data->save();
        $this->message = "Done !";
    }

    public function render()
    {
        return view('livewire.dashboard.statistics.statistics');
    }
}
