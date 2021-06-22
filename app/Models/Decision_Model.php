<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decision_Model extends Model
{
    use HasFactory;

    protected $table = "dataset_pasien";
    protected $guarded =[];
}