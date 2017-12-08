@extends('front.master')

@section('title','|| Show category')




@section('body')


    <div class="contaner" style="min-height: 600px;">
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
            </tr>            
              <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>                        
                                      
              </tr>   
          </table>
        </div>
        <div class="col-md-4">
          <div class="well">
           <div class="col-md-12">
              <dl>
              <dt>Cteated</dt>
              <dd>{{ $category->created_at }} </dd>                       
              <dt>Updated</dt>
              <dd> {{ $category->updated_at }} </dd>
            </dl>
           </div>
           <div class="col-md-12">
             <div class="row">
               <div class="col-lg-4">
                 {{ Html::linkRoute('category.index','Back',[],['class'=>'btn btn-info btn-block'])}}
               </div>
               <div class="col-lg-4">
                 {{ Html::linkRoute('category.edit','Edit',[$category->id],['class'=>'btn btn-primary btn-block']) }}
               </div>
               <div class="col-lg-4">
                 {!! Form::open(['route'=>['category.destroy',$category->id],'method'=>'DELETE'] ) !!}
                 {{ Form::submit('Delete',['class'=>'btn btn-block btn-danger']) }}
                 {!! Form::close() !!}
               </div>
             </div>
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