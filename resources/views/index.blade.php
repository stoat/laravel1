@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@guest Scrap Yard is closed - please log in @else Scrap Yard is Open @endguest</div>

                <div class="card-body">
                	@guest
                	@else

				    <table class="table table-striped">
				    <thead>
				      <tr>
				        <th>ID</th>
				        <th>Make</th>
				        <th>Name</th>
				        
				        <th colspan="3">Action</th>
				      </tr>
				    </thead>
				    	<tbody>
						@foreach($cars as $car)
						      <tr>
						        <td>{{$car->id}}</td>
						        <td>{{$car->car_make}}</td>
						        <td>{{$car->car_name}}</td>
						        
						        <td><a href="<?= route('car.show', ['car' => $car['id']]);?>" class="btn btn-sm btn-success">View</a></td>
						        <td>
						        	<a href="<?= route('car.edit', ['id' => $car['id']]);?>" class="btn btn-sm btn-warning">Update</a>
						        </td>
						        <td>
						          <form action=<?= route('car.destroy', ['id' => $car['id']])?> method='post' >
						            @csrf
						            <input name="_method" type="hidden" value="DELETE">
						            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
						          </form>
						        </td>
						      </tr>
						@endforeach
				        </tbody>
				    </table>

			  		<p>
			  			<a href="/car/create" class="btn btn-primary">New Car</a>
			  	    </p>
			  	    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


  		


