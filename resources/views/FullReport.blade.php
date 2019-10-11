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

<h2><b>Hotel Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Hotel Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>facebook</th>
    <th>Instergram</th>
  </tr>

  @foreach($Hotel as $Hotel1)
  <tr>
    <td>{{$Hotel1->id}}</td>
    <td>{{$Hotel1->name}}</td>
    <td>{{$Hotel1->email}}</td>
    <td>{{$Hotel1->city}}</td>
    <td>{{$Hotel1->Hotel_Name}}</td>
    <td>{{$Hotel1->Address}}</td>
    <td>{{$Hotel1->Contact_No}}</td>
    <td>{{$Hotel1->Link}}</td>
    <td>{{$Hotel1->Description}}</td>
    <td>{{$Hotel1->facebook}}</td>
    <td>{{$Hotel1->instagram}}</td>
  </tr>
  @endforeach
 
</table>

<h2><b>Hall Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Hotel Name</th>
    <th>Hall Name</th>
    <th>Address</th>
    <th>Description</th>
    <th>Cost</th>
    <th>Capacity</th>
    <th>Square Feet</th>
    <th>Overview</th>
    <th>Wedding</th>
    <th>Meeting</th>
    <th>Party</th>
    <th>Corporate Event</th>
    <th>Professional Event</th>
    <th>projection</th>
    <th>internet</th>
    <th>parking</th>
    <th>Security Camera</th>
    <th>Security Personal</th>
    <th>Reception Area</th>
    <th>Bar</th>
    <th>Garden</th>
    <th>Smoke Area</th>
    <th>Welcome Drinks</th>
    <th>Buffet</th>
    <th>Handicap Accessible</th>
    <th>Varenda</th>
    <th>Balcony</th>
    <th>Stage</th>
    <th>theatre</th>
    <th>U shape</th>
    <th>V shape</th>
    <th>Classroom</th>
    <th>Hallow Square</th>
    <th>Boardroom</th>
    <th>Oval</th>
    <th>Herringbone</th>
    <th>Top Table Springs</th>
    <th>Banquet</th>
    <th>Cabaret</th>
    <th>Informal</th>
   
  </tr>

  @foreach($hall as $Hall1)
  <tr>
    <td>{{$Hall1->id}}</td>
    <td>{{$Hall1->Hotel_Name}}</td>
    <td>{{$Hall1->Hall_Name}}</td>
    <td>{{$Hall1->Address}}</td>
    <td>{{$Hall1->Description}}</td>
    <td>{{$Hall1->Cost}}</td>
    <td>{{$Hall1->Capacity}}</td>
    <td>{{$Hall1->Square_feet}}</td>
    <td>{{$Hall1->Overview}}</td>
    <td>{{$Hall1->Wedding}}</td>
    <td>{{$Hall1->Meeting}}</td>
    <td>{{$Hall1->Party}}</td>
    <td>{{$Hall1->Corporate_event}}</td>
    <td>{{$Hall1->Professional_Event}}</td>
    <td>{{$Hall1->projection}}</td>
    <td>{{$Hall1->internet}}</td>
    <td>{{$Hall1->parking}}</td>
    <td>{{$Hall1->security_camera}}</td>
    <td>{{$Hall1->security_personal}}</td>
    <td>{{$Hall1->reception_area}}</td>
    <td>{{$Hall1->Bar}}</td>
    <td>{{$Hall1->garden}}</td>
    <td>{{$Hall1->smoking_area}}</td>
    <td>{{$Hall1->welcome_drinks}}</td>
    <td>{{$Hall1->Buffet}}</td>
    <td>{{$Hall1->Handicap_accessible}}</td>
    <td>{{$Hall1->outside_balcony}}</td>
    <td>{{$Hall1->inside_balcony}}</td>
    <td>{{$Hall1->stage}}</td>
    <td>{{$Hall1->theatre}}</td>
    <td>{{$Hall1->U_shape}}</td>
    <td>{{$Hall1->V_shape}}</td>
    <td>{{$Hall1->classroom}}</td>
    <td>{{$Hall1->hallow_square}}</td>
    <td>{{$Hall1->Boardroom}}</td>
    <td>{{$Hall1->Oval}}</td>
    <td>{{$Hall1->Herringbone}}</td>
    <td>{{$Hall1->Top_table_springs}}</td>
    <td>{{$Hall1->banquet}}</td>
    <td>{{$Hall1->cabaret}}</td>
    <td>{{$Hall1->informal}}</td>
   
    
  </tr>
  @endforeach
 
