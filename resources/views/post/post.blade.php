@extends('layouts.app') 
@section('title', 'Posts')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
@if (count($post)>0)
    @foreach ($post as $item)
            <div class="highlight">
                <div class="language-plaintext">
                    <h1>{{ $item->title }}</h1>
                    <small>{{ date('Y-m-d', strtotime($item->content_time)) }}</small>
                    <p>{!! $item->content !!}</h1>
                    
                </div>
                <div class="fx-btn">
                <hr>
                <a href="/insert" type="button" class="btn btn-info link">Insert</a>
                <a href="/post/{{ $item->id }}/edit" type="button" class="btn btn-primary link">Edit</a> 
                    {!! Form::open(['action' => ['App\Http\Controllers\DataController@destroy', $item->id ], 'method' => 'POST', 'class'=> 'pull-right']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger link']) }}
                    {!! Form::close() !!}
            </div>
            </div>
    @endforeach
@else
<p>No data found.</p>
@endif
@endsection