<? session_start();
include './models/authentication.php';
include './models/connection.php';
$pdo = Connection::get()->connect();
$auth = new Authentication($pdo);
$user = $auth->getCurrentUser();
session_start();
$num = 0;
setcookie('count', $_POST['but']);
if(isset($_COOKIE['but'])){
    echo'Вы нажали на кнопку '.$num. ' раз';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makulatyrapes.com</title>
</head>
<body>
<header>
    <nav class="shadow-lg">
        <div class="max-w-6xl mx-auto px-8">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- лого -->
                        <a href="index.php" class="flex items-center py-4 px-2">
                            <svg width="50" height="50" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M100 0H0V100H100V0Z" fill="url(#pattern0)"/>
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_28_109" transform="translate(-0.0016835) scale(0.0016835)"/>
                                    </pattern>

                                </defs>
                            </svg>

                            <span class="font-semibold pl-4 text-white text-2xl"
                            >Макулатура</span>
                        </a>
                    </div>


                    <div class="hidden md:flex items-center space-x-1 pt-2">


                        <a
                                href="index.php"
                                class="py-4 px-2 text-white font-semibold hover:text-[#F56E1E] transition duration-300"
                        >ГЛАВНАЯ</a
                        >
                        <a
                                href="shop.php"
                                class="py-4 px-2 text-white font-semibold hover:text-[#F56E1E] transition duration-300"
                        >МАГАЗИН</a
                        >
                        <a
                                href="tour.php"
                                class="py-4 px-2 text-white font-semibold hover:text-[#F56E1E] transition duration-300"
                        >КОНЦЕРТЫ</a
                        >
                        <?
                        if ($user['admin'] === 1): ?>
                            <a
                                    href="admin-panel.php"
                                    class="py-4 px-2 text-white font-semibold hover:text-[#F56E1E] transition duration-300"
                            >АДМИН ПАНЕЛЬ</a>
                        <? endif; ?>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-3 justify-center">
                    <?
                    if (!isset($_SESSION['user'])): ?>
                    <a href="login.php"  class="py-4 px-2 text-white font-semibold hover:text-[#F56E1E] transition duration-300">
                            АВТОРИЗАЦИЯ

                    </a>
                    <a href="registration.php"   class="py-4 px-2 text-white font-semibold hover:text-[#F56E1E] transition duration-300">
                            РЕГИСТРАЦИЯ
                    </a>
                    <?else: ?>
                        <a href="bin.php"  class="py-4 px-2 text-white font-semibold hover:text-[#F56E1E] transition duration-300">
                            КОРЗИНА <span id="productCount"></span>

                        </a>
                        <a href="profile.php"   class="py-4 px-2 text-white font-semibold hover:text-[#F56E1E] transition duration-300">
                            ПРОФИЛЬ
                        </a>
                    <?php endif; ?>
                </div>
                <!-- мобильная кнопка -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg
                                class="w-6 h-6 text-gray-500 transition duration-500 hover:text-[#F56E1E]"
                                x-show="!showMenu"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                        >
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="hidden mobile-menu">
            <ul class="">
                <li>
                    <a
                            href="index.php"
                            class="block text-white text-sm px-2 py-4 hover:bg-[#F56E1E] transition duration-300 text-center"
                    >ГЛАВНАЯ</a
                    >
                </li>
                <li class="active">
                    <a
                            href="shop.php"
                            class="block text-white text-sm px-2 py-4 hover:bg-[#F56E1E] transition duration-300 text-center"
                    >МАГАЗИН</a
                    >
                </li>
                <li>
                    <a
                            href="tour.php"
                            class="block text-white text-sm px-2 py-4 hover:bg-[#F56E1E] transition duration-300 text-center"
                    >КОНЦЕРТЫ</a
                    >
                </li>
                <?
                if (!isset($_SESSION['user'])): ?>
                <li>
                    <a
                            href="login.php"
                            class="block text-white text-sm px-2 py-4 hover:bg-[#F56E1E] transition duration-300 text-center"
                    >АВТОРИЗАЦИЯ</a
                    >

                </li>
                <li>
                    <a
                            href="registration.php"
                            class="block text-white text-sm px-2 py-4 hover:bg-[#F56E1E] transition duration-300 text-center"
                    >РЕГИСТРАЦИЯ</a
                    >

                </li>
                <?
                else: ?>
                    <li>
                        <a
                                href="bin.php"
                                class="block text-white text-sm px-2 py-4 hover:bg-[#F56E1E] transition duration-300 text-center"
                        >КОРЗИНА</a
                        >

                    </li>
                    <li>
                        <a
                                href="profile.php"
                                class="block text-white text-sm px-2 py-4 hover:bg-[#F56E1E] transition duration-300 text-center"
                        >ПРОФИЛЬ</a
                        >

                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
<body class="bg-black">

