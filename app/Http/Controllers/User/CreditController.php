<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Credit;
use App\Models\Remboursemnt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Credit::where('status','traitement')->get();

        return view('AdminView/creditView/index',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $characters = '0123456789';
        $code = '#';

    for ($i = 0; $i < 5; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $code .= $characters[$index];
    }
        $id =Auth::user()->idclient;
        $client = Client::where('id',$id)->first();
        $data= Credit::where('status','traitement')->orWhere('status','accepté')->where('idclient',$id)->first();

        return view('UserView.CreditView.create',compact('client','code','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request["idclient"]=Auth::user()->idclient;
        $request["status"]="traitement";
        $request["solde_credit"]=0;

        Credit::create($request->all());
        return redirect()->back()->with('message', 'Votre demande est encours de traitement ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $credit = Credit::where('id',$id)->first();

         $client = Client::where('id',$credit->idclient)->first();
         return view('AdminView/creditView/show',compact('credit','client'));
        }

        public function choix($id,Request $request)
    {
        $request->validate(['motifs'=>'required']);

        $credit = Credit::where('id',$id)->first();
        $client = Client::where('id',$credit->idclient)->first();
       $credit['status']=$request->status;
       $credit['dateoctroi']=today();
       $credit['motifs']=$request->motifs;
       $interet=($credit->montant*20)/100;
       $solde= $interet+$credit->montant;

        if($request->status=="accepté"){
            $client['sp']=1;
            $client->save();
            $credit['solde_credit']=$solde;
            $credit['interet']=$interet;
            $credit['solde']=$credit->montant;
            $credit['echeance']=today()->addMonth(12);
        }
        $credit->save();
        return redirect()->route('credit.index');

         //$client = Client::where('id',$credit->idclient)->first();
         //return view('AdminView/creditView/show',compact('credit','client'));
        }

function etat(){
    $id =Auth::user()->idclient;
    $data=Credit::Where('status','accepté')->where('idclient',$id)->first();
    if($data){
        $datas=Remboursemnt::where('idcredit',$data->id)->get();
    }else{
        $datas=0;
    }

    return view('UserView.CreditView.etat',compact('data','datas'));

}

public function historique()
{
    $id=Auth::user()->idclient;
    $datas=Credit::where('idclient',$id)->orderBy('id','DESC')->get();
    return view('UserView.CreditView.historique',compact('datas'));
}

public function voir($id){

    $data=Credit::Where('id',$id)->first();

    $datas=Remboursemnt::where('idcredit',$data->id)->orderBy('id','DESC')->get();

    return view('UserView.CreditView.voir',compact('data','datas'));

}
public function liste()
{
    $datas = Credit::where('status','accepté')->orWhere('status','soldé')->get();
    return view('AdminView/creditView/liste',compact('datas'));
}
public function detail($id)
{
    $data=Credit::Where('id',$id)->first();

    $datas=Remboursemnt::where('idcredit',$data->id)->orderBy('id','DESC')->get();
    return view('AdminView/creditView/detail',compact('datas','data'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
