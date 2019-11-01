@extends('layouts.app')

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

                    You are logged in!

                    <table id="example1" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
            
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </tfoot>
                    <tbody>
<!--                   
                    @foreach($name as $key => $data)
                        <tr>    
                        <th>{{$data->id}}</th>
                        <th>{{$data->name}}</th>
                        <th>{{$data->email}}</th>                
                        </tr>
                    @endforeach -->
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
