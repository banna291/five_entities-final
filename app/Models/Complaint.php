<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable=['ComplaintBy','Email','Title','Description','DepId','CategoryId','AssignedTo'];
    
    public function category(){
        return $this->belongsTo(Category::class,'CategoryId');
    }

    public function department(){
        return $this->belongsTo(Department::class,'DepId');
    }

    public function user(){
        return $this->belongsTo(User::class,'AssignedTo');
    }

}
