@extends('layouts.app')

@section('content')
<h1 class="text-center">
    Create ToDo
</h1>
 <div class="row justify-content-center">
     <div class="col-md-8">
         <div class="card">
             <div class="card-header">Create ToDo</div>
             <div class="card-body">
                 
                <!--mostrando os erros-->
                 @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
            
                 @endif

                 <!--fim mostrando erros-->

                <form action="/store-todos" method="POST">
                    @csrf
                    <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>    
                    <div class="form-group">
                        <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control">

                        </textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">
                            Create ToDo
                        </button>
                    </div>
                        
                            
                        
                </form>
             </input>
         </div>
     </div>
 </div>

@endsection