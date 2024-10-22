@extends('layouts.main')
@section('content')
    <div>
        <div style="text-align: center">{{$cell -> id}}. Клетка: {{$cell -> title}}</div>
        @foreach($animals as $animal)
            <div><a href="{{ route('animal.show', $animal->id) }}">{{ $animal -> name }}. {{$animal -> type}}</a></div>
        @endforeach
        <div style="text-align: center"><a href="{{route('cell.edit', $cell->id)}}">Обновить клетку</a></div>
        <form style="text-align: center" action="{{route('cell.delete', $cell->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить клетку" class="btn btn-danger">
        </form>
        <form style="text-align: center" action="{{route('cell.index')}}" method="get">
            <input type="submit" value="назад" class="btn btn-primary">
        </form>
        
    </div>
@endsection