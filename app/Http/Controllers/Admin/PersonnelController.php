<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Personnel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnel = Personnel::all();
        return View('AdminView.PersonnelView.index',["datas"=>$personnel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $characters = '0123456789';
        $matricule = '';

    for ($i = 0; $i < 8; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $matricule .= $characters[$index];
    }
        return View('AdminView/PersonnelView/Create',compact('matricule'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['slug']= Str::slug($request->nom.' '.$request->prenoms);
        Personnel::create($request->all());
        return redirect()->route('personnel.index');

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
        $personnel=Personnel::find($id);
        $matricule=$personnel->nummatricule;
        return View('AdminView/PersonnelView/update',compact('matricule','personnel'));
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
        $personnel= Personnel::find($id);
        $request['slug']= Str::slug($request->nom.' '.$request->prenoms);
        $personnel->fill($request->all())->save();
        return redirect()->route('personnel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("gracien finalise moi stp ");
    }
}
