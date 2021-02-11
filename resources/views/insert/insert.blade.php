@extends('layouts.app')
@section('title', 'Insert post')
@section('content')
<h1>Make Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\DataController@store', 'method' => 'POST']) !!}
    <div class="row">
        <div class="col">
           <div class="form-group">
            {{ Form::text('title', '' ,['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'What is the title ?']) }}
            @error('title')
                <p class="text-danger">{{ $message }}</p>
             @enderror
           </div>
        </div>
        <div class="col">
            <div class="form-group">
                {{ Form::text('author_id', '' , ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'What is the ID ?']) }}
            @error('author_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
        </div>
    </div>
    <div class="row mt-10">
        <div class="col">
            <div class="form-group">
                {{Form::textarea('content','', ['id' => 'artical', 'class' => 'form-control', 'placeholder '=> 'Your content here....'])}}
                 @error('content')
                <p class="text-danger">{{ $message }}</p>
                  @enderror
            </div>
        </div>
    </div>
  
    <div class="row ">
        <div class="col ">
        {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
        </div>
    </div>
{!! Form::close() !!}
@endsection