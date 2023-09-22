<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontr extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'KontrID',
    ];
    protected $table = 'kontr';
}