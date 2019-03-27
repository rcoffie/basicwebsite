@extends('layouts.app')

@section('content')

<h1>Contact</h1>

{!! Form::open(['url' => 'contact/submit']) !!}

<div class="form-group">

  {{Form::label('Name', 'Name')}}
  
  {{Form::text('name','',['class'=>'form-control','placeholder'=>'name'])}}
  

</div>

<div class="form-group">

    {{Form::label('Name', 'Email')}}
    
    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
    
  
  </div>

  <div class="form-group">

      {{Form::label('Message', 'Message')}}
      
      {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Message'])}}
      
    
    </div>
    
  
 {{Form::submit('Click Me!',['class'=>'btn btn-primary'])}}

  <div>
{!! Form::close() !!}
</div>
    
@endsection