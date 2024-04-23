<?php require 'layouts/menu.php';?>
<?php include_once './models/store.php';
$bilet = getBilet($_GET['id_bilet']);?>
    <div class="min-w-screen min-h-screen bg-black-300 flex items-center p-5 lg:p-10 overflow-hidden relative">
        <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
            <div class="md:flex items-center -mx-10">
                <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                <input name=<?=$bilet['id_bilet']?> type="hidden">
                    <div class="relative">
                        <img src="./assets/img/<?= $bilet['imgplace_bilet'] ?>" class="w-full relative z-10" alt=""> 
                        <div class="border-4 border-[#F56E1E] absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-10">
                    <div class="mb-10">
                        <h1 class="font-bold uppercase text-2xl mb-2"><?= $bilet['place_bilet']?></h1>
                        <p class="text-sm uppercase mb-4"><?= $bilet['time_bilet']?></p>
                        <p class="text-sm"><?= $bilet['genre_bilet']?></p>
                    </div>
                    <div>
                        <div class="inline-block align-bottom mr-5">
                          
                        </div>
    
                    </div>
                    <a href="https://afisha.yandex.ru/artist/makulatura?city=moscow&source=search-page">
                            <button id="click1" class="text-[#F56E1E] font-medium transition duration-300 bg-sky-100/0 py-2 px-4
                    border-2 border-[#F56E1E] hover:bg-[#F56E1E] mt-16 hover:text-white
                    focus:outline-none rounded text-base">ЗАБРОНИРОВАТЬ</button>
                            </a>

                            <!-- <script type="text/javascript">
                               let button = document.getElementById("click1"),
                                count = 0;
                                button.onclick = function() {
                                count += 1;
                                button.innerHTML = "Кликов: " + count;
                            };
      </script> -->
                </div>
                
            </div>
            <a href="tour.php">
                <button class=" px-10 py-2 mt-10 bg-black rounded-sm
                  font-medium text-white uppercase
                  ">НАЗАД</button>
            </a>
            
        </div>
    </div>
<?php require 'layouts/footer.php';?>