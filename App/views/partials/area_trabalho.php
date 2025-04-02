<section class="area__de_trabalho">
    <div class="container py-9">
        <div>
            <div class="md:flex justify-between items-start">
                <h2 class="font-bold text-xl text-blue-950 mb-9">Areas de Trabalho</h2>
                <form class=" bg-white rounded-md inline-block " action="" method="">
                    <input type="search" name="search" class="p-2 border-2 border-gray-400 rounded-md" >
                    <button class="bg-blue-600 text-white font-bold py-2 px-[0.4rem] rounded-md" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 md:grid-cols-5 gap-10">
                
                <li class="list-none bg-gray-100 mb-4 p-8 rounded-md hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                    <a href="<?=BASE_URL?>emprego/sector/Tecnologia" class="flex flex-col items-center text-blue-950 font-bold">
                        <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                            Tecnologia
                    </a>
                </li>
    
                <li class="list-none bg-gray-100 mb-4 p-8 rounded-md hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                    <a href="<?=BASE_URL?>emprego/sector/Saúde" class="flex flex-col items-center text-blue-950 font-bold">
                        <ion-icon class="block text-7xl text-gray-400" name="medkit-outline"></ion-icon>
                        Saude
                    </a>
                </li>

                <li class="list-none bg-gray-100 mb-4 p-8 rounded-md  hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                    <a href="<?=BASE_URL?>emprego/sector/Educação" class="flex flex-col items-center text-blue-950 font-bold">
                        <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                        Educacao
                    </a>
                </li>

                <li class="list-none bg-gray-100 mb-4 p-8 rounded-md  hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                    <a href="<?=BASE_URL?>emprego/sector/Finanças" class="flex flex-col items-center text-blue-950 font-bold">
                        <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                        Financas
                    </a>
                </li>
                
                <li class="list-none bg-gray-100 mb-4 p-8 rounded-md  hover:bg-blue-500 hover:scale-105 ease-out duration-300">
                    <a href="<?=BASE_URL?>emprego/sector/" class="flex flex-col items-center text-blue-950 font-bold">
                        <ion-icon class="block text-7xl text-gray-400" name="code-outline"></ion-icon>
                        Outras areas
                    </a>
                </li>
        </div>
    </div>
</section>