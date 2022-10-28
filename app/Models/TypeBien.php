<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeBien extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->token = Str::uuid();
        });
    }
}
