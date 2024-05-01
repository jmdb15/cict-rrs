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
    <?php include('../src/css/tailwindstyles.php'); ?>
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
                    <p class="text-sm md:text-md" id="toast-msg"><?=$sessionMessage?></p>
                </div>
            </div>
        </div>

</body>
</html>