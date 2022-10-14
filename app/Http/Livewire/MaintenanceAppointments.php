<?php

namespace App\Http\Livewire;

use App\Models\Maintenance_appointment;
use Livewire\Component;
use Livewire\WithPagination;

class MaintenanceAppointments extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.maintenance-appointments', [
            'maintenance_appointments' => Maintenance_appointment::paginate(10),
        ]);
    }
}
