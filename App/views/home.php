<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?=ASSETS_URL?>/style/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <header class="md:bg-gray-200">
        <div class="container py-4">
            <div class="flex justify-between items-center">
                <div class="">
                    <a href="">
                        <span class="font-bold text-4xl text-blue-600">VAGA.</span>
                    </a>
                </div>
                <nav class="hidden md:flex items-center">
                    <li class="list-none"><a href="">Home</a></li>
                    <li class="list-none ml-4"><a href="">Procurar Emprego</a></li>
                    <li class="list-none ml-4"><a href="">Empresas</a></li>
                </nav>
                <div class="flex items-center">
                    <li class="list-none hidden sm:inline-block ml-4"><a href="">login</a></li>
                    <li class="list-none hidden sm:inline-block mx-4 border-2 border-blue-600 px-[1.2rem] py-[0.4rem] rounded-md font-medium"><a href="">Sign up</a></li>
                    <li class="list-none bg-blue-600 inline-block px-[1.2rem] py-[0.4rem] rounded-md font-medium text-white"><a href="">Post Job</a></li>
                    <div class="flex flex-col ml-4 md:hidden">
                        <span class="bg-slate-400 py-[3px] mb-[0.2rem] w-8 rounded-md"></span>
                        <span class="bg-slate-400 py-[3px] mb-[0.2rem]  w-8 rounded-md"></span>
                        <span class="bg-slate-400 py-[3px] w-8 rounded-md"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
                <div class="">
                    <a href="" class="inline-block">
                        
                        <li class="list-none bg-gray-200 mb-4 p-8 rounded-md">
                            <ion-icon class="block" name="code-outline"></ion-icon>
                            Programacao
                        </li>
                    </a>
                    <a href="" class="inline-block">
                        
                        <li class="list-none bg-gray-200 mb-4 p-8 rounded-md">
                            <ion-icon class="block" name="code-outline"></ion-icon>
                            Programacao
                        </li>
                    </a>
                    <a href="" class="inline-block">
                        
                        <li class="list-none bg-gray-200 mb-4 p-8 rounded-md">
                            <ion-icon class="block" name="code-outline"></ion-icon>
                            Programacao
                        </li>
                    </a>
                    <a href="" class="inline-block">
                        
                        <li class="list-none bg-gray-200 mb-4 p-8 rounded-md">
                            <ion-icon class="block" name="code-outline"></ion-icon>
                            Programacao
                        </li>
                    </a>
                    <a href="" class="inline-block">
                        
                        <li class="list-none bg-gray-200 mb-4 p-8 rounded-md">
                            <ion-icon class="block" name="code-outline"></ion-icon>
                            Programacao
                        </li>
                    </a>

                    <a href="" class="inline-block">
                        
                        <li class="list-none bg-gray-200 mb-4 p-8 rounded-md">
                            <ion-icon class="block" name="code-outline"></ion-icon>
                            Programacao
                        </li>
                    </a>

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="flex justify-between">
                    <h2 class="font-bold">Trabalhos Relacionados</h2>
                    <a href="">
                        <ion-icon class="text-3xl" name="return-up-forward-outline"></ion-icon>
                    </a>
                </div>
                <div class="">
                    <div class="border-4 border-gray-400 rounded-md p-6">
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
                    <div class="border-4 border-gray-400 rounded-md p-6">
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
            <div class="container">
                <div>
                    <h2>AS Melhores Empresas postam suas vagas aqui.</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, optio!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, sint!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, cum.
                    </p>
                    <a href="">Procurar</a>
                </div>
                <div>
                    <img src="<?= ASSETS_URL?>/images/analyst-22.svg" alt="">
                </div>
            </div>
        </section>
        <section class="">
            <div class="container">
                <h1>Empresas Relacionadas</h1>
                <p>
                    As Melhores Empresas estão a procura de Melhores estudantes
                    candidata-se para uma Vaga.
                </p>
                <div>
                    <li><a href="">GOOGLE</a></li>
                    <li><a href=""></a>JETUR</li>
                    <li><a href=""></a>CARRINHO</li>
                    <li><a href=""></a>SONANGOL</li>
                    <li><a href=""></a>BAI</li>
                    <li><a href=""></a>ISPB</li>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="">
                <div class="">
                    <a href="">
                        <span>V</span>
                        <span>VAGA.</span>
                    </a>
                </div>
                <div class="">
                    <ion-icon name="logo-twitter"></ion-icon>
                    <ion-icon name="logo-linkedin"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                </div>
            </div>
            <div class="">
                <p>Copyright 2020 Vaga<span></span></p>
                <div>
                    <p>Police and privacy</p>
                    <p>Terms of Service</p>
                    <p>Security & Privacy</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>