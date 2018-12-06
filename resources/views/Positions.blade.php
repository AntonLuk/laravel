@extends('layouts.layout')

@section('title', 'Page Title')
@section('content')
<div class="container">
    <h2>Добавление</h2>
    <form action="/createPosition" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="form-group">
            <label for="formGroupExampleInput">Наименование</label>
            <input type="text" name="Name" class="form-control" id="formGroupExampleInput" placeholder=" Введите Наименование">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Зарплата</label>
            <input type="text" name="Salary" class="form-control" id="formGroupExampleInput2" placeholder="Введите зарплату">
        </div>
        <br>
        <input type="submit" value="Добавить">
    </form>
<br>
</div>
<div class="container">
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>#ID</th>
        <th>Наименвание</th>
        <th>Оклад</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($positions as $position)
    <tr>
        <th scope="row">{{$position->id}}</th>
        <td>{{$position->Name}}</td>
        <td>{{$position->Salary}}</td>
        <td><a href="/deletePositions/{{$position->id}}">Удалить</a></td>
        <td><a href="/viewPositions/{{$position->id}}">Редактировать</a></td>
    </tr>
        @endforeach
    </tbody>
</table>
</div>
<div class="container">
<form action="/deletePositions" method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<input type="submit" value="Удалить выбранные записи">
</form>
</div>
@endsection
