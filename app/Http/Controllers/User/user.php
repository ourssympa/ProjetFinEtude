<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CompteClient;
use App\Models\Credit;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    //correction ici
    public function index()
    {
        $name=Auth::user()->name;
        $id=Auth::user()->idclient;
        $user=Client::where('nom',$name)->first();

        $credit=Credit::where('idclient',$id)->where('status','accepté')->first();
    
        $montant=0;
        if($credit){
        $montant=$credit->solde;
       }

        $compte=CompteClient::where('idclient',$user->id)->first();
        $datas=Transaction::where('idclient',$user->id)->orderBy('id','DESC')->get();
        return view('UserView.indexUser',compact('compte','datas','user','montant'));
    }

}
