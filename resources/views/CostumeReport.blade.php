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

<h2><b>Costume Designer Details</b></h2>
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
    <th>Wedding Dress Designs</th>
    <th>Clothing Orders</th>
    <th>Sport Kit Designs</th>
    <th>Saree Work</th>
    <th>Traditional Dress</th>
    <th>Gents Wear</th>
    <th>Ladies Wear</th>
    <th>Gents Foot Wear</th>
    <th>Ladies Foot Wear</th>
    <th>Sports Shoes</th>
    <th>Wedding</th>
    <th>Party</th>
    <th>Fashion Show</th>
    <th>Sports</th>
    <th>Coperate Event</th>
    
    
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
    <td>{{$data1->wedding_dress_designs}}</td>
    <td>{{$data1->clothing_orders}}</td>
    <td>{{$data1->sport_kit_designs}}</td>
    <td>{{$data1->saree_work}}</td>
    <td>{{$data1->traditional_dress}}</td>
    <td>{{$data1->gents_wear}}</td>
    <td>{{$data1->ladies_wear}}</td>
    <td>{{$data1->gents_foot_wear}}</td>
    <td>{{$data1->ladies_foot_wear}}</td>
    <td>{{$data1->sports_shoes}}</td>
    <td>{{$data1->Wedding}}</td>
    <td>{{$data1->Party}}</td>
    <td>{{$data1->fashion_show}}</td>
    <td>{{$data1->sports}}</td>
    <td>{{$data1->Coperate_event}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>