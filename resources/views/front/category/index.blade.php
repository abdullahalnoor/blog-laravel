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
          <table class="table">
            <tr>
              <th>Sl</th>
              <th>Name</th>            
              <th>Action</th>            
            </tr>
            @foreach($categories as $category)
            
              <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>               
                <td>
                 {{ Html::linkRoute('category.show','View',[$category->id],['class'=>'btn btn-info '])}}
                </td>
              </tr>
            @endforeach
          </table>
        </div>
        <div class="col-md-4">
          <div class="well">
            <div class="form-group">
              {!! Form::open(['route'=>'category.store','method'=>'POST']) !!} 

                {{ Form::label('name','Name :') }}
                {{ Form::text('name',null,['class'=>'form-control'])}} 
                
                 {{ Form::submit('Add Category',['class'=>'btn btn-success'])}}

              {!! Form::close() !!}
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