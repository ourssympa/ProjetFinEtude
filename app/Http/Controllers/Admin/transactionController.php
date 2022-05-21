<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CompteClient;
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
    public function liste()
    {
        $datas = Transaction::orderBy('id','DESC')->get();
        return view('AdminView/transactionView/transactionListe',compact("datas"));
    }

    public function historique($id)
    {
        $datas = Transaction::where('idclient',$id)->orderBy('id','DESC')->get();
        return view('AdminView/transactionView/transactionListe',compact("datas"));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=CompteClient::where('idclient',$request->id)->first();

        if($request->type=="depot"){
            DB::table('compte_clients')->where('idclient',$request->id)->increment('solde',$request->montant);

            Transaction::create([
                'idclient'=>$request->id,
                'montant'=>$request->montant,
                'type'=>$request->type,
                'date'=>today()
            ]);
        }
        else{
            if($user->solde < $request->montant)
            {
                return redirect()->back()->with('error', 'vous ne pouvez pas retirer cette somme elle est superieure au  solde');
            }
            else{
                Transaction::create([
                    'idclient'=>$request->id,
                    'montant'=>$request->montant,
                    'type'=>$request->type,
                    'date'=>today()
                ]);
                DB::table('compte_clients')->where('idclient',$request->id)->decrement('solde',$request->montant);

            }
         }

        return redirect()->route('transaction.clientetat',$request->id)->with('message', 'operation reussit');
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
