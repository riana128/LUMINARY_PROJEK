<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBuyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'telepon', 
        'jenis_kelamin', 
        'tanggal_lahir', 
        'alamat'
    ];
}
 