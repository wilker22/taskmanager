@extends('layouts.app')

@section('content')
        
        <h1 class="text-center mx-auto">ToDos Page</h1>
          <div class="row justify-content-center">
             <div class="col-md-8">
                    <div class="card">
                            <div class="card-header">
                                ToDos
                            </div>
                            <div class="card-body">
                                    <ul class="list-group">
                                            @foreach($todos as $todo)
                                                <li class="list-group-item">
                                                    {{$todo->name}}
                                                    <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">View</a>

                                                    @if(!$todo->completed)
                                                        <a href="/todos/{{$todo->id}}/complete" style="color:white;" class="btn btn-warning btn-sm floating-right">Complete</a>
                                                    @endif
                                               <!--     <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>-->
                                                </li>
                                                 
                                            @endforeach

                                            
                                    </ul>
                            </div>
                           
                        </div>
             </div>
          </div>
 
@endsection