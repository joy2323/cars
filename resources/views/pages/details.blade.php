@extends('layout.master')
@section('title', 'Details')
@section('content')

<div class="row">
    <div class="col-md-4 ml-4 mt-5">
        <a class="btn btn-primary" href="{{URL('pages/view')}}" role="button"> View All Cars</a>
    </div>
    <div class="col-md-4 ml-4 mt-5">
        <a class="btn btn-primary" href="{{URL('pages/create')}}" role="button"> Add Car</a>
    </div>
</div>
<div style="margin:0 auto;">

    <div class="panel panel-default">
        <div class="panel-heading ml-4 mt-5">
          <h2>  {{$car->name}}</h2>
        </div>
        <div class="panel-heading ml-4 mt-3 col-md-6">
            {{$car->description}}
        </div>
        <div class="panel-heading ml-4 mt-3">
          <strong> Posted by:  {{$car->user->name}} </strong>
           <br>
           Date:  {{$car->created_at}}
        </div>
    
    </div>
</div>

@endsection