<!doctype html>
<html>
    <head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        ul{
         list-style-type:none;
        }
    </style>
    </head>
    <body>
    <div class='container'>
      <a href="/"><span class="glyphicon glyphicon-home"></span> Home</a>
      <div class='row'>
      <div class='col-6'>
       <h1>{{$car['car_make']}}</h1>
       <h2>{{$car['car_name']}}</h2>
       <h3><a href='/part/create' class='btn btn-primary'>Create New Part</a></h3>
     </div>
  <div class='col-6'>
    <?php
    if ($car->parts){
      echo '<h3>Parts</h3>';
      echo '<ul>';
      foreach ($car->parts as $part) 
        {
    //Iterate through parts associated with this car
        echo '<li><span class="glyphicon glyphicon-pencil"></span><a href='.route('part.edit', ['part' => $part['id']]).'/> '.$part['part_name'].'</a></li>';
        }
      echo '</ul>';
    }

    ?>        	
  </div>
</div>
  </div>
   </body>
</html>
