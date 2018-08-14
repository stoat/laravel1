@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Part Detail</div>
                <div class="card-body">
                  <div class='row'>
                  <div class='col-md-6'>
                   <p>
                      <label class="control-label">Doner Car</label>
                       {{$part->car->car_name}}

                    </p>
                        </div>
                    <div class='col-md-6'>    
                  			
                      <form action="{{ route('part.update',$part->id) }}" method='post' >
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
                        <input name='part_name' value = '{{ $part->part_name}}' ><br>
                        <button class="btn btn-sm btn-warning btn-block" type="submit">Update this part</button>
                      </form>
                      <form action="{{route('part.destroy',  $part->id)}}" method='post' >
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-sm btn-danger btn-block" type="submit">Delete this part</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <a href={{url()->previous()}} class='btn btn-sm btn-success'>Back</a>
                </div>
        </div>
    </div>
</div>
@endsection
