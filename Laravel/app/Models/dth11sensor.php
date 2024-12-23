<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dth11sensor extends Model
{
    use HasFactory;

    protected $table = 'dht11_data'; // Nombre de la tabla
    public $timestamps = false; // Si la tabla no tiene columnas created_at y updated_at
    protected $fillable = [
        'id',
        'device_id',
        'temperature',
        'humidity',
        'status_read_sensor_dht11',
        'date_time',
    ];
}