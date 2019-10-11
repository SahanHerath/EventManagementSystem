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

<h2><b>Event Planner Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Poruwa Rituals</th>
    <th>Poruwa Items</th>
    <th>match Making</th>
    <th>Astrological Support</th>
    <th>Jayamangala Gatha</th>
    <th>Wedding Dancers</th>
    <th>Cost</th>
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Poruwa_rituals}}</td>
    <td>{{$data1->Poruwa_items}}</td>
    <td>{{$data1->match_making}}</td>
    <td>{{$data1->Astrological_support}}</td>
    <td>{{$data1->jayamangala_gatha}}</td>
    <td>{{$data1->Wedding_dancers}}</td>
    <td>{{$data1->Cost}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>