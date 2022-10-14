<?php

namespace App\Http\Livewire;

use App\Models\Maintenance_appointment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class MaintenanceAppointments extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.maintenance-appointments', [
            'maintenance_appointments' => Maintenance_appointment::where('date_added', '>=', Carbon::now('Europe/Amsterdam'))->orderBy('date_added', 'asc')->paginate(10),
        ]);
    }
}
