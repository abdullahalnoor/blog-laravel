@extends('front.master')

@section('title',"| $post->title ")



@section('body')


    <div class="contaner">
      <hr>
    
      <div class="row">
        <div class="col-md-2"></div>
           <div class="col-md-8 col-md-2">
             <h2>{{ $post->title }}</h2>
             <p>{{ $post->body }}</p>
             <p class="text-muted">{{ $post->category->name }}</p>
           </div>
     </div>
     <div class="row">
        <div class="col-md-2"></div>
       <div class="col-md-8 col-md-offset-2">
         {!! Form::open(['route'=>['comment.store',$post->id],'method'=>'POST']) !!}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('name','Name :') }}
                {{ Form::text('name',null,['class'=>'form-control']) }}
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                {{ Form::label('email','Email :') }}
                {{ Form::text('email',null,['class'=>'form-control']) }}  
               </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12"> 
              <div class="form-group">
                {{ Form::label('comment','Comment :') }}
                {{ Form::textarea('comment',null,['class'=>'form-control','rows'=>'5']) }}
              </div>
            </div>
          </div>
          {{ Form::submit('Add Comment',['class'=>'btn btn-success']) }}
         {!! Form::close() !!}
       </div>
     </div>
      <hr>
    </div>
      

@endsection