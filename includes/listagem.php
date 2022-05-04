<?php
$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
        default:
            # code...
            break;
    }
}
?>

<?php if ($mensagem != '') {
?>
    <section>
        <?php echo $mensagem;
        ?>
    </section>
<?php }
?>

<section>

    <a href='cadastrar'>
        <button class='btn btn-success'>Cadastrar</button>
    </a>

    <?php if (count($Noticias) == 0) {
    ?>
        <div class='alert alert-secondary mt-3'>Nenhuma Noticias encontrada</div>
    <?php } else {
    ?>


<section class="mb-5">
            <form method="get">
                <div class="row">
                    <div class="col">
                        <label>Filtrar por ID</label>
                        <select class="form-control" name="filtro" id="filtrar" value="">
                            <?php foreach ($listaNoticia as $key => $value) { ?>
                                <option value="<?php echo $value->id; ?>" <?php echo $obNoticias->id == $value->id ? "selected" : ''; ?>> <?php echo $value->id; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </form>
        </section>

        <?php foreach ($Noticias as $key => $value) {
        ?>
            <div class="card" style="width: 18rem; background: black;">
                <div class="card-body">
                    <p class="card-text">Id: <?php echo $value->id; ?></p><br>
                    <p class="card-text">Titulo: <?php echo $value->titulo; ?></p><br>
                    <p class="card-text">Descrição: <?php echo $value->descricao; ?></p><br>
                    <p class="card-text">Data: <?php echo $value->data; ?></p><br>
                    <p class="card-text">Autor: <?php echo $value->autor; ?></p><br>
                    <p class="card-text">Status: <?php echo ($value->status == 's' ? 'Ativo' : 'Inativo') ?></p><br>
                    <a href="editar.php?id=<?php echo $value->id; ?>">
                        <button type='button' class='btn btn-primary'>Editar</button>
                    </a>
                    <a href="excluir.php?id=<?php echo $value->id; ?>">
                        <button type='button' class='btn btn-danger'>Excluir</button>
                    </a>
                </div>
            </div>
        <?php }
        ?>
    <?php }
    ?>
</section>