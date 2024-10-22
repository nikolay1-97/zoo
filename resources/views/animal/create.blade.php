@extends('layouts.main')
@section('content')
    <div>
    <form action="{{route('animal.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
    <label for="Клетка">Клетка</label>
    <select class="form-control" id="cell_id" name="cell_id">
    @foreach($cells as $cell)
    <option value="{{ $cell -> id }}">{{ $cell -> title }}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="Животное">Животное</label>
    <input type="text" name="name" class="form-control" id="Животное" placeholder="Животное">
  </div>
  <div class="form-group">
    <label for="Возраст животного">Возраст животного</label>
    <input type="text" name="age" class="form-control" id="Возраст животного" placeholder="Возраст животного">
  </div>
  <div class="form-group">
    <label for="Вид животного">Вид животного</label>
    <input type="text" name="type" class="form-control" id="Вид животного" placeholder="Вид животного">
  </div>
  <div class="form-group">
    <label for="Описание животного">Описание животного</label>
    <textarea name="description" class="form-control" id="Описание животного" placeholder="Описание животного"></textarea>
  </div>
  <div class="form-group">
  <input type="file" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Добавить животное</button>
</form>
    </div>
@endsection