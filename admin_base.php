<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND -->
    <!-- <link rel="stylesheet" href="../src/css/output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?? 'CICT_RRS' ?></title>
    <!-- TAILWIND @APPLY CLASSES -->
    <?php include('../../src/css/tailwindstyles.php'); ?>
    <!-- LOGO & ICON-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>   
    <!-- FLOWBITE -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="../../src/css/style.css">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- AJAX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> <!-- FLOWBITE -->
    <script src="../../src/js/admin_script.js"></script>
    <?= $imports ?? '' ?>

    <script>
        function removeToast(){
            setTimeout(() => {
                const elem = document.getElementById('toast-default');
                elem.classList.toggle('hidden');
            }, 3000);
        }
    </script>
</head>
<body class="bg-[#F0F0F0]">

<nav class="fixed top-0 z-40 w-full sm:w-[calc(100%-255px)] sm:ml-[255px] bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-orange-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                            Neil Sims
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                            <a href="../actions/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-50 w-64 h-screen mt-[64px] sm:mt-0 pl-5 text-white transition-transform -translate-x-full bg-[#4D4D4D] border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-[#4D4D4D] dark:bg-gray-800">
            <a href="#" class="flex py-4 mb-8 ms-2 md:me-24">
                <img src="../../src/img/logo.png" class="h-8 me-3" alt="FlowBite Logo" />
                <span class="self-center text-lg font-semibold sm:text-xl whitespace-nowrap dark:text-white">CICT-<span class="text-orange-400">RRS</span></span>
            </a>
            <ul class="space-y-1 font-medium">
                <li>
                    <a id="dashboard" href="dashboard.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-orange-400 dark:hover:bg-gray-700 group">
                        <img src="../../src/img/panel.svg" alt="" class="brightness-75 group-hover:brightness-100">
                        <span class="text-gray-400 group-hover:text-white ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a id="files" href="files.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-orange-400 dark:hover:bg-gray-700 group">
                        <img src="../../src/img/PDF.svg" alt="" class="brightness-75 group-hover:brightness-100">
                        <span class="text-gray-400 group-hover:text-white flex-1 ms-3 whitespace-nowrap">Files</span>
                    </a>
                </li>
                <li>
                    <a id="surveys" href="asurveys.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-orange-400 dark:hover:bg-gray-700 group">
                        <img src="../../src/img/survey.svg" alt="" class="brightness-75 group-hover:brightness-100">
                        <span class="text-gray-400 group-hover:text-white flex-1 ms-3 whitespace-nowrap">Surveys</span>
                    </a>
                </li>
                <li>
                    <a id="requests" href="arequests.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-orange-400 dark:hover:bg-gray-700 group">
                        <img src="../../src/img/bell.svg" alt="" class="brightness-75 group-hover:brightness-100">
                        <span class="text-gray-400 group-hover:text-white flex-1 ms-3 whitespace-nowrap">Requests</span>
                    </a>
                </li>
                 <li>
                    <button id="users" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-orange-400 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <img src="../../src/img/user.svg" alt="" class="brightness-75 group-hover:brightness-100">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-gray-400 group-hover:text-white">Users</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="gray" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="students.php" class="flex items-center w-full p-2 text-gray-400 transition duration-75 rounded-lg pl-11 group hover:text-white hover:bg-orange-400 dark:text-white dark:hover:bg-gray-700">Students</a>
                        </li>
                        <li>
                            <a href="faculties.php" class="flex items-center w-full p-2 text-gray-400 transition duration-75 rounded-lg pl-11 group hover:text-white hover:bg-orange-400 dark:text-white dark:hover:bg-gray-700">Faculty</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a id="logs" href="logs.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-orange-400 dark:hover:bg-gray-700 group">
                        <i class="fa fa-history scale-125 text-gray-300 px-1 mr-1 group-hover:text-white" aria-hidden="true"></i>
                        <span class="text-gray-400 group-hover:text-white flex-1 ms-3 whitespace-nowrap">Activity Logs</span>
                    </a>
                </li>
                <li>
                    <a id="cms" href="cms.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-orange-400 dark:hover:bg-gray-700 group">
                        <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224ZM12.5 15C14.1695 15 15.5228 13.6569 15.5228 12C15.5228 10.3431 14.1695 9 12.5 9C10.8305 9 9.47716 10.3431 9.47716 12C9.47716 13.6569 10.8305 15 12.5 15Z" fill="#1C274C"/>
                        </svg>
                        <span class="text-gray-400 group-hover:text-white flex-1 ms-3 whitespace-nowrap">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="mt-[56px] sm:ml-64">
        <?php include $content_template; ?>
    </div>
    
    <?php if(isset($_SESSION['toast'])){ 
        unset($_SESSION['toast']);
        echo "<script>removeToast();</script>"; ?>
        <div id="toast-default" class="w-[380px] flex flex-col items-center fixed top-[80px] right-[40px] z-[123456798]" role="alert">
        <!-- TOAST MESSAGE -->
    <?php }else{ ?>
        <div id="toast-default" class="hidden w-[380px] flex-col items-center fixed top-[80px] right-[40px] z-[123456798]" role="alert">
    <?php } ?>
            <div class="w-full flex flex-col justify-center items-center mt-24 md:mt-8 z-50">
                <div class="w-full flex flex-row items-center py-2 px-3 rounded-t-xl bg-white">
                    <img src="../../src/img/logo.png" class="mr-1" alt="">
                    <span class="text-black flex flex-row gap-1 text-sm md:text-md lg:text-lg">CICT
                        <p class="text-sm md:text-md lg:text-lg text-[#FF8A01]">Files</p>
                    </span>
                    <button type="button" class="ms-auto bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
                <div class="w-full h-[50px] flex justify-center items-center p-8 md:p-4 rounded-b-xl bg-[#F0F0F0] shadow-xl">
                    <p class="text-sm md:text-md" id="toast-msg"><?=$sessionMessage?></p>
                </div>
            </div>
        </div>

</body>
</html>
