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
            Авторизация
          </h2>

          <form id="loginform" class="mt-10" method="post">
            
              <label for="login" class="block text-xs font-semibold text-gray-600 uppercase">Логин</label>
              <input id="login" type="text" name="login" placeholder="Логин"
                  class="block w-full py-3 px-1 mt-2 
                  text-gray-800 appearance-none 
                  border-b-2 border-gray-100
                  focus:text-gray-500 focus:outline-none focus:border-gray-200"
                  required />

            
              <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Пароль</label>
              <input id="password" type="password" name="password" placeholder="Пароль" autocomplete="current-password"
                  class="block w-full py-3 px-1 mt-2 mb-4
                  text-gray-800 appearance-none 
                  border-b-2 border-gray-100
                  focus:text-gray-500 focus:outline-none focus:border-gray-200"
                  required />
             
              <button type="submit"
                  class="w-full btn-success py-2 mt-2 bg-black rounded-sm
                  font-medium text-white uppercase
                  focus:outline-none transition duration-300 border border-solid hover:border-solid hover:border hover:border-[#F56E1E] hover:bg-sky-100/0
                  hover:text-[#F56E1E]" id="btn-reg">
                  Войти
              </button>

              
              <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">
                  <a href="registration.php" class="flex-2 hover:underline transition duration-300 hover:text-[#F56E1E]">
                      Создать аккаунт
                  </a>
              </div>
              <div class="hidden border border-red-400 rounded bg-red-100 px-4 py-3 text-red-700 " id="errorBlock"></div>
              <div class="hidden border border-green-400 rounded bg-green-100 px-4 py-3 text-green-700 " id="successBlock"></div>
          </form>


      </div>
  </div>
</div>



<script>
    loginform.onsubmit = async (e) => {
        //отменяем перезагрузку страницы
        e.preventDefault();

        //отправляем запрос в editUser в контроллер
        let response = await fetch('./controllers/loginUser.php', {
            method: 'POST',
            body: new FormData(loginform)
        });

        // получение результата и конвертация его в текст, т.к контроллер отпраялет текст (echo)
        let result = await response.text();

        if (response.status === 200) {
            errorBlock.classList.add('hidden');
            successBlock.classList.remove('hidden');
            successBlock.innerHTML = result;
            window.location.href = 'index.php';
        }
        if (response.status === 400) {
            successBlock.classList.add('hidden');
            errorBlock.classList.remove('hidden');
            errorBlock.innerHTML = result;
        }

    }
</script>
        <script src="https://cdn.tailwindcss.com"></script>
  </body>
  </html>