</table>

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

  @foreach($data as $dat)
  <tr>
    <td>{{$dat->id}}</td>
    <td>{{$dat->name}}</td>
    <td>{{$dat->email}}</td>
    <td>{{$dat->city}}</td>
    <td>{{$dat->Studio_Name}}</td>
    <td>{{$dat->Address}}</td>
    <td>{{$dat->ContactNo}}</td>
    <td>{{$dat->Link}}</td>
    <td>{{$dat->Description}}</td>
    <td>{{$dat->Wedding_Photography}}</td>
    <td>{{$dat->Preshoot_Vedio}}</td>
    <td>{{$dat->Wedding_Vedio}}</td>
    <td>{{$dat->Album_Making}}</td>
    <td>{{$dat->Wedding_Card}}</td>
    <td>{{$dat->Drone}}</td>
    <td>{{$dat->Wedding}}</td>
    <td>{{$dat->Get_togather}}</td>
    <td>{{$dat->Birthday}}</td>
    <td>{{$dat->Competition}}</td>
    <td>{{$dat->Professional_Events}}</td>
    <td>{{$dat->Sports}}</td>
    <td>{{$dat->Trips}}</td>
  </tr>
  @endforeach
 </table>

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

  @foreach($data1 as $dat1)
  <tr>
    <td>{{$dat1->id}}</td>
    <td>{{$dat1->name}}</td>
    <td>{{$dat1->email}}</td>
    <td>{{$dat1->city}}</td>
    <td>{{$dat1->Organization_Name}}</td>
    <td>{{$dat1->Address}}</td>
    <td>{{$dat1->Contact_No}}</td>
    <td>{{$dat1->Link}}</td>
    <td>{{$dat1->Description}}</td>
    <td>{{$dat1->Wedding_cake}}</td>
    <td>{{$dat1->Birthday_cake}}</td>
    <td>{{$dat1->Cake_Structure}}</td>
    <td>{{$dat1->Pastry_cake}}</td>
    <td>{{$dat1->Cup_Cake}}</td>
    <td>{{$dat1->Other}}</td>
    
  </tr>
  @endforeach
  </table>

  <h2><b>Dancer Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Team Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Choreography</th>
    <th>Gender</th>
    <th>Traditional</th>
    <th>Western</th>
    <th>Indian</th>
    <th>Kandyan</th>
    <th>Casual</th>
    <th>Other</th>
    <th>Wedding</th>
    <th>Party</th>
    <th>Musical Event</th>
    <th>Corporate_event</th>
    
  </tr>

  @foreach($data2 as $dat2)
  <tr>
    <td>{{$dat2->id}}</td>
    <td>{{$dat2->name}}</td>
    <td>{{$dat2->email}}</td>
    <td>{{$dat2->city}}</td>
    <td>{{$dat2->Team_Name}}</td>
    <td>{{$dat2->Address}}</td>
    <td>{{$dat2->Contact_No}}</td>
    <td>{{$dat2->Link}}</td>
    <td>{{$dat2->Description}}</td>
    <td>{{$dat2->choreography}}</td>
    <td>{{$dat2->Gender}}</td>
    <td>{{$dat2->Traditional}}</td>
    <td>{{$dat2->Western}}</td>
    <td>{{$dat2->Indian}}</td>
    <td>{{$dat2->Kandyan}}</td>
    <td>{{$dat2->Casual}}</td>
    <td>{{$dat2->Other}}</td>
    <td>{{$dat2->Wedding}}</td>
    <td>{{$dat2->Party}}</td>
    <td>{{$dat2->Musical_event}}</td>
    <td>{{$dat2->Corporate_event}}</td>
    
  </tr>
  @endforeach
  </table>
</body>
</html>