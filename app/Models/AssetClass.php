<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetClass extends Model
{
    protected $table = 'asset_classes';
    protected $primaryKey = 'class_id';
    // public $incrementing = false; // false = ไม่ใช้ options auto increment
    public $timestamps = false; // false = ไม่ใช้ field updated_at และ created_at

    public function group()
  	{
      	return $this->belongsTo('App\Models\AssetGroup', 'group_id', 'group_id');
  	}
}
