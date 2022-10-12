<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $fillable = [
        'name',
        'phone',
        'street',
        'house_number',
        'city',
        'country_code',
        'bkr_checked',
        'contact_id',
    ];

    public function getUser()
    {
        return $this->belongsTo(User::class, 'contact_id', 'id');

    }
}
