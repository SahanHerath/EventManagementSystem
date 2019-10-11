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

<h2><b>Cake Designer Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Organization Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Wedding Cake</th>
    <th>Birthday Cake</th>
    <th>Cake Structure</th>
    <th>Pastry Cake</th>
    <th>Cup Cake</th>
    <th>Other</th>
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Organization_Name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Wedding_cake}}</td>
    <td>{{$data1->Birthday_cake}}</td>
    <td>{{$data1->Cake_Structure}}</td>
    <td>{{$data1->Pastry_cake}}</td>
    <td>{{$data1->Cup_Cake}}</td>
    <td>{{$data1->Other}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>