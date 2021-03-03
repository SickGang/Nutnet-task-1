@extends('layouts.main-layout')

@section('title', $items->isEmpty() ? 'Список пластинок пуст!' : 'Список пластинок')

@section('content')
    <div class="table-wrapper mt-5">
        @if(!$items->isEmpty())
            <table class="table table-striped table-dark table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Автор</th>
                    <th scope="col">Дата создания</th>
                    <th class="buttons"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->title}}</td>
                        <td>{{$item->author}}</td>
                        <td>{{$item['date-of-creation']}}</td>
                        <td>
                            <div>
                                <a href="{{route('getItem', $item->id)}}" class="badge badge-success">Редактировать</a>
                                <a href="{{route('destroy', $item->id)}}" class="badge badge-warning">Удалить</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    {{$items->links('vendor.pagination.bootstrap-4')}}
@endsection
