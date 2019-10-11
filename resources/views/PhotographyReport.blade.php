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
    <th>Studio Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Wedding Photography</th>
    <th>Preshoot Video</th>
    <th>Wedding Video</th>
    <th>Album Making</th>
    <th>Wedding Card</th>
    <th>Drone Coverage</th>
    <th>Wedding</th>
    <th>Get Togather</th>
    <th>Birthday</th>
    <th>Competition</th>
    <th>Professional Events</th>
    <th>Sports</th>
    <th>Trips</th>
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Studio_Name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->ContactNo}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Wedding_Photography}}</td>
    <td>{{$data1->Preshoot_Vedio}}</td>
    <td>{{$data1->Wedding_Vedio}}</td>
    <td>{{$data1->Album_Making}}</td>
    <td>{{$data1->Wedding_Card}}</td>
    <td>{{$data1->Drone}}</td>
    <td>{{$data1->Wedding}}</td>
    <td>{{$data1->Get_togather}}</td>
    <td>{{$data1->Birthday}}</td>
    <td>{{$data1->Competition}}</td>
    <td>{{$data1->Professional_Events}}</td>
    <td>{{$data1->Sports}}</td>
    <td>{{$data1->Trips}}</td>
  </tr>
  @endforeach
 

</body>
</html>