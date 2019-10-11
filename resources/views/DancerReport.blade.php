<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size:9pt;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<b><h1>Reports and Data</h1></b>

<h5>Date and Time:{{$time}}</h5>
<br>
<br>

<h2><b>Dancer Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Team Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Choreography</th>
    <th>Gender</th>
    <th>Traditional</th>
    <th>Western</th>
    <th>Indian</th>
    <th>Kandyan</th>
    <th>Casual</th>
    <th>Other</th>
    <th>Wedding</th>
    <th>Party</th>
    <th>Musical Event</th>
    <th>Corporate_event</th>
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Team_Name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->choreography}}</td>
    <td>{{$data1->Gender}}</td>
    <td>{{$data1->Traditional}}</td>
    <td>{{$data1->Western}}</td>
    <td>{{$data1->Indian}}</td>
    <td>{{$data1->Kandyan}}</td>
    <td>{{$data1->Casual}}</td>
    <td>{{$data1->Other}}</td>
    <td>{{$data1->Wedding}}</td>
    <td>{{$data1->Party}}</td>
    <td>{{$data1->Musical_event}}</td>
    <td>{{$data1->Corporate_event}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>