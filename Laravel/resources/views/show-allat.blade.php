@extends("master")
@section("title") Állat mutatása @endsection
@section("content")
<div>
    <a href="{{route('allat.index')}}"> Vissza </a>
</div>
<h4> Állat Mutatása </h4>
<div>
    <label for="title"> Title </label>
    <input type="text" readonly name="title" id="title" value="@if(!empty($allat)) {{$allat->title}}
    @endif">
</div>
<div>
    <label for="description"> Description </label>
    <textarea readonly name="description" id="description">@if(!empty($allat)) {{$allat->description}} @endif</textarea>
</div>
@endsection