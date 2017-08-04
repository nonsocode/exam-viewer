@extends('master')

@section('main')
	<div class="container">
		<div class="row">
			<h1 class="pull-left"><a href="/">Home</a></h1>
			<h1 class="text-center">Questions</h1>
		</div>
		<div class="row">
			<div class="text-center">
				<div class="title-item">{{$type}}</div>
				<div class="title-item">{{$subject}}</div>
				<div class="title-item">{{$year}}</div>
			</div>
		</div>
		@foreach ($questions as $question)
			<div class="row">
				<div class="col-xs-12">
					<h3>Question {{$loop->iteration}}</h3>
					@if ($question->passage)
						<div class="passage">{!!$question->passage!!}</div>
					@endif
					<div class="question-html">{!!$question->question!!}</div>
					<div class="question-image">{!!$question->ques_image!!}</div>
					<div class="options mt20">
						<div class="option {{ $question->correct_option == "A" ? "correct":""}} col-md-fifth">
							<div class="tag">A</div>
							<div class="option-content">
								<p>{!!$question->option_1!!}</p>
							</div>
						</div>
						<div class="option {{ $question->correct_option == "B" ? "correct":""}} col-md-fifth">
							<div class="tag">B</div>
							<div class="option-content">
								<p>{!!$question->option_2!!}</p>
							</div>
						</div>
						<div class="option {{ $question->correct_option == "C" ? "correct":""}} col-md-fifth">
							<div class="tag">C</div>
							<div class="option-content">
								<p>{!!$question->option_3!!}</p>
							</div>
						</div>
						<div class="option {{ $question->correct_option == "D" ? "correct":""}} col-md-fifth">
							<div class="tag">D</div>
							<div class="option-content">
								<p>{!!$question->option_4!!}</p>
							</div>
						</div>
						<div class="option {{ $question->correct_option == "E" ? "correct":""}} col-md-fifth">
							<div class="tag">E</div>
							<div class="option-content">
								<p>{!!$question->option_5!!}</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		@endforeach
	</div>
@endsection