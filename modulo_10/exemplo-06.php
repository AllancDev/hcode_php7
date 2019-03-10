<?php
   //  mkdir("others");
    if(!is_dir("others")) mkdir("others");

    foreach(scandir("others") as $item) {
        if(!in_array($item, array(".", ".."))) {
            unlink("others/" . $item);
        }
    }


    echo "OK";

?>