@extends('front.master')

@section('title',"| $post->title ")



@section('body')


    <div class="contaner">
      <hr>
    
      <div class="row">
           <div class="col-md-12">
             <h2>{{ $post->title }}</h2>
             <p>{{ $post->body }}</p>
             <p class="text-muted">{{ $post->category }}</p>
           </div>
     </div>
      
    </div>
      

@endsection