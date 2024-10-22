@extends('layouts.main')
@section('content')
    <div>
    <form action="{{route('cell.update', $cell -> id)}}" method="post">
    @csrf
    @method('patch')
  <div class="form-group">
    <label for="Табличка клетки">Табличка клетки</label>
    <input type="text" name="title" class="form-control" id="Табличка клетки" placeholder="Табличка клетки" value="{{ $cell -> title }}">
  </div>
  <div class="form-group">
    <label for="Вместительность клетки">Вместительность клетки</label>
    <input type="text" name="capacity" class="form-control" id="Вместительность клетки" placeholder="Вместительность клетки" value="{{ $cell -> capacity }}">
  </div>
  <button type="submit" class="btn btn-primary">Обновить</button>
</form>
    </div>
@endsection