<div class="titulo">Desafio Imagens</div>

<?php
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmp, $arquivo)) {
    echo "Arquivo válido e enviado com sucesso!";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br> Erro de upload de arquivo!";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>


<ul>
    <?php foreach ($arquivos as $arquivo):  ?>
<?php if (stripos($arquivo, '.png') > 0):  ?> <!-- mostrando só arquivos .png /-->
            <li>
                <img src="../files/<?= $arquivo ?>" height="120" />
                <?= $arquivo ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
