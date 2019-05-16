@extends('layout.master')
@section('title', 'Edit')
@section('content')

<div class="row">
    <div class="col-md-4 ml-4 mt-5">
        <a class="btn btn-primary" href="{{URL('pages/view')}}" role="button"> View All Cars</a>
    </div>
</div>

<form method="Post">
    @csrf
  <div class="form-group ml-5 mt-5">
    <label for="exampleInputEmail1"> Name Of Car</label>
    <input  class="form-control ml-5" id="exampleInputEmail1"  name="name" value="{{$post->name}}" style="width: 450px;"/>
  </div>
  <div class="form-group ml-5">
    <label for="exampleFormControlTextarea1"> Description</label>
    <textarea class="form-control ml-5" name="description"  value="{{$post->description}}" id="exampleFormControlTextarea1" rows="4" style="width: 600px;"></textarea>
  </div>
  <button type="submit" class="btn btn-primary ml-5" value="update">Submit</button>
</form>



@endsection