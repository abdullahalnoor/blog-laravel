@extends('front.master')

@section('title','|| Show Post')




@section('body')


    <div class="contaner">
      <hr>
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <h2><a href="{{ route('post.create') }}" class="btn  btn-primary btn-block">Create Post</a></h2>
        </div>
      </div>
      <div class="row">
           <div class="col-md-12">
              @if(Session::has('success'))
              <h1 class="alert alert-success">
                {{ Session::get('success')}}
              </h1>
              @endif
           </div>
     </div>
      <div class="row"> 
       <div class="col-md-12">
          <table class="table">
            <tr>
              <th>Sl</th>
              <th>Title</th>
              <th>Slug</th>
              <th>body</th>
              <th>Action</th>
            </tr>
            @foreach($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ substr($post->body,0,20) }} {{ strlen($post->body) >20 ?".." : "" }}</td>
                <td>
                  {{ Html::linkRoute('post.show','View',[$post->id],['class'=>'btn btn-info btn-block']) }}
                  {{ Html::linkRoute('post.edit','Edit',[$post->id],['class'=>'btn btn-primary btn-block' ] )}}
                </td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
       <div class="row">
          <div class="col-md-12 ">
                <p class="text-center">
                  {!! $posts->links() !!}
                </p>
          </div>
      </div>
    </div>
      

@endsection