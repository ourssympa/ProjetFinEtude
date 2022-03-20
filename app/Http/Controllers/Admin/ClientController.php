<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\CompteClient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\View\View as ViewView;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client= Client::all();

        return View('AdminView.AffichageClient',["datas"=>$client]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $characters = '0123456789';
        $randomString = 'TG-';

    for ($i = 0; $i < 8; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

        return View('AdminView/CreationCompte',['numcompte'=>$randomString]);
    }

    public function getInputs($request){

        $characters = '0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJLMWXCVBN';
        $idclient = 'PHY-';
        if($request->typedepersonne=="morale"){
            $idclient = 'MOR-';
        }

        for ($i = 0; $i < 4; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $idclient .= $characters[$index];
        }
        $inputs = $request->all();
        $inputs["slug"] = Str::slug($request->nom.' '.$request->prenoms);
        $inputs["codeclient"] = $idclient;
        return $inputs;

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $inputs = $this->getInputs($request);
        $date= today();
        // creation du client
        $client=Client::create($inputs);
        //creation du compte du client
        CompteClient::create([
                "idclient"=>$client->id,
                "numcompte"=>$inputs['numcompte'],
                "dateouverture"=>$date
            ]);
            return redirect()->route('client.index');
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
        $client= Client::find($id);
        return View('AdminView/UpdateClient',['data'=>$client]);
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
        $client = Client::find($id);
        $inputs = $request->all();
        $inputs["slug"] = Str::slug($request->nom.' '.$request->prenoms);
        $client->fill($inputs)->save();

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $compte = CompteClient::where('idclient',$id);
        $client->delete();
        $compte->delete();
        return redirect()->route('client.index');
    }
}
