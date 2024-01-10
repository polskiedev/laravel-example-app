<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmElement extends Model
{
    use HasFactory;

    protected $fillable = ['element_name', 'type_id', 'variant', 'description'];

    public function type()
    {
        return $this->belongsTo(FarmElementType::class, 'type_id');
    }
}
