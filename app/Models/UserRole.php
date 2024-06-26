<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserRole extends Model
{
    use HasFactory;

    protected $table        = 'users_role';
    protected $primaryKey   = 'id';
    
    public $timestamps      = false;

    protected $fillable     = [
        'id',
        'user_id',
        'role_id'
    ];
}