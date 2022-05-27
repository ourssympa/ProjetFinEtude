<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Credit;
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
        $data= Credit::where('idclient',$id)->where('status','traitement')->first();
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
