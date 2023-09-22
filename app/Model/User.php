<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class User extends Model implements IdentityInterface
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'login',
        'password',
        'prof'
    ];

    protected static function booted()
    {
        static::created(function ($user) {
            $user->save();
        });
    }

    //Выборка пользователя по первичному ключу
    public function findIdentity(int $id)
    {
        return self::where('id', $id)->first();
    }

    //Возврат первичного ключа
    public function getId(): int
    {
        return $this->id;
    }

    //Возврат аутентифицированного пользователя
    public function attemptIdentity(array $credentials)
    {
        return self::where(['login' => $credentials['login'],
            'password' => ($credentials['password'])])->first();
    }
    public function Admin()
    {
        if($this->prof == 1){
            return true;
        }
        return false;
    }
    protected $table = 'users';
}

