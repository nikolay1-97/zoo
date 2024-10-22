@extends('layouts.main')
@section('content')
    <div>
        <div class="post-image" style="text-align: center">
            <img src='{{asset("/images/".$animal->image)}}' alt="что-то пошло не так">
        </div>
        <div style="text-align: center">{{ $animal -> name }}</div>
        <div style="text-align: center">Вид: {{ $animal -> type }}</div>
        <div style="text-align: center">Возраст: {{ $animal -> age }}</div>

        <div style="text-align: center">{{ $animal -> description}}</div>
        <div style="text-align: center"><a href="{{route('animal.edit', $animal->id)}}">Обновить информацию о животном</a></div>
        <form style="text-align: center" action="{{route('animal.delete', $animal->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить" class="btn btn-danger">
        </form>
        <form style="text-align: center" action="{{ route('cell.show', $animal->cell_id)}}" method="get">
            <input type="submit" value="назад" class="btn btn-primary">
        </form>
    </div>
@endsection