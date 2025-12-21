<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['Name'];

    public function complaints()
    {
        return $this->hasMany(Complaint::class,'DepId');
    }
}
