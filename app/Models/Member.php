<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    public function dependent()
    {
        return $this->hasMany(Dependent::class);
    }


    public function auditrail()
    {
        return $this->hasMany(AuditTrail::class);
    }
}
