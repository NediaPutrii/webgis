<?php 
session_start();
    @$username = @$_SESSION['username'];
    
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website untuk pengembangan wisata Bukittinggi">
    <meta name="author" content="Ikhwan">
    <meta name="keyword" content="Tourism, SI Unand, Unand, Wisata">

    <title>Bukittinggi Object Toursim </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!--  Slide -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
    </style>
    <script src="assets/js/chart-master/Chart.js"></script>

    <script src="../config_public.js"></script>
    <script src="_map.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgpfxdQ0Ep_nieNjV64u4yXWeSFHAT4BE&callback=basemap"></script>


    <!--LOADER-->
    <style>

      /* akhir style slider popular  */
      body {
        font-family: Arial;
        margin: 0;
      }

      * {
        box-sizing: border-box;

        
      }

      img {
        vertical-align: middle;
      }

      /* Position the image container (needed to position the left and right arrows) */
      .container2 {
        position: relative;
        line-height: 1.3;
      }

      /* Hide the images by default */
      .mySlides {
        display: block;
        width: auto;
        height: auto;
        padding: 15px;
        background-color: rgba(219,219,219,0.8);
      } 

      /* Add a pointer when hovering over the thumbnail images */
      .cursor {
        cursor: pointer;
      }

      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 60%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: black;
        background-color: rgba(219,219,219,0.5);
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }

      .prev1,
      .next1 {
        cursor: pointer;
        position: absolute;
        top: 100%;
        width: auto;
        padding: 10px;
        margin-top: 9.2px;
        color: white;
        background-color: rgba(0,0,0,0.5);
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      .next1 {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      .prev{
        left: 0;
        border-radius: 3px 0 0 3px;
      }

      .prev1{
        left: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(255, 255, 255, 0.8);
        color: black;
      }

      .prev1:hover,
      .next1:hover {
        background-color: rgba(255, 255, 255, 0.8);
        color: black;
      }
      .row2:after {
        
        display: none;
        clear: both;
      }

      /* Six columns side by side */
      .column {
        float: left;
        width: 25%; 
        padding: 3px;
        padding-top: 8px;
        background-color: grey;
      }

      /* Add a transparency effect for thumnbail images */
      .demo {
        opacity: 1;
      }

      .active,
      .demo:hover {
        opacity: 1;
        color: black;
      }
    
    /* akhir style slider popular  */

    #loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      width: 40px;
      margin: 5px;
      height: 40px;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    #legend {
        background:white;
        padding: 10px;
        margin: 5px;
        font-size: 12px;
        color: black;
        font-family: Arial, sans-serif;
      }
    .color {
        border: 1px solid;
        height: 12px;
        width: 12px;
        margin-right: 3px;
        float: left;
    }

    legenda 
    .a {
        background: #f75d5d;
      }
    .b {
        background: #ff3300;
      }
    .c {
        background: #ffd777;
      }
    .d {
        background: #ec87ec;
      }
    .e {
        background: #e2e231 ;
      }
    .f {
        background: #000000 ;
      }
    .g {
        background: #ff07d5;
      }
    .h {
        background: #9ad7f9;
      }
    .i {
        background: #f92a2a;
      }
    .j {
        background: #6df73b;
      }
    .k {
        background: #1796c4;
      }
       .l {
        background: #f75d5d;
      }


      .imam-slider { 
	border: 10px solid #efefef; 
	position: relative; 
	overflow: hidden; 
	background: #efefef;
}

.imam-slider { 
	margin:20px;
	margin-bottom:20px;
/*	width: 300px;*/
	height: 200px; 
}

.isi-slider img { 
	width: 350px;
	height: 200px; 
	float: left;
}

.isi-slider { 
	position: absolute; 
	width:1750px;  

	/* pengaturan durasi lama tampil gambar bisa di atur di bawah ini
	animation-name:slider;
	animation-duration:16s;
	animation-timing-function: ease-in-out;
	animation-iteration-count:infinite;
	-webkit-animation-name:slider;
	-webkit-animation-duration:16s;
	-webkit-animation-timing-function: ease-in-out;
	-webkit-animation-iteration-count:infinite;
	-moz-animation-name:slider;
	-moz-animation-duration:16s;
	-moz-animation-timing-function: ease-in-out;
	-moz-animation-iteration-count:infinite;
	-o-animation-name:slider;
	-o-animation-duration:16s;
	-o-animation-timing-function: ease-in-out;
	-o-animation-iteration-count:infinite; */
}


/*saat gambar di hover oleh cursor mouse maka berhenti slide*/
/* .isi-slider:hover { 
	-webkit-animation-play-state:paused; 
	-moz-animation-play-state:paused; 
	-o-animation-play-state:paused; 
	animation-play-state:paused; }
}

.isi-slider img { 
	float: right; 
}

.imam-slider:after { 
	font-size: 150px; 
	position: absolute; 
	z-index: 12; 
	color: rgba(255,255,255, 0); 
	left: 150px; top: 40px; 
	-webkit-transition: 1s all ease-in-out; 
	-moz-transition: 1s all ease-in-out; 
	transition: 1s all ease-in-out; 
}

.imam-slider:hover:after { 
	color: rgba(255,255,255, 0.6);  
} */



/* @-moz-keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -350px; opacity: 1; 
	}       
	45% {
		left: -350px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -700px; opacity: 1; 
	}     
	70% {
		left: -700px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -1050px; opacity: 1; 
	}   	
	95% {
		left: -1050px; opacity: 1; 
	}   	
	97% { 
		left: -1050px; opacity: 0;
	}   	
	100% {
		left: 0; opacity: 0; 
	}
} 

@-webkit-keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -350px; opacity: 1; 
	}       
	45% {
		left: -350px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -700px; opacity: 1; 
	}     
	70% {
		left: -700px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -1050px; opacity: 1; 
	}   	
	95% {
		left: -1050px; opacity: 1; 
	}   	
	97% { 
		left: -1050px; opacity: 0;
	}   	
	100% {
		left: 0; opacity: 0; 
	}
} 


@keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -350px; opacity: 1; 
	}     
	45% {
		left: -350px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -700px; opacity: 1; 
	}     
	70% {
		left: -700px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -1050px; opacity: 1; 
	}   	
	95% {
		left: -1050px; opacity: 1; 
	}   	
	97% { 
		left: -1050px; opacity: 0; 
	} 

	100% {
		left: 0; opacity: 0; 
	}
} */

    </style>
    
  </head>

  <body onload="init()" >

  <section id="container" >

      <!-- Modal -->
      <div class="modal fade" id="modal_gallery" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background:#black">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" id="mg_title">Modal Header</h4>
            </div>
            <div class="modal-body" id="mg_body">

                <!--GALERY-->
                <div id="view_galery" class="row" style="display:none">
                    <div class="col-md-12 col-sm-12 mb">
                       <div class="row centered" style="padding:10px">
                         <div class="col-sm-1 col-xs-1"></div>
                         <div id="gal" class="col-sm-10 col-xs-10" style="height:300px;">
                            <!--img class="img-responsive" src="assets/img/ny.jpg" style="width:100%;height:100%;"-->

                            <div class="w3-content w3-display-container" style="max-height:300px;max-width:600px">
                              <div id="img_gambar">

                              </div>
                              
                              <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                                <div class="col-md-6 col-sm-6 mb">
                                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                                </div>
                                <div class="col-md-6 col-sm-6 mb">
                                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                                </div>
                                <div id="span_gambar">

                                </div>
                              </div>
                            </div>

                         </div>
                         <div class="col-sm-1 col-xs-1"></div>
                       </div>
                    </div><!-- /col-md-12 -->             
                </div><!-- /row -->   

                <div class="col-md-12 col-sm-12 mb" style="margin-top:10px">
                  <p id="mg_text" ></p>
                </div><!-- /col-md-12 -->             

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
          </div>
          
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background:black">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" id="modal_title">Modal Header</h4>
            </div>
            <div class="modal-body" id="modal_body">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
          </div>
          
        </div>
      </div>

      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg" style="background-color:black;border-bottom:black">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.php" class="logo" ><b>WebGIS Object Tourism (11 1811521012 Nedia Putri Ismala) </b></a>
        <div class="top-menu">
        	<ul class="nav pull-right top-menu">
            <li><div id="loader" style="display:none"></div></li>
            <li id="loader_text" style="margin-top:13px;display:none"><b>Loading</b></li>
            <li class="nav pull-right top-menu">
              <?php 
            
            //echo "username @$username, role @$role";
            if(@$_SESSION['C'] == false)
            {
              echo "<a href='admin/login.php' class='logo' style='font-size:14px;color:white'><i class='fa fa-sign-in'></i>
              <b>Login</b></a>";
              //echo "username @$username, role @$role";
            }
            else{
              echo "<a href='admin/act/logout.php' class='logo' style='font-size:14px;color:white'><i class='fa fa-sign-in'></i>
              <b>logout</b></a>";
              //echo "username @$username, role @$role";
            }

             ?>
            
            </li>
        	</ul>
        </div>
      </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <?php 
        include 'menu.php';
      ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">



          <section class="wrapper">

              <div class="row">
                <div class="col-lg-8 main-chart">    
                            
                  <!--PETA-->
                  <div class="row">                   
                      <div class="col-md-12 col-sm-12 mb">
                        <div class="white-panel pns">

                          <header class="panel-heading" style="float:left">
                            <label style="color: black; margin-right:20px">Google Map with Location List</label>
                            <input type="hidden" id="myLatLocation" value="0">
                            <input type="hidden" id="myLngLocation" value="0">
                            <a class="btn btn-success" role="button" data-toggle="collapse" onclick="posisisekarang()" title="Current Position"   ><i class="fa fa-location-arrow" style="color:white;"></i></a>
                            <a class="btn btn-success" role="button" data-toggle="collapse" onclick="lokasimanual()" title=" Manual Position"  ><i class="fa fa-map-marker" style="color:white;"></i></a>
                            <label id="tombol">
                            <a type="button" onclick="legenda()" id="showlegenda" class="btn btn-success" data-toggle="tooltip" title="Legenda" ><i class="fa fa-eye" style="color:white;"></i></a>
                            </label>
                          </header>

                           <div class="row">
                             <div class="col-sm-6 col-xs-6"></div>
                           </div>                        
                           <div id="map" class="centered" style="height:460px">
                           </div>
                        </div>
                      </div><!-- /col-md-12 -->                  
                  </div><!-- /row -->          		   

                  <!--INFO OBJEK-->         
                  <div id="view_data_tengah1" class="row" style="display:none">
                      <div class="col-md-12 col-sm-12 mb">
                        <div class="white-panel pns" style="height:auto;padding-bottom:20px">
                           <div style="margin:0px 20px 10px 20px">
                             <h5 class="btn btn-compose" >Object Information</h5>
                           </div>

                            <!--OBJEK SEKITAR-->         
                            <!--a class='btn btn-default' role=button' data-toggle='collapse' onclick='' title='Nearby' aria-controls='Nearby'>
                              <i class='fa fa-compass' style='color:black;''></i>
                              <label>&nbsp Route By Google</label>
                            </a>       
                            <a class='btn btn-default' role=button' data-toggle='collapse'  onclick='' title='Nearby' aria-controls='Nearby'>
                              <i class='fa fa-compass' style='color:black;''></i>
                              <label>&nbsp Route By Angkot</label>
                            </a-->
                            <!-- <label id="label_angkot">
                              <a class='btn btn-default' role=button' data-toggle='collapse'  onclick='' title='Nearby' aria-controls='Nearby' id="btn_angkot">
                              <i class='fa fa-compass' style='color:black;'></i>
                              <label>&nbsp Angkot</label>
                              </a>
                            </label>                
                            <label id="label_gallery">
                              <a class='btn btn-default' role=button' data-toggle='collapse'  onclick='' title='Nearby' aria-controls='Nearby' id="btn_gallery">
                              <i class='fa fa-compass' style='color:black;'></i>
                              <label>&nbsp Gallery</label>
                              </a>
                            </label>                            
                            <a class='btn btn-default' role=button' data-toggle='collapse' href='#terdekat1' onclick='' title='Nearby' aria-controls='Nearby'>
                              <i class='fa fa-compass' style='color:black;'></i>
                              <label>&nbsp Attraction Nearby</label>
                            </a>
                            <div class='collapse' id='terdekat1'>
                              <div class='well' style='width:auto;margin: 0px 20px 20px 20px;color:black'>
                                <div class='checkbox'>
                                  <label style="float:left"><input id='check_tw' type='checkbox'>Tourism</label>
                                </div>
                                <div class='checkbox'>
                                  <label style="float:left"><input id='check_i' type='checkbox'>Small Industry</label>
                                </div>
                                <div class='checkbox'>
                                  <label style="float:left"><input id='check_oo' type='checkbox' value=''>Souvenir</label>
                                </div>
                                <div class='checkbox'>
                                  <label style="float:left"><input id='check_m' type='checkbox' value=''>Worship</label>
                                </div>
                                <div class='checkbox'>
                                  <label style="float:left"><input id='check_k' type='checkbox' value=''>Culinary</label>
                                </div>
                                <div class='checkbox'>
                                  <label style="float:left"><input id='check_h' type='checkbox' value='5'>Hotel</label>
                                </div>
                                <div class='checkbox'>
                                  <label style="float:left"><input id='check_r' type='checkbox' value=''>Restaurant</label>
                                </div> -->
                                <!--label><b>Radius </b></label>
                                <label style='color:black' id='km1'><b>0 </b></label>
                                <label><b>m</b></label><br-->
                                <!-- <input id="inputradius2" type="range" onchange="aktifkanRadius()" name="inputradius" data-highlight="true" min="1" max="10" value="1">
                                <div id="angkot_sekitar" class="centered">
                                </div>

                              </div>
                            </div> -->

                           <div class="row centered" style='margin-top:20px;color:black;'>
                             <div class="col-sm-1 col-xs-1"></div>
                             <div class="col-sm-10 col-xs-10">
                              <!--table class="table table-hover" id='view_table_tengah'>
                              </table-->
                              <table class="table" id='table_tengah_info'>
                                <tbody  style='vertical-align:top;'>
                                </tbody> 
                              </table> 

                             </div>
                             <div class="col-sm-1 col-xs-1"></div>
                           </div>
                        </div>
                      </div><!-- /col-md-12 -->             
                  </div><!-- /row -->                 

                  <!--HASIL TRACKING-->
                  <div id="view_tracking" class="row" style="display:none;color:black">
                      <div class="col-md-12 col-sm-12 mb">
                        <div class="white-panel pns" >
                           <div class="white-header">
                             <h5 style='color:black'>Local Transportation Recommendations</h5>
                           </div>
                           <div class="row centered">
                             <div class="col-sm-1 col-xs-1"></div>
                             <div class="col-sm-10 col-xs-10">
                              <table class="table table-bordered">
                                <tbody id="view_tracking_table" style='color:black'></tbody>
                              </table>  
                             </div>
                             <div class="col-sm-1 col-xs-1"></div>
                           </div>
                        </div>
                      </div><!-- /col-md-12 -->             
                  </div><!-- /row -->  

                  <!--HASIL TRACKING-->
                  <div id="view_tracking2" class="row" style="display:none;color:black">
                      <div class="col-md-12 col-sm-12 mb">
                        <div class="white-panel pns" style="">
                           <div class="white-header">
                             <!-- <h5 style='color:black'>Route</h5> -->
                           </div>
                           
                           <div class="row centered">
                             <div class="col-sm-1 col-xs-1"></div>
                             <div class="col-sm-10 col-xs-10">
                              <table class="table table-bordered">
                                <tbody id="view_tracking_table2" style='color:black'></tbody>
                              </table>  
                              <table id="table_angkot2" class="table table-bordered">
                                <tbody id='table_kanan_angkot2' style='color:black'></tbody>
                              </table>
                             </div>
                             <div class="col-sm-1 col-xs-1"></div>
                           </div>
                        </div>
                      </div><!-- /col-md-12 -->             
                  </div><!-- /row -->  

                </div><!-- /col-lg-9 END SECTION MIDDLE -->


<!-- batas awal popular tourism clickable -->
                <!-- GALLLERY  RECOMMENDASI TOURISM -->
                <div id="view_kanan_table" class="col-md-4 col-sm-4 mb" style="margin-top:20px; display:block;"> 
                      <div class="white-panel pns" style="height: 510px;">
                        <header class="panel-heading" style=" width: 100%"  >
                          <label class="btn btn-compose" id="judul_table" style="background-color:black;border-bottom:black;color:white; margin: 0px;">Popular Object Tourism
                          </label>
                        </header>
                        <div style="height:300px; margin:20px;">

                        <div id="populertourism">
                          <div class="container2">
                            <div class="row2">
                            <div class="mySlides">
                            <a href="" onclick="galleryreco('tw001')"><img src="../_foto/tw0012.jpg" style="width:100%"></a><div style="background-color: black"><label style="color:white">Jam Gadang</label></div>
                              </div>

                              <div class="mySlides">
                              <a href="" onclick="galleryreco('tw004')"><img src="../_foto/tw0041.jpg" style="width:100%"></a><div style="background-color: black"><label style="color:white">Lobang Jepang</label></div>
                              </div>

                              <div class="mySlides">
                              <a href="" onclick="galleryreco('tw007')"><img src="../_foto/tw0071.jpg" style="width:100%"></a><div style="background-color: black"><label style="color:white">Pustaka Bung Hatta</label></div>
                              </div>
                                
                              <div class="mySlides">
                              <a href="" onclick="galleryreco('tw011')"><img src="../_foto/tw0112.jpg" style="width:100%"></a><div style="background-color: black"><label style="color:white">Taman Panorama dan Ngarai Sianok</label></div>
                              </div>

                      
                               
                              <a class="prev" onclick="plusSlides(-1)">❮</a>
                              <a class="next" onclick="plusSlides(1)">❯</a>
                            </div>  
                            <br>
                            <div class="row2">
                              <div class="column">
                                <img class="demo cursor" src="../_foto/tw0012.jpg" style="width:100%" onclick="currentSlide(1)">
                              </div>
                              <div class="column">
                                <img class="demo cursor" src="../_foto/tw0041.jpg" style="width:100%" onclick="currentSlide(2)">
                              </div>
                              <div class="column">
                                <img class="demo cursor" src="../_foto/tw0071.jpg" style="width:100%" onclick="currentSlide(3)">
                              </div>
                              <div class="column">
                                <img class="demo cursor" src="../_foto/tw0112.jpg" style="width:100%" onclick="currentSlide(4)">
                              </div>

                            


                              <a class="prev1" onclick="plusSlides(-1)">❮</a>
                              <a class="next1" onclick="plusSlides(1)">❯</a>
                            </div>
                          </div>
                        </div>
                          <div style="height:400px; overflow-y: scroll; margin:2px;">
                            <table style="color:black;" class="table table-bordered" >
                                <tbody id='kanan_table'></tbody>
                            </table>
                          </div>  
                        <script>
                          var slideIndex = 1;
                          showSlides(slideIndex);


                          function plusSlides(n) {
                            showSlides(slideIndex += n);
                          }

                          function currentSlide(n) {
                            showSlides(slideIndex = n);
                          }

                          function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("demo");
                            var captionText = document.getElementById("caption");
                            if (n > slides.length) {slideIndex = 1}
                            if (n < 1) {slideIndex = slides.length}
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex-1].style.display = "block";
                            dots[slideIndex-1].className += " active";
                            captionText.innerHTML = dots[slideIndex-1].alt;
                            }

                            // GALLERY RECOMENDATION SLIDER DI INDEX
                              function galleryreco(a) {
                              console.log(a);
                              window.open(server + 'gallery.php?idgallery=' + a);
                              }
                          </script>


                      </div>
                    </div>
                </div>
