<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    public $fillable = ['jadwal_pmb','periode_daftar','jalur','gelombang','jenjang'];
    public $timestamps = true;

}
