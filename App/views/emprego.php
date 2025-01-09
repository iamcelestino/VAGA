<?php $this->view('partials/header') ?>
    <main>
        <section class="bg-gray-100">
            <div class="container py-9">
                <div class="">
                    <div class="">
                        <div class="">
                            <h1 class="text-blue-950 text-4xl md:text-4xl font-bold">Discubra Os melhores<span class="text-blue-500"> Melhores empregos</span></h1>
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

        <section class="area__de_trabalho">
            <div class="container py-9">
                <h2 class="font-bold text-xl text-blue-950 mb-9">Areas de Trabalho</h2>
                <div class="sm:grid sm:grid-cols-3 md:grid-cols-5 gap-10">
                        
                        <li class="list-none bg-gray-100 mb-4 p-8 rounded-md hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                            <a href="" class="flex flex-col items-center text-blue-950 font-bold">
                                <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                                 Tecnologia
                            </a>
                        </li>
           
                        <li class="list-none bg-gray-100 mb-4 p-8 rounded-md hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                            <a href="" class="flex flex-col items-center text-blue-950 font-bold">
                                <ion-icon class="block text-7xl text-gray-400" name="medkit-outline"></ion-icon>
                                Saude
                            </a>
                        </li>

                        <li class="list-none bg-gray-100 mb-4 p-8 rounded-md  hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                            <a href="" class="flex flex-col items-center text-blue-950 font-bold">
                                <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                                Educacao
                            </a>
                        </li>

                        <li class="list-none bg-gray-100 mb-4 p-8 rounded-md  hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                            <a href="" class="flex flex-col items-center text-blue-950 font-bold">
                                <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                                Financas
                            </a>
                        </li>
                        
                        <li class="list-none bg-gray-100 mb-4 p-8 rounded-md  hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                            <a href="" class="flex flex-col items-center text-blue-950 font-bold">
                                <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                                Outras areas
                            </a>
                        </li>
                </div>
            </div>
        </section>
        
                
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
                <div class="mb-4">
                    <div class="shadow-gray-300 shadow-2xl rounded-md p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <ion-icon class="text-4xl bg-gray-400 rounded-full p-2 mr-4" name="logo-google"></ion-icon>
                                <div class="">
                                    <p class="font-bold"><?= $emprego->titulo?></p>
                                    <p class="text-gray-300">Google Inc.</p>
                                </div>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <form class="mb-4" method="POST">
                                    <input type="" class="hidden" value="<?=$emprego->id_emprego ?>" name="id_emprego">
                                    <button type="submit" class="bg-blue-600 text-white font-bold px-4 p-2 rounded-md">Candidatar-se</button>
                                </form>
                                <p class="text-gray-300 text-sm">publicado: 12 de Novembro</p>
                            </div>
                        </div>
                        <div>
                            <span>Photoshop</span>
                            <span>UI/UX</span>
                            <span>Canva</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <h1>EMPRESA</h1>
                            <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque soluta suscipit, fugit earum atque illo quibusdam ipsum omnis tenetur, reprehenderit iure facilis qui expedita ratione distinctio possimus assumenda totam? Excepturi libero, animi consequatur perferendis optio magni officia soluta. Molestias, at.</p>
                        </div>
                        <div class="">
                        <h1>PAPEL </h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque soluta suscipit, fugit earum atque illo quibusdam ipsum omnis tenetur, reprehenderit iure facilis qui expedita ratione distinctio possimus assumenda totam? Excepturi libero, animi consequatur perferendis optio magni officia soluta. Molestias, at.</p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <?php else:?>
                    <h1>NAO HA EMPREGOS DISPONIVEIS</h1>
                <?php endif ?>
            </div>
        </section>


        <section >
            <div  style="background-image: url('./public/assets/images/wave.svg');"  class="bg-no-repeat bg-center bg-cover min-h-full pb-52 pt-16">
                <div class="text-center">
                    <h1>Empresas Relacionadas</h1>
                    <p>
                        As Melhores Empresas estão a procura de Melhores estudantes
                        candidata-se para uma Vaga.
                    </p>
                    <div>
                        <li class="list-none"><a href="">GOOGLE</a></li>
                        <li class="list-none"><a href=""></a>JETUR</li>
                        <li class="list-none"><a href=""></a>CARRINHO</li>
                        <li class="list-none"><a href=""></a>SONANGOL</li>
                        <li class="list-none"><a href=""></a>BAI</li>
                        <li class="list-none"><a href=""></a>ISPB</li>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>