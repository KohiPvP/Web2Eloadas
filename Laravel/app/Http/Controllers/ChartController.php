<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function OpenChartPage(){
        $data=\App\Models\Allat::join('kategoria', 'kategoria.id', '=', 'allat.katid')
        ->selectRaw('kategoria.nev, count(*) as total')
        ->groupBy('kategoria.nev')
        ->orderBy('kategoria.nev')
        ->pluck('total','kategoria.nev');
        //$data=DB::table('allat');
        return view('chart', [
            'labels'=>$data->keys(),
            'data'=>$data->values()
        ]);
    }
}