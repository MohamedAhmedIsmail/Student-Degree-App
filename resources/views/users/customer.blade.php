
<!DOCTYPE html>
<head>
	<title>Download</title>
	<style type="text/css">
		table
		{
			width:70%;
			margin:0 auto;
			border:1px solid;
		}
	</style>
</head>
<body>
	<table>
	<caption><h1>Student Info</h1></caption>
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
            </tr>
		</thead>
		<tbody>
			@foreach($students as $student)
			<tr>
				<td>{{$student->studID}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->araby}}</td>
                <td>{{$student->english}}</td>
                <td>{{$student->math}}</td>
                <td>{{$student->science}}</td>
                <td>{{$student->totaldegree}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
	
	