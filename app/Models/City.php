<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    public function region()
    {
        return $this->hasOne(Category::class, 'id', 'region_id');
    }

    public function advert()
    {
        return $this->hasMany(Advert::class);
    }
}
