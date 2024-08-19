<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $table = 'characters';
  protected $dates = ['deleted_at'];
  protected $fillable = [
    'name',
    'rarity',
    'element',
    'weapon_class',
    'description',
  ];
  public function weapon()
  {
    return $this->belongsTo(Weapon::class);
  }
}
