<?php

// Obtiene la lista de todos los archivos jpg
$archivosJPG = glob("*.jpg");
$archivosPNG = glob("*.png");
$archivosPDF = glob("*.pdf");
$archivosTXT = glob("*.txt");
$archivos0 = glob("*.0");


if(isset($archivosJPG)){
    archivosJPG($archivosJPG);
}


if(isset($archivos0)){
    archivos0($archivos0);
}

if(isset($archivosPDF)){
    archivosJPG($archivosPDF);
}

if(isset($archivosPNG)){
    archivosJPG($archivosPNG);
}

if(isset($archivosTXT)){
    archivosJPG($archivosTXT);
}


function archivosPDF($archivosPDF){
    foreach ($archivosPDF as $archivo) {
            unlink($archivo);
    }
}


function archivosJPG($archivosJPG){
    foreach ($archivosJPG as $archivo) {
            unlink($archivo);
    }
}



function archivosPNG($archivosPNG){
    foreach ($archivosPNG as $archivo) {
            unlink($archivo);
    }
}


function archivosTXT($archivosTXT){
    foreach ($archivosTXT as $archivo) {
            unlink($archivo);
    }
}

function archivos0($archivos0){
    foreach ($archivos0 as $archivo) {
            unlink($archivo);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        div{
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 30px;
        }
        button{
            border-radius: 5px;
            cursor: pointer;
            background-color: gold; border: 0px; padding: 10px 30px;
        }
        button:hover{
            background-color: black;
            color: gold;
        }
        input[type='text']{
            padding: 10px 30px;
            background-color: gold;
            border: 0px;
            font-size: 18px;
        }
        input[type='text']:focus{
            border: 2px solid orange;
        }
        .file-svg{
            fill: gold;
            cursor: pointer;
        }
        .file-svg:hover{
            fill: black;
        }
        @media only screen and (max-width: 480px) {
            .d-none-mobile{
                display: none !important;
            }
        }
       
    </style>
</head>
<body>
    <h1 style="text-align: center; font-family: Arial, Helvetica, sans-serif; color: gold; font-weight: bolder; font-size: 60px; font-family: 'Roboto', sans-serif; margin-bottom: 0px;">SUPER-REN</h1>
    <p style="text-align: center; font-family: 'Roboto', sans-serif;">Coloca en el campo de texto si quieres que el archivo vaya seguido de un numero más <br class="d-none-mobile"> un texto concreto, si no quieres ningun texto y solo el número no coloques nada:</p>
    <form style="display: flex; flex-direction: column; align-items: center;" action="./ren.php" method="post" enctype="multipart/form-data">
        
        <div>  
            <input type="text" name="nameFile" id="nameFile" placeholder="Coloca el texto...">
        </div>
        <div>
            <label for="file"><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="gold" class="bi bi-file-earmark-image-fill file-svg" viewBox="0 0 16 16">
            <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707v5.586l-2.73-2.73a1 1 0 0 0-1.52.127l-1.889 2.644-1.769-1.062a1 1 0 0 0-1.222.15L2 12.292V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zm-1.498 4a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
            <path d="M10.564 8.27 14 11.708V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-.293l3.578-3.577 2.56 1.536 2.426-3.395z"/>
            </svg></label>
            
        </div>
        <div>
        <select name="typeFile" id="typeFyle">
        <option value="0">--Selecciona el archivo--</option>
        <option value="pdf">pdf</option>
        <option value="png">png</option>
        <option value="jpg">jpg</option>
        <option value="txt">txt</option>
    </select>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
        <div>
            <input  type="file" name="filesrute[]" id="file" multiple>
            </div>
    </form>
</body>
</html>