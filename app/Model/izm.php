<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class izm extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'izmenenie1',
        'izmenenie2',
        'izmenenie3',
        'izmenenie4',
        'izmenenie5',
        'izmenenie6',
        'izmenenie7',
        'izmenenie8',

    ];
    protected $table = 'izm';
}