<!-- batas akhir popular tourism clickable -->


                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                      
                    <!-- DATA TABLE -->
                      <!-- <div id="view_kanan_table" class="col-md-4 col-sm-4 mb" style="margin-top:0px; display:block;">
                        <div  class="white-panel pns"  style="height:510px">
                            <div class="white-header" style="height:40px;margin:20px;background:white;color:black">
                              <h5 class="btn btn-compose" id="judul_table" style="background-color:black;border-bottom:black">Popular Tourism</h5>
                            </div>
                            <div class="row">
                              <div class="col-sm-6 col-xs-6"></div>
                            </div>
                            <div  style="height:410px; overflow-y: scroll; margin:20px;">

                            <div class="html5gallery" style="max-height:700px; overflow:auto; display:block;" data-skin="horizontal" data-width="280" data-resizemode="fit">
                              <a href='../_foto/jamgadang1.jpg'><img onclick="galleryreco('tw001')"  src='../_foto/jamgadang1.jpg'></a>
                              <a href='../_foto/tw0041.jpg'><img src='../_foto/tw0041.jpg'></a>
                              <a href='../_foto/tw0071.jpg'><img src='../_foto/tw0071.jpg'></a>
                              <a href='../_foto/tw0112.jpg'><img src='../_foto/tw0112.jpg'></a>
                              <?php
                                // $querysearch  ="SELECT a.id, b.gallery_tourism FROM tourism as a left join tourism_gallery as b on a.id=b.id where a.id='tw001' OR a.id='tw002' OR a.id='tw003'";  
                                // var_dump($querysearch);
                                // die();
                                // $hasil=pg_query($querysearch);
                                // while($baris = pg_fetch_assoc($hasil)){
                                //   if(($baris['gallery_tourism']=='-')||($baris['gallery_tourism']=='')){
                                //     echo "<a href='../_foto/foto.jpg'><img src='../_foto/foto.jpg' ></a>";
                                //   }
                                //   else{
                                //     echo "<a href='../_foto/".$baris['gallery_tourism']."'><img src='../_foto/".$baris['gallery_tourism']."'></a>";
                                //   }
                                // }
                              ?>
                              </div> -->

                                <!-- <Tourims Recomendation> -->
                                <!-- TOURISM -->
                                    <!-- <b class="judul-slider" style="color: black">Jam Gadang</b>
                                    <div class="imam-slider" id="gallery1">
                                      <div class="isi-slider">
                                        <a href="" onclick="galleryreco('tw001')"><img src="../_foto/jamgadang1.jpg"></a>
                                        <a href="" onclick="galleryreco('tw001')"><img src="../_foto/jamgadang2.jpg"></a>
                                        <a href="" onclick="galleryreco('tw001')"><img src="../_foto/jamgadang3.jpg"></a>
                                        <a href="" onclick="galleryreco('tw001')"><img src="../_foto/jamgadang4.jpg"></a>
                                      </div>
                                    </div> -->

                                    <!-- MESJID -->
                                    <!-- <b class="judul-slider" style="color: black">Lobang Jepang</b>
                                    <div class="imam-slider" id="gallery1">
                                      <div class="isi-slider">
                                        <a href="" onclick="galleryreco('tw004')"><img src="../_foto/lobangjepang1.jpg"></a>
                                        <a href="" onclick="galleryreco('tw004')"><img src="../_foto/lobangjepang2.jpg"></a>
                                        <a href="" onclick="galleryreco('tw004')"><img src="../_foto/lobangjepang3.jpg"></a>
                                        <a href="" onclick="galleryreco('tw004')"><img src="../_foto/lobangjepang4.jpg"></a>
                                      </div>
                                    </div> -->

                                    <!-- RESTAURANT -->
                                    <!-- <b class="judul-slider" style="color: black">Jembatan Limpapeh</b>
                                    <div class="imam-slider" id="gallery1">
                                      <div class="isi-slider">
                                        <a href="" onclick="galleryreco('tw006')"><img src="../_foto/jembatanlimpapeh1.jpg"></a>
                                        <a href="" onclick="galleryreco('tw006')"><img src="../_foto/jembatanlimpapeh2.jpg"></a>
                                        <a href="" onclick="galleryreco('tw006')"><img src="../_foto/jembatanlimpapeh3.jpg"></a>
                                        <a href="" onclick="galleryreco('tw006')"><img src="../_foto/jembatanlimpapeh4.jpg"></a>
                                      </div>
                                    </div> -->

                                    <!-- HOTEL -->
                                    <!-- <b class="judul-slider" style="color: black">Rumah Kelahiran Bung Hatta </b>
                                    <div class="imam-slider" id="gallery1">
                                      <div class="isi-slider">
                                        <a href="" onclick="galleryreco('tw010')"><img src="../_foto/rumahbunghatta1.jpg"></a>
                                        <a href="" onclick="galleryreco('tw010')"><img src="../_foto/rumahbunghatta2.jpg"></a>
                                        <a href="" onclick="galleryreco('tw010')"><img src="../_foto/rumahbunghatta3.jpg"></a>
                                        <a href="" onclick="galleryreco('tw010')"><img src="../_foto/rumahbunghatta4.jpg"></a>
                                      </div>
                                    </div> -->

                                    <!-- SOUVENIR -->
                                    <!-- <b class="judul-slider" style="color: black">Panorama dan Ngarai Sianok</b>
                                    <div class="imam-slider" id="gallery1">
                                      <div class="isi-slider">
                                        <a href="" onclick="galleryreco('tw011')"><img src="../_foto/panoramangaraisianok1.jpg"></a>
                                        <a href="" onclick="galleryreco('tw011')"><img src="../_foto/panoramangaraisianok2.jpg"></a>
                                        <a href="" onclick="galleryreco('tw011')"><img src="../_foto/panoramangaraisianok3.jpg"></a>
                                        <a href="" onclick="galleryreco('tw011')"><img src="../_foto/panoramangaraisianok4.jpg"></a> </div>
                                    </div> -->
                              
                              <!-- <table style="color:black" class="table table-bordered">
                                <tbody id='kanan_table'></tbody>
                              </table>
                           </div>
                        </div>
                      </div>/col-md-12 -->
