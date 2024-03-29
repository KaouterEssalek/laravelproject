<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userka extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id'; // Nommer la clé primaire avec idTable
    protected $fillable = ['name', 'email', 'password'];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }
}
