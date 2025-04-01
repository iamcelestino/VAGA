<?php $this->view('partials/header') ?>
    <main>
        <section class="bg-gray-100">
            <div class="container py-9">
                <div class="">
                    <div class="">
                        <div class="">
                            <h1 class="text-blue-950 text-4xl md:text-4xl font-bold">Procura pelo candidato para sua empresa?</h1>
                            <p class="my-6 text-slate-600">encontre os Melhores estudantes para a sua empresa</p>
                            <form class=" bg-white p-2 rounded-md" action="" method="">
                                <input type="search" name="search" class="md:w-[85%]" >
                                <button class="bg-blue-600 text-white font-bold py-[0.4rem] px-[0.4rem] rounded-md" type="submit">Pesquisar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <div class="container py-16">
                <h1 class="text-blue-950 text-2xl font-bold">Lista os melhores estudantes</h1>
                <p class="mb-8">Os Melhores Estudantes Endorsados pelas suas respectivas escolas encontram-se cá.</p>

                <div class=" sm:grid grid-cols-2 md:grid-cols-4 gap-6" id="">
                   <?php if($estudantes): ?>
                        <?php foreach($estudantes as $estudante): ?>
                            <?php $imagem = busca_imagem($estudante->estudante->usuario->imagem) ?>
                   <div class="mb-5 ">
                        <div class="">
                            <img src="<?=$imagem?>" alt="Foto do Estudante">
                            <div class="bg-gray-100 p-4">
                                <p><span class="font-bold">Nome</span> <?=escape($estudante->estudante->usuario->nome)?></p>
                                <p><span class="font-bold">Email</span> <?=escape($estudante->estudante->usuario->email)?></p>
                                <p><span class="font-bold">Endereco</span> <?=escape($estudante->estudante->usuario->endereco)?></p>
                                <a class="bg-blue-600 text-white font-bold py-2 px-4 inline-block w-full text-center rounded-md mt-3" href="<?=BASE_URL?>perfil/<?= $estudante->estudante->usuario->id_usuario?>">Perfil</a>
                            </div>
                        </div>
                   </div>
                    <?php endforeach ?>
                   <?php else: ?>

                   <?php endif ?>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>