@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                   <form method="post" action="{{ route('part.store') }}">

                        
                          <p>
                               <label>Doner Car</label>

                               <select id = "carList" name="car_id">
                                @foreach ($cars as $car)
                                    <option value={{$car->id}}>{{$car->car_name}}</option>
    
                                @endforeach
                                </select>
                            </p>
                  			Part Name   <input type="text" name="part_name" value={{ $part->part_name}} > 
                                    {{csrf_field()}}

                      <button type="submit" class="btn btn-success">Add</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
