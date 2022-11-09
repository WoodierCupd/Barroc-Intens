<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomInvoice extends Model
{
    use HasFactory;
    protected $table = 'custom_invoices';
    protected $fillable = [
        'date',
        'paid_at',
        'company_id',
        'amount',
    ];
}
