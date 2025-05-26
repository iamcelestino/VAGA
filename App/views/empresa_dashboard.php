<?php $this->view('partials/header') ?>
<main>
    <section class="">
        <div class="container py-16">
            <div class="sm:flex items-center justify-round gap-10 mt-4 border-2 border-gray-200 p-2">
                <div class="flex-1 bg-gray-200 p-8 mb-2 md:mb-0 hover:bg-[#3F3D56] hover:text-white  rounded-md">
                    <a href="" class="">
                        <h3 class="font-bold text-3xl"> </h3>
                        <P class="font-bold text-2xl">Meus Empregos</P>
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
                <div class="md:flex md:items-center md:justify-between mb-4">
                    <h1 class="font-bold text-2xl"><?=count($candidaturas)?> candidaturas Apresentadas</h1>
                    <div class="">
                        <a href="<?=BASE_URL?>emprego/postar_emprego" class="py-2 p-4 bg-blue-600 text-white font-bold rounded-md">Postar Emprego</a>
                    </div>
                </div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estudante</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">titulo da vaga</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data Candidatura</th>
                             <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Feedback</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Accoes</th>
                        </tr>
                    </thead>
                    <?php if($candidaturas): ?>
                        <?php foreach($candidaturas as $candidatura): ?>
                    <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"><?= escape($candidatura->nome_estudante) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= escape($candidatura->email_estudante) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= escape($candidatura->titulo) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= escape($candidatura->data_candidatura) ?></td>
                                                                <td class="px-6 py-4 whitespace-nowrap"><?= $candidatura->feedback ? $candidatura->feedback : 'Sem Resposta' ?></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="<?=BASE_URL?>emprego/feedback/<?=$candidatura->id_estudante?>">Responder</a>
                                </td>
                            </tr>
                    </tbody>
                        <?php endforeach?>
                    <?php else: ?>
                        <h1>Nenhuma candidatura Apresentada</h1>
                    <?php endif ?>
                </table>
            </div>
        </div>
    </section>
</main>
<?php $this->view('partials/footer') ?>