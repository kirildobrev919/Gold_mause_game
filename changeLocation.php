<?php

  // Change player location
function changeLocation(){	
  // Write your code here:
  global $location;
  echo "Where do you want to go?\n";
  $go_to = strtolower(readline(">> "));
  if($location==="kitchen" && $go_to === "bathroom"){
    echo "You go to: bathroom.\n";
    $location = "bathroom";
  }elseif($location==="kitchen" && $go_to === "woods"){
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.";
    $location = "woods";
  }elseif($location==="bathroom" && $go_to === "kitchen"){
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  }elseif($location==="woods" && $go_to === "kitchen"){
    echo "You go to: kitchen.\n";
    $location = "kitchen";
  }elseif($go_to === "woods" || $go_to === "kitchen"|| $go_to === "bathroom"){
    echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
  }else{
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }  
}