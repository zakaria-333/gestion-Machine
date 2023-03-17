<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function statistique(){
        $x=array();
        $y=array();
        $results = DB::select('SELECT s.libelle, COUNT(m.id) AS num_machines
        FROM machines m
        JOIN salles s ON m.salleid = s.id
        GROUP BY s.id, s.libelle;');
        foreach($results as $res){
            array_push($x, $res->libelle);
            array_push($y, $res->num_machines);
        }
        return view('chart')->with('x',$x)->with('y',$y);
    }
}
