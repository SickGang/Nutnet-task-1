@extends('layouts.main-layout')

@section('title', $item->title)

@section('content')
    <form action="{{route('updateItem', $item->id)}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Название</label>
            <input type="text" name="title" class="form-control" value="{{$item->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Автор</label>
            <input type="text" name="author" class="form-control" value="{{$item->author}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Дата создания</label>
            <input type="text" name="date-of-creation" class="form-control" value="{{$item['date-of-creation']}}">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection