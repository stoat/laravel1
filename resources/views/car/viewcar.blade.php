@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Breaking {{$car->car_make.' '.$car->car_name}}</div>
                <div class="card-body">
                    <div class='row'>
                      <div class='col-6'>
                         <h1>{{$car['car_make']}}</h1>
                         <h2>{{$car['car_name']}}</h2>
                        
                         <form method="post" action="{{ route('part.store') }}">
                          <p>
                             Part Name   <input type="text" name="part_name"  >
                          </p> 
                          {{csrf_field()}}
                          <input type="hidden" name="car_id" value={{$car->id}} >
                          <button type="submit" class="btn btn-success btn-block">Dismantle from vehicle</button>
                       
                          </form>
                     </div>
                      <div class='col-6'>
                        <h3>Removed parts</h3>
                        <ul>
                          @forelse ($car->parts as $part)
                              <li><span class="glyphicon glyphicon-pencil"></span><a href={{route('part.show', ['part' => $part->id])}}/>  {{ $part->part_name }} </a></li>
                          @empty
                              <p>No parts dismantled for this vehicle</p>
                          @endforelse
                        </ul>
                      </div>
                </div>
            </div>
            <div class="card-footer">
              <a href={{ route('car.index') }} class='btn btn-sm btn-success'>Back</a>
            </div>
        </div>
    </div>
</div>
@endsection