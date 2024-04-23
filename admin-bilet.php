<?php require 'layouts/menu.php';?>
<?php include_once './models/store.php';
$posts = getBilets() ?>

    <main class="container mt-5">
        <div class="row">
            <div class="col-7 mx-auto">

                <p class="text-white text-center text-3xl font-medium mb-4">Добавление нового билета</p>
                <form action="./controllers/addBilet.php" method="post" enctype="multipart/form-data" class='text-center'>
                    <input type="text" name="time_bilet" id="time_bilet" class="form-control p-2" placeholder="Дата проведения концерта">
                    <input type="text" name="place_bilet" id="place_bilet" class="form-control p-2" placeholder="Место проведения концерта">

                    <button type="submit" class="btn btn-success flex duration-500 mt-4 transition items-center justify-center mx-auto text-white bg-[#F56E1E] py-2 px-8 border border-solid border-black
                        focus:outline-none hover:bg-indigo-600 rounded text-lg hover:border-solid hover:border hover:border-[#F56E1E] hover:bg-transparent
                        hover:text-[#F56E1E]">Отправить</button>
                </form>
            </div>
        </div>
    </main>
<?php foreach ($posts as $post):?>
    <div class="text-center justify-center ">
    <div class="mx-auto max-w-2xl py-8 px-4 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8 ">

        <div class="flex bg-white duration-500 transition flex-wrap flex-col border-2 text-4xl gap-x-16 gap-y-12 justify-around rounded-lg bg-white p-8 sm:flex-row flex-col sm:justify-center mx-16 mt-8">

                <div><?= $post['time_bilet'] ?></div>
                <div><?= $post['place_bilet'] ?></div>
                
                <div><button class="text-[#F56E1E] font-medium transition duration-300 bg-sky-100/0 py-2 px-4
                    border-2 border-[#F56E1E] hover:bg-[#F56E1E] hover:text-white
                    focus:outline-none rounded text-lg">ЗАБРОНИРОВАТЬ</button></div>
            <a href="controllers/delBilet.php?id_bilet=<?= $post['id_bilet']?>" class="text-red-500 font-medium transition duration-300 rounded text-lg">Удалить</a>
            <button data-modal-target="<?= $post['id_bilet'] ?>" data-modal-toggle="<?= $post['id_bilet'] ?>" class="block text-cyan-500 text-center font-medium transition duration-300 rounded text-lg" type="button">
                                Редактирование
                            </button>
                        </div>
                        <div id="<?= $post['id_bilet'] ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                            <div class="relative w-full h-full max-w-md md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="<?= $post['id_bilet'] ?>">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-black">Редактирование</h3>
                                        <form class="space-y-6" action="./controllers/editBilet.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id_bilet" id="id_bilet" class="form-control mb-2"  placeholder="Наименование" value="<?= $post['id_bilet'] ?>">
                                            <input type="text" name="time_bilet" id="time_bilet" class="form-control mb-2"  placeholder="Время" value="<?= $post['time_bilet'] ?>">
                                            <input type="text" name="place_bilet" id="place_bilet" class="form-control mb-2" placeholder="Место проведения" value="<?= $post['place_bilet'] ?>">
                                            <button type="submit" class="btn btn-success mt-3 text-black">Отправить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php endforeach;?>

<?php require 'layouts/footer.php'; ?>