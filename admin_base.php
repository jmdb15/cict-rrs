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
    <link rel="stylesheet" href="../../src/css/style.css">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- AJAX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> <!-- FLOWBITE -->
    <script src="../../src/js/admin_script.js"></script>
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
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                            neil.sims@flowbite.com
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                            </li>
                            <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                            </li>
                            <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                            </li>
                            <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
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
                            <a href="students.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Students</a>
                        </li>
                        <li>
                            <a href="faculties.php" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Faculty</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a id="logs" href="logs.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-orange-400 dark:hover:bg-gray-700 group">
                        <i class="fa fa-history scale-125 text-gray-300 px-1 mr-1 group-hover:text-white" aria-hidden="true"></i>
                        <span class="text-gray-400 group-hover:text-white flex-1 ms-3 whitespace-nowrap">Activity Logs</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="mt-[56px] sm:ml-64">
        <?php include $content_template; ?>
    </div>
    
    
</body>
</html>