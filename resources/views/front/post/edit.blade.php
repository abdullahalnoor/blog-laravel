@extends('front.master')

@section('title','|| Edit Post')




@section('body')
<hr><hr><hr>

<hr>
       
          <div class="row">

          

            <div class="col-md-8">
               {!! Form::model($post,['route'=> ['post.update', $post->id], 'method'=>'PUT' ] ) !!}
              <div class="form-group">
                 {{ Form::label('title','Title :') }}
                 {{ Form::text('title',null,['class'=>'form-control'] ) }}
              </div>
              <div class="form-group">
                {{ Form::label('slug','Slug :') }}
                {{ Form::text('slug',null,['class'=>'form-control']) }}
              </div>
               <div class="form-group">
                 {{ Form::label('body','Description')}}
                {{ Form::textarea('body',null,['class'=>'form-control']) }}
              </div>

             

             

           </div>

            <div class="col-md-4">
              <div class="row">
                <div class="col-md-4 alert alert-success">Created at</div>
                <div class="col-md-8 alert alert-info">{{ $post->created_at->diffForHumans() }}</div>
              </div>
              <div class="row">
                <div class="col-md-4 alert alert-success">Updated at</div>
                <div class="col-md-8 alert alert-info">{{ $post->updated_at->diffForHumans() }}</div>
              </div>
              <div class="row">
                <div class="col-md-6">
              {{ Html::linkRoute('post.show','Cancel',[$post->id],['class'=>'btn btn-danger']) }}
                </div>
                <div class="col-md-6">
                  {{ Form::submit('Save Changes',['class'=>'btn btn-success']) }}
                </div>
              </div>


            
          </div>



          {!! Form::close() !!}
                
          </div>

        

      <!-- /.row -->
<hr><hr><hr><hr>
@endsection