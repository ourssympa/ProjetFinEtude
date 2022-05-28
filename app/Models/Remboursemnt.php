<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remboursemnt extends Model
{
    use HasFactory;
    protected $fillable=['montant','type','idcredit','date',];
}
