<?php $this->view('partials/header') ?>
    <main>
        <section class="bg-gray-100">
            <div class="container py-9">
                <div class="">
                    <div class="">
                        <div class="">
                            <h1 class="text-blue-950 text-4xl md:text-4xl font-bold">Recrute os melhores estudantes de Angola</span></h1>
                            <p class="my-6 text-slate-600">A Boa Conexao entre os melhores estudantes da nosssa universidade acontece aqui</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="">
            <div class="container py-16">
                <div class="">
                    <h1 class="text-blue-950 font-bold text-xl">Porque postar suas vaga aqui?</h1>
                    <div class="flex flex-items gap-10">
                        <div class="flex-1">
                            <ion-icon class="text-3xl  bg-gray-200 rounded-lg p-2 text-blue-500"" name="git-pull-request"></ion-icon>
                            <h1 class="text-blue-950 font-bold text-md">Encontras os melhores estudantes</h1>
                            <p class="text-gray-400">Encontre os melhores talentos para sua empresa. Nossa plataforma conecta você aos estudantes mais dedicados e qualificados, prontos para enfrentar os desafios do mercado.</p>
                        </div>
                        <div class="flex-1">
                            <ion-icon class="text-3xl bg-gray-200 rounded-lg p-2  text-blue-500" name="git-pull-request"></ion-icon>
                            <h1 class="text-blue-950 font-bold text-md">Facil e Rapido</h1>
                            <p class="text-gray-400">Fácil e rápido, do jeito que você precisa. Nossa plataforma foi pensada para agilizar processos sem complicações. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container py-16">
                <div>
                    <h1 class="text-xl font-bold text-blue-950 mb-9">Vamos postar um Emprego</h1>
                    <form action="" class="border-gray-400 border-2 rounded-md p-8" method="POST">
                        <div>
                            <div class="md:flex gap-8">
                                <div class="md:flex-1">
                                    <label class="block" for="">Titulo</label>
                                    <input class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" type="text" name="titulo">
                                </div>
                                <div class="tags flex-1">
                                    
                                    <div class="tag-list" id="tag-list"></div>
                                    <label for="">Etiqueta</label>
                                    <input
                                        class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md"
                                        type="text"
                                        id="tag-input"
                                        placeholder="Add a tag"
                                        onkeypress="addTag(event)"
                                    />
                                    </div>
                                
                                    <input type="hidden" name="tags" id="tags" />
                                    <input type="hidden" name="id_empresa">
                                </div>
                            </div>
                            <div class="md:flex gap-8">
                                <div class="md:flex-1">
                                    <label class="block" for="">Data Limite</label>
                                    <input 
                                        class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" 
                                        type="date" 
                                        name="data_limite">
                                </div>
                                <div class="md:flex-1">
                                    <label class="block" for="">Qualificao</label>
                                    <input 
                                        class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" 
                                        type="text" 
                                        name="qualificacao"
                                    >
                                </div>
                            </div>

                            <div class="md:flex gap-8">
                                <select class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" name="status" id="">
                                    <option value="">Seleciona o estado da vaga</option>
                                    <option value="ativo">activo</option>
                                    <option value="inativo">inactivo</option>
                                    <option value="preenchido">preenchido</option>
                                </select>
                                <select class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md" name="tipo_emprego" id="">
                                    <option value="">Selecione o Tipo de vaga</option>
                                    <option value="tempo integral">Temp integral</option>
                                    <option value="meio período">Meio periodo</option>
                                    <option value="freelancer">Freelancer</option>
                                    <option value="temporário">Temporario</option>
                                </select>
                            </div>
                            <div>
                            <div class="">
                                <label for="">Descrição</label>
                                <textarea class="p-[0.7rem] w-full my-2 border-2 border-gray-300 rounded-md"  name="descricao" id=""></textarea>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="bg-blue-500 py-2 px-[2rem] text-white font-bold rounded-md">Abrir Cnadidadutura</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>