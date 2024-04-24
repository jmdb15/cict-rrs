<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND -->
    <!-- <link rel="stylesheet" href="../src/css/output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?? 'CICT_RRS' ?></title>
    <!-- LOGO & ICON-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- FLOWBITE -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <?= $imports ?? '' ?>
    <!-- logo -->
    <link rel="icon" href="../src/img/logo.png">
    <link rel="stylesheet" href="../src/css/style.css">
    <style type="text/tailwindcss">
        .input-text{
            @apply bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500;
        }
        .btn{
            @apply w-40 py-2 rounded-lg cursor-pointer;
        }
        .txtarea{
            @apply block p-2.5 w-full text-xs md:text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500;
        }
        .select-wrapper {
            display: none;
        }
        .custom-div:focus-within .select-wrapper {
            display: block;
        }
        .question{
            @apply basis-[50%] border-b border-orange-400 bg-gray-50 p-2 transition-transform focus:border-b-2 focus:outline-none;
        }
        .default{
            @apply text-black border-none bg-none basis-[50%]  transition-transform;
        }
        .grid-form{
            @apply w-full focus:outline-none focus:border-b focus:bg-gray-50 relative;
        }
        .remove-option{
            @apply absolute right-0 -bottom-[6px] capitalize text-gray-700 cursor-pointer mx-2 hover:bg-orange-300 hover:rounded-full px-3 pb-1 pt-[6px];
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        .edit-input.dark-input {
            background-color: gray; /* Dark background color */
            color: white; /* Light text color */
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- AJAX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> <!-- FLOWBITE -->

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

    <?php 
        if($showNav){
            include('src/components/nav.php');
        }
        include $content_template; 
    ?>

    <!-- TOAST MESSAGE -->
<?php if(isset($_SESSION['toast'])){ 
    unset($_SESSION['toast']);
    echo "<script>removeToast();</script>";
    ?>
    <div id="toast-default" class="w-[380px] flex flex-col items-center fixed top-[80px] right-[40px] z-[123456798]" role="alert">
        <div class="w-full flex flex-col justify-center items-center mt-24 md:mt-8 z-50">
            <div class="w-full flex flex-row items-center py-2 px-3 rounded-t-xl bg-white">
                <img src="../src/img/logo.png" class="mr-1" alt="">
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
                <!-- USER SIDE -->
            <!-- 
                <p class="hidden text-sm md:text-md">Message is archived successfully.</p>
            -->
                <!-- ADMIN SIDE -->
                <!-- <p class="hidden text-sm md:text-md">Task uploaded successfully.</p>
                <p class="hidden text-sm md:text-md">Announcement uploaded successfully.</p>
                <p class="hidden text-sm md:text-md">Changes have been saved successfully.</p>
                <p class="hidden text-sm md:text-md">User selection archived successfully.</p>
                <p class="hidden text-sm md:text-md">Task selection has been successfully archived.</p> -->
                <p class="text-sm md:text-md"><?=$sessionMessage?></p>
            </div>
        </div>
    </div>
<?php } ?>

</body>
</html>