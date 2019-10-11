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

<h2><b>Actors & Presenters Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Actor Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Singer</th>
    <th>Magician</th>
    <th>Comedian</th>
    <th>Actor</th>
    <th>Announcer</th>
    <th>Entertainer</th>
    <th>Other</th>
    <th>Birthday</th>
    <th>Party</th>
    <th>Professional Event</th>
    <th>Musical Event</th>
    <th>Corporate Event</th>
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Actor_name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Singer}}</td>
    <td>{{$data1->Magician}}</td>
    <td>{{$data1->Comedian}}</td>
    <td>{{$data1->Actor}}</td>
    <td>{{$data1->Announcer}}</td>
    <td>{{$data1->Entertainer}}</td>
    <td>{{$data1->Other}}</td>
    <td>{{$data1->Birthday}}</td>
    <td>{{$data1->Party}}</td>
    <td>{{$data1->Professional_event}}</td>
    <td>{{$data1->Musical_event}}</td>
    <td>{{$data1->Corporate_event}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>