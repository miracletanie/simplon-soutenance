<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bien extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->token = Str::uuid();
            $model->reference = Str::random(10);
        });
    }

    public function type()
    {
        return $this->belongsTo(TypeBien::class,'type_bien_id');
    }

    public function images()
    {
        return $this->hasMany(ImageBien::class,'bien_id');
    }
}
