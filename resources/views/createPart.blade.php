<!doctype html>
<html>
   <head>
      <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   </head>
   <body>
    <div class='container'>
    <a href="/"><span class="glyphicon glyphicon-home"></span> Home</a>
    <div class='row'>
 <form method="post" action="{{ route('part.store') }}">

      <input type="text" name="part_name" value=<?= $part['part_name']?> >Part Name<br/> 	
        <p>
             <label>Doner Car</label>
             <select id = "carList" name="car_id">
              <?php foreach($cars as $car)
                    {
                      echo '<option value='.$car['id'].'>'.$car['car_name'].'</option>';
                    };
              ?>
              </select>
          </p>
			
                  {{csrf_field()}}

    <button type="submit" class="btn btn-success">Add</button>
    </form>
  </div>
  </div>
   </body>
</html>
