<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use App\Models\Machine;
use Illuminate\Http\Request;
use App\Http\Requests\Validation;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('salle.index',['posts'=>Salle::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('salle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Validation $request)
    {
        $a= new Salle();
        $a->code=$request->input('code');
        $a->libelle=$request->input('libelle');
        $a->save();
        $request->session()->flash('status', 'Ajout avec Succès !!');
        return redirect(route('create.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $machines=Machine::where('salleid', $id)->get();
        return view('salle.show',['post'=>Salle::find($id),'machine'=>$machines]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('salle.edit',['post'=>Salle::findOrFail($id)]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Validation $request, $id)
    {
        $a= Salle::findOrFail($id);
        $a->code=$request->input('code');
        $a->libelle=$request->input('libelle');
        $a->save();
        $request->session()->flash('status', 'Mise à Jour Avec Succès!');
        return redirect(route('create.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $salle = Salle::findOrFail($id); // pour éviter l'erreur dans la base de données et afficher "------404 not found--------"
        // $salle->machines
$machines = Machine::where('salleid', $id)->get();
$tab=0; 
foreach ($machines as $machine) {
                        $tab+=1;
}
if ($tab==0) { 
$salle->delete(); 
$request->session()->flash('status', 'Suppression Avec Succès!');
}else{
    $request->session()->flash('nonsupp', 'Videz La Salle D\'abord!');
}

return redirect(route('create.index'));
}
}
