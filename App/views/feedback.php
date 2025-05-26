<?php $this->view('partials/header') ?>
    <main>

        <section class="">
            <div class="container py-16">
                <div>
                    <form class="" method="POST">
                        <div>
                            <div class="">
                                <div class="">
                                    <textarea  name="feedback" id="" class="w-full border-gray-400 border-2 rounded-md p-8" placeholder="Apresente um feedback ao estudante"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-end justify-center">
                            <button  type="submit" class="bg-blue-500 py-2 px-[2rem] text-white font-bold rounded-md">Responder</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php $this->view('partials/footer') ?>