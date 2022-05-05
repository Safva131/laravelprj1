<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Address</th>
            <th></th>
        </tr>


        <!-- @foreach($students as $student) 
        <tr>
            <td>{{$student->Name}}</td>
            <td>{{$student->Contact}}</td>
            <td>{{$student->Address}}</td>
        </tr>
        @endforeach -->

        @forelse($students as $student) 
        <tr>
            <td>{{$student->Name}}</td>
            <td>{{$student->Contact}}</td>
            <td>{{$student->Address}}</td>
            <td><a href="{{url('DeleteStudent')}}/{{$student->id}}" onclick="return confirm('Are you sure you want to delete')">Delete</a></td>
            <td><a href="{{url('UpdateStudent')}}/{{$student->id}}">Update</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No student registered</td>
        </tr>
        @endforelse

        
    </table>
</body>
</html>