<html>
<head>
<meta charset="UTF-8">
<title>ONE PIECE: Pergunta 3</title>
<style type="text/css">
    body {
    background-image: url('p3/bg.jpg');
    background-size: cover; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    overflow: hidden;
    }

    #imagem {
    position: absolute;
    transition: transform 2s ease-in-out;
    }

    .sunny {
    height: 500px;
    position: relative;
    margin-top: -450px;
    margin-left: -1000px;
    }

    p {
    font-size: 30px;
    color: #205c85;
    margin-top:-5px
    }

    label {
    color: #205c85; 
    }
    
    .btn {
    border: 1px solid #ffffff00;
    background: #1b4e6f;
    padding: 10px 20px;
    font-size: 20px;
    font-family: "montserrat";
    cursor: pointer;
    margin: 10px;
    transition: 0.8s;
    position: relative;
    overflow: hidden;
    }

    .btn1 {color: #fff;}

    .btn1:hover {
    color: #3783b5
    }

    .btn::before {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 0%;
    background: #ffffff;
    z-index: -1;
    transition: 0.8s;
    }

    .btn1::before {
    bottom: 0;
    border-radius: 50% 50% 0 0;
    }

    .btn1::before {
    height: 180%;
    }

    .btn1:hover:before {
    height: 0%;
    }

    .perso {
    height:100px;
    }

    #r1{display: inline-block;}

.animar-botao::before {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 0%;
    background: #ffffff;
    z-index: -1;
    transition: 0.8s;
}

.animar-botao::before {
    bottom: 0;
    border-radius: 50% 50% 0 0;
}

.animar-botao::before {
    height: 180%;
}

.animar-botao:hover::before {
    height: 0%;
}

</style>
</head>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['q3'] = $_POST['q3'];

    header("Location: pergunta4.php");
    exit();
}
?>

<body>
<center>
<img src="p3/p3.png" style="height:80px;">
<form action="pergunta3.php" method="post">
<p>Escolha o seu favorito a seguir.</p> 

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p3/luffy.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q3[]" value="luffy"> Carne<br>
</div>
</label>


<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p3/zoro.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q3[]" value="zoro"> Bebidas<br>
</div>
</label>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p3/nami.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q3[]" value="nami"> Frutas<br>
</div>
</label>

<br>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p3/usopp.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q3[]" value="usopp"> Salgados<br>
</div>
</label>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p3/sanji.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q3[]" value="sanji"> Massas<br>
</div>
</label>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p3/robin.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q3[]" value="robin"> Café da tarde<br>
</div>
</label>

<br>

<label>
<div style="background-color: #fff; width: 150px; height: 120px; border-radius: 25px; margin: 5px;" id="r1">
<img src="p3/chopper.png" class="perso" style="margin-top:10px; height:60px; border-radius: 10px;">
<br>
<input type="radio" name="q3[]" value="chopper"> Doces<br>
</div>
</label>

<br>
<input type="submit" value="Próxima Pergunta" id="iniciarAnimacao" class="btn btn1 animar-botao">

</form>

<div id="container">
<img id="imagem" class="sunny"  src="../midia/sunny.png" alt="Imagem" >
</div>

<script>
window.addEventListener('load', function () {
const imagem = document.getElementById('imagem');
imagem.style.transform = 'translateX(100%)'; 
});

document.getElementById('iniciarAnimacao').addEventListener('click', function (event) {
const imagem = document.getElementById('imagem');
imagem.style.transform = 'translateX(450%)'; 
const atrasoEnvioFormulario = 2000; 

setTimeout(function () {
document.querySelector('form').submit();
}, atrasoEnvioFormulario);

event.preventDefault(); 
});
</script>

</center>
</body>
</html>
