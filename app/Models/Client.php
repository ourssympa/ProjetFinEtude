<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Client extends Model
{
    use HasFactory;
    protected $fillable=[
        "nom",
        "prenoms",
        "codeclient",
        "slug",
        'revmensuel',
        'patrimoine',
        'estimationpatrimoine',
        'numcarte',
        'assvie',
        'sexe',
        'nationalite',
        'datedenaissance',
        'profession',
        'typedepersonne',
        'telephone',
        'designation',
        'nrc',
        'bp',
        'solde'
    ];

    protected function Solde(): Attribute
    {
        $solde = CompteClient::where('idclient',$this->id)->first();
        return Attribute::make(
            get: fn ($value) => $solde->solde,
        );
    }
    protected function NumCompte(): Attribute
    {
        $solde = CompteClient::where('idclient',$this->id)->first();
        return Attribute::make(
            get: fn ($value) => $solde->numcompte,
        );
    }
}
