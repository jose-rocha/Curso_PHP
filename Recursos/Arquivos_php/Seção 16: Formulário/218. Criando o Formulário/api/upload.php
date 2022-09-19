<div class="titulo">Upload</div>

<?php
print_r($_FILES);
//print_r($_POST);
//print_r($_GET);

if ($_FILES && $_FILES['arquivoEnviado']) {
    $pastaUpload = '/home/jose/Vídeos/';
    $nomeArquivo =$_FILES['arquivoEnviado']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivoEnviado']['tmp_name'];

    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<br> Arquivo enviado com sucesso!";
    } else {
        echo "<br> Erro ao enviar o arquvo!";
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivoEnviado" type="file" />
    <br/>
    <button>Enviar</button>
</form>
