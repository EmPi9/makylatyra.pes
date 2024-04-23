<?php require 'layouts/menu.php';?>
<?php include_once './models/store.php';
//$productCount = !empty($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] : 0;
$product = getProduct($_GET['id_product']);
var_dump($product);
?>

<div class="min-w-screen min-h-screen bg-black-300 flex items-center p-5 lg:p-10 overflow-hidden relative">
    <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
        <div class="md:flex items-center -mx-10">
            <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
            <input name=<?=$product['id_product']?> type="hidden">
                <div class="relative">
                    <img src="./assets/img/<?= $product['img_product'] ?>" class="w-full relative z-10" alt="">
                    <div class="border-4 border-[#F56E1E] absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-10">
                <div class="mb-10">
                    <h1 class="font-bold uppercase text-2xl mb-2"><?= $product['name_product']?></h1>
                    <p class="text-sm uppercase mb-4"><?= $product['type_product']?></p>
                    <p class="text-sm"><?= $product['genre_product']?></p>
                </div>
                <div>
                    <div class="inline-block align-bottom mr-5">
                        <span class="text-3xl leading-none align-baseline">₽</span>
                        <span class="font-bold text-3xl leading-none align-baseline"><?= $product['cost_product'] ?></span>
                    </div> <form id="addProd" class="justify-right">
                    <div class="inline-block align-bottom pt-4">
                        <a id="addToCardElem" href="#" onclick="addProd(<?= $product['id_product']?>)" class="text-[#F56E1E] font-medium transition duration-300 bg-sky-100/0 py-2 px-4
                        border-2 border-[#F56E1E] hover:bg-[#F56E1E] hover:text-white
                        focus:outline-none rounded text-base">В КОРЗИНУ</a>
                        
                    </div><input name="<?= $product['id_product']?>" type="hidden"></form>

                </div>
            </div>
        </div>
        <a href="shop.php">
        <button class=" px-10 py-2 mt-10 bg-black rounded-sm
                  font-medium text-white uppercase
                  ">НАЗАД</button>
        </a>
    </div>
  </div>


<script>
    document.getElementById('addToCardElem').addEventListener('click', (e) => {
        e.preventDefault();
    });

    async function addProd(id_product) {
        let response = await fetch(`./controllers/addProd.php?id_product=${id_product}`);
        let text = await response.text();
        response = JSON.parse(text);
        console.log(response)
        if (response.code === 'ok') {
            productCount.innerHTML = response.qty;
        }
    }
</script>

<!--<!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->-->
<!--<div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">-->
<!--    <div>-->
<!--        <a title="Buy me a beer" href="https://www.buymeacoffee.com/scottwindon" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">-->
<!--            <img class="object-cover object-center w-full h-full rounded-full" src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg"/>-->
<!--        </a>-->
<!--    </div>-->
<!--</div>-->
<?php require 'layouts/footer.php';?>