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

<h2><b>DJ/Band Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Dj Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Playing Hours</th>
    <th>Payment</th>
    <th>Extra Cost</th>
    <th>Fire Machine</th>
    <th>Smoke Machine</th>
    <th>DJ Lights</th>
    <th>Wedding</th>
    <th>Birthday</th>
    <th>Beach Party</th>
    <th>Get Together</th>
    <th>Parties</th>
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Dj_Name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->ContactNo}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Playing_Hrs}}</td>
    <td>{{$data1->Payment}}</td>
    <td>{{$data1->Extra_Cost}}</td>
    <td>{{$data1->Fire}}</td>
    <td>{{$data1->Smoke}}</td>
    <td>{{$data1->Lights}}</td>
    <td>{{$data1->Wedding}}</td>
    <td>{{$data1->Birthday}}</td>
    <td>{{$data1->Beach_Party}}</td>
    <td>{{$data1->Get_Together}}</td>
    <td>{{$data1->Parties}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>