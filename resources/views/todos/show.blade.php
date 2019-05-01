@extends('layouts.app')
   
@section('content')
        <h1 class="text-center mx-auto">
         Single ToDo:   {{$todo->name}}
        </h1>

       <div class="row justify-content-center">
            <div class="col-md-6">
                    <div class="card">
                            <div class="card-header">
                                Details
                            </div>
                
                            <div class="card-body">
                                {{$todo->description}}
                            </div>
                            
                        </div>
                        <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-md my-2">Edit</a>
               </div>
       </div>
    </div>
@endsection