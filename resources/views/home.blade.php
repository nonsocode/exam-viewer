@extends('master')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul class="list-group">
                    @foreach ($exams as $exam)
                        <a href="{{$exam->url}}">
                            <li class="list-group-item">
                                {{$exam->type}} {{$exam->name}} {{$exam->exam_year}}
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection