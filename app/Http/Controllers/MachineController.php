<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationM;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Machine.index',['posts'=>Machine::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Machine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationM $request)
    {
        $a= new Machine();
        $a->reference=$request->input('reference');
        $a->marque=$request->input('marque');
        $a->prix=$request->input('prix');
        $a->salleid=$request->input('salleid');
        $a->save();
        $request->session()->flash('status', 'Ajout avec Succès !!');
        return redirect(route('createM.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Machine.show',['post'=>Machine::find($id)]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('Machine.edit',['post'=>Machine::findOrFail($id)]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationM $request, $id)
    {
        $a= Machine::findOrFail($id);
        $a->reference=$request->input('reference');
        $a->marque=$request->input('marque');
        $a->prix=$request->input('prix');
        $a->salleid=$request->input('salleid');
        $a->save();
        $request->session()->flash('status', 'Mise à Jour Avec Succès!');
        return redirect(route('createM.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $a= Machine::findOrFail($id);   // pour eviter l erreur dans la bdd et afficher "------404 not found--------"
        $a->delete();
        $request->session()->flash('status', 'Suppression Avec Succès!');   
        return redirect(route('createM.index'));

        
    }
}
