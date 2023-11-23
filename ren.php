<style>
    a{
        display: block;
        width: 100%;
        margin: 20px;
    }
</style>

<?php

$ruta = $_FILES["filesrute"]["tmp_name"];
$nameFile = $_POST['nameFile'];
$typeFile = $_POST['typeFile'];

for ($i=0; $i < count($_FILES["filesrute"]["tmp_name"]); $i++) { 
    if (isset($_FILES["filesrute"]["tmp_name"][$i])) {
        $j = $i+1;
       move_uploaded_file($_FILES["filesrute"]["tmp_name"][$i], $j.''.$nameFile.'.'.$typeFile);
       echo '<a href="'.$j.''.$nameFile.'.'.$typeFile.'">'.$j.''.$nameFile.'.'.$typeFile.'</a>';
    }
    
}
