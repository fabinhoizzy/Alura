<?php include __DIR__ . '/../../view/inicio-html.php'; ?>

    <form action="/salvar-curso" method="post">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text"
                   id="descricao"
                   name="descricao"
                   class="form-control"
                   value="<?= isset($curso) ? $curso->getDescricao() : ''; ?>">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
    </div>
    </body>
    </html>

<?php include __DIR__ . '/../../view/fim-html.php'; ?>