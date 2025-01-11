<?php $this->extendTheme('theme/_theme') ?>

<?php $this->openSection('head') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php $this->endSection('head', 'head-content') ?>

<?php $this->openSection('body') ?>


<h3>Pessoas cadastradas</h3>

<table class="table table-hover">
        <thead>
                <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                </tr>
        </thead>
        <tbody>
                <?php foreach ($pessoas as $pessoa) {
                        foreach ($pessoa as $item): ?>
                                <tr>
                                        <th scope="row"><?= $item['idperson'] ?></th>
                                        <td><?= $item['name'] ?></td>
                                </tr>
                <?php endforeach;
                } ?>
        </tbody>
</table>

<?php $this->endSection('body', 'body-content') ?>

<?php $this->openSection('article') ?>

<?php $this->endSection('article', 'theme-article') ?>

<?php $this->openSection('script') ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<?php $this->endSection('script', 'theme-script') ?>