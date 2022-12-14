<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\User;
use App\Models\Maintenance_appointment;
use Livewire\Component;

class MaintenanceAppointmentCreate extends Component
{
    public $MaintenanceAppointment;
    public $type = 0;
    public $remark;
    public $company;
    public $companies;
    public $user;
    public $users;

    public $date;

    public function mount(){
        $this->companies = Company::all();
        $this->users = User::all()->where('role_id', '6');
        $this->company = Company::first()->id;
        $this->user = User::all()->where('role_id', '6')->first()->id;
    }

    public function submit(){
        $appointment = new Maintenance_appointment;
        $appointment->company_id = $this->company;
        $appointment->remark = $this->remark;
        $appointment->type = $this->type;
        $appointment->date_added = $this->date;
        $appointment->responsible = $this->user;
        $appointment->save();
        session()->flash('message', "De note is succesvol aangemaakt!");
        return redirect()->to(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.maintenance-appointment-create');
    }
}
