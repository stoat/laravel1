<!doctype html>
<html>
    <head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
   	
    <div class='container'>
    	<a href="/"><span class="glyphicon glyphicon-home"></span> Home</a>
        <form method="post" action="{{ route('car.store') }}">

            <input type="text" name="car_make" value=<?= $car['car_make']?>>Make<br/> 	
			<input type="text" name="car_name" value=<?= $car['car_name']?>>Model<br/>
			<input type="hidden" name='edit' value=<?=$update?>>
			<input type="hidden" name='carid' value=<?=$car['id']?>>
			
                  {{csrf_field()}}

        <button type="submit" class="btn btn-success"><?=($update===true)?'Update':'Add';?></button>
        </form>
    </div>
   </body>
</html>
