<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class link extends Model
{
    use HasFactory;
    protected $fillable = ['Judul', 'Link', 'Image'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if($model ->isDirty('Image') && ($model->getOriginal('Image')!== null)) {
                Storage::disk('public')->delete($model->getOriginal('Image'));
            }
        });
    }
}
