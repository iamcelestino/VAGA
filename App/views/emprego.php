<?php $this->view('partials/header') ?>
    <main>
        <section class="bg-gray-100">
            <div class="container py-9">
                <div class="">
                    <div class="">
                        <div class="">
                            <h1 class="text-blue-950 text-4xl md:text-4xl font-bold">Discubra Os melhores<span class="text-blue-500"> Melhores empregos</span></h1>
                            <p class="my-6 text-slate-600">A Boa Conexao entre os melhores estudantes da nosssa universidade acontece aqui</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->view('partials/area_trabalho') ?>       
        <section>
            <div class="container py-9">
                <div class="">
                    <div>
                        <h2 class="font-bold text-xl text-blue-950">Trabalhos Relacionados</h2>
                    </div>
                </div>
                <?php if($empregos): ?>
                    <?php foreach($empregos as $emprego): ?>
                        <?php $imagem = busca_imagem($emprego->usuario->usuario->imagem) ?>
                <div class="mb-4">
                    <div class="shadow-gray-300 shadow-2xl rounded-md p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center justify-start space-x-2">
                                <div class="max-w-[5rem]">
                                    <img class="w-20 h-20 rounded-full object-cover" src="<?=$imagem?>" alt="">
                                </div>
                                <div>
                                    <p class="font-bold"><?= $emprego->titulo ?></p>
                                    <p class="text-blue-950"><?= $emprego->usuario->usuario->nome ?></p>
                                </div>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <form class="mb-4" method="POST">
                                    <input type="" class="hidden" value="<?=$emprego->id_emprego ?>" name="id_emprego">
                                    <button type="submit" class="bg-blue-600 text-white font-bold px-4 p-2 rounded-md">Candidatar-se</button>
                                </form>
                                <p class="text-blue-950 text-xs"><?=$emprego->criado_em ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex">
                            <div class="flex-1">
                                <h1 class="text-blue-500 font-bold">MAIS SOBRE O EMPREGO</h1>
                                <div class="">
                                    <P><span class="font-bold">Descricao:</span> <?=escape($emprego->descricao)?></P>
                                    <P><span class="font-bold">Qualificao:</span> <?=escape($emprego->qualificacao)?></P>
                                    <P><span class="font-bold">Tipo de emprego:</span> <?=escape($emprego->tipo_emprego)?></P>
                                    <P><span class="font-bold">Estado:</span> <?=escape($emprego->status)?></P>
                                </div>
                            </div>
                            <div class=" flex-1">
                                <h1 class="text-blue-500 font-bold">SOBRE A EMPRESA</h1>
                                <div class="">
                                    <P><span class="font-bold">Email:</span> <?=escape($emprego->usuario->usuario->email)?></P>
                                    <P><span class="font-bold">Sector:</span> <?=escape($emprego->usuario->sector)?></P>
                                    <P><span class="font-bold">Endereco:</span> <?=escape($emprego->usuario->usuario->endereco)?></P>
                                    <P><span class="font-bold">NIF:</span> <?=escape($emprego->usuario->NIF)?></P>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <?php else:?>
                    <h1>NAO HA EMPREGOS DISPONIVEIS</h1>
                <?php endif ?>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>