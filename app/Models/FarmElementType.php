<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmElementType extends Model
{
    use HasFactory;
    protected $fillable = ['element_type_name'];

    public function farmElements()
    {
        return $this->hasMany(FarmElement::class);
    }

    public static function rules($id = null)
    {
        return [
            'element_type_name' => 'required|string|unique'
        ];
    }
}
