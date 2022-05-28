<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\CompteClient;
use App\Models\Credit;
use App\Models\Remboursemnt;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class remboursementController extends Controller
{
    public function index()
    {
        $datas = Credit::where('status', 'accepté')->get();
        return view('AdminView.remboursementView.index', compact('datas'));
    }

    public function add($id)
    {
        $data = Credit::where('id', $id)->first();
        return view('AdminView.remboursementView.add', compact('data'));
    }
    public function store(Request $request)
    {
        $credit = Credit::where('id', $request->id)->first();

        if ($request->type == 'depot') {
            if($request->montant < $credit->solde_credit){
                Remboursemnt::create([
                    'montant' => $request->montant,
                    'type' => 'remboursement',
                    'idcredit' => $request->id,
                    'date' => today()
                ]);
                $credit['solde_credit']=$credit->solde_credit - $request->montant;
                $credit->save();
                return redirect()->route('remboursement.index')->with('success',"Remboursement effectuer");

            }
            else{
                $add= $request->montant - $credit->solde_credit;
                Remboursemnt::create([
                    'montant' => $request->montant-$add,
                    'type' => 'remboursement',
                    'idcredit' => $request->id,
                    'date' => today()
                ]);

                if($credit->solde_credit == $request->montant){
                    $credit['solde_credit']=0;
                    $credit['status']='soldé';
                    $credit->save();
                    $client = Client::where('id',$credit->idclient)->first();
                    $client['sp']=0;
                    $client->save();
                    return redirect()->route('remboursement.index')->with('success',"Bravo vous avez solder");


                }
                else{
                   // $add= $request->montant - $credit->solde_credit;
                    $credit['solde_credit']=0;
                    $credit['status']='soldé';
                    $credit->save();
                    $client = Client::where('id',$credit->idclient)->first();
                    $client['sp']=0;
                    $client->save();
                    DB::table('compte_clients')->where('idclient',$credit->idclient)->increment('solde',$add);
                    Transaction::create([
                        'idclient'=>$credit->idclient,
                        'montant'=>$add,
                        'type'=>'depot',
                        'date'=>today()
                    ]);
                    return redirect()->route('remboursement.index')->with('success',"Bravo vous avez solder");

                }

            }

        }
         else {

            if ($request->montant <= $credit->solde) {
                Remboursemnt::create([
                    'montant' => $request->montant,
                    'type' => 'retrait',
                    'idcredit' => $request->id,
                    'date' => today()
                ]);
                $credit['solde']=$credit->solde - $request->montant;
                $credit->save();
                return redirect()->route('remboursement.index')->with('success',"retrait effectuer");
            }
            else {
                return redirect()->back()->with('error',"montant superieur au solde de compte de credit");
            }
        }
    }
}
