<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function dependent()
    {
        return $this->hasMany(Dependent::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function auditrail()
    {
        return $this->hasMany(AuditTrail::class);
    }
}