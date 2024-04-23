<?php require 'layouts/menu.php';

?>
<p class="text-white text-center text-3xl font-medium pt-4">Корзина товаров</p>
<p class="text-gray-700 text-center text-xl font-medium pt-4 pb-8">Оплачивайте покупки!</p>
<div class="flex justify-center">
<div class="flex h-full flex-col bg-white shadow-xl mx-16 rounded w-8/12">
    <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6 ">
        <div class="flex items-start justify-between">

            <div class="ml-3 flex h-7 items-center">

            </div>
        </div>
        <form action="./controllers/addInBucket.php" method="post" enctype="multipart/form-data">
        <div class="mt-8 justify-center">
            <div class="flow-root">
                <ul role="list" class="-my-6 divide-y divide-gray-200">
                    <?php if (!empty($_SESSION['cart'])): ?>
                    <?php foreach ($_SESSION['cart'] as $id_product => $item): ?>
                    <li class="flex py-6">
                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                            <img src="assets/img/<?= $item['img_product']?>" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                        </div>

                        <div class="ml-4 flex flex-1 flex-col">
                            <div>
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        <a href="#"><?= $item['name_product']?></a>
                                    </h3>
                                    
                                    <div class="flex">
                                    <p class="text-base font-medium text-gray-900 pr-2 mt-0.5">Количество:</p>
                                    <a id="moveToCardElem" href="#" onclick="addFromCard(<?=$item['id_product']?>)" class="btn btn-primary px-2 me-2 bg-[#F56E1E] border border-solid border-white rounded text-white text-lg hover:border-solid hover:border hover:border-[#F56E1E] hover:bg-transparent
                        hover:text-[#F56E1E]">
                                            <p>+</p>
                                        </a>
                                            <p class="mt-0.5"><?= $item['qty'] ?> </p>
                                        <a id="moveToCardElem" onclick="removeFromCard(<?=$item['id_product']?>)" class="btn btn-primary px-2 me-2 ml-2 bg-[#F56E1E] rounded text-white border border-solid border-white text-lg hover:border-solid hover:border hover:border-[#F56E1E] hover:bg-transparent
                        hover:text-[#F56E1E]">
                                            <p class="cursor-pointer">-</p></a>
                                    </div>
                                </div>
                                <p class="mt-1 text-sm text-gray-500 uppercase"><?= $item['type_product']?></p>
                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                       
                                        <div class="form-outline">
                                        
                                        </div>
                                        
                                    </div>
                                    <div class="text-base font-medium text-gray-900">Цена за <?= $item['qty']?> товара <?= $item['qty'] * $item['cost_product'] ?> ₽ </div>
                                </div>
                            </div>
                            <div class="flex flex-1 items-end justify-between text-sm">

                        </div>
                    </div>
                    </li><!-- след продкут -->
                    <?endforeach;?>
                </ul>
            </div>
        </div>
    </div>

    <?php else: ?>
        <p class="text-center text-xl font-medium pb-16">Корзина пустая</p>
    <? endif; ?>
    <?php if (!empty($_SESSION['cart'])): ?>
    <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
        <div class="flex justify-between text-base font-medium text-gray-900">
            <p>ИТОГО</p>
            <p>₽ <?= $_SESSION['cart.sum'] ?></p>
        </div>
        <p class="mt-0.5 text-sm text-gray-500">Цена за все товары указаные в корзине.</p>
        <div class="mt-6">
            <input id="id_product" name="id_product" type="hidden" value="<?=$item['id_product']?>">
            <input id="id" name="id" type="hidden" value="<?=$user['id']?>">
            <input id="cost_product" name="cost_product" type="hidden" value="<?= $_SESSION['cart.sum'] ?>">
            <div class="flex justify-evenly">
            <button>
            <a href="./controllers/delBucket.php" class="flex duration-500 transition items-center justify-center mx-auto text-white bg-[#F52E1E] py-2 px-8 border border-solid border-white
                        focus:outline-none hover:bg-indigo-600 rounded text-lg hover:border-solid hover:border hover:border-[#F52E1E] hover:bg-transparent
                        hover:text-[#F52E1E]">ОЧИСТИТЬ КОРЗИНУ</a>
            </button>
                </div>
        </div>
        <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
            <p>
                или
                <a href="shop.php">
                <button type="button" class="font-medium text-[#F56E1E] mb-8 text-center">
                    Продолжить покупку
                    <span aria-hidden="true"> &rarr;</span>
                </button>
                </a>
            </p>
        </div>
        

    </div>
    <div class="relative px-4 sm:px-6 lg:px-8 pb-8 max-w-lg mx-auto rounded pr-12" x-data="{ card: true }">
                <div class="bg-white px-8 pb-6 rounded-b shadow-lg">

                    <!-- Card header -->
                    <div class="text-center mb-6">                          
                        <h1 class="text-xl leading-snug text-gray-800 font-semibold pt-4 mb-2">Оплата</h1>
                    </div>
    
                    <!-- Card form -->
                   <form action="./controllers/addCard.php" method="post" enctype="multipart/form-data">
                   <div x-show="card">
                      <div class="space-y-4">
                          <!-- Card Number -->
                          <div>
                              <label class="block text-sm font-medium mb-1" for="card-nr">Номер карты <span class="text-red-500">*</span></label>
                              <input id="number_card" name="number_card" minlength="16" maxlength="16" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="1234 1234 1234 1234" required/>
                          </div>
                          <!-- Expiry and CVC -->
                          <div class="flex space-x-4">
                              <div class="flex-1">
                                 <label class="block text-sm font-medium mb-1" for="card-expiry">Месяц / Год <span class="text-red-500">*</span></label>
                                  <input id="mm_yy" name="mm_yy" minlength="4" maxlength="5" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="ММ / ГГ" required/>
                               </div>
                               <div class="flex-1">
                                    <label class="block text-sm font-medium mb-1" for="card-cvc">CVV / CVC <span class="text-red-500">*</span></label>
                                  <input id="cvv_cvc" name="cvv_cvc" minlength="3" maxlength="3" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="CVV / CVC" required/>
                                </div>
                          </div>
                         <!-- Name on Card -->
                         <div>
                             <label class="block text-sm font-medium mb-1" for="card-name">Имя на карте <span class="text-red-500">*</span></label>
                             <input id="name_card" name="name_card" minlength="8" maxlength="20" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="Кирилл Чеков" required/>
                         </div>
                            <!-- Email -->
                           <div>
                                <label class="block text-sm font-medium mb-1" for="card-email">Email <span class="text-red-500">*</span></label>
                               <input id="email_card" name="email_card" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="email" placeholder="kir@company.com" required/>
                            </div>
                        </div>

                        <!-- Form footer -->
                        <div class="mt-6">
                            <div class="mb-4 flex justify-center">
                            <button type="submit"><p class="flex duration-500 transition items-center justify-center mx-auto text-white bg-[#F56E1E] py-2 px-8 border border-solid border-white
                        focus:outline-none hover:bg-indigo-600 rounded text-lg hover:border-solid hover:border hover:border-[#F56E1E] hover:bg-transparent
                        hover:text-[#F56E1E]">
          ОПЛАТИТЬ <?= $_SESSION['cart.sum'] ?> ₽
                        </div>
                        <? endif; ?>
                        </div>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

   
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

            <!-- Card body -->
           


<script>
    document.getElementById('addToCardElem').addEventListener('click', (e) => {
        e.preventDefault();
    });

    async function removeAllFromCard(id_product, count) {
        let response = await fetch(`./controllers/moveFromCard.php?id_product=${id_product}&count=${count}&move=all`);
        let text = await response.text();
        response = JSON.parse(text);
        if (response.code === 'ok') {

        }
        //console.log(JSON.parse(text));
        location.reload();
    }

    document.getElementById('removeFromCardElem').addEventListener('click', (event) => {
        event.preventDefault();
    });

    async function removeFromCard(id_product) {
        let response = await fetch(`./controllers/moveFromCard.php?id_product=${id_product}&move=one`);
        let text = await response.text();
        response = JSON.parse(text);
        if (response.code === 'ok') {

        }
        console.log(JSON.parse(text));
        location.reload();
    }
    async function addFromCard(id_product) {
        let response = await fetch(`./controllers/moveFromCard.php?id_product=${id_product}&move=add`);
        let text = await response.text();
        response = JSON.parse(text);
        if (response.code === 'ok') {

        }
        console.log(JSON.parse(text));
        location.reload();
    }
</script>
<?php require 'layouts/footer.php';?>
