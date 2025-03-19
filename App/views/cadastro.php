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
<body style="background-image: url('./public/assets/images/circles.svg');"  class="bg-no-repeat bg-left-center bg-auto">
    <header class="">
        <div class="container py-4">
            <div class="flex justify-between items-center">
                <div class="">
                    <a href="<?= BASE_URL ?>">
                        <span class="font-bold text-4xl text-blue-600">VAGA.</span>
                    </a>
                </div>
                <nav class="hidden md:flex items-center">
                    <li class="list-none"><a href="<?= BASE_URL ?>">Home</a></li>
                    <li class="list-none ml-4"><a href="<?= BASE_URL ?>emprego">Procurar Emprego</a></li>
                    <li class="list-none ml-4"><a href="<?= BASE_URL ?>empresa">Empresas</a></li>
                    <li class="list-none ml-4"><a href="">Estudantes</a></li>
                </nav>
                <div class="flex items-center">
                    <li class="list-none hidden sm:inline-block ml-4"><a href="<?= BASE_URL ?>login">login</a></li>
                    <li class="list-none hidden sm:inline-block mx-4 border-2 border-blue-600 px-[1.2rem] py-[0.4rem] rounded-md font-medium"><a href="<?= BASE_URL ?>cadastro">Cadastro</a></li>
                    <li class="list-none bg-blue-600 inline-block px-[1.2rem] py-[0.4rem] rounded-md font-medium text-white"><a href="<?= BASE_URL ?>/empresa/post_job">Post Job</a></li>
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
        <section>
            <div class="container py-16">
                <div class="md:grid md:grid-cols-2 place-content-center">
                    <div class="hidden md:grid">
                        <img src="<?= ASSETS_URL ?>/images/fingerprint-94.svg" alt="">
                    </div>
                    <div class="bg-gray-100 p-4 sm:p-12 rounded-md">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h1 class="font-bold text-3xl"><span class="text-blue-500">Vamos criar a sua</span> <br>
                                        conta agora mesmo
                                        </h1>
                                        <p class="text-gray-400 my-4">TRABALHE MELHOR, VIVA MELHOR</p>
                                    </div>
                                </div>
                            </div>

                            <label for="nome" class=" text-blue-950">Nome</label>
                            <input
                                class="p-[0.7rem] w-full my-2 border-2 border-gray-200 rounded-md"
                                type="text"
                                name="nome"
                                id="nome"
                                value="<?=buscar_var('nome')?>"
                                placeholder="Nome"
                            >
                            <label for="Email address" class="text-blue-950">Email Address</label>
                            <input
                                class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md"
                                type="text"
                                name="email"
                                id="Email address"
                                value="<?=buscar_var('email')?>"
                                placeholder="Email address"
                            >
                    
                            <label for="" class="text-blue-950">Endereco</label>
                            <input
                                class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md"
                                type="text"
                                name="endereco"
                                id="endereco"
                                value="<?=buscar_var('endereco')?>"
                                placeholder="Endereco"
                            >

                            <input type="file" class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" name="imagem">
                            <div class="">
                                <select name="tipo_usuario" id="tipo_usuario" class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" onchange="
                                mostraCampoParaEmpresa()">
                                    <option value="">Tipo de Usuario</option>
                                    <option value="escola">Escola</option>
                                    <option value="empresa">Empresa</option>
                                    <option value="estudante">Estudante</option>
                                </select>
                            </div>
                            
                            <div id="empresa" class="hidden">
                                <input type="" class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" name="NIF" placeholder="NIF">
                                <select name="sector" id="" class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md">
                                    <option value="">Sector</option>
                                    <option value="Finanças">Finanças</option>
                                    <option value="Educação">Educação</option>
                                    <option value="Saúde">Saúde</option>
                                    <option value="Tecnologia">Tecnologia</option>
                                    <option value="outro">Tecnologia</option>
                                </select>
                            </div>

                            
                            <div class="hidden" id="estudante">
                                <div>
                                    <label for="data_nascimento" class="">Data de Nascimento</label>
                                    <input type="date" class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" placeholder="data de nascimento" name="data_nascimento">
                                </div>
                                <div class="">
                                <?php if($escolas): ?>
                                    <select name="id_escola" id="" class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md">
                                    <?php foreach($escolas as $escola): ?>
                                        <option value="<?= $escola->id_escola ?>"><?=$escola->nome?></option>
                                    <?php endforeach ?>
                                    </select>
                                <?php endif ?>
                                </div>
                                <div class="">
                                    <label class="" for="">Curso</label>
                                    <input type="text" class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" placeholder="curso" name="curso">
                                </div>
                            </div>
                           


                            <label for="password" class="text-blue-950">Palavra-passe</label>
                            <input
                                class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md"
                                type="text"
                                name="password"
                                id="password"
                                value="<?=buscar_var('password')?>"
                                placeholder="Password"
                            >
                            <p class="text-gray-400 my-2 text-center">
                                Ainda não tens uma conta? 
                                <a href="<?=BASE_URL?>/signup" class="text-blue-900">Criar Conta</a>
                            </p>
                            <button class="bg-blue-500 text-white py-[0.7rem] w-full rounded-md font-bold text-xl">Criar Conta</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
    </script>
<?php $this->view('partials/footer') ?>