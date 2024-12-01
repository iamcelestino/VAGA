<?php $this->view('partials/header') ?>
    <main>
        <section class="bg-gray-200">
            <div class="container py-9">
                <div class="md:flex items-center justify-between">
                    <div class="md:w-2/5">
                        <div class="">
                            <h1 class="text-blue-950 text-4xl md:text-4xl font-bold">Contrate os <span class="text-blue-600">melhores</span> estudantes recen <span class="text-blue-600">formados</span></h1>
                            <p class="my-6 text-slate-600">A Boa Conexao entre os melhores estudantes da nosssa universidade acontece aqui</p>
                            <form class=" bg-white p-2 rounded-md" action="" method="">
                                <input type="search" name="search" class="md:w-[85%]" >
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

        <section class="area__de_trabalho">
            <div class="container py-9">
                <h2 class="font-bold text-md mb-9">Areas de Trabalho</h2>
                <div class="sm:grid sm:grid-cols-3 md:grid-cols-6 gap-10">
                        
                        <li class="list-none bg-gray-100 mb-4 p-8 rounded-md hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                            <a href="" class="flex flex-col items-center text-blue-950 font-bold">
                                <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                                 software
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
                                lorem lorem lorem
                            </a>
                        </li>


                        
                        <li class="list-none bg-gray-100 mb-4 p-8 rounded-md  hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                            <a href="" class="flex flex-col items-center text-blue-950 font-bold">
                                <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                                Agricultura
                            </a>
                        </li>

                        
                        <li class="list-none bg-gray-100 mb-4 p-8 rounded-md  hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                            <a href="" class="flex flex-col items-center text-blue-950 font-bold">
                                <ion-icon class="block text-7xl text-gray-400" name="cellular-outline"></ion-icon>
                                Telecomunicoes
                            </a>
                        </li>
                        
                        <li class="list-none bg-gray-100 mb-4 p-8 rounded-md  hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                            <a href="" class="flex flex-col items-center text-blue-950 font-bold">
                                <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                                Educacao
                            </a>
                        </li>
                </div>
            </div>
        </section>
        <section>
            <div class="container py-9">
                <div class="flex justify-between">
                    <h2 class="font-bold">Trabalhos Relacionados</h2>
                    <a href="">
                        <ion-icon class="text-3xl" name="return-up-forward-outline"></ion-icon>
                    </a>
                </div>
                <div class="mb-4">
                    <div class="border-2  border-gray-400 rounded-md p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <ion-icon class="text-4xl bg-gray-400 rounded-full p-2 mr-4" name="logo-google"></ion-icon>
                                <div class="">
                                    <div class="titulo">Product Design</div>
                                    <div class="empresa">Google Inc.</div>
                                </div>
                            </div>
                            <p class="Tipo__de_trabalho bg-blue-700 p-[0.3rem] text-white rounded-md">FullTime</p>
                        </div>
                        <div>
                            <span>Photoshop</span>
                            <span>UI/UX</span>
                            <span>Canva</span>
                        </div>

                    </div>
                </div>

                <div class="">
                    <div class="border-2 border-gray-400 rounded-md p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <ion-icon class="text-4xl bg-gray-400 rounded-full p-2 mr-4" name="logo-google"></ion-icon>
                                <div class="">
                                    <div class="titulo">Product Design</div>
                                    <div class="empresa">Google Inc.</div>
                                </div>
                            </div>
                            <p class="Tipo__de_trabalho bg-blue-700 p-[0.3rem] text-white rounded-md">FullTime</p>
                        </div>
                        <div>
                            <span>Photoshop</span>
                            <span>UI/UX</span>
                            <span>Canva</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-9">
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="md:w-2/4">
                        <h2 class="text-3xl font-bold">As melhores Empresas postam suas vagas aqui.</h2>
                        <p class="my-5">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, optio!
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, sint!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, cum.
                        </p>
                        <a class="bg-blue-600 text-white py-2 px-4 font-medium rounded-md inline-block" href="">Procurar</a>
                    </div>
                    <div class="md:w-2/4">
                        <img src="<?= ASSETS_URL?>/images/analyst-22.svg" alt="">
                    </div>
                </div>
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

        <section>
            <div class="container pb-16">
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="md:w-2/4">
                        <img src="<?= ASSETS_URL?>/images/augmented-reality-1-20.svg" alt="">
                    </div>
                    <div class="md:w-2/4">
                        <h2 class="text-3xl font-bold">As melhores Empresas postam suas vagas aqui.</h2>
                        <p class="my-5">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, optio!
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, sint!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, cum.
                        </p>
                        <a class="bg-blue-600 text-white py-2 px-4 font-medium rounded-md inline-block" href="">Procurar</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>