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
                    <!-- <table class="table table-bordered display" cellspacing="0" width="100%" id="UserTable">
                  
                    @foreach($users as $key => $data)
                        <tr>    
                        <th>{{$data->id}}</th>
                        <th>{{$data->name}}</th>
                        <th>{{$data->email}}</th>                
                        </tr>
                    @endforeach
                    </table> -->
                    XHTML
 <div class="">
		<table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Empid</th>
                <th>Name</th>
				<th>Salary</th>
               
            </tr>
        </thead>
 
        <tfoot>
            <tr>
               <th>Empid</th>
                <th>Name</th>
				<th>Salary</th>
                
            </tr>
        </tfoot>
    </table>
    </div>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
 <div class="">
		<table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Empid</th>
                <th>Name</th>
				<th>Salary</th>
               
            </tr>
        </thead>
 
        <tfoot>
            <tr>
               <th>Empid</th>
                <th>Name</th>
				<th>Salary</th>
                
            </tr>
        </tfoot>
    </table>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
