
<?php
    $i_want_to_read_this_file = "index.txt";

    if(file_exists($i_want_to_read_this_file)){
        $file_open = fopen($i_want_to_read_this_file , "r+");
        $file_read = fread($file_open, filesize($i_want_to_read_this_file));
        fclose($file_open);

        echo "The File content is :" . "<br>";
        echo nl2br($file_read);
    }else{
        echo "There Haven't any File or anything";
    }

    echo "<br>";

    $newFile = 'newFile.txt';

    $fopenFile = fopen($newFile , 'w');
    $val = "my name is tarek hossain . I'm a student of Honours from Bangladesh National University";
    $openFileWrite = fwrite($fopenFile , $val);
    fclose($fopenFile);
    echo "newfile is created and update successfully";
?>