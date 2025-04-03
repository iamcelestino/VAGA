<?php $this->view('partials/header') ?>
<main>
    <div class="container py-16">
        <div class="flex justify-center items-center">
            <?php if($usuario): ?>
                <?php $imagem = busca_imagem($usuario->imagem) ?>
            <div class="sm:flex items-center justify-center">
                <div class="">
                    <img class="rounded-full" src="<?=$imagem?>" alt="">
                    <div>
                        <a class="inline-block bg-blue-600 p-2 text-white font-bold" href="<?=BASE_URL?>perfil/editar/<?=$usuario->id_usuario?>">Editar Perfil</a>
                    </div>
                </div>
                <div class="">
                    <p class="mb-5"><span class="font-bold ">Nome</span> : <?= escape($usuario->nome)?></p>
                    <p class="mb-5"><span class="font-bold ">Email</span> : <?= escape($usuario->email)?></p>
                    <p class="mb-5"><span class="font-bold ">Endereco</span> : <?= escape($usuario->endereco)?></p>
                    <p><span class="font-bold  ">Funcao</span> : <?= escape($usuario->tipo_usuario)?></p>
                </div>
            </div>
            <?php else: ?>
                <H1>USUARIO NÃO ENCONTRADO</H1>
            <?php endif ?>
        </div>
    </div>
</main>
<?php $this->view('partials/footer') ?>