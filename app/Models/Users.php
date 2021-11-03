<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends \Illuminate\Foundation\Auth\User
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = ["name","surname","email","password","remember_token","tel"];
    protected $hidden = ["password","remember_token"];
}
