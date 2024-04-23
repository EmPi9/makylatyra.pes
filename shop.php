<?php require 'layouts/menu.php'; ?>
<?php include_once './models/store.php';
$products = getProducts() ?>

<p class="text-white text-center text-3xl font-medium">Магазин</p>
        <p class="text-gray-700 text-center text-xl font-medium pt-4 pb-8">Покупайте книги наших солистов!</p>
        
        <div class="text-center justify-center">
          <div class="mx-auto max-w-2xl py-8 px-4 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="flex justify-start">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <div class="input-group rounded">
                    <input id="search" type="search" class="form-control rounded p-2 " placeholder="Поиск по магазину" aria-label="Search" aria-describedby="search-addon" />
                    <!-- <button type="button" class="btn btn-outline-primary">search</button> -->
                </div>
                <div id="searchResult" class="text-white font-medium p-1 border-b-2"></div>
            </li>
        </ul>
        </div>
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <?php foreach ($products as $product):?>
                      <div class="group relative ">
                      <a href="./product.php?id_product=<?= $product['id_product']?>">
                        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80 ">
                          <img src="./assets/img/<?= $product['img_product'] ?>" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                          <div>
                            <h3 class="text-white text-lg font-medium">
                              
                                <span aria-hidden="true" class="absolute mt-1 text-sm text-white"></span>
                                  <?= $product['name_product'] ?>
                              </a>
                            </h3>
                            <p class="mt-1 text-sm text-white uppercase"><?= $product['type_product'] ?></p>
                          </div>
                          <p class="text-base font-medium text-white">₽<?= $product['cost_product'] ?></p>
                            </a>
                        </div>
                      </div>
                <?php endforeach;?>

            </div>
          </div>
        </div>
        <script>

    document.getElementById('search').addEventListener('input', (e) => {
        searchResult.innerHTML = '';
        postTitleSearch(e.target.value);
    });

    async function postTitleSearch(text) {
        let response = await fetch(`./controllers/search.php?search=${text}`);
        let found = await response.text();
        response = JSON.parse(found);
        if (response.code === 'ok') {
            searchResult.innerHTML = '';
            response.answer.forEach((elem) => {
                searchResult.innerHTML += `<a href="./product.php?id_product=${elem.id_product}">${elem.name_product}</p>`;
            })
        }
    }
</script>
<?php require 'layouts/footer.php';?>