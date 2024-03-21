<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class operationshift extends Model
{
    use HasFactory;
    protected $fillable = ['Nama', 'Shift', 'Thumbnail'];
}
