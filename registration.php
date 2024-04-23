<?php require 'layouts/menu.php'; ?>


<div class="flex flex-col h-screen bg">
  
  <div class="grid place-items-center mx-2 my-20 sm:my-auto">
      <div class="flex">
          <span class="text-center font-bold my-20 mx-auto">        
              
          </span>
      </div>
  
  
     
      <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
          px-6 py-10 sm:px-10 sm:py-6 
          bg-white rounded-lg shadow-md lg:shadow-lg">

         
          <h2 class="text-center font-semibold text-3xl lg:text-4xl text-black">
            Регистрация
          </h2>

          <form action="./controllers/registrationUser.php" class="mt-10" method="post">
              <label for="login" class="block text-xs font-semibold text-gray-600 uppercase">Логин</label>

              <input id="login" type="text" name="login" placeholder="Логин" minlength="3" 
                     class="block w-full py-3 px-1 mt-2 text-gray-800 appearance-none border-b-2 border-gray-100 focus:text-gray-500 focus:outline-none form-control"
                     required />

              <label for="username" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Имя</label>

              <input id="username" type="text" name="username" placeholder="Имя" minlength="3" 
                     class="block w-full py-3 px-1 mt-2 text-gray-800 appearance-none border-b-2 border-gray-100 focus:text-gray-500 focus:outline-none form-control"
                     required />
            
              <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Электронная почта</label>

              <input id="email" type="email" name="email" placeholder="E-mail адрес" autocomplete="email"
                  class="block w-full py-3 px-1 mt-2 
                  text-gray-800 appearance-none 
                  border-b-2 border-gray-100
                  focus:text-gray-500 focus:outline-none focus:border-gray-200 form-control"
                  required />

            
              <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Пароль</label>
              <input id="password" type="password" name="password" placeholder="Пароль" autocomplete="current-password" minlength="6" 
                  class="block w-full py-3 px-1 mt-2 mb-4
                  text-gray-800 appearance-none 
                  border-b-2 border-gray-100
                  focus:text-gray-500 focus:outline-none focus:border-gray-200 form-control"
                  required />

                <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="privacy" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-[#F56E1E] dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-[#F56E1E] dark:ring-offset-gray-800" required />
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-gray-500 dark:text-gray-300">Я принимаю условия <a class="font-medium text-primary-600 hover:underline transition duration-300 hover:text-[#F56E1E]" href="privacy.php">Политики конфиденциальность</a></label>
                      </div>
                </div>
             
              <button type="submit"
                  class="w-full py-2 mt-8 bg-black rounded-sm
                  font-medium text-white uppercase
                  focus:outline-none transition duration-300 border border-solid hover:border-solid hover:border hover:border-[#F56E1E] hover:bg-sky-100/0
                  hover:text-[#F56E1E]">
                  зарегистрироватся
              </button>

              
              <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">
                  <a href="login.html" class="flex-2 hover:underline transition duration-300 hover:text-[#F56E1E]">
                      У меня уже есть аккаунт!
                  </a>

              </div>
          </form>
      </div>
  </div>
</div>
<?php require 'layouts/footer.php';?>