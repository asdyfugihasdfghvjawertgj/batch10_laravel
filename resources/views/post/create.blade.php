@extends('template')
@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1 class="mt-4">Post Create Form</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
         <label>title</label>
         <input type="text" name="title" class="form-control">
       </div>
       <div class="form-group">
         <label>content</label>
         <textarea name="content" class="form-control"></textarea>
       </div>
       <div class="form-group">
         <label>photo</label><span class="text-danger">[supported file types:jpeg,jpg,png]</span>
         <input type="file" name="photo" class="form-control-file">
       </div>
       <div class="form-group">
        <label>Categories</label>
        <select name="category" class="form-control">
          <option value="">Choose Category</option>
          @foreach($categories as $row)
          <option value="{{$row->id}}">{{$row->name}}</option>
          @endforeach
        </select>
         <input type="submit" name="btnsubmit" class="btn btn-primary" value="save">
       </div>
       </form>
      </div>
    </div>
  </div>
@endsection