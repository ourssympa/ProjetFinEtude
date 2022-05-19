<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'idclient',
        'montant',
        'type',
        'date'
    ];
    protected function client(): Attribute
    {
        $solde = Client::where('id',$this->idclient)->first();
        return Attribute::make(
            get: fn ($value) => $solde->slug,
        );
    }

}
