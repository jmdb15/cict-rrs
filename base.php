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
</head>
<body class="bg-[#F0F0F0]">

    <?php 
        if($showNav){
            include('src/components/nav.php');
        }
        include $content_template; 
    ?>

</body>
</html>