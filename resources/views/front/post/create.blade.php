@extends('front.master')

@section('title','|| Post')


<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/select2.css') }}">


@section('body')
<div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Add Post
            <small>Laravel Blog </small>
          </h1>


           {!! Form::open(['route'=>'post.store','data-parsley-validate'=>''])  !!}
            <div class="form-group">
               {{ Form::label('title','Title : ')}}
               {{ Form::text('title',null,['class'=>'form-control','required'=>''])}}
            </div>
           <div class="form-group">
            {{ Form::label('slug','Slug :') }}
             {{ Form::text('slug',null,['class'=>'form-control','required'=>'']) }}
           </div>
           <div class="form-group">
             {{ Form::label('category_id','Category') }}
             <select name="category_id" class="form-control">
               @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
               @endforeach
             </select>
           </div>
           <div class="form-group">
             {{ Form::label('tag','Tags :') }}
             <select class="form-control select_two" name="tags[]" multiple="multiple">
             @foreach($tags as $tag)
              <option value="{{ $tag->id }}">{{ $tag->name}}</option>
             @endforeach
             </select>
           </div>
            <div class="form-group">
              {{ Form::label('body','Description :') }}
             {{ Form::textarea('body',null,['class'=>'form-control','required'=>'' ])}}
            </div>
            <div class="form-group">
             {{ Form::submit('Create Post',['class'=>'btn btn-primary btn-block'])}}
            </div>

            {!! Form::close() !!}

       
          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="{{ route('post.index') }}">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

      <script type="text/javascript" src="{{ asset('front/vendor/jquery/jquery.js') }}"></script>
      <script type="text/javascript" src="{{ asset('dist/js/select2.js') }}"></script>
      <script type="text/javascript">
          $('.select_two').select2();
         
      </script>
@endsection