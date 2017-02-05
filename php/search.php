<?php 

seassion_start ();

$property = strip_tags($_POST["property"]);
$area = strip_tags($_POST["area"]);
$price = strip_tags($_POST["price"]);
$beds = strip_tags($_POST["beds"]);


    $join = 0
    $check = 0
    $sql = "SELECT * FROM table WHERE ";


function makeJoin($fjoin) 
 {
  if($fjoin == 1)
  {
   return " And ";
  }
 }

if($property != 0)
 {
  $sql = $sql . "property like '%". $property . "%'";
  $join = 1;
  $check = 1;
 }

if($area != 0) {
     $sql = $sql . makeJoin($join);
  $sql = $sql . "area like '%". $area . "%'";
  $join = 1;
  $check = 1;
 }

if($price != 0)
 {
  $sql = $sql . makeJoin($join);
     if($price == 1)
  {
   $sql = $sql . "price between 0 and  499";
  }
     else if($price == 2)
  {
   $sql = $sql . "price between 500 and  999";
  }
     else if($price ==3)
  {
   $sql = $sql . "price between 1000 and  1499";
  }
       else
  {
   $sql = $sql . "price >= 1500";
  }
     
  $join = 1;
  $check = 1;
 }

if($beds != 0){
      $sql = $sql . makeJoin($join);
 if ($beds == 4 ) {
       $sql = $sql . "beds >=  '". $beds;
 }    
 else { $sql = $sql . "beds =  '". $beds;}

  $join = 1;
  $check = 1;
 }

echo $sql; 

?>