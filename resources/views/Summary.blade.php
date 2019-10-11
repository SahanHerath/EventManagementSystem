
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="css/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="css/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Evora
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="css/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="css/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
        <a  class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="css/assets/img/logo-small.jpg">
          </div>
        </a>
        <a  class="simple-text logo-normal">
          Evora
          <!-- <div class="logo-image-big">
            <img src="css/assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="/home">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li >
            <a href="/admins">
              <i class="nc-icon nc-key-25"></i>
              <p>Admins</p>
            </a>
          </li>
          <li>
          <li class="active ">
            <a href="/comments">
              <i class="nc-icon nc-bulb-63"></i>
              <p>User Review</p>
            </a>
          </li>
          <li>
            <a href="/Profile">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="/users">
              <i class="nc-icon nc-badge"></i>
              <p>Service Providers</p>
            </a>
          </li>
          <li>
            <a href="/complaints">
              <i class="nc-icon nc-globe-2"></i>
              <p>Complaints</p>
            </a>
          </li>
          <li>
            <a href="/suggestions">
              <i class="nc-icon nc-time-alarm"></i>
              <p>Suggestions</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Evora Service Providers</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="#">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Selection</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item"   href="Venue">Venues</a>
                      <a class="dropdown-item"   href="Bridal">Beautician</a>
                      <a class="dropdown-item"   href="Decorator">Decorators</a>
                      <a class="dropdown-item"   href="Music">DJs/Music</a>
                      <a class="dropdown-item"   href="Photography">Photography & Videography</a>
                      <a class="dropdown-item"   href="Dancing">Dancers & Choregraphy</a>
                      <a class="dropdown-item"   href="Cake">Cake Designers</a>
                      <a class="dropdown-item"   href="EventPlanner">Event Planners</a>
                      <a class="dropdown-item"   href="catering">Catering Service</a>
                      <a class="dropdown-item"   href="CostumeDesigner">Costume Designers</a> 
                      <a class="dropdown-item"   href="Poruwa">Poruwa Rituals</a>
                      <a class="dropdown-item"   href="Actor">Presenters & Entertainers</a>
                      <a class="dropdown-item"   href="Transport">Wedding Transport</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
<br><br><br><br>



    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Service providers - Summary</h4>
            </div>

            

        </div>

        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">
           
                <table class="table table-striped ">
                    <thead>
                        <tr>
                        <th></th>
                            <th>Category</th>
                            <th>No of Records</th>
                            
                            <th>PDF</th>
                           
                            
                            

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                        <td></td>
                            <td>Venues & Reception Halls</td>
                            <td>{{$data8}}</td>
                            
                            <td><a href="/VenueSummary"><button type="button" class="btn btn-success">PDF Generate</button></a></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Photography & Videography</td>
                            <td>{{$data10}}</td>
                            
                            <td><a href="/PhotographySummary"><button type="button" class="btn btn-success">PDF Generate</button></a></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Cake Designers</td>
                            <td>{{$data3}}</td>
                            
                            <td><a href="/CakeSummary"><button type="button" class="btn btn-success">PDF Generate</button></a></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Dance & Choreography</td>
                            <td>{{$data3}}</td>
                            
                            <td><a href="/DanceSummary"><button type="button" class="btn btn-success">PDF Generate</button></a></td>
                            <td></td>
                        </tr>

           

                        <tr>
                        <td></td>
                            <td>Decorators</td>
                            <td>{{$data6}}</td>
                            
                            <td><a href="/DecorationSummary"><button type="button" class="btn btn-success">PDF Generate</button></a></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Artists & Presenters</td>
                            <td>{{$data}}</td>
                            
                            <td><a href="/ActorSummary"><button type="button" class="btn btn-success">PDF Generate</button></a></td>
                            <td></td>
                        </tr>

                       

                        <tr>
                        <td></td>
                            <td>Caterings</td>
                            <td>{{$data1}}</td>
                            
                            <td><a href="/CateringSummary"><button type="button" class="btn btn-success">PDF Generate</button></a></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Costume Designers</td>
                            <td>{{$data4}}</td>
                            
                            <td><button type="button" class="btn btn-success">PDF Generate</button></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Event Planners</td>
                            <td>{{$data7}}</td>
                            
                            <td><button type="button" class="btn btn-success">PDF Generate</button></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Band & DJ</td>
                            <td>{{$data9}}</td>
                            
                            <td><button type="button" class="btn btn-success">PDF Generate</button></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Poruwa Rituals</td>
                            <td>{{$data11}}</td>
                            
                            <td><button type="button" class="btn btn-success">PDF Generate</button></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Bridal and Groom Designer, Beautician</td>
                            <td>{{$data13}}</td>
                            
                            <td><button type="button" class="btn btn-success">PDF Generate</button></td>
                            <td></td>
                        </tr>

                        <tr>
                        <td></td>
                            <td>Transporters</td>
                            <td>{{$data15}}</td>
                            
                            <td><button type="button" class="btn btn-success">PDF Generate</button></td>
                            <td></td>
                        </tr>
                        

                        <tr bgcolor="yellow">
                        <td></td>
                            <td>Comments and Ratings</td>
                            <td>{{$data12}}</td>
                            
                            <td><button type="button" class="btn btn-success">PDF Generate</button></td>
                            <td></td>
                        </tr>
                        <tr></tr>

                        <tr bgcolor="yellow">
                        <td></td>
                            <td>Complaints</td>
                            <td>{{$data2}}</td>
                            
                            <td><button type="button" class="btn btn-success">PDF Generate</button></td>
                            <td></td>
                        </tr>
                        <tr></tr>

                        <tr bgcolor="yellow">
                        <td></td>
                            <td>Suggestions</td>
                            <td>{{$data14}}</td>
                            
                            <td><button type="button" class="btn btn-success">PDF Generate</button></td>
                            <td></td>
                        </tr>
                        
                        
                    </tbody>
                </table>
               

            </div>
        </div>
        
        
        
        
        
        
        
        

        
        
     
    
    </div>
