<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://fonts.googleapis.com/css?family=Poppins:300" rel="stylesheet">
    <link rel="stylesheet" href="css/search.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    
    <title>Chestnut Estates | Search</title>
</head>
<body>
   <div class="container">
       <div class="table">
           <div class="row">
              <div class="col-12" id="header">
               <div class="col-2" id="head">
                  <img src="img/logo.png" alt="" class="logo">
               </div>
                   <div class="col-10" id="nav-bar">
                       <nav class="head-nav">
                           <ul>
                              <li><a href="index.html">HOME</a></li>
                               <li><a href="landlords.html"> LANDLORDS</a></li>
                               <li><a href="contact.html">CONTACT</a></li>
                           </ul>
                       </nav>
                   </div>
                   <div class="col-4" id="icon">
                       <img src="img/facebookv2.png" alt="" class="icon-pic">
                       <img src="img/instagramv2.png" alt="" class="icon-pic">
                       <img src="img/emailv2.png" alt="" class="icon-pic">
                       <img src="img/phonev2.png" alt="" class="icon-pic">
                       <img src="img/locationv2.png" alt="" class="icon-pic">
                           <script >
                                $(window).scroll(function() {

                                if ($(this).scrollTop()>0)
                                 {
                                    $('#icon').fadeOut();
                                 }
                                else
                                 {
                                  $('#icon').fadeIn();
                                 }
                             });
                        </script>
                   </div>
               </div>
            </div>
             <div class="row">
               <div class="col-12" id="top-img">
                   <div class="col-12" id="fade">
                       <p>Chestnut Estates | Search</p>
                   </div>
               </div>
              </div>
              <div class="row">
     
                  <div class="col-12" id="search">
                    <form action="php/search.php" method="post">
                        
                        <select id="area">
                      <option value="0"  >Select Area</option>
                      <option value="BishopsWaltham">  Bishops Waltham</option>
                      <option value="chav">chav Centre</option>
                      <option value="perv">Perv city</option>
                    </select>
                    
                     <select id="price">
                      <option value="0">Price Range</option>
                      <option value="1">£0-£499</option>
                      <option value="2">£500-£999</option>
                      <option value="3">£1000-£1499</option>
                      <option value="4">Over £1500</option>
                    </select>
                    
                     <select id="beds">
                      <option value="0">Number of Beds</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4+</option>
                    </select>
                    
                     <select id="property">
                      <option value="0">Property Type</option>
                      <option value="flats">Flat</option>
                      <option value="house">House</option>
                      <option value="semi">semi-detached</option>
                    </select>
                    
                    <input id="search-bttn"  type="submit" name="submit" value="Search"> 
                    
                    </form>
                    
                    
                     
                     
                      </div>
                  </div>
                  <div class="row">
                  <?php
                      include ("php/connect.php");
                      session_start ();
                      
                      if ($_SESSION [ 'search' != null])
                      {
                          mysqli_query($connection, $query) or die('Error querying database.');
                            $result = mysqli_query($connection, $query);
                          while ($row = mysqli_fetch_array($result)) {
                              
                              echo '<div class="col-10" id="all-houses">
                                          <div class="col-12" id="house">
                                              <div class="col-6" id="pic">
                                                  <img src="img/' . $row['house_img'] . '" alt="" class="profile-pic">
                                              </div>
                                              <div class="col-6" id="info">
                                                  <p>' . $row['HouseName'] . '<br>
                                                ' . $row['area'] . '</p>

                                                <p>£' . $row['price'] . '</p>
                                                <a href="house-info.html">View</a>
                                              </div>
                                          </div>
                                          </div>';
                              
                          }
                      }
                     
                  
                                ?>
                      
                  </div>
              </div>
       </div>
    </div>
    </body>
</html>

<!--
 $sql = 'select * from tblname'; 
<div class="col-10" id="all-houses">
                      <div class="col-12" id="house">
                          <div class="col-6" id="pic">
                              <img src="img/Front-Door.jpg" alt="" class="profile-pic">
                          </div>
                          <div class="col-6" id="info">
                              <p>Morrel Close<br>
                            Waltham Chase</p>
                            <p>£585,000</p>
                            <a href="house-info.html">View</a>
                          </div>
                      </div>
                      </div>
                      <div class="col-10" id="all-houses">
                      <div class="col-12" id="house">
                          <div class="col-6" id="pic">
                              <img src="img/Front-house.jpg" alt="" class="profile-pic">
                          </div>
                          <div class="col-6" id="info">
                              <p>Greenacres Road <br>
                           Locks Heath</p>
                           
                           <p>£425,000</p>
                           <a href="house-info.html">View</a>
                          </div>
                      </div>
                      </div>