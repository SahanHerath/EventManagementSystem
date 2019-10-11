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

<h2><b>Comments and Ratings Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Commented on</th>
    
    <th>Username</th>
    <th>Email</th>
    <th>Comment</th>
    
    <th>Rating</th>
    <th>Blocked</th>
   
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->user_id}}</td>
    
    <td>{{$data1->user_name}}</td>
    <td>{{$data1->Email}}</td>
    <td>{{$data1->Comment}}</td>
    <td>{{$data1->rating}}</td>
    <td>{{$data1->blocked}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>