<!-- batas akhir popular tourims uda hamdi -->

                      <div id="view_kanan_table1" class="col-md-4 col-sm-4 mb" style="margin-top:0px; display:none;">
                        <div class="white-panel pns">
                           <div class="white-header" style="height:40px;margin:20px;background:white;color:black">
                             <h5 class="btn btn-compose" id="judul_table" style="background-color:black;border-bottom:black">Object Arround</h5>
                           </div>
                           <div class="row">
                             <div class="col-sm-6 col-xs-6"></div>
                           </div>
                           <div style=" margin:20px;">
                              <table style="color:black" class="table table-bordered">
                                <!-- <tr id="kanan_table1"></tr> -->
                                <tbody id='kanan_table1'></tbody>
                              </table>
                           </div>
                        </div>
                      </div>
                      
                    <!-- DATA TABLE OBJEK SEKITAR-->
                      <div id="view_table_sekitar" class="col-md-4 col-sm-4 mb" style="display:none">
                        <div class="white-panel pns" style="height:510px">
                           <div class="white-header" style="height:40px;margin:20px;margin-top:0px;background:white;color:black">
                             <h5 class="btn btn-compose" id="head-angkot"  style="background-color:black;border-bottom:black">Search Results Object Around</h5>
                           </div>
                           <div class="row">
                             <div class="col-sm-6 col-xs-6"></div>
                           </div>
                           <div style="height:410px; margin:20px; overflow-y: scroll;">
                              <table id="table_hotel" class="table table-bordered">
                                <tbody id='table_kanan_hotel' style='color:black'></tbody>
                              </table>  
                              <table id="table_tourism" class="table table-bordered">
                                <tbody id='table_kanan_tourism' style='color:black'></tbody>
                              </table>  
                              <table id="table_worship" class="table table-bordered">
                                <tbody id='table_kanan_worship' style='color:black'></tbody>
                              </table>  
                              <table id="table_souvenir" class="table table-bordered">
                                <tbody id='table_kanan_souvenir' style='color:black'></tbody>
                              </table>  
                              <table id="table_culinary" class="table table-bordered">
                                <tbody id='table_kanan_culinary' style='color:black'></tbody>
                              </table>  
                              <table id="table_industry" class="table table-bordered">
                                <tbody id='table_kanan_industry' style='color:black'></tbody>
                              </table>  
                              <table id="table_restaurant" class="table table-bordered">
                                <tbody id='table_kanan_restaurant' style='color:black'></tbody>
                              </table>  
                              <table id="table_angkot" class="table table-bordered">
                                <tbody id='table_kanan_angkot' style='color:black'></tbody>
                              </table>  
                           </div>
                        </div>
                      </div><!-- /col-md-12 -->        

                    <!-- FROM TRACKING ANGKOT -->
                      <div id="view_kanan_track" class="col-md-4 col-sm-4 mb" style="margin-top:20px;display:none">
                        <div class="white-panel pns">
                           <div class="white-header" style="height:40px;margin:20px;background:white;color:white">
                             <h5 class="btn btn-compose" id="judul_select">Local Transportion Recommendations</h5>
                           </div>
                           <div class="row">
                             <div class="col-sm-6 col-xs-6"></div>
                           </div>
                           <div style="padding:20px" >                            

                             <div class="row" style="margin:5px">
                               <div class="col-sm-5 col-xs-5">
                                  <input id="input_posisi_awal_lng" type="text" class="form-control" style="display:none">
                                  <input id="input_posisi_awal_lat" type="text" class="form-control" style="display:none">
                                  <a role='button' class='btn btn-default text-center' onclick='posisi_manual_1();' id='btnik' style="width: 100%;">Position Start </a>
                                </div>
                               <div id="text_awal" class="col-sm-7 col-xs-7" style="font-size:12px;text-align:left">
                                <div class="alert alert-warning" style="display: inline-block;padding: 6px 12px;width:100%"><b>KLIK</b> For setting position start</div>
                               </div>
                             </div>

                             <div class="row" style="margin:5px">
                               <div class="col-sm-5 col-xs-5">
                                <input id="input_posisi_tujuan_lat" type="text" class="form-control" style="display:none">
                                <input id="input_posisi_tujuan_lng" type="text" class="form-control" style="display:none">
                                <a role='button' class='btn btn-default text-center' onclick='posisi_manual_2();' id='btnik' style="width: 100%;">Position End </a>
                               </div>
                               <div id="text_tujuan" class="col-sm-7 col-xs-7" style="font-size:12px;text-align:left">
                                <div class="alert alert-warning" style="display: inline-block;padding: 6px 12px;width:100%"><b>KLIK</b> For setting position end</div>
                               </div>
                             </div> 

                             <div class="row" style="margin:5px">
                               <div class="col-sm-12 col-xs-12" id="kanan_rute">
                               </div>
                             </div>                           

                            <a role='button' class='btn btn-default text-center' style="margin-top:10px" onclick='call_rute_1();' id='btnik'>Process </a>
                            <a role='button' class='btn btn-default text-center' style="margin-top:10px" onclick='reset_rute();' id='btnik'>Reset </a>
                           </div>
                        </div>
                      </div><!-- /col-md-12 -->   
                      
              </div><! --/row -->


      <!-- **********************************************************************************************************************************************************
      FULL CONTENT
      *********************************************************************************************************************************************************** -->     


          </section>
      </section>


  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  	<script src="assets/js/zabuto_calendar.js"></script>
    <script type="text/javascript" src="html5gallery/html5gallery.js"></script>
  	
