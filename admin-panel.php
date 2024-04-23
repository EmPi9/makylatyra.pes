<?php require 'layouts/menu.php';?>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">Админ панель</h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Управление сайтом.</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg bg-white">
        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-100 text-[#F56E1E] mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Управление пользователями</h2>
          <p class="leading-relaxed text-base">Вы можете удалить аккаунты пользователей, посмотреть их роли, имена и e-mail.</p>
          <a href="admin-user.php">
        <button class="px-10 py-2 mt-10 bg-black rounded-sm
                  font-medium text-white uppercase
                  ">ПЕРЕЙТИ</button>
        </a>
        </div>
      </div>

      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg bg-white">
        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-100 text-[#F56E1E] mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
            </svg>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Управление концертами</h2>
          <p class="leading-relaxed text-base">Вы можете добавлять и изменять дату и место проведения концерта, а также полностью удалить концерт с сайта.</p>
          <a href="admin-bilet.php">
        <button class="px-10 py-2 mt-10 bg-black rounded-sm
                  font-medium text-white uppercase
                  ">ПЕРЕЙТИ</button>
        </a>
        </div>
      </div>
      
      <div class="xl:w-1/3 md:w-1/2 p-4">
        <div class="border border-gray-200 p-6 rounded-lg bg-white">
        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-100 text-[#F56E1E] mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Управление товаром</h2>
          <p class="leading-relaxed text-base">Вы можете добавлять и изменять название, описание, и цену, а также полностью удалить товар с сайта.</p>
          <a href="admin-product.php">
        <button class="px-10 py-2 mt-10 bg-black rounded-sm
                  font-medium text-white uppercase
                  ">ПЕРЕЙТИ</button>
        </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require 'layouts/footer.php';?>