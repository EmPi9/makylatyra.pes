<?php require 'layouts/menu.php';?>
<?php include_once './models/store.php';
$posts = getProducts() ?>
    <main class="container mt-5">
        <div class="row">
            <div class="mx-auto">
            
                <p class="text-white text-center text-3xl font-medium mb-4">Добавление нового товара</p>
                <form action="./controllers/addProduct.php" method="post" enctype="multipart/form-data" class='text-center'>
                    <input type="text" name="name_product" id="name_product" class="form-control p-2"  placeholder="Наименование">
                    <input type="text" name="genre_product" id="genre_product" class="form-control p-2" placeholder="Доп. информация">
                    <input type="text" name="cost_product" id="cost_product" class="form-control p-2" placeholder="Цена">
                    <input type="text" name="type_product" id="type_product" class="form-control p-2" placeholder="Тип продутка">
                    <input type="file" name="img_product" class="form-control">

                    <button type="submit" class="btn btn-success flex duration-500 mt-4 transition items-center justify-center mx-auto text-white bg-[#F56E1E] py-2 px-8 border border-solid border-black
                        focus:outline-none hover:bg-indigo-600 rounded text-lg hover:border-solid hover:border hover:border-[#F56E1E] hover:bg-transparent
                        hover:text-[#F56E1E]">Отправить</button>
                </form>
            </div>
        </div>
    </main>

    <div class="text-center justify-center">
        <div class="mx-auto max-w-2xl py-8 px-4 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    <?php foreach ($posts as $post):?>
                        <div class="group relative ">
                            <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80 ">
                                <img src="./assets/img/<?= $post['img_product'] ?>" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-white text-lg font-medium">
                                        <a href="bin.html">
                                            <span aria-hidden="true" class="absolute mt-1 text-sm text-white"></span>
                                            <?= $post['name_product'] ?>
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-white uppercase"><?= $post['type_product'] ?></p>
                                </div>
                                <p class="text-base font-medium text-white"><?= $post['cost_product'] ?></p>
                            </div>
                            <a href="controllers/delProduct.php?id_product=<?= $post['id_product'] ?>" class="text-orange-600">Удалить</a>
                            <button data-modal-target="<?= $post['id_product'] ?>" data-modal-toggle="<?= $post['id_product'] ?>" class="block text-cyan-500 text-center font-medium transition duration-300 rounded text-lg" type="button">
                                Редактирование
                            </button>
                        </div>
                        <div id="<?= $post['id_product'] ?>" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                            <div class="relative w-full h-full max-w-md md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="<?= $post['id_product'] ?>">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Редактирование</h3>
                                        <form class="space-y-6" action="./controllers/editProduct.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id_product" id="id_product" class="form-control mb-2"  placeholder="Наименование" value="<?= $post['id_product'] ?>">
                                            <input type="text" name="name_product" id="name_product" class="form-control mb-2"  placeholder="Наименование" value="<?= $post['name_product'] ?>">
                                            <input type="text" name="genre_product" id="genre_product" class="form-control mb-2" placeholder="Доп. информация" value="<?= $post['genre_product'] ?>">
                                            <input type="text" name="cost_product" id="cost_product" class="form-control mb-2" placeholder="Цена" value="<?= $post['cost_product'] ?>">
                                            <input type="text" name="type_product" id="type_product" class="form-control mb-2" placeholder="Тип продутка" value="<?= $post['type_product'] ?>">

                                            <button type="submit" class="btn btn-success mt-3 text-black">Отправить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach;?>
            </div>
    </div>
 

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

<?php require 'layouts/footer.php'; ?>