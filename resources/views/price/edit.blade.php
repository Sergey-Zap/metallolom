@extends('home')

@section('contents')
    <div class="col-12 d-flex justify-content-between mt-5 mb-3 title-and-back-link-container">
        <div class="page-title lead">Добавить</div>
        <a href="{{url('/admin-metallolom/price')}}" class="lead d-sm-inline-block btn btn-sm btn-primary shadow-sm">Назад</a>
    </div>
    <form method="post" action="/admin-metallolom/update">
        @csrf
        <input type="hidden" name="id" value="{{ $price->id }}">
        <label class="mt-3 form-label lead">Название</label>
        <input type="text" name="name" placeholder="{{ $price->name }}" required class="mt-3 form-categories card border-left-primary shadow py-2 px-2">
        <label class="mt-4 form-label lead">Цена</label>
        <input type="number" name="cost" placeholder="{{ $price->cost }}" required step="0.01" min="0" max="1000000" class="mt-3 form-categories lead card border-left-primary shadow py-2 px-2">
        <input type="submit" value="Сохранить" class="pl-3 pr-3 pt-2 pb-2 mt-5 lead text-center form-send lead d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    </form>
@endsection
