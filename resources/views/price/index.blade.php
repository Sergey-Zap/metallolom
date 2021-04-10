@extends('home')
{{--@extends('home.blade.php')--}}

@section('contents')
    <div class="col-12 d-flex justify-content-between mt-5 mb-5 title-and-add-link-container">
        <div class="page-title lead">Прайс</div>
        <a href="{{url('/admin-metallolom/create')}}" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">Добавить позицию</a>
    </div>
    <div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Цена</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($prices as $key => $prise)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$prise->name}}</td>
            <td>{{$prise->cost}}</td>
            <td class=""><div><a href="{{ url('/admin-metallolom/edit/' . $prise->id) }}" class="btn btn-primary btn-sm  action-button">Редактировать</a></div></td>
            <td class=""><div><a href="{{ url('/admin-metallolom/destroy/' . $prise->id) }}" class="btn btn-danger btn-sm  action-button">Удалить</a></div></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
<style>
    @media (max-width: 767px) {
    .container {
        /*width: 300px;*/
    }
        table.table {
            display: block;
            overflow: auto;
            max-width: 100%;
        }
        .title-and-add-link-container {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
