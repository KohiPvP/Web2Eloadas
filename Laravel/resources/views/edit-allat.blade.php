@extends("master")
@section("title") Módosítás @endsection
@section("content")
<a href="{{route('allat.index')}}"> Vissza </a>
<form action="{{route('allat.update', $allat->id)}}" method="POST">
@csrf
@method('PUT')
@if(Session::has('success'))
{{Session::get('success')}}
@elseif(Session::has('failed'))
{{Session::get('failed')}}
@endif
<h4> Módosítás </h4>
<div>
<label for="title"> Title </label>
<input type="text" name="title" id="title" value="@if(!empty($allat)) {{$allat->title}}
@endif">
{!!$errors->first("title")!!}
</div>
<div>
<label for="description"> Description </label>
<textarea name="description" id="description">@if(!empty($allat)){{$allat->description}}@endif</textarea>
{!!$errors->first("description") !!}
</div>
<button type="submit"> Update </button>
</form>
@endsection