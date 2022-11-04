<?php
namespace App\Http\Livewire;
use App\Models\Maintenance_appointment;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Event;

class Calendar extends Component
{
    public $maintenance_appointments;

    public function mount(){
        $this->maintenance_appointments = Maintenance_appointment::all();
    }

    public function render()
    {
        return view('livewire.calendar');
    }
}
