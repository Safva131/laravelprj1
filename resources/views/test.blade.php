

<table border="1">
   <tr>
    <th>Roll No</th>
   <th>Student Name</th>
   <th>Student Place</th>
</tr>
@foreach($students as $student) 
<tr>
    <td>{{$student["RollNo"]}}</td>
    <td>{{$student["StudentName"]}}</td>
    <td>{{$student["StudentPlace"]}}</td>
</tr>
@endforeach

@if(1< 2)
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed asperiores voluptatem reiciendis dolores quia, sint odio repellendus aliquam tempora, quas totam doloribus libero exercitationem similique maxime quo architecto praesentium qui!</p>
@endif

</table>