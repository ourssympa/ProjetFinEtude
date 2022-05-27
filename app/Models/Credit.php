<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'codecredit',
         'montant',
          'solde_credit',
           'idclient',
            'interet',
             'dateoctroi',
              'status',
               'echeance',
               'motifs',
    ];
}
