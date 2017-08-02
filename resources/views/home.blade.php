@extends('master')

@section('main')
    @foreach ($exams as $exam)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="list-group">
                        <li class="list-group-item">{{$exam->type}} {{$exam->name}} {{$exam->exam_year}}</li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
@endsection