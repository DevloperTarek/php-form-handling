
<?php
    $i_want_to_read_this_file = "index.php";

    if(file_exists($i_want_to_read_this_file)){
        $file_open = fopen($i_want_to_read_this_file , "r");
        $file_read = fread($file_open, filesize($i_want_to_read_this_file));
        fclose($file_open);

        echo "The File content is :" . "<br>";
        echo nl2br($file_read);
    }else{
        echo "There Haven't any File or anything";
    }
?>