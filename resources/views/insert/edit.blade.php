@extends('layouts.app')
@section('title', 'Insert post')
@section('content')
<h1>Update Post</h1>

{!! Form::open(['action' => ['App\Http\Controllers\DataController@update', $post->id], 'method' => 'POST']) !!}
    <div class="row">
        <div class="col">
           <div class="form-group">
            {{ Form::text('title', $post->title ,['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'What is the title ?']) }}
            @error('title')
                <p class="text-danger">{{ $message }}</p>
             @enderror
           </div>
        </div>
        {{-- <div class="col"> --}}
            <div class="form-group">
                {{ Form::hidden('author_id', $post->author_id , ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'What is the ID ?']) }}
            @error('author_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
        {{-- </div> --}}
    </div>
    <div class="row mt-10">
        <div class="col">
            <div class="form-group">
                {{Form::textarea('content',$post->content, ['id' => 'artical', 'class' => 'form-control', 'placeholder '=> 'Your content here....'])}}
                 @error('content')
                       <p class="text-danger">{{ $message }}</p>
                  @enderror
            </div>
        </div>
    </div>
  
    <div class="row ">
        <div class="col ">
            {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
        </div>
    </div>
{!! Form::close() !!}
@endsection