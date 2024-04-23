<?php require 'layouts/menu.php';?>
<?php
include_once 'models/connection.php';
$pdo = Connection::get()->connect();
$sql = 'SELECT * FROM public.users';
$statement = $pdo->prepare($sql);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<p class="text-white text-center text-3xl font-medium pb-8">Управление пользователями</p>
<div class="relative shadow-md sm:rounded-lg container jus-center pl-96">
    <div class="flex items-center justify-between pb-4 pr-24 bg-white dark:bg-gray-900 ">
        <div>
        
    </div>
    
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="p-4">
                <div class="flex items-center">
                    ID
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                Пользователь
            </th>
            <th scope="col" class="px-6 py-3">
                Роль
            </th>
            <th scope="col" class="px-6 py-3">
                Действие
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user) :?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <?= $user['id'] ?>
                    </div>
                </td>
                <th scope="row" class="flex items-center text-gray-900 whitespace-nowrap dark:text-white">
                    <!-- <img class="w-15 h-10 rounded-full" src="./img/user.jpg" alt="Jese image" > -->
                    <div class="pl-3">
                        <div class="text-base font-semibold text-black"> <?= $user['username'] ?></div>
                        <div class="font-normal text-black"><?= $user['email'] ?></div>
                    </div>
                </th>
                <td class="px-6 py-4">
                <a href="controllers/accessUser.php?id=<?=$user['id']?>" class="font-medium text-green-600 dark:text-blue-500 hover:underline">Повысить</a>
                <?
                        if ($user['admin'] === 1): ?>
                            Админ
                            <? else: ?>
                                Пользователь
                        <? endif; ?>

                <a href="controllers/rejectUser.php?id=<?=$user['id']?>" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Понизить</a>
                </td>
  
                <td class="px-6 py-4">
                
                <a href="controllers/adminDeleteUser.php?id=<?=$user['id']?>" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Удалить</a>
                </td>
            </tr>

        <?php endforeach;?>
        </tbody>
    </table>
    
</div>
<div class="flex justify-evenly">
<a onClick="javascript:print(document);" class="flex duration-500 mt-4 transition items-center justify-center mx-auto text-white bg-blue-600 py-2 px-8 border border-solid border-black
                        focus:outline-none hover:bg-indigo-600 rounded text-lg hover:border-solid hover:border hover:border-blue-600 hover:bg-transparent
                        hover:text-blue-600">
            <button>
            ВЫГРУЗКА
            </button>
            </a>
</div>




<?php require 'layouts/footer.php'; ?>