@extends('Layouts.App')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
                <ul>
                 <li class="btn btn-outline-success"><a href="/posts/create">Add Memory</a></li>
                 </ul>
            </div>
                
            <table class="table table-stripped">
                <tr>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>
            
                <tr>
                    <th></th>
                  
                    <th></th>

                </tr>
               
            </table>
        
        </div>
    </div>
</div>

@endsection
