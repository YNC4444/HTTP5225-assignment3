<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Weapon extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'weapons';
    protected $dates = ['deleted_at'];
    protected $fillable = [
      'name',
      'rarity',
      'class',
      'base_atk',
      '2nd_stat',
      '2nd_stat_value_%',
      'description',
    ];
    public function character()
    {
      return $this->hasOne(Character::class);
    }

}
