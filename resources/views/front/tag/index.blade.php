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
            @foreach($tags as $tag)
            <tr>
              <td>{{ $tag->id }}</td>
              <td>{{ $tag->name }}</td>
              <td>
                {{ Html::linkRoute('tag.show','View',[$tag->id],['class'=>'btn btn-info']) }}
                 {{ Html::linkRoute('tag.edit','Edit',[$tag->id],['class'=>'btn btn-primary']) }}
                 {!! Form::open(['route'=>['tag.destroy',$tag->id],'method'=>'DELETE'])!!}
                {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
                
                {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
          </table>
        </div>
        <div class="col-md-4">
          <div class="well">
            <div class="form-group">
             {!! Form::open(['route'=>'tag.store','method'=>'POST']) !!}
             {{ Form::label('name','Tag :')}}
             {{ Form::text('name',null,['class'=>'form-control']) }}
             {{ Form::submit('Create Tag',['class'=>'btn btn-block btn-success']) }}
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