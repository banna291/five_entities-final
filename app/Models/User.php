<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable=['Name','Email','Password','RoleId'];

    public function role(){
        return $this->belongsTo(Role::class,'RoleId');
    }

    public function complaints(){
        return $this->hasMany(Complaint::class,'AssignedTo');
    }
}