<script>
var slideIndex = 1;
//showDivs(slideIndex);

function legenda()
{
  $('#tombol').empty();
  $('#tombol').append('<a type="button" id="hidelegenda" onclick="hideLegenda()" class="btn btn-default " data-toggle="tooltip" title="Sembunyikan Legenda" style="margin-right: 7px;"><i class="fa fa-eye-slash"></i></a> ');
  
  var layer = new google.maps.FusionTablesLayer(
    {
          query: {
            select: 'Location',
            from: 'AIzaSyBNnzxae2AewMUN0Tt_fC3gN38goeLVdVE'
          },
          map: map
        });
    var legend = document.createElement('div');
        legend.id = 'legend';
        var content = [];
        content.push('<h4>Legenda</h4>');
        content.push('<p><div class="color l"></div>Culinary</p>');
        content.push('<p><div class="color f"></div>Small Industry</p>');
        content.push('<p><div class="color g"></div>Souvenir</p>');
        content.push('<p><div class="color h"></div>Hotel</p>');
        content.push('<p><div class="color i"></div>Restaurant</p>');
        content.push('<p><div class="color j"></div>WorshipPlace</p>');
        content.push('<p><div class="color k"></div>Tourism</p>');
        content.push('<p><div class="color e"></div>Angkot</p>');
        content.push('<p><div class="color d"></div>District of Mandiangin Koto Selayan</p>');
        content.push('<p><div class="color c"></div>District of Guguk Panjang</p>');
        content.push('<p><div class="color b"></div>District of Aur Birugo Tigo Baleh</p>');
        
        legend.innerHTML = content.join('');
        legend.index = 1;
        map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(legend);

        
}

function hideLegenda() {
  $('#legend').remove();
  $('#tombol').empty();
  console.log("hy jackkky");
  $('#tombol').append('<a type="button" id="showlegenda" onclick="legenda()" class="btn btn-success btn-sm fa-fa eye" data-toggle="tooltip" title="Legenda" style="margin-right: 7px;"><i class="fa fa-eye" style="color:white;"> </i></a>');
}

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

  </body>
</html>
