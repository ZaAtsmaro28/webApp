<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterChart extends Model
{
    public $timestamps = false;

    protected $fillable = ['coa_code', 'name', 'category'];

    protected $primaryKey = 'coa_code';
}
