<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Allat extends Model
{
    protected $table ='webeloadas';
    protected $fillable = ["nev", "ertekid", "ev", "katid"];

    public function ertekek(){
        return $this->hasOne(Ertek::class);
    }
}