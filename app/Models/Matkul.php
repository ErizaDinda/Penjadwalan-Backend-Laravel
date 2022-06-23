<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = 'matkul';
    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'id_mk', 'nama', 'sks', 'semester', 'aktif', 'jenis'
    ];
}
