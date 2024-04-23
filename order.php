<?php require 'layouts/menu.php';
include_once './models/store.php';
$orders = getBuckets(); ?>
<p class="text-white text-center text-3xl font-medium">Заказы</p>
        <p class="text-gray-700 text-center text-xl font-medium pt-4 pb-8">Здесь ваши покупки!</p>
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-6 mx-auto">
  <h2 class="text-2xl font-medium text-white my-24">Мои заказы:</h2>
    <div class="flex flex-wrap gap-1 -m-12">  
    <?php  foreach ($orders as $order):
        ?>
    <?php if ($user['id'] == $order['id']):?>
      <div class="p-12 md:w-96 flex flex-col items-start bg-white">
        <h2 class="sm:text-3xl text-xl title-font font-medium text-black mt-4 mb-4"><?= $order['name_product'] ?></h2>
       <img src="./assets/img/<?= $order['img_product'] ?>" alt="order" class="lg:w-1/2  h-64 object-cover object-center rounded">
        <hr class="h-5 text-red">
        <a class="inline-flex items-center">
          <span class="flex-grow flex flex-col pl-4">
            <span class="text-xl mt-3 text-black">Количество: <?= $order['qty']?></span>
            <span class=" text-xl mt-3 text-black">Цена покупки: <?= $order['qty']*$order['cost_product'] ?>Р.</span>
          </span>
        </a>
      </div>
    <?php endif;?>
      <?php endforeach;?>
    </div>
  </div>
</section>
<?php require 'layouts/footer.php';?>