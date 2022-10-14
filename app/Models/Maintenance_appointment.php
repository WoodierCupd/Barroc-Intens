<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_appointment extends Model
{
    use HasFactory;
    protected $table = 'maintenance_appointments';
    protected $fillable = [
        'company_id',
        'remark',
        'date_added',
    ];

    public function getCompany()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
