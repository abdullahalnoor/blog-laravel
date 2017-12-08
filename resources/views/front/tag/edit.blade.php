@extends('front.master')

@section('title','|| Show category')




@section('body')


    <div class="contaner">
      <hr>
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
        </div>
      </div>
      <div class="row">
           <div class="col-md-12">
            @if(Session::has('success'))
            <div class="alert alert-success">
              <p class="text-center">{{ Session::get('success') }}</p>
            </div>
            @endif
           </div>
     </div>
      <div class="row"> 
       <div class="col-md-8">
          {!! Form::model($tag,['route'=>['tag.update',$tag->id],'method'=>'PUT']) !!}
          {{ Form::label('name','Tag :') }}
          {{ Form::text('name',null,['class'=>'form-control']) }}
          {{ Form::submit('Update',['class'=>'btn btn-success']) }}
          {!! Form::close() !!}
        </div>
        <div class="col-md-4">
          <div class="well">
            <div class="form-group">
            
            </div>
          </div>
        </div>
      </div>
       <div class="row">
          <div class="col-md-12 ">
                <p class="text-center">
                 
                </p>
          </div>
      </div>
    </div>
      

@endsection