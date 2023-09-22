<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usp_ocen extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'UspID',
        'Distid',
        'StudentsID',
        'Оценка',
    ];
    protected $table = 'usp_ocen';
}