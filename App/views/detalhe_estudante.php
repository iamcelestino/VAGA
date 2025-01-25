<?php $this->view('partials/header') ?>
    <main>
        <section class="">
            <div class="container py-16">
                <h1 class="text-blue-950 text-2xl font-bold mb-8">Lista os melhores estudantes</h1>
                <div class="">
                   <h1>Esta e a pagina para os estudantes</h1>
                   <?php if($estudante): ?>
                        <?php foreach($estudante as $estudante): ?>
                   <div class="mb-5">
                        <div class="sm:flex">
                            <img src="<?=ASSETS_URL?>/images/473728911_950013220562299_2246884688973482272_n.jpg" alt="">
                            <div class="">
                                <p><span class="font-bold">Nome</span> <?=escape($estudante->nome)?></p>
                                <p><span class="font-bold">Email</span> <?=escape($estudante->email)?></p>
                                <p><span class="font-bold">Endereco</span> <?=escape($estudante->endereco)?></p>
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