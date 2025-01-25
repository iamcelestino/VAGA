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
                <h1 class="text-blue-950 text-2xl font-bold mb-8">Lista os melhores estudantes</h1>
                <div class="">
                   <h1>Esta e a pagina para os estudantes</h1>
                   <?php if($estudantes): ?>
                        <?php foreach($estudantes as $estudante): ?>
                   <div class="mb-5">
                        <div class="">
                            <img src="<?=ASSETS_URL?>/images/473728911_950013220562299_2246884688973482272_n.jpg" alt="">
                            <div class="bg-gray-100">
                                <p><span class="font-bold">Nome</span> <?=escape($estudante->nome)?></p>
                                <p><span class="font-bold">Email</span> <?=escape($estudante->email)?></p>
                                <p><span class="font-bold">Endereco</span> <?=escape($estudante->endereco)?></p>
                                <a class="bg-blue-600 text-white font-bold py-2 px-4" href="<?=BASE_URL?>estudante/detalhes/<?= $estudante->id_usuario?>">Mais detalhes</a>
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