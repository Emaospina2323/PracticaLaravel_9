<?php

namespace App\Models;

use App\Models\Cargo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function cargoEmpleado(){
        return $this->belongsTo(Cargo::class, 'idCargo');
    }

}