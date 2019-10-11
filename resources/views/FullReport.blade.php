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

  <h2><b>Decorator Details</b></h2>
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
    <th>Poruwa Decoration</th>
    <th>Flower Decoration</th>
    <th>Table Hall Decoration</th>
    <th>Setty Backs Decoration</th>
    <th>Lighting Decoration</th>
    <th>Traditional Decoration</th>
    <th>Wedding Car Decoration</th>
    <th>Wedding</th>
    <th>Birthday</th>
    <th>Get Together</th>
    <th>Parties</th>
    <th>Outside Events</th>
    
  </tr>

  @foreach($data3 as $dat3)
  <tr>
    <td>{{$dat3->id}}</td>
    <td>{{$dat3->name}}</td>
    <td>{{$dat3->email}}</td>
    <td>{{$dat3->city}}</td>
    <td>{{$dat3->Team_Name}}</td>
    <td>{{$dat3->Address}}</td>
    <td>{{$dat3->Contact_No}}</td>
    <td>{{$dat3->Link}}</td>
    <td>{{$dat3->Description}}</td>
    <td>{{$dat3->Poruwa}}</td>
    <td>{{$dat3->Flower}}</td>
    <td>{{$dat3->Table_Hall}}</td>
    <td>{{$dat3->Setty_Backs}}</td>
    <td>{{$dat3->Lighting}}</td>
    <td>{{$dat3->Traditional}}</td>
    <td>{{$dat3->Wedding_Car}}</td>
    <td>{{$dat3->Wedding}}</td>
    <td>{{$dat3->Birthday}}</td>
    <td>{{$dat3->Get_Together}}</td>
    <td>{{$dat3->Parties}}</td>
    <td>{{$dat3->Outside_events}}</td>
    
  </tr>
  @endforeach
  </table>

  <h2><b>Actors & Presenters Details</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>city</th>
    <th>Actor Name</th>
    <th>Address</th>
    <th>Contact No</th>
    <th>Link</th>
    <th>Description</th>
    <th>Singer</th>
    <th>Magician</th>
    <th>Comedian</th>
    <th>Actor</th>
    <th>Announcer</th>
    <th>Entertainer</th>
    <th>Other</th>
    <th>Birthday</th>
    <th>Party</th>
    <th>Professional Event</th>
    <th>Musical Event</th>
    <th>Corporate Event</th>
    
  </tr>

  @foreach($data4 as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Actor_name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Singer}}</td>
    <td>{{$data1->Magician}}</td>
    <td>{{$data1->Comedian}}</td>
    <td>{{$data1->Actor}}</td>
    <td>{{$data1->Announcer}}</td>
    <td>{{$data1->Entertainer}}</td>
    <td>{{$data1->Other}}</td>
    <td>{{$data1->Birthday}}</td>
    <td>{{$data1->Party}}</td>
    <td>{{$data1->Professional_event}}</td>
    <td>{{$data1->Musical_event}}</td>
    <td>{{$data1->Corporate_event}}</td>
    
  </tr>
  @endforeach
  </table>

  <h2><b>Catering Service Details</b></h2>
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
    <th>Welcome Drink</th>
    <th>Catering Set</th>
    <th>Catering Tent</th>
    <th>Cake</th>
    <th>Special Food</th>
    <th>Garden Umbrella</th>
    <th>Coffee Machine</th>
    <th>Table Chair</th>
    <th>Sink</th>
    <th>dessert</th>
    <th>Wedding</th>
    <th>Birthday</th>
    <th>Party</th>
    <th>Corporate Event</th>
    <th>Funeral</th>
    
    
  </tr>

  @foreach($data5 as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Service_Name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Welcome_drink}}</td>
    <td>{{$data1->Catering_set}}</td>
    <td>{{$data1->Catering_tent}}</td>
    <td>{{$data1->Cake}}</td>
    <td>{{$data1->Special_Food}}</td>
    <td>{{$data1->Garden_umbrella}}</td>
    <td>{{$data1->Coffee_Machine}}</td>
    <td>{{$data1->Table_chair}}</td>
    <td>{{$data1->sink}}</td>
    <td>{{$data1->dessert}}</td>
    <td>{{$data1->Wedding}}</td>
    <td>{{$data1->Birthday}}</td>
    <td>{{$data1->Party}}</td>
    <td>{{$data1->Corporate_event}}</td>
    <td>{{$data1->Funeral}}</td>
    
  </tr>
  @endforeach
  </table>

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

  @foreach($data6 as $data1)
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
  </table>

  <h2><b>Event Planner Details</b></h2>
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
    <th>Wedding</th>
    <th>Parties</th>
    <th>Meetings</th>
    <th>Corporate Event</th>
    <th>Outside Event</th>
    <th>Sport Event</th>
    
  </tr>

  @foreach($data7 as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->name}}</td>
    <td>{{$data1->email}}</td>
    <td>{{$data1->city}}</td>
    <td>{{$data1->Organization_name}}</td>
    <td>{{$data1->Address}}</td>
    <td>{{$data1->Contact_No}}</td>
    <td>{{$data1->Link}}</td>
    <td>{{$data1->Description}}</td>
    <td>{{$data1->Wedding}}</td>
    <td>{{$data1->Parties}}</td>
    <td>{{$data1->Meetings}}</td>
    <td>{{$data1->Corporate_event}}</td>
    <td>{{$data1->Outside_event}}</td>
    <td>{{$data1->Sport_event}}</td>
    
  </tr>
  @endforeach
 </table>

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

  @foreach($data8 as $data1)
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
  </table>

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

  @foreach($data10 as $data1)
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
  </table>

  <h2><b>Transport Details</b></h2>
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

  @foreach($data11 as $data1)
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
  </table>

  <b><h1>Reports and Data</h1></b>

<h5>Date and Time:{{$time}}</h5>
<br>
<br>

<h2><b>Poruwa Ritual Maker Details</b></h2>
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

  @foreach($data9 as $data1)
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
 </table>

 
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

  @foreach($data12 as $data1)
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
  </table>

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

  @foreach($data13 as $data1)
  <tr>
    <td>{{$data1->id}}</td>
    <td>{{$data1->user_email}}</td>
    <td>{{$data1->user_id}}</td>
    <td>{{$data1->complaint_about}}</td>
    <td>{{$data1->complaint}}</td>
    <td>{{$data1->state}}</td>
    
    
  </tr>
  @endforeach
  </table>

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

  @foreach($data14 as $data1)
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
  </table>
</body>
</html>