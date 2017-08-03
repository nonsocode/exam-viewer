@extends('master')

@section('main')
	<div class="container">
		<div class="row">
			<h1 class="pull-left"><a href="/">Home</a></h1>
			<h1 class="text-center">Questions</h1>
		</div>
		@foreach ($questions as $question)
			<div class="row">
				<div class="col-xs-12">
					<h3>Question {{$loop->iteration}}</h3>
					<div class="passage">{!!$question->passage!!}</div>
					<div class="question-html">{!!$question->question!!}</div>
					<div class="question-image">{!!$question->ques_image!!}</div>
					<div class="options mt20">
						<div class="option {{ $question->correct_option == "A" ? "correct":""}} col-md-fifth">
							<div class="tag">A</div>
							<div class="option-content">
								{!!$question->option_1!!}
							</div>
						</div>
						<div class="option {{ $question->correct_option == "B" ? "correct":""}} col-md-fifth">
							<div class="tag">B</div>
							<div class="option-content">
								{!!$question->option_2!!}
							</div>
						</div>
						<div class="option {{ $question->correct_option == "C" ? "correct":""}} col-md-fifth">
							<div class="tag">C</div>
							<div class="option-content">
								{!!$question->option_3!!}
							</div>
						</div>
						<div class="option {{ $question->correct_option == "D" ? "correct":""}} col-md-fifth">
							<div class="tag">D</div>
							<div class="option-content">
								{!!$question->option_4!!}
							</div>
						</div>
						<div class="option {{ $question->correct_option == "E" ? "correct":""}} col-md-fifth">
							<div class="tag">E</div>
							<div class="option-content">
								{!!$question->option_5!!}
							</div>
						</div>
					</div>

				</div>
			</div>
		@endforeach
	</div>
@endsection