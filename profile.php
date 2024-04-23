<?php require 'layouts/menu.php'; ?>
        <p class="text-white text-center text-3xl font-medium pt-4">Личный кабинет</p>
         <p class="text-gray-700 text-center text-xl font-medium pt-4 pb-2">Ваши данные и изменение пароля.</p>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-12 mx-auto ">
    <div class="flex flex-wrap text-center -m-4">
      <div class="p-4 lg:w-2/2 md:w-full">
        <div class="flex border-2 rounded-lg bg-white p-6 sm:flex-row flex-col">
          <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-12 mx-auto">
              <div class="flex flex-col text-center w-full mb-2">
              <h1 class="mx-auto leading-relaxed text-base">Мой уникальный номер: <?= $user['id'] ?></h1>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"><?= $user['username'] ?></h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base"> <?= $user['email'] ?></p>
              </div>

              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="name" class="leading-7 text-sm text-gray-600">Логин</label>
                      <input value=<?= $user['login'] ?> type="text" name="login" id="login" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-[#F56E1E] focus:bg-white focus:ring-2 focus:ring-[#F56E1E] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="email" class="leading-7 text-sm text-gray-600">Ваше имя</label>
                      <input value=<?= $user['username'] ?> type="text" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border[#F56E1E] focus:bg-white focus:ring-2 focus:ring-[#F56E1E] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="tel" class="leading-7 text-sm text-gray-600">E-mail</label>
                      <input value=<?= $user['email'] ?> type="text" name="username" id="username" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border[#F56E1E] focus:bg-white focus:ring-2 focus:ring-[#F56E1E] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="name" class="leading-7 text-sm text-gray-600">Старый пароль</label>
                      <input type="password" minlength="6" name="oldPassword" id="oldPassword" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border[#F56E1E]focus:bg-white focus:ring-2 focus:ring-[#F56E1E] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="message" class="leading-7 text-sm text-gray-600">Новый пароль</label>
                      <input type="password" minlength="6" name="password" id="password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border[#F56E1E] focus:bg-white focus:ring-2 focus:ring-[#F56E1E] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="message" class="leading-7 text-sm text-gray-600">Новый пароль</label>
                      <input type="password" minlength="6" name="confirmPassword" id="confirmPassword" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border[#F56E1E] focus:bg-white focus:ring-2 focus:ring-[#F56E1E] text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                  </div>
                  
                  <div class="p-2 justify-center">
                  <a href="index.php">
        <button class=" flex mx-auto text-[#F56E1E]  bg-sky-100/0 py-2 px-8 transition duration-300
                    border-2 border-[#F56E1E] hover:bg-[#F56E1E] hover:text-white 
                    focus:outline-none rounded text-lg
                  ">НАЗАД</button>
        </a>
                  </div>

                  <div class="p-2 justify-center">
                  <a href="controllers/logout.php" class="flex mx-auto text-[#F56E1E]  bg-sky-100/0 py-2 px-8 transition duration-300
                    border-2 border-[#F56E1E] hover:bg-[#F56E1E] hover:text-white hover:border-[#F56E1E]  
                    focus:outline-none rounded text-lg">СОХРАНИТЬ</a>
                  </div>

                  <div class="p-2 justify-center">
                  <a href="./order.php" class="flex mx-auto text-[#F56E1E]  bg-sky-100/0 py-2 px-8 transition duration-300
                    border-2 border-[#F56E1E] hover:bg-[#F56E1E] hover:text-white hover:border-[#F56E1E]  
                    focus:outline-none rounded text-lg">МОИ ЗАКАКЗЫ</a>
                  </div>

                  <div class="p-2 justify-center">
                  <a href="controllers/logout.php" class="flex mx-auto text-[#F52E1E]  bg-sky-100/0 py-2 px-8 transition duration-300
                    border-2 border-[#F52E1E] hover:bg-[#F52E1E] hover:text-white hover:border-[#F52E1E] 
                    focus:outline-none rounded text-lg">ВЫЙТИ ИЗ АККАУНТА</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>

  

<?php require 'layouts/footer.php'; ?>

