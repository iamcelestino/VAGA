<?php

use App\Model\Imagem;

 $this->view('partials/header') ?>
    <main>
        <section class="bg-gray-100">
            <div class="container py-9">
                <div class="">
                    <div class="">
                        <div class="">
                            <h1 class="text-blue-950 text-4xl md:text-4xl font-bold">Explore as maiores e <span class="text-blue-500"> Melhores Empresas</span>do pais inteiro</h1>
                            <p class="my-6 text-slate-600">A Boa Conexao entre os melhores estudantes da nosssa universidade acontece aqui</p>
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
                <h1 class="text-blue-950 text-2xl font-bold mb-8">Lista de Empresas</h1>
                <div class="sm:grid sm:grid-cols-2 md:grid-cols-3 gap-8">
                    <?php if($empresas): ?>
                        <?php foreach($empresas as $empresa): ?>
                            <?php $imagem = busca_imagem($empresa->usuario->imagem) ?>
                    <div class="shadow-gray-400 shadow-2xl p-4 rounded-md flex-1">
                        <div class="flex items-center gap-4">
                            <img class="w-2/4 rounded-full" src="<?=$imagem?>" alt="">
                            <div class="">
                                <p class=""><?= $empresa->usuario->nome ?></p>
                                <a class="" href=""><?= $empresa->usuario->endereco ?></a>
                            </div>
                        </div>
                        <div class="">
                            <a class="bg-blue-500 font-medium text-white text-center py-2 px-8 inline-block mt-8 w-full rounded-md" href="<?=BASE_URL?>empresa/empregos/<?=$empresa->id_usuario?>"><span></span>Todos empregos</a>
                            <a class="bg-blue-500 font-medium text-white text-center py-2 px-8 inline-block mt-4 w-full rounded-md" href="<?=BASE_URL?>empresa/emprego_activo/<?=$empresa->id_usuario?>"><span></span>Empregos Abertos</a>
                        </div>
                    </div>
                        <?php endforeach ?>
                    <?php else:  ?>
                        <h1>AINDA NAO HA EMPRESAS REGISTRADAS</h1>
                    <?php endif ?>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>