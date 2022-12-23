<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expert;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
   'name',
   'image'
];

    public function experts()
    {
        return $this->hasMany(Expert::class);

    }

    
}