<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // Relate to the database table
    protected $table = 'tickets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'bidang',
        'subbidang',
        'pelapor',
    ];
    
    // Array fields add 20 Juli 2022
    protected $casts = ['dokumens' => 'array'];
}
