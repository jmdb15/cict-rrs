<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Template</title>
    <!-- logo -->
    <link rel="icon" href="../img/logo.png">
    <!-- flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <!-- fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"> -->
</head>
<style>
.active {
    border-bottom: solid #4D4D4D;
    color: #FF8A01;
    font-weight: bold;
}
</style>
<body class="box-sizing p-0 m-0 bg-[#F0F0F0]">
    <?php include("navProfile.php"); ?>
    <main class="conatiner mx-auto justify-center items-center">
        <!-- START TOP -->
        <div class="w-full flex flex-col gap-16 mt-2 rounded-md bg-white">
            <div class="w-full flex flex-col justify-content items-center gap-4 p-2">
                <img src="../img/user.png" alt="profile pic" class="w-32 md:w-40 lg:w-64">
                <div class="flex flex-col justify-center items-center text-sm md:text-md lg:text-xl">
                    <p class="text-gray-700 font-bold">James Marvic Marasigan</p>
                    <p class="text-blue-900 font-bold">2020104950</p>
                    <p class="text-blue-900 font-bold">STUDENT</p>
                </div>
            </div>
            <div class="w-full flex justify-center items-center p-2">
                <div class="w-5/6 flex">
                    <ul class="w-full flex flex-col">
                        <li class="p-2 hover:bg-gray-100 hover:text-blue-900">
                            <i class='fa-solid fa-house cursor-pointer' id="showDivBtn1"> 
                                Overview</i> 
                        </li>
                        <li class="p-2 hover:bg-gray-100 hover:text-blue-900">
                            <i class='fas fa-user-alt cursor-pointer' id="showDivBtn2">
                                My Student Information</i>
                        </li>
                        <li class="p-2 hover:bg-gray-100 hover:text-blue-900">
                            <i class='fa fa-gear cursor-pointer' id="showDivBtn3"> 
                                Account Settings</i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END TOP -->

        <!-- START BOTTOM -->
        <div class="w-full flex justify-center items-center rounded-md mt-4 bg-white">
            <div class="w-1/2 flex relative" id="hiddenDiv1">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="w-full hidden justify-center items-center" id="hiddenDiv2">
                <p>DIV @@@@@@@@@@@2</p>
            </div>

            <!-- START OF ACCOUNT SETTINGS -->
            <div class="w-5/6 hidden flex-col justify-center items-center p-4" id="hiddenDiv3">
                <div class="w-full flex flex-col md:flex-row justify-center items-center place-items-center">
                    <div class="w-full md:w-1/2">
                        <p class="font-semibold text-blue-900 text-sm md:text-md lg:text-lg">PROFILE ACCOUNT</p>
                    </div>
                    <div class="w-full md:w-1/2 flex justify-center items-end">
                        <ul class="flex flex-row gap-4  ">
                            <li id="A1" class="cursor-pointer p-2 text-sm md:text-md lg:text-lg">
                                User Account Info
                            </li>
                            <li id="A2" class="cursor-pointer p-2 text-sm md:text-md lg:text-lg">
                                Change Avatar
                            </li>
                            <li id="A3" class="cursor-pointer p-2 text-sm md:text-md lg:text-lg">
                                Change Password
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- START OF USER ACCOUNT INFO -->
                <div class="flex w-full" id="showA1">
                    <form action="" class="w-full flex justify-center items-center flex-col">
                        <section class="pt-6 flex flex-col w-full border-t">
                            <div class="flex flex-wrap justify-center items-center w-full gap-4 gap-x-8">
                                <div class="w-full md:w-1/4 flex flex-col">
                                    <label for="">First Name</label>
                                    <input type="text" placeholder="Ma. Christina">
                                </div>
                                <div class="w-full md:w-1/4 flex flex-col">
                                    <label for="">Middle Name</label>
                                    <input type="text" placeholder="Ma. Christina">
                                </div>
                                <div class="w-full md:w-1/4 flex flex-col">
                                    <label for="">Last Name</label>
                                    <input type="text" placeholder="Ma. Christina">
                                </div>
                            </div>
                        </section>
                        <section class="pt-6 flex flex-col w-full">
                            <div class="flex flex-wrap justify-center items-center w-full gap-4 gap-x-8">
                                <div class="w-full md:w-1/4 flex flex-col">
                                    <label for="">Sex</label>
                                    <select name="" id="">
                                        <option value="">Female</option>
                                        <option value="">Male</option>
                                    </select>
                                    
                                </div>
                                <div class="w-full md:w-1/4 flex flex-col">
                                    <label for="">Employee Number</label>
                                    <input type="number" placeholder="09XXXXXX">
                                </div>
                                <div class="w-full md:w-1/4 flex flex-col">
                                    <label for="">Position</label>
                                    <input type="text" placeholder="Secret">
                                </div>
                            </div>
                        </section>
                        <section class="pt-6 flex flex-col w-full">
                            <div class="flex flex-wrap justify-center items-center w-full gap-4 gap-x-8">
                                <div class="w-full md:w-1/3 flex flex-col">
                                    <label for="">Email</label>
                                    <input type="text" placeholder="@bulsu.edu.ph">
                                </div>
                                <div class="w-full md:w-1/3 flex flex-col">
                                    <label for="">Contact Number</label>
                                    <input type="Number" placeholder="09XXXXXXXX">
                                </div>
                            </div>
                        </section>
                        <section class="pt-12 flex flex-col place-self-center w-4/5 py-16">
                            <div class="flex justify-end items-end">
                                <button type="submit" class="p-2 px-6 rounded-md bg-gray-900 text-white">
                                    Update</button>
                            </div>
                        </section>
                    </form>
                </div>
                <!-- END OF USER ACCOUNT INFO -->

                <!-- START OF CHANGE AVATAR -->
                <div class="hidden w-full flex-col p-4 gap-y-4" id="showA2">
                    <form action="">
                        <div class="w-full flex flex-col gap-2">
                            <img src="../img/user.png" alt="profile pic" class="w-24 p-2 md:w-32 lg:w-52 border-2">
                            <input type="file">
                        </div>
                        <div class="w-full py-8">
                            <button type="submit" class="p-2 px-6 rounded-md bg-gray-900 text-white">
                                Submit</button>
                            <button type="#" class="p-2 px-6 rounded-md bg-red-900 text-white">
                                Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- END OF CHANGE AVATAR -->
                
                <!-- START OF CHANGE PASSWORD -->
                <div class="hidden w-full flex-col gap-4" id="showA3">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label for="">Current Password</label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label for="">New Password</label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label for="">Re-type New Password</label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="w-full py-8">
                        <button type="submit" class="p-2 px-6 rounded-md bg-gray-900 text-white">
                            Submit</button>
                        <button type="#" class="p-2 px-6 rounded-md bg-red-900 text-white">
                            Cancel</button>
                    </div>
                </div>
                <!-- START OF CHANGE PASSWORD -->
            </div>
            <!-- END OF ACCOUNT SETTINGS -->
        </div>
        <!-- END BOTTOM -->
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
<!-- flowbite -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<!-- <script>
    function toggleDiv(id) {
        var divs = document.querySelectorAll('[id^="div"]');
        divs.forEach(function(div) {
            if (div.id === id) {
                div.classList.remove('hidden');
            } else {
                div.classList.add('hidden');
            }
        });
    }
