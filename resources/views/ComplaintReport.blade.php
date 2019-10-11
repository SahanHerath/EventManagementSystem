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

<h2><b>Complaint Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>User Email</th>
    <th>User Id</th>
    <th>Complain About</th>
    <th>Complaint</th>
    <th>State</th>
    
    
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->user_email}}</td>
    <td>{{$data1->user_id}}</td>
    <td>{{$data1->complaint_about}}</td>
    <td>{{$data1->complaint}}</td>
    <td>{{$data1->state}}</td>
    
    
  </tr>
  @endforeach
 

</body>
</html>