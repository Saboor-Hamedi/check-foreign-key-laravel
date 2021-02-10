
@extends('layouts.app')
@section('title', 'About')
@section('content')
        <h1>about</h1>
       <ul>
           @if (count($list) >0)
                @foreach ($list as $item)
                        <li>{{ $item }}</li>
                @endforeach
           @else
               <li>No item found.</li>
           @endif
       </ul>
    @endsection