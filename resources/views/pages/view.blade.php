@extends('layout.master')
@section('title', 'View Cars')
@section('content')

<div class="row">
    <div class="col-md-4 ml-4 mt-5">
        <a class="btn btn-primary" href="{{URL('pages/create')}}" role="button"> Add Car</a>
    </div>

</div>

		<h3 class="ml-4 mt-5"> All Cars</h3>		
			
			<table class="table table-bordered col-md-4">
    			<thead>
        			<tr>
            			<th width = "30px"><b>No.</b></th>
						<th width = "50px"> Name</th>  
						<th width = "50px">Date Posted</th>
        			</tr>
    			</thead>
    			<tbody>
        	@foreach($cars as $car)
			<!--  -->
       			 	<tr>
            			<td><b>{{$loop->index+1}}</b></td>
            			<td><a href="{{route('details',$car->id)}}">{{$car->name}}</a></td>
           	 			<td>{{$car->created_at}}</td>
						<td width = "20px">
                            <a class="btn btn-primary" type="button"  href = "{{route('edit', $car->id)}}" role = "button">Edit</a>
                        </td>
						<td width = "20px">
                        <a class="btn btn-danger" href="{{route('delete', $car->id)}}" role="button">  Delete</a>				
						</td>
        			</tr>
       		 @endforeach
    			</tbody>
			</table>
@endsection

            <!-- <button type="button" class="btn btn-primary" href = "{{route('delete', $car->id)}}" >Delete</a> -->
				