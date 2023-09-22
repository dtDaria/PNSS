<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'Фамилия',
        'Имя',
        'Отчество',
        'Пол',
        'birthday',
        'Адрес',
        'GroupID'
    ];
    protected $table = 'students';
}
