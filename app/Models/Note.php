<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'notes';
    protected $fillable = [
        'note',
        'date',
        'company_id',
        'autor_id',
    ];

    public function getAuthor()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function getCompany()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
