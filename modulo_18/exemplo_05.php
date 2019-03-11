<form method = "POST">
    <input type = "text" name = "search" />
    <button type = "submit">Search</button>

</form>

<?php
   if(isset($_POST["search"])) {
    //    echo strip_tags($_POST["search"]);
       echo htmlentities($_POST["search"]);
   }
   

?>