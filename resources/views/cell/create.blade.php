@extends('layouts.main')
@section('content')
    <div>
    <form action="{{route('cell.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="Табличка клетки">Табличка клетки</label>
    <input type="text" name="title" class="form-control" id="Табличка клетки" placeholder="Табличка клетки">
  </div>
  <div class="form-group">
    <label for="Вместительность клетки">Вместительность клетки</label>
    <input type="text" name="capacity" class="form-control" id="Вместительность клетки" placeholder="Вместительность клетки">
  </div>
  <button type="submit" class="btn btn-primary">Создать</button>
</form>
    </div>
@endsection