@extends('layouts.master')

@section('content')

		<form action="/fetch" method="POST" role="fetch">
    	{{ csrf_field() }}
		    <div class="input-group">
		        <input type="text" class="form-control" name="q"
		            placeholder="Search users"> <!--<span class="input-group-btn">
		            <button type="submit" class="btn btn-default">
		                <span class="glyphicon glyphicon-search"></span>
		            </button>
		        </span>-->
		        <input type="text" class="form-control" name="x"
		            placeholder="Search ID"> <!--<span class="input-group-btn">
		            <button type="submit" class="btn btn-default">
		                <span class="glyphicon glyphicon-search"></span>
		            </button>
		        </span>-->
		    </div>
		    <button type="submit" class="btn btn-primary">Submit</button>
		</form>

@endsection