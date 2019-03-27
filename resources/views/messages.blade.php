@extends('layouts.app')

@section('content')

<h1>Messages</h1>

@if(count($messagez) >0)
@foreach ($messagez as $message)

<ul class="list-group">
  <li class="list-group-item">Name::{{$message->name}}</li>
  <li class="list-group-item">Email::{{$message->email}}</li>
  <li class="list-group-item">Messages::{{$message->message}}</li>

</ul>
    
@endforeach
@endif


    
@endsection