</script> -->

<script>
    const buttons = [document.getElementById("A1"), document.getElementById("A2"), document.getElementById("A3")];
    // Add "active" class to btn1 initially
    buttons[0].classList.add("active");

    buttons.forEach((button, index) => {
        button.addEventListener("click", function() {
            if (!button.classList.contains("active")) {
                buttons.forEach((btn, idx) => {
                    if (idx !== index) {
                        removeActive(btn);
                    }
                });
                toggleActive(button);
                goToNextPage();
                toggleContent(`showA${index + 1}`);
            }
        });
    });

    function toggleActive(button) {
        button.classList.add("active");
    }

    function removeActive(button) {
        button.classList.remove("active");
    }

    function goToNextPage() {
        // Your function to go to the next page
    }

    function toggleContent(idToShow) {
        const elements = ['showA1', 'showA2', 'showA3'];
        elements.forEach(elementId => {
            if (elementId !== idToShow) {
                document.getElementById(elementId).classList.add('hidden');
            }
        });
        document.getElementById(idToShow).classList.toggle('hidden');
    }
</script>

<script>
    // Get the buttons and the divs
    const showDivBtn1 = document.getElementById('showDivBtn1');
    const showDivBtn2 = document.getElementById('showDivBtn2');
    const showDivBtn3 = document.getElementById('showDivBtn3');
    const hiddenDiv1 = document.getElementById('hiddenDiv1');
    const hiddenDiv2 = document.getElementById('hiddenDiv2');
    const hiddenDiv3 = document.getElementById('hiddenDiv3');

    // Add click event listener to the first button
    showDivBtn1.addEventListener('click', function() {
    // Toggle the 'hidden' class on the first div
    hiddenDiv1.classList.toggle('hidden');
    // Hide the second and third divs if they're currently shown
    if (!hiddenDiv1.classList.contains('hidden')) {
        hiddenDiv2.classList.add('hidden');
        hiddenDiv3.classList.add('hidden');
    } else {
        // Reload the page if the button is pressed again
        window.location.reload();
    }
    });

    // Add click event listener to the second button
    showDivBtn2.addEventListener('click', function() {
    // Toggle the 'hidden' class on the second div
    hiddenDiv2.classList.toggle('hidden');
    // Hide the first and third divs if they're currently shown
    if (!hiddenDiv2.classList.contains('hidden')) {
        hiddenDiv1.classList.add('hidden');
        hiddenDiv3.classList.add('hidden');
    } else {
        // Reload the page if the button is pressed again
        window.location.reload();
    }
    });

    // Add click event listener to the third button
    showDivBtn3.addEventListener('click', function() {
    // Toggle the 'hidden' class on the third div
    hiddenDiv3.classList.toggle('hidden');
    // Hide the first and second divs if they're currently shown
    if (!hiddenDiv3.classList.contains('hidden')) {
        hiddenDiv1.classList.add('hidden');
        hiddenDiv2.classList.add('hidden');
    } else {
        // Reload the page if the button is pressed again
        window.location.reload();
    }
    });
</script>
</html>