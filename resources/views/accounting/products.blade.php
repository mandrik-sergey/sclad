@extends('accounting.index')
@section('content')
{{--    @if(errors->any())--}}
{{--        <div class="aler alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach(@errors->all() as @errors )--}}
{{--                    <li> {{$error}} </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
    <form action="{{route('accounting.addProduct')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name"> Введите название продукта </label>
            <input name="name" type="text" placeholder="Введите название продукта" id="name"/>
        </div>
        <div class="form-group">
            <label for="group"> Выберите группу продукта </label>
            <input name="group" type="text" id="group"/>
        </div>
        <div class="form-group">
            <label for="price"> Введите цену продукта </label>
            <input name="price" type="text" placeholder="Введите цену продукта" id="price" />
        </div>
        <div class="form-group">
            <label for="add"> Добавить товар </label>
                <input type="submit" class="btn btn-success" id="add"/>
        </div>
    </form>

@endsection
