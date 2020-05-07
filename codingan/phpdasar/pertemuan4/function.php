<?php 
function salam($waktu = "Datang", $nama = "User"){
    return "Selamat $waktu, $nama";
    
}

?>
<!DOCTYPE html>
    <title>Document</title>
</head>
<body>
    <h1><?php echo salam(); ?></h1>
</body>
</html>