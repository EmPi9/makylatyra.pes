<?php require 'layouts/menu.php'; ?>
<?php include_once './models/store.php';
$bilets = getBilets() ?>

<p class="text-white text-center text-3xl font-medium">Концерты</p>
      <p class="text-gray-700 text-center text-xl font-medium pt-4 pb-8">Покупайте билеты на наши концерты!</p>

      <section>
          <?php foreach ($bilets as $bilet):?>
          <div class="flex duration-500 transition flex-wrap flex-col border-2 text-4xl gap-x-16 gap-y-12 justify-around rounded-lg bg-white p-8 sm:flex-row flex-col sm:justify-center 
          mx-16 mt-8">
              <div><?= $bilet['time_bilet'] ?></div>
              <div><?= $bilet['place_bilet'] ?></div>
              <a href="https://afisha.yandex.ru/artist/makulatura?city=moscow&source=search-page">
              <div><button class="text-[#F56E1E] font-medium transition duration-300 bg-sky-100/0 py-2 px-4
                    border-2 border-[#F56E1E] hover:bg-[#F56E1E] hover:text-white
                    focus:outline-none rounded text-lg">ЗАБРОНИРОВАТЬ</button></div>
          </div>
          </a>
          <?php endforeach;?>
      </section>


<?php require 'layouts/footer.php';?>