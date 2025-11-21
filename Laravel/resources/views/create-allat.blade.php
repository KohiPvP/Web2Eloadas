@extends("master")
@section("title") Új Állat @endsection
@section("content")
<div>
    <a href="{{route('crud.index')}}"> Vissza </a>
</div>
<form action="{{route('crud.store')}}" method="POST">
    @csrf
    @if(Session::has('success'))
    {{Session::get('success')}}
    @elseif(Session::has('failed'))
    {{Session::get('failed')}}
    @endif
    <h4> Új Állat </h4>
    <div>
        <label for="title"> Title </label>
        <input type="text" name="title" id="title" value="{{old('title')}}">
    </div>
    <div>
        <label for="description"> Kategória ID</label>
        <input type="number" name="ertekid" id="ertekid" value="{{old('ertekid')}}">
    </div>
    <div>
        <label for="title"> Év </label>
        <input type="number" name="ev" id="ev" value="{{old('ev')}}">
    </div>
    <div>
        <label for="title"> Title </label>
        <input type="number" name="katid" id="katid" value="{{old('katid')}}">
    </div>
    <button type="submit"> Save </button>
    </form>
    @endsection