<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedPackage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function package() {
        return $this->hasOne(Package::class, 'id', 'package_id');
    }
}
