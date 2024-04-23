<?php require 'layouts/menu.php'; ?>

    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

    <!-- Snippet -->
    <section class="antialiased text-gray-600 min-h-screen p-4">
        <div class="h-full">
            <!-- Pay component -->
            <div>
                <!-- Card background1 -->
                <div class="relative px-4 sm:px-6 lg:px-8 max-w-lg mx-auto">
                    <img class="rounded-t shadow-lg" src="./assets/img/payment.jpg" width="460" height="180" alt="Pay background" />
                </div>
                <!-- Card body -->
                <div class="relative px-4 sm:px-6 lg:px-8 pb-8 max-w-lg mx-auto" x-data="{ card: true }">
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
                                    <input id="number_card" name="number_card" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="1234 1234 1234 1234" required/>
                                </div>
                                <!-- Expiry and CVC -->
                                <div class="flex space-x-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-expiry">Месяц / Год <span class="text-red-500">*</span></label>
                                        <input id="mm_yy" name="mm_yy" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="ММ / ГГ" required/>
                                    </div>
                                    <div class="flex-1">
                                        <label class="block text-sm font-medium mb-1" for="card-cvc">CVV / CVC <span class="text-red-500">*</span></label>
                                        <input id="cvv_cvc" name="cvv_cvc" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="CVV / CVC" required/>
                                    </div>
                                </div>
                                <!-- Name on Card -->
                                <div>
                                    <label class="block text-sm font-medium mb-1" for="card-name">Имя на карте <span class="text-red-500">*</span></label>
                                    <input id="name_card" name="name_card" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="text" placeholder="Кирилл Чеков" required/>
                                </div>
                                <!-- Email -->
                                <div>
                                    <label class="block text-sm font-medium mb-1" for="card-email">Email <span class="text-red-500">*</span></label>
                                    <input id="email_card" name="email_card" class="text-sm text-gray-800 bg-white border rounded leading-5 py-2 px-3 border-gray-200 hover:border-gray-300 focus:border-indigo-300 shadow-sm placeholder-gray-400 focus:ring-0 w-full" type="email" placeholder="kir@company.com" required/>
                                </div>
                            </div>

                            <!-- Form footer -->
                            <div class="mt-6">
                                <div class="mb-4">
                                    <button class="flex mx-auto text-[#F56E1E] bg-sky-100/0 py-2 px-8
                    border-2 border-[#F56E1E] hover:bg-[#F56E1E] hover:text-white
                    focus:outline-none rounded text-lg">Оплатить</button>
                            </div>
                              
                            </div>
                        </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require 'layouts/footer.php';?>
