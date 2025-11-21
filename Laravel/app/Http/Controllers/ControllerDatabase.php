<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\allat;
use App\Models\ertek;
use App\Models\kategoria;

class ControllerDatabase extends Controller
{
public function read()
    {
        $data = DB::select('SELECT allat.id, allat.nev, ev, forint, kategoria.nev as kateg FROM `allat` inner join ertek on ertekid=ertek.id INNER JOIN kategoria WHERE katid=kategoria.id order by id;');
        print "<table><tr><th>Id</th><th>Név</th><th>Év</th><th>Érték</th><th>Kategória</th></tr>";
        foreach ($data as $line){
            print "<tr>";
            print "<td>".$line->id."</td>";
            print "<td>".$line->nev."</td>";
            print "<td>".$line->ev."</td>";
            print "<td>".$line->forint."</td>";
            print "<td>".$line->kateg."</td>";
            print "</tr>";
        }
        print "</table>";
    }

}