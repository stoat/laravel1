<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
  	<div class='container'>
  	<div class='row'>


  		<a href="/"><span class="glyphicon glyphicon-home"></span> Home</a>


  </div>
  	  		<h1> Cars </h1>
  		
  		<p>
  			<a href="/car/create" class="btn btn-primary">New Car</a>
  	    </p>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Make</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($cars as $car)
      <tr>
        <td>{{$car['id']}}</td>
        <td>{{$car['car_name']}}</td>
        <td>{{$car['car_make']}}</td>
        <td><a href="<?= route('car.show', ['car' => $car['id']]);?>" class="btn btn-success">View</a></td>
        <td><a href="<?= route('car.edit', ['car' => $car['id']]);?>" class="btn btn-warning">Edit</a></td>
        <td>
          <form action=<?= route('car.destroy', ['id' => $car['id']])?> method='post' >
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
@endforeach
       </tbody>
   </table>
</div>
   </body>
</html>