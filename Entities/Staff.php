<?php

namespace Modules\CreatorStaff\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected static function newFactory()
    {
        return \Modules\CreatorStaff\Database\factories\StaffFactory::new();
    }
}
