<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDog extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='cachorro';
}
