@extends('layouts.layout1')

@section('title', 'Запись должности')
@section('content')
    <?php
    if(isset($record)==false)
    {
        $id="";
        $name="";

        $href='/createConstructors';

    }
    else{
        $id=$record->id;
        $name=$record->Name;

        $href='/editConstructors';
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

            <input type="submit" value="Выполнить">

    </form>

@endsection
