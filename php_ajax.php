<?php
   $a[] = "Itel 720"; 
   $a[] = "TOSHIBA"; 
   $a[] = "HT 6459"; 
   $a[] = "MTN Brand"; 
   $a[] = "Itel 720"; 
   $a[] = "Itel 720"; 
   $a[] = "Itel 720"; 
   $a[] = "Itel 720"; 
   $a[] = "Itel 720"; 
   $a[] = "Itel 720"; 
   $q = $_REQUEST["q"];
   $hint = ""; 
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);   

      foreach($a as $name) {                       

         if (stristr($q, substr($name, 0, $len))){

            if ($hint === ""){
               $hint = $name;
            }else {
               $hint.= ", $name";
            }

         }

      }

   }
   echo $hint === "" ? "Produit inxistant" : $hint;

?>