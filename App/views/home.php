<?php $this->view('partials/header') ?>
    <main>
        <section class="bg-gray-100">
            <div class="container py-9">
                <div class="md:flex items-center justify-between">
                    <div class="md:w-2/5">
                        <div class="">
                            <h1 class="text-blue-950 text-4xl md:text-4xl font-bold">Contrate os <span class="text-blue-600">melhores</span> estudantes recen <span class="text-blue-600">formados</span></h1>
                            <p class="my-6 text-slate-600">A Boa Conexao entre os melhores estudantes da nosssa universidade acontece aqui</p>
                            <form class=" bg-white rounded-md inline-block " action="" method="">
                                <input type="search" name="search" class="p-2" >
                                <button class="bg-blue-600 text-white font-bold py-[0.4rem] px-[0.4rem] rounded-md" type="submit">Pesquisar</button>
                            </form>
                        </div>
                        <div class="mt-6">
                            <span class="text-slate-400 mr-2 inline-block">Exemplo:</span>
                            <span class="text-slate-400 font-medium border-2 border-slate-400 px-[0.8rem] py-[0.4rem] rounded-md mr-4 inline-block">Front-end</span>
                            <span class="text-slate-400 font-medium border-2 border-slate-400 px-[0.8rem] py-[0.4rem] rounded-md mr-4 inline-block">Back-end</span>
                            <span class="text-slate-400 font-medium border-2 border-slate-400 px-[0.8rem] py-[0.4rem] rounded-md inline-block">Design</span>
                        </div>
                    </div>
                    <div class="hidden md:inline-block md:w-2/4">
                        <img src="<?= ASSETS_URL?>/images/coworking-31.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <?php $this->view('partials/area_trabalho') ?>
        <section>
            <div class="container py-9">
                <div class="flex justify-between">
                    <h2 class="font-bold text-xl text-blue-950">Trabalhos Relacionados</h2>
                    <a href="">
                        <ion-icon class="text-3xl" name="return-up-forward-outline"></ion-icon>
                    </a>
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
            </div>
        </section>

        <section>
            <div class="container py-9">
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="md:w-2/4">
                        <h2 class="text-3xl font-bold">As melhores Empresas postam suas vagas aqui.</h2>
                        <p class="my-5">
                        As melhores oportunidades estão aqui. Grandes empresas confiam nesta plataforma para divulgar suas vagas, oferecendo chances reais de crescimento profissional. Não perca a chance de trabalhar com marcas que valorizam talento, inovação e comprometimento. Cadastre-se, explore as vagas e dê o próximo passo na sua carreira.
                        </p>
                        <a class="bg-blue-600 text-white py-2 px-4 font-medium rounded-md inline-block" href="">Procurar</a>
                    </div>
                    <div class="md:w-2/4">
                        <img src="<?= ASSETS_URL?>/images/analyst-22.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <?php $this->view('partials/seccao_empresas') ?>
        <section>
            <div class="container pb-16">
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="md:w-2/4">
                        <img src="<?= ASSETS_URL?>/images/augmented-reality-1-20.svg" alt="">
                    </div>
                    <div class="md:w-2/4">
                        <h2 class="text-3xl font-bold">Es um dos melhores estudantes da sua instituicao?</h2>
                        <p class="my-5">
                            As melhores empresas e escolas estão conectadas no nosso website para encontrarem os melhores estudantes para serem contratados, conecte-se também.
                        </p>
                        <a class="bg-blue-600 text-white py-2 px-4 font-medium rounded-md inline-block" href="">Procurar</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>