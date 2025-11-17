<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterChart extends Model
{
    public $timestamps = false;

    protected $fillable = ['coa_code', 'name', 'category_id'];

    protected $primaryKey = 'coa_code';

    public function transaction() {
        return $this->hasMany(Transaction::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
