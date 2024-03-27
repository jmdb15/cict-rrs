<!-- START NAV USER NOT LOG IN -->

<?php
// Assuming $isLoggedIn is a boolean variable indicating whether the user is logged in
// $isLoggedIn = false; // For example purposes only, replace with your actual logic
?>

<?php if (!$isLoggedIn){ ?>
    <nav class="nav bg-white dark:bg-[#4D4D4D] fixed w-full z-50 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../src/img/logo.png" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl flex flex-row font-semibold whitespace-nowrap dark:text-white">CICT- <p class="text-[#FF8A01]">RRS</p></span>
            </a>
            <div class="flex md:order-2  space-x-2 sm:space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" data-modal-target="login-modal" data-modal-toggle="login-modal" class="text-black bg-white-700 hover:text-[#FF8A01] font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-white-600 dark:text-gray-400 dark:hover:text-[#FF8A01] dark:focus:ring-white-800">
                    Log in
                </button>
                <button type="button" data-modal-target="signup-modal" data-modal-toggle="signup-modal" class="text-white bg-orange-700 hover:bg-orange-800 font-medium rounded-lg text-sm px-3 sm:px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
                style="background-color: #FF8A01;">
                    Create Account
                </button>
                
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-[#4D4D4D]">
                    <li>
                        <a href="#home" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF8A01] md:p-0 md:dark:hover:text-[#FF8A01] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent ">
                            Home</a>
                    </li>
                    <li>
                        <a href="#feature" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF8A01] md:p-0 md:dark:hover:text-[#FF8A01] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent ">
                            Features</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#FF8A01] md:p-0 md:dark:hover:text-[#FF8A01] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent ">
                            About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php }else{ ?>
    <nav class="nav bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../src/img/logo.png" class="h-8" alt="pic"/>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white flex flex-row">
                    CICT-<p class="text-[#FF8A01]">RRS</p></span>
            </a>
            <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    <img src="../src/img/user.png" class="h-8" alt="pic"/> &nbsp;
                    <span class="hidden md:block"><?=$_SESSION['id']?></span>
                </button>
                <!-- Dropdown -->
                <div class="z-50 hidden my-4 text-base list-none w-40 max-w-[160px] bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700" id="language-dropdown-menu">
                    <ul class="w-full font-medium" role="none">
                    <li>
                        <a href="profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                        <div class="inline-flex items-center">
                            <img class="mr-1" src="../src/img/Male User.png" alt="">
                            My Profile
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="requests.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                        <div class="inline-flex items-center">
                            <img class="mr-1" src="../src/img/Notification.png" alt="">
                            Requests
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="uploads.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                        <div class="inline-flex items-center">
                            <img class="mr-1" src="../src/img/Upload.png" alt="">
                            Uploads
                        </div>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <div data-modal-target="logout-modal" data-modal-toggle="logout-modal" class="flex items-center cursor-pointer px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                            <img class="mr-1" src="../src/img/Logout.png" alt="">
                            Log out
                        </div>
                    </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="index.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    Home</a>
                </li>
                <li>
                    <a href="upload_research.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    Files</a>
                </li>
                <li>
                    <a href="surveys.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    Survey</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
<?php } ?>
<!-- END NAV USER NOT LOG IN -->

<div id="logout-modal" data-modal-backdrop="static" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                data-modal-hide="logout-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center flex justify-center items-center flex-col">
                <img src="../src/img/Logoutbig.png" alt="pic">
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to log out?</h3>
                <div class="w-full flex flex-col justify-center items-center gap-2">
                    <a href="logout.php" class="w-1/2">
                        <button type="button" style="background-color: #FF8A01;" class="w-full py-2.5 px-5 text-sm font-medium text-white focus:outline-none rounded-3xl border-2 border-black hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Yes, Log Me Out
                        </button>
                    </a>
                    <button data-modal-hide="logout-modal" type="button" class="w-1/2 py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-3xl border-2 border-black hover:bg-gray-100  focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Cancel  
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>