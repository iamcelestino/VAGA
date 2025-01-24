<?php $this->view('partials/header') ?>
<main>
    <div class="container py-16">
        <div class="flex justify-center items-center">
            <?php if($usuario) ?>
            <div class="flex gap-10">
                <div class="">
                    <img src="" alt="">
                    <input type="file">
                    <a class="inline-block bg-blue-600 p-2 text-white font-bold" href="<?=BASE_URL?>perfil/editar/<?= $usuario->usuario->id_usuario?>">Editar Perfil</a>
                </div>
                <div class="">
                    <p class="mb-5"><span class="font-bold ">Nome</span> : <?= escape($usuario->usuario->nome)?></p>
                    <p class="mb-5"><span class="font-bold ">Email</span> : <?= escape($usuario->usuario->email)?></p>
                    <p class="mb-5"><span class="font-bold ">Endereco</span> : <?= escape($usuario->usuario->endereco)?></p>
                    <p><span class="font-bold  ">Funcao</span> : <?= escape($usuario->usuario->tipo_usuario)?></p>
                </div>
            </div>

        </div>
    </div>
</main>
<?php $this->view('partials/footer') ?>