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

<h2><b>Suggestion Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact No</th>
    <th>Regarding</th>
    <th>Message</th>
    <th>state</th>
    
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->Name}}</td>
    <td>{{$data1->Email}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Regarding}}</td>
    <td>{{$data1->Message}}</td>
    <td>{{$data1->state}}</td>
    
   
  </tr>
  @endforeach
 

</body>
</html>