@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                <form method="post" action="{{ route('car.store') }}">

                    <input type="text" name="car_make" value=<?= $car['car_make']?>>Make<br/> 	
        			<input type="text" name="car_name" value=<?= $car['car_name']?>>Model<br/>
        			<input type="hidden" name='edit' value=<?=$update?>>
        			<input type="hidden" name='carid' value=<?=$car['id']?>>
        			
                          {{csrf_field()}}

                <button type="submit" class="btn btn-success"><?=($update===true)?'Update':'Add';?></button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
