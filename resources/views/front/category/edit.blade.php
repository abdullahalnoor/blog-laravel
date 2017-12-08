@extends('front.master')

@section('title','| update category')




@section('body')


    <div class="contaner" style="min-height: 600px;">
        <hr>    
          <div class="row"> 
           <div class="col-md-8 col-lg-offset-2">
              {!! Form::model($category,['route' => ['category.update',$category->id],'method'=>'PUT']) !!}
                <div class="form-group">
                  {{ Form::label('name','Category') }}
                  {{ Form::text('name',null,['class'=>'form-control']) }}
                </div>
                <div class="row">
                  <div class="col-sm-4 ">
                     {{ Html::linkRoute('category.show','Cancel',[$category->id],['class'=>'btn btn-primary btn-block']) }}
                  </div>
                  <div class=" col-sm-4 "></div>
                  <div class=" col-sm-4 ">
                    {{ Form::submit('Update',['class'=>'btn btn-block btn-success']) }}
                  </div>
                </div>
              {!! Form::close() !!}
          </div>
        </div>
    </div>
      

@endsection