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

<h2><b>Catering Service Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Service Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Welcome Drink</th>
    <th>Catering Set</th>
    <th>Catering Tent</th>
    <th>Cake</th>
    <th>Special Food</th>
    <th>Garden Umbrella</th>
    <th>Coffee Machine</th>
    <th>Table Chair</th>
    <th>Sink</th>
    <th>dessert</th>
    <th>Wedding</th>
    <th>Birthday</th>
    <th>Party</th>
    <th>Corporate Event</th>
    <th>Funeral</th>
    
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Service_Name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Welcome_drink}}</td>
    <td>{{$data1->Catering_set}}</td>
    <td>{{$data1->Catering_tent}}</td>
    <td>{{$data1->Cake}}</td>
    <td>{{$data1->Special_Food}}</td>
    <td>{{$data1->Garden_umbrella}}</td>
    <td>{{$data1->Coffee_Machine}}</td>
    <td>{{$data1->Table_chair}}</td>
    <td>{{$data1->sink}}</td>
    <td>{{$data1->dessert}}</td>
    <td>{{$data1->Wedding}}</td>
    <td>{{$data1->Birthday}}</td>
    <td>{{$data1->Party}}</td>
    <td>{{$data1->Corporate_event}}</td>
    <td>{{$data1->Funeral}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>