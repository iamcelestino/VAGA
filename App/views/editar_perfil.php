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
                    <li class="list-none hidden sm:inline-block mx-4 border-2 border-blue-600 px-[1.2rem] py-[0.4rem] rounded-md font-medium"><a href="<?= BASE_URL ?>cadastro">Sign up</a></li>
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
                <div class="">
                    <div class="bg-gray-100 p-4 sm:p-12 rounded-md">
                        <form action="" method="POST">
                        <?php if($usuario): ?>
                            <?php $imagem = busca_imagem($usuario->imagem)?> 
                            <div class="sm:flex justify-between">
                                <div class="">
                                    <img class="rounded-full" src="<?=$imagem?>" alt="">
                                    <div class="mt-4 text-center">
                                        <label for="image_browser" class="bg-indigo-500 p-2 text-white font-medium">
                                            <input id="image_browser" type="file" name="imagem" class="file_info">
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <div class="">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h1 class="font-bold text-3xl">Editar Perfil</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="nome" class=" text-blue-950">Nome</label>
                                    <input
                                        class="p-[0.7rem] w-full my-2 border-2 border-gray-200 rounded-md"
                                        type="text"
                                        name="nome"
                                        id="nome"
                                        value="<?=buscar_var('nome', $usuario->nome)?>"
                                        placeholder="Nome"
                                    >
                                    <label for="Email address" class="text-blue-950">Email Address</label>
                                    <input
                                        class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md"
                                        type="text"
                                        name="email"
                                        id="Email address"
                                        value="<?=buscar_var('email', $usuario->email)?>"
                                        placeholder="Email address"
                                    >
                                    <div class="">
                                    <select name="tipo_usuario" id="tipo_usuario" class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md"">
                                        <option value="">Tipo de Usuario</option>
                                        <option <?=buscar_selecionado('tipo_usuario', 'escola')?> value="escola">Escola</option>
                                        <option <?=buscar_selecionado('tipo_usuario', 'empresa')?>  value="empresa">Empresa</option>
                                        <option <?=buscar_selecionado('tipo_usuario', 'estudante')?> value="estudante">Estudante</option>
                                    </select>
                                    </div>
                                    <label for="" class="text-blue-950">Endereco</label>
                                    <input
                                        class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md"
                                        type="text"
                                        name="endereco"
                                        id="endereco"
                                        value="<?=buscar_var('endereco', $usuario->endereco)?>"
                                        placeholder="Endereco"
                                    >
                                    <label for="password" class="text-blue-950">Palavra-passe</label>
                                    <input
                                        class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md"
                                        type="text"
                                        name="password"
                                        id="password"
                                        value="<?=buscar_var('password')?>"
                                        placeholder="Password"
                                    >
                                    <button class="bg-blue-500 text-white py-[0.7rem] w-full rounded-md font-bold text-xl">Salvar</button>
                                </div>
                            </div>
                        </form>
                    <?php else: ?>
                    <?php endif  ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
    </script>
<?php $this->view('partials/footer') ?>