     <script type="text/javascript">
         function showHint(str) {
            if (str.length == 0) {
               document.getElementById("txtHint").innerHTML = "";
               return;
            }else {
               var xmlhttp = new XMLHttpRequest();                                                        

               xmlhttp.onreadystatechange = function() {

                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                     document.getElementById("txtHint").innerHTML = xmlhttp.responseText;

                  }

               }

               xmlhttp.open("GET", "php_ajax.php?q=" + str, true);
               xmlhttp.send();
            }

         }
     </script>


      <form method="post">
         <input class="form-control"  placeholder="Rechercher un produit" type = "text" onkeyup = "showHint(this.value) ">
      </form >
      <label>Sugestion: <span id="txtHint"></span></label>


