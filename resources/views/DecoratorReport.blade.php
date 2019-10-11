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

<h2><b>Decorator Details</b></h2>
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
    <th>Poruwa Decoration</th>
    <th>Flower Decoration</th>
    <th>Table Hall Decoration</th>
    <th>Setty Backs Decoration</th>
    <th>Lighting Decoration</th>
    <th>Traditional Decoration</th>
    <th>Wedding Car Decoration</th>
    <th>Wedding</th>
    <th>Birthday</th>
    <th>Get Together</th>
    <th>Parties</th>
    <th>Outside Events</th>
    
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
    <td>{{$data1->Poruwa}}</td>
    <td>{{$data1->Flower}}</td>
    <td>{{$data1->Table_Hall}}</td>
    <td>{{$data1->Setty_Backs}}</td>
    <td>{{$data1->Lighting}}</td>
    <td>{{$data1->Traditional}}</td>
    <td>{{$data1->Wedding_Car}}</td>
    <td>{{$data1->Wedding}}</td>
    <td>{{$data1->Birthday}}</td>
    <td>{{$data1->Get_Together}}</td>
    <td>{{$data1->Parties}}</td>
    <td>{{$data1->Outside_events}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>