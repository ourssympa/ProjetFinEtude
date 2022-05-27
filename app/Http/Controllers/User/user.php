<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CompteClient;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    //correction ici
    public function index()
    {
        $id=Auth::user()->name;
        $user=Client::where('nom',$id)->first();
        $compte=CompteClient::where('idclient',$user->id)->first();
        $datas=Transaction::where('idclient',$user->id)->orderBy('id','DESC')->get();
        return view('UserView.indexUser',compact('compte','datas','user'));
    }

}
