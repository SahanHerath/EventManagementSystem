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

<h2><b>Salon Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Salon Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Groom Dressing</th>
    <th>Bride Dressing</th>
    <th>Dress Making</th>
    <th>Jewelry</th>
    <th>Makeup</th>
    <th>Bridesman Dress Making</th>
    <th>Bridesmaid Dress Making</th>
    <th>HairStyle</th>
    <th>Wedding</th>
    <th>Parties</th>
    <th>Fashion Show</th>
    
  </tr>

  @foreach($data as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Salon_Name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Groom_Dressing}}</td>
    <td>{{$data1->Bride_Dressing}}</td>
    <td>{{$data1->Dress_Making}}</td>
    <td>{{$data1->Jewelry}}</td>
    <td>{{$data1->Makeup}}</td>
    <td>{{$data1->Bridesman}}</td>
    <td>{{$data1->Bridesmaid}}</td>
    <td>{{$data1->HairStyle}}</td>
    <td>{{$data1->wedding}}</td>
    <td>{{$data1->parties}}</td>
    <td>{{$data1->fashion_show}}</td>
    
  </tr>
  @endforeach
 

</body>
</html>