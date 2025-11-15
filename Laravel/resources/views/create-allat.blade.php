@extends("master")
@section("title") Új Állat @endsection
@section("content")
<div>
    <a href="{{route('allat.index')}}"> Vissza </a>
</div>
<form action="{{route('allat.store')}}" method="POST">
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
        <label for="description"> Description </label>
        <textarea name="description" id="description">{{old('description')}}</textarea>
        {!!$errors->first("description") !!}
    </div>
    <button type="submit"> Save </button>
    </form>
    @endsection