<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'date', 
        'coa_code',  
        'desc', 
        'debit', 
        'credit'
    ];

    public function masterChart() {
        return $this->belongsTo(MasterChart::class, 'coa_code', 'coa_code');
    }
}
