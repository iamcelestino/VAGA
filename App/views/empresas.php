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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container py-16">
                <div class="sm:flex items-center justify-between">
                    <h1 class="text-blue-950 text-2xl font-bold mb-8">Lista de Empresas</h1>
                    <form class=" bg-white rounded-md inline-block " action="" method="">
                        <input type="search" name="search" class="p-2 border-2 border-gray-400 rounded-md" >
                        <button class="bg-blue-600 text-white font-bold py-[0.4rem] px-[0.4rem] rounded-md" type="submit">Pesquisar</button>
                    </form>
                </div>
                <div class="sm:grid sm:grid-cols-2 md:grid-cols-3 gap-8">
                    <?php if($empresas): ?>
                        <?php foreach($empresas as $empresa): ?>
                            <?php $imagem = busca_imagem($empresa->usuario->imagem) ?>
                    <div class="shadow-gray-400 shadow-2xl p-4 rounded-md flex-1">
                        <div class="flex items-center justify-start space-x-2">
                                <div class="max-w-[5rem]">
                                    <img class="w-20 h-20 rounded-full object-cover" src="<?=$imagem?>" alt="">
                                </div>
                                <div>
                                    <p class="font-bold"><?= $empresa->usuario->nome ?></p>
                                    <p class="text-blue-950"><?= $empresa->usuario->endereco ?></p>
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