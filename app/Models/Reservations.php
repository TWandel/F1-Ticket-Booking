<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'race_id',
        'category_id',
        'type_id',
        'count',
        'price',
        'created_at',
        'updated_at',
    ];
    public function races()
{
  return $this->hasMany('App\Races');
}

public function category()
{
    return $this->hasMany('App\CategoryR', 'category_id');
}

}
