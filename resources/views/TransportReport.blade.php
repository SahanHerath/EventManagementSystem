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

<h2><b>Photography Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Transport Service</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Driver</th>
    <th>Decoration</th>
    <th>Rent Hours</th>
    <th>Rent Km</th>
    <th>Luxury</th>
    <th>Classic</th>
    <th>Vintage</th>
    <th>Horse Cart</th>
    <th>Air</th>
    <th>Travelling Coach</th>
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Transport_Service}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->driver}}</td>
    <td>{{$data1->decoration}}</td>
    <td>{{$data1->rent_hours}}</td>
    <td>{{$data1->rent_km}}</td>
    <td>{{$data1->luxury}}</td>
    <td>{{$data1->classic}}</td>
    <td>{{$data1->vintage}}</td>
    <td>{{$data1->horse_cart}}</td>
    <td>{{$data1->air}}</td>
    <td>{{$data1->travelling_coach}}</td>
   
  </tr>
  @endforeach
 

</body>
</html>