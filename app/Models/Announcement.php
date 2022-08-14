<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public $table ="announcement";
    protected $primaryKey ="id";
    protected $fillable = ['title','file','content',];
}
