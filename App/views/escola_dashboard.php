<?php
use App\Model\Auth;
$this->view('partials/header');
?>

<main>
    <section class="">
        <div class="container py-16">
            <div class="sm:flex items-center justify-round gap-10 mt-4 border-2 border-gray-200 p-2">
                <div class="flex-1 bg-gray-200 p-8 mb-2 md:mb-0 hover:bg-[#3F3D56] hover:text-white  rounded-md">
                    <a href="" class="">
                        <h3 class="font-bold text-3xl"> </h3>
                        <P class="font-bold text-2xl">Estudantes Endorsados</P>
                    </a>
                </div>
                <div class="flex-1 bg-gray-200 p-8 mb-2 md:mb-0 hover:bg-[#3F3D56] hover:text-white  rounded-md">
                    <a href="" class="">
                        <h3 class="font-bold text-3xl"></h3>
                        <p class="font-bold text-2xl">Empresas</p>
                    </a>
                </div>
            </div>
            <div class="mt-5">
                <h1 class="font-bold text-2xl mb-5">Estudantes</h1>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome Completo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Endereço</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Curso</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data de nascimento</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Endorsado</th>
                        </tr>
                    </thead>
                    <?php if($estudantes):  ?>
                        <?php foreach($estudantes as $estudante): ?>
                    <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $estudante->nome ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $estudante->email ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $estudante->endereco ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $estudante->data_nascimento ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $estudante->curso ?></td>
                                <td class=" text-center text-2xl">
                                    <form  method="POST">
                                        <input class="hidden" name="id_estudante" type="text" value="<?= $estudante->id_estudante?>">
                                        <input class="hidden" name="id_escola" type="text"  value="<?= Auth::getId_usuario() ?>">
                                        <button class="" type="submit">
                                            <ion-icon  name="checkmark">endorsar</ion-icon>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                        <?php endforeach ?>
                    <?php else: ?>
                    <?php endif ?>
                </table>
            </div>
        </div>
    </section>
</main>