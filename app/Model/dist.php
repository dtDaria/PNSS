<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dist extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'Название',
        'Часы',
        'Семестр',
        'KontrID',
    ];
    protected $table = 'dist';
}
