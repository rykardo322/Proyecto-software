<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DHT11Data extends Model
{
    use HasFactory;

    protected $table = 'dht11_data'; // Nombre de la tabla
    protected $fillable = ['device_id', 'temperature', 'humidity', 'status_read_sensor_dht11', 'date_time'];
}