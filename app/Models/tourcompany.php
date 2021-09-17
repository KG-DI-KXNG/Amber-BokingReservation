<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourcompany extends Model
{
    use HasFactory;

    public $table = "tourcompanies";
    public $primaryKey = "Tour_ID";
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;
}
