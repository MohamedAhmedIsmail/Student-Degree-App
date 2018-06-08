@extends('layouts.master')

@section('content')
	
	<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <form action="/getPDF" method="get" role="/getPDF">
    
    <table class="table table-striped">
        <thead>
            <tr>
            	<th>studID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Araby</th>
                <th>English</th>
                <th>Math</th>
                <th>Science</th>
                <th>TotalDegree</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->studID}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->araby}}</td>
                <td>{{$user->english}}</td>
                <td>{{$user->math}}</td>
                <td>{{$user->science}}</td>
                <td>{{$user->totaldegree}}</td>
                 <td><button class="btn btn-primary">Download PDF</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <input type="text" name="x" value="{{$user->studID}}" style="visibility: hidden;">
    @endif
    </form>
</div>
	
@endsection