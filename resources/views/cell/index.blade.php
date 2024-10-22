@extends('layouts.main')
@section('content')
    <div style="text-align: center"><p>Количество проживающих животных в зоопарке на данный момент: {{ $cnt_animals }}.</p></div>
    <div>
        @foreach($cells as $cell)
            <div><a href="{{ route('cell.show', $cell->id) }}">{{$cell -> id}}. {{$cell -> title}}</a></div>
        @endforeach
    </div>
@endsection
