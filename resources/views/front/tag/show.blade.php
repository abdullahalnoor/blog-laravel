@extends('front.master')

@section('title','|| Show category')




@section('body')


    <div class="contaner">
      <hr>
      <div class="row">
       <div class="col-md-8">
        <h1>{{ $tag->name}} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
          <table class="table">
            <tr>
              <th>ID</th>
              <th>Name</th>            
              <th>Tags</th>            
              <th>Action</th>            
            </tr>
            @foreach($tag->posts as $post)
            <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->title }}</td>
          		<td>
                @foreach($post->tags as $tag)
                  <span class="label label-info">{{ $tag->name }}</span>
                @endforeach
              </td>
              <td>
                {{ Html::linkRoute('post.show','View',$post->id,['class'=>'btn btn-default']) }}
              </td>
            </tr>
            @endforeach         
          </table>
        </div>

        <div class="col-md-4">
          <div class="well">
           
          </div>
        </div>
      
    </div>
  </div>
      

@endsection