<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Client::all();
        return view('AdminView/transactionView/createtransaction',compact("datas"));

     }
    public function add($id)
    {
        $data = Client::find($id);
        return view('AdminView/transactionView/add',compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaction::create([
            'idclient'=>$request->id,
            'montant'=>$request->montant,
            'type'=>$request->type,
            'date'=>today()
        ]);
        if($request->type=="depot"){
            DB::table('compte_clients')->where('idclient',$request->id)->increment('solde',$request->montant);
        }
        else{
            DB::table('compte_clients')->where('idclient',$request->id)->decrement('solde',$request->montant);
        }

        return redirect()->route('transaction.clientetat',$request->id);
    }

    public function clientEtat($id){
        $Client = Client::where('id',$id)->first();
        $datas=Transaction::where('idclient',$id)->orderBy('id','DESC')->get();
        return view('AdminView/transactionView/clientTransaction',["datas"=>$datas,"slug"=>$Client->slug,"numCompte"=>$Client->numcompte,"solde"=>$Client->solde]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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