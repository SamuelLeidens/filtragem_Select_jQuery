<section>
    <a href="index">
        <button class="btn btn-success">Voltar</button>
    </a>

    <h2 class="mt-3"><?php echo TITLE; ?> </h2>

    <form method="post" class="form-send">
        <div class="form-group">
            <label>Título</label>
            <input type="text" required class="form-control" name="titulo" value="<?php echo isset($obNoticias->titulo) ? $obNoticias->titulo : ''; ?>">
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" required name="descricao" rows="5"><?php echo isset($obNoticias->descricao) ? $obNoticias->descricao : ''; ?></textarea>
        </div>
        
        <div class="form-group">
            <label>Data</label>
            <input type="date" required class="form-control" name="data" value="<?php echo isset($obNoticias->data) ? date('Y-m-d', strtotime($obNoticias->data)) : ''; ?>">
        </div>
        <div class="form-group">
            <label>Autor</label>
            <textarea class="form-control" required name="autor" rows="1"><?php echo isset($obNoticias->autor) ? $obNoticias->autor : ''; ?></textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label>
                        <input type="radio" name="status" value="s" <?php echo (isset($obNoticias->status) && $obNoticias->status == 's') ? 'checked' : ''; ?>>
                        Ativo
                    </label>

                    <label class="ml-3">
                        <input type="radio" name="status" value="n" <?php echo (isset($obNoticias->status) && $obNoticias->status == 'n') ? 'checked' : ''; ?>>
                        Inativo
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</section>