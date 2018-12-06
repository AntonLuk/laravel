@extends('layouts.layout1')
@section('content')




        <h2>{{$title}}</h2>
        {{--<form action="viewRecord/{{$nameModel}}" method="post">--}}
            {{--<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">--}}
            {{--<input type="submit" value="Добавить запись">--}}
            {{----}}
        {{--</form>--}}
        <a href="viewRecord/{{$nameModel}}">Добавить запись {{$title}}</a>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    @foreach($model->toArray() as $key => $value)
                        <th>{{$key}}</th>

                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($records->toArray() as $key => $value)
                    <tr>
                        @foreach($records[$key]->toArray() as $rec=>$value)
                            <td>{{$value}}</td>
                        @endforeach

                            <td><a href="/deleteRecord/{{$nameModel}}/{{$id[$key]}}">Удалить</a></td>
                            <td><a href="/viewRecord/{{$nameModel}}/{{$id[$key]}}">Редактировать</a></td>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
    @endsection
