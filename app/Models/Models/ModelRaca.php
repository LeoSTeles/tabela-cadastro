<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelRaca extends Model
{
    use HasFactory;
    protected $table='raca';
    protected $fillable = ['nome_raca'];

}
