@extends("master")
@section("title") Állat mutatása @endsection
@section("content")
<div>
    <a href="{{route('crud.index')}}"> Vissza </a>
</div>
<h4> Állat Mutatása </h4>
<div>
    <label for="title"> Név </label>
    <input type="text" readonly name="nev" id="nev" value="@if(!empty($allat)) {{$allat->nev}}
    @endif">
</div>
<div>
    <label for="title"> Érték ID </label>
    <input type="text" readonly name="ertekid" id="ertekid" value="@if(!empty($allat)) {{$allat->ertekid}} 
    @endif">
</div>
<div>
    <label for="title"> Év </label>
    <input type="text" readonly name="ev" id="ev" value="@if(!empty($allat)) {{$allat->ev}}
    @endif">
</div>
<div>
    <label for="title"> Kategória ID </label>
    <input type="text" readonly name="katid" id="katid" value="@if(!empty($allat)) {{$allat->katid}}
    @endif">
</div>
@endsection