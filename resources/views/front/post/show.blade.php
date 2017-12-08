@extends('front.master')

@section('title','|| Show Post')




@section('body')
<hr><hr><hr>
<div class="row">

@if(Session::has('success'))
  
  <h2 class="alert alert-success">{{ Session::get('success') }}</h2>

@endif

<hr>
        
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <div>
              @foreach($post->tags as $tag)
              <span class="label label-default">{{ $tag->name }},</span>
              @endforeach
            </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ url($post->slug) }} ">{{url($post->slug)}}</a>
            </div>
            <div class="col-md-12">
              <dl class="dl-horizontal">
              <label>Category</label>
                <p> {{ $post->category->name }}</p>
              </dl>
              <dl class="dl-horizontal">
                 </label>Created</label>
                <p>{{ $post->created_at->diffForHumans() }}</p>
              </dl>
              <dl class="dl-horizontal">
                </label>Updated</label>
                <p>{{ $post->updated_at->diffForHumans() }}</p>
              </dl>

                
              
            
             
            </div>
            <div class="col-md-4">
              {{ Html::linkRoute('post.index','Back',[],['class'=>'btn btn-info btn-block'])}}
            </div>
             <div class="col-lg-4">
              {{ Html::linkRoute('post.edit','Edit',[$post->id],['class'=>'btn btn-primary btn-block']) }}  
               </div>
              <div class="col-lg-4">
                {!! Form::open(['route'=>['post.destroy',$post->id],'method'=>'DELETE']) !!}
                  {{ Form::submit('Delete',['class'=>'btn-danger btn-block btn'])}}                
                {!! Form::close() !!}
               </div>
          </div>
        </div>
 </div>
      <!-- /.row -->
<hr><hr><hr><hr>
@endsection