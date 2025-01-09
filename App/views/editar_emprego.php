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
                <div>
                    <h1 class="text-xl font-bold text-blue-950 mb-9">Editar Trabalho</h1>
                    <form class="border-gray-400 border-2 rounded-md p-8" method="POST">
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
                                
                                    <input type="hidden" name="tags" id="tags">
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