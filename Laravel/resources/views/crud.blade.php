@extends("master")
@section("title") Állatok @endsection
@section("content")
<div>
    @if(Session::has('success'))
        {{Session::get('success')}}
    @endif
    @if(Session::has('failed'))
        {{Session::get('failed')}}
    @endif
    <a href="{{route('allat.create')}}"> Add New </a>
    <table>
        <thead>
            <th> Id </th>
            <th> Név </th>
            <th> Érték ID </th>
            <th> Év </th>
            <th> Kategória ID </th>
            <th> Action </th>
        </thead>
        <tbody>
            @if(count($allat) > 0)
                @foreach($allat as $al)
                <tr>
                    <td> {{$al->id}} </td>
                    <td> {{$al->nev}} </td>
                    <td> {{$al->ertekid}} </td>
                    <td> {{$al->ev}} </td>
                    <td> {{$al->katid}} </td>
                    <td>
                        <form action="{{route('allat.destroy', $allat->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('allat.show', $allat->id)}}"> View </a>
                        <a href="{{route('allat.edit', $allat->id)}}"> Edit </a>
                        <button type="submit"> Delete </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</div>
@endsection