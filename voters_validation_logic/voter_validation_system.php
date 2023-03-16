<?php
 $votersValidation = 16;
  switch($votersValidation){
    case $votersValidation == "voter is not in ward 020":
       echo "You are not in ward 020";
       break;
    case $votersValidation < 18:
       echo "You are less than 18 years";
       break;
    case $votersValidation == "voter doesnt have pvc":
        echo "you dont have pvc";
        break;
    default: 
        echo "You are eligible to vote";   
}

?>