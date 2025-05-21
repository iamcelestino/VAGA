<?php
use App\Model\Auth;
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?=ASSETS_URL?>/style/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <style>
        #mobileMenu {
            width: 100%;
            height: 100%;
            background-color: blue;
            position: fixed;
            color: white;
            top: 0;
            left: 0;
            transform: translate3d(100vw, 0, 0);
            transition: transform .3s cubic-bezier(0, .52, 0, 1);
            padding: 0 2rem;
        }

        #mobileMenu.show {
            transform: translate3d(0vw, 0, 0);
        }
    </style>
</head>
<body>
    <header class="bg-gray-100">
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
                    <li class="list-none ml-4"><a href="<?=BASE_URL?>estudante">Estudantes</a></li>
                </nav>
                <div class="flex items-center">
                <li class="group relative  ml-4 list-none">
                    <div class="flex items-center justify-center">
                        <a href="">
                            <ion-icon class="text-xl" name="person-outline"></ion-icon>
                        </a>
                    </div>
                    <div class="hidden group-hover:block absolute bg-gray-100 min-w-[100px] shadow-lg z-10">
                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>perfil/<?= Auth::getId_usuario()?>">Perfil</a>
                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>dashboard">Dashboard</a>
                        <a class="float-none text-black px-4 py-3 no-underline block text-left"  href="<?= BASE_URL ?>logout">Logout</a>
                    </div>
                </li>
                    <li class="list-none hidden sm:inline-block ml-4"><a href="<?= BASE_URL ?>login">login</a></li>
                    <li class="list-none hidden sm:inline-block mx-4 border-2 border-blue-600 px-[1.2rem] py-[0.4rem] rounded-md font-medium"><a href="<?= BASE_URL ?>cadastro">Cadastro</a></li>
                    <li class="list-none bg-blue-600 inline-block px-[1.2rem] py-[0.4rem] rounded-md font-medium text-white"><a href="<?= BASE_URL ?>emprego/postar_emprego">Postar Emprego</a></li>
                    <div class="flex flex-col ml-4 md:hidden" id="burger-menu">
                        <span class="bg-slate-400 py-[3px] mb-[0.2rem] w-8 rounded-md"></span>
                        <span class="bg-slate-400 py-[3px] mb-[0.2rem]  w-8 rounded-md"></span>
                        <span class="bg-slate-400 py-[3px] w-8 rounded-md"></span>
                    </div>
                </div>

                <div id="mobileMenu" class="menu">

                    <nav class="">
                        <li class="list-none"><a href="<?= BASE_URL ?>">Home</a></li>
                        <li class="list-none ml-4"><a href="<?= BASE_URL ?>emprego">Procurar Emprego</a></li>
                        <li class="list-none ml-4"><a href="<?= BASE_URL ?>empresa">Empresas</a></li>
                        <li class="list-none ml-4"><a href="<?=BASE_URL?>estudante">Estudantes</a></li>
                    </nav>
                    <div class="">
                    <li class="list-none block ml-4"><a href="<?= BASE_URL ?>login">login</a></li>
                    <li class="list-none block mx-4 border-2 border-blue-600 px-[1.2rem] py-[0.4rem] rounded-md font-medium"><a href="<?= BASE_URL ?>cadastro">Cadastro</a></li>

                </div>
            </div>
        </div>
    </header>