@extends('layouts.layout1')

@section('title', 'Запись должности')
@section('content')
    <?php
        if(isset($record)==false)
            {
                $id="";
                $name="";
                $salary="";
                $href='/createPositions';

            }
            else{
            $id=$record->id;
            $name=$record->Name;
            $salary=$record->Salary;
            $href='/editPositions';
            }

    ?>
    <form action="{{$href}}" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="form-group">
            <input type="hidden" name="id" value="{{$id}}">
            <label for="">{{$id}}</label>
            <br>

            <label for="formGroupExampleInput">Наименование</label>
            <input type="text" name="Name" class="form-control" id="formGroupExampleInput" value="{{$name}}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Зарплата</label>
            <input type="text" class="form-control" name="Salary" id="formGroupExampleInput2" value="{{$salary}}">
            <br>
            <input type="submit" value="Выполнить">
        </div>
    </form>

@endsection
