
    <div class="container mx-auto flex flex-col gap-4">
        
        <!-- LANDING -->
        <section id="home" class="flex flex-col-reverse relative justify-center h-screen md:h-auto items-center md:flex-row mt-10 md:mt-20">
            <div class="w-full h-2/6 md:h-1/2 md:w-1/2 flex">
                <img src="../src/img/circles.svg" alt="#" class="hidden md:flex">
                <div class="flex flex-col absolute p-2 w-full md:w-1/2 lg:w-2/5 justify-center items-start gap-y-4 top-[430px] left-0 md:top-12 md:left-6 lg:top-60 lg:left-20 z-30 ">
                    <span class="text-lg md:text-4xl lg:text-[3rem] font-bold flex flex-col gap-y-1 md:gap-y-4">Research <p>Repository System</p></span>
                    <p class="text-md">Research findings are valuable assets that deserve to be preserved and made accessible to a wider audience.</p>
                    <button  data-modal-target="signup-modal" data-modal-toggle="signup-modal" class="bg-[#FF8A01] text-white p-2 px-5 md:px-10 rounded-lg mt-0 lg:mt-4">
                        Get Started
                    </button>
                </div>
            </div>
            <div class="w-full h-1/2 md:w-1/2 flex relative">
                <div class="flex w-full justify-center items-center place-items-center p-2 md:hidden">
                    <img src="../src/img/tm.svg" alt="" class="w-[300px] place-self-center">
                </div>
                <div class="hidden md:flex">
                    <img src="../src/img/need.png" alt="">
                </div>
                <div class="one absolute bg-white text-black px-4 p-2 md:p-4 rounded-2xl border-2 border-black flex items-center justify-center flex-row shadow-2xl gap-4 z-30 top-64 left-40 md:top-52 lg:left-56 lg:top-[300px] xl:left-96 xl:top-[450px]">
                    <img src="../src/img/books.svg" alt="" class="bg-black p-2 rounded-lg">
                    <div class="justify-con items-center flex-col">
                        <p class="text-gray-400">Titles</p>
                        <p class="font-bold">250+</p>
                    </div>
                </div>
            </div>

        </section>

        <!-- FEATURES -->
        <section id="feature" class="bg-transparent flex mb-6 justify-center items-center flex-col w-full md:h-[500px] gap-16">
            <div class="w-full flex flex-col justify-center items-center gap-3 p-1">
                <p class="text-[#FF8A01] font-bold text-1xl">Features</p>
                <p class="text-[#4D4D4D] font-bold text-4xl">Benefits using our website</p>
            </div>
            <div class="flex flex-col md:flex-row gap-12">
                <!-- threeeee -->
                <div class="max-w-sm p-6 gap-6 bg-[#FF8A01] text-white flex flex-col justify-center items-center border border-gray-200 rounded-xl shadow">
                    <div class="flex flex-row gap-x-10 justify-center items-center">
                        <img src="../src/img/search.png" alt="" class="bg-[#F4EBFF] p-2 rounded-xl">
                        <a href="#">
                            <h5 class="mb-2 text:md md:text-2xl font-semibold tracking-tight">Find Studies</h5>
                        </a>
                    </div>
                    <p class="mb-3 font-normal">Easy to find related studies for your research.</p>
                </div>
                <div class="max-w-sm p-6 gap-6 bg-white flex flex-col justify-center items-center border border-gray-200 rounded-xl shadow">
                    <div class="flex flex-row gap-x-10 justify-center items-center">
                        <img src="../src/img/clipBoard.png" alt="" class="bg-[#E0EAFF] p-2 rounded-xl">
                        <a href="#">
                            <h5 class="mb-2 text:md md:text-2xl font-semibold tracking-tight text-gray-900">Find Studies</h5>
                        </a>
                    </div>
                    <p class="mb-3 font-normal text-gray-500">Easily upload your questionnaires for your research studies.</p>
                </div>
                <div class="max-w-sm p-6 gap-6 bg-white flex flex-col justify-center items-center border border-gray-200 rounded-xl shadow">
                    <div class="flex flex-row gap-x-10 justify-center items-center">
                        <img src="../src/img/redBook.png" alt="" class="bg-[#FCE7F6] p-2 rounded-xl">
                        <a href="#">
                            <h5 class="mb-2 text:md md:text-2xl font-semibold tracking-tight text-gray-900">Find Studies</h5>
                        </a>
                    </div>
                    <p class="mb-3 font-normal text-gray-500">Long-term preservation of research studies for future researchers.</p>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" class="box-sizing text-black bg-transparent pt-14 w-screen sm:-ml-[calc((100vw-648px)/2+12px)]
            md:-ml-[calc((100vw-768px)/2+12px)] lg:-ml-[calc((100vw-1032px)/2+12px)] xl:-ml-[calc((100vw-1288px)/2+12px)] 2xl:-ml-[calc((100vw-1544px)/2+12px)]">
            <div class="flex flex-col justify-center items-center bg-white h-fit w-full pt-2 pb-1">
                <p class="text-lg md:text-4xl text-[#4D4D4D] font-bold my-3">About Us</p>
                <div class="flex flex-col justify-center items-center w-4/5 p-0 sm:p-6 md:px-10 gap-2">
                    <p class="text-md md:text-lg font-base text-center">College of information and Communication Technology - Research Repository System</p>
                    <p class="text-center text-[#4D4D4D] text-xs md:text-base">
                        <?php 
                            $xml = simplexml_load_file('../public/info.xml');
                            $abt = $xml->xpath('//element[@attr="about"]');
                        echo $abt[0][0];
                        ?>
                    </p>
                </div>
            </div>
        </section>

        <!-- STUDIES -->
        <section id="#" class="relative w-full text-black bg-transparent flex flex-col items-center h-auto mb-8 gap-y-8">
            <div class="w-3/4 md:-ml-24">
                <p class="text-lg md:text-2xl text-[#4D4D4D] font-bold mt-2 ml-42 md:w-full md:mt-12 md:ml-18 md:items-start">Popular Studies</p>
            </div>

            <?php while($row = $res->fetch_assoc()){ 
                    $dateTime = new DateTime($row['created_at']);
                    $row['created_at'] = $dateTime->format("F j, Y");
            ?>

                <div class="w-3/4 md:w-4/5 p-2 flex flex-col items-center rounded-lg md:flex-row md:max-w-xxl cursor-pointer"  
                    data-modal-target="login-modal" data-modal-toggle="login-modal">
                    <img class="object-cover w-full md:w-[300px] rounded-sm" 
                    src="../src/img/wall.jpeg" alt="">
                    <div class="w-full flex flex-col justify-start items-start px-4 leading-normal text-sm md:text-lg">
                        <p class="text-[#FF8A01] text-xs md:text-sm"><?=$row['created_at']?></p>
                        <h5 class="mb-2 text-xl md:text-3xl font-bold tracking-tight text-gray-900">
                            <?=$row['project_title']?>
                        </h5>
                        <p class="mb-3 font-normal line-clamp-4 text-sm md:text-md text-[#667085]">
                            <?=$row['description']?>
                        </p>
                    </div>
                </div>

            <?php } ?>

        </section>
    </div>

<!-- FOR LOGIN MODAL -->
<div id="login-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full h-full md:w-3/4 flex justify-center items-center">
        <!-- Modal content -->
        <div class="relative bg-white h-4/5 md:h-full w-full md:w-full rounded-lg shadow-xl overflow-y-auto">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                <img src="../src/img/logo.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl flex flex-row font-semibold whitespace-nowrap">CICT- <p class="text-[#FF8A01]">RRS</p></span>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="login-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">

                <div class="container mx-auto flex flex-row justify-start items-start lg:justify-center lg:items-center md:flex-row sm:flex-col">

                    <div class="hidden md:flex flex-col gap-y-2 w-1/2 lg:w-3/5 p-4">                        
                        <div class="hidden md:flex flex-col justify-start items-start gap-y-4 pt-0 lg:mt-20 pl-0  lg:pl-20">
                            <p class="text-md md:text-4xl lg:text-[4.5rem] font-[500]">Log In To</p>
                            <p class="text-md md:text-xl lg:text-4xl font-[500] mt-4">CICT Research <br> Repository System</p>
                            <p>if you already have an account</p>
                            <span>You can <span data-modal-targe="signup-modal" data-modal-toggle="signup-modal" data-modal-hide="login-modal" class="cursor-pointer text-[#FF8A01] underline">Register Here!</span></span>
                        </div>
                        <div class="hidden md:flex justify-end items-end">
                            <img src="../src/img/pic1.svg" alt="" class="hidden md:flex w-96">
                        </div>
                    </div>
                    
                    <div class="relative w-full md:w-1/2 lg:w-2/5 flex flex-col justify-center">
                        <form class="w-3/4 mx-auto flex flex-col justify-center gap-2 text-md md:text-lg lg:text-xl" method="POST" action="actions/login.php">
                            <p class="text-[2.5rem] mb-5">Login</p>
                            <div class="mb-5">
                                <input 
                                    type="email" 
                                    id="login-email" 
                                    name="email" 
                                    pattern=".+@bulsu\.edu\.ph$" 
                                    placeholder="Enter Student Number" 
                                    required
                                    class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                />
                            </div>
                            <div class="mb-5">
                                <input 
                                    type="password" 
                                    id="login-password" 
                                    name="password" 
                                    class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                    placeholder="Password" 
                                    required 
                                />
                            </div>
                            <div class="flex justify-end mb-10">
                                <p class="text-gray-500 hover hover-[#E0E0E0] cursor-pointer" data-modal-target="forgot-modal" data-modal-toggle="forgot-modal" data-modal-hide="login-modal">
                                    Forgot Password?
                                </p>
                            </div>
                            <button name="submit" type="submit" class="text-white bg-[#FF8A01] hover hover-[#CC6E00] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-4 text-center">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOR SIGNUP MODAL -->
<div id="signup-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full h-full md:w-3/4 flex justify-center items-center">
        <!-- Modal content -->
        <div class="relative bg-white h-4/5 md:h-full w-full md:w-full rounded-lg shadow-xl overflow-y-auto">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                <img src="../src/img/logo.png" class="h-8" alt="#"/>
                <span class="self-center text-2xl flex flex-row font-semibold whitespace-nowrap">CICT- <p class="text-[#FF8A01]">RRS</p></span>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="signup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="container mx-auto flex flex-row justify-start lg:justify-content lg:items-center md:flex-row sm:flex-col">
                    <div class="hidden md:flex flex-col gap-y-2 w-1/2 lg:w-3/5">                        
                        <div class="hidden md:flex flex-col justify-start items-start gap-y-4 pt-0 md:mt-20 pl-0 lg:pl-20">
                            <p class="text-md md:text-4xl lg:text-[4.5rem] font-[500]">Sign Up to </p>
                            <p class="text-md md:text-xl lg:text-4xl font-[500] mt-0 lg:mt-4">CICT Research <br> Repository System</p>
                            <p>if you already have an account</p>
                            <span>You can <span data-modal-targe="login-modal" data-modal-toggle="login-modal" data-modal-hide="signup-modal" class="cursor-pointer text-[#FF8A01] underline">Login Here!</span></span>
                        </div>
                        <div class="hidden md:flex justify-end items-end">
                            <img src="../src/img/pic2.svg" alt="" class="hidden md:flex w-96">
                        </div>
                    </div>

                    

                    <div class="relative w-full md:w-1/2 lg:w-2/5 flex flex-col justify-content">
                        <form class="w-3/4 mx-auto flex flex-col justify-content gap-2 text-md md:text-lg lg:text-xl" method="POST" action="actions/signup.php" onsubmit="accountRegistrationForm(event)">
                            <p class="text-3xl lg:text-[2.5rem] mb-2 text-center lg:text-start">Sign up</p>
                            <div class="flex flex-col items-start">
                                <p class="text-[1rem] text-gray-500">Register As:</p>
                                <div class="flex items-center self-center gap-10">
                                    <div class="dv">
                                        <input 
                                            onchange="registerAs('Student')"
                                            id="default-radio-1"
                                            type="radio" 
                                            value="student" 
                                            name="type" 
                                            required
                                            checked
                                            class="w-4 h-4 cursor-pointer text-gray-500 bg-gray-100 border-gray-300 focus:ring-gray-500">
                                        <label for="default-radio-1" class="cursor-pointer text-sm font-medium text-gray-900">Student</label>
                                    </div>
                                    <div class="dv">
                                        <input 
                                            onchange="registerAs('Faculty')"
                                            id="default-radio-2" 
                                            type="radio" 
                                            value="faculty" 
                                            name="type" 
                                            required
                                            class="w-4 h-4 cursor-pointer text-gray-500 bg-gray-100 border-gray-300 focus:ring-gray-500"
                                        />
                                        <label for="default-radio-2" class="cursor-pointer text-sm font-medium text-gray-900">Faculty</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2 flex justify-between flex-wrap gap-2">
                                <div class="flex-1">
                                    <label for="first-name">First Name:</label>
                                    <input 
                                        type="text" 
                                        id="first-name" 
                                        name="fname" 
                                        placeholder="Juan"
                                        required
                                        class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    />
                                </div>
                                <div class="flex-1">
                                    <label for="last-name">Last Name:</label>
                                    <input 
                                        type="text" 
                                        id="last-name" 
                                        name="lname" 
                                        placeholder="Cruz"
                                        required
                                        class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    />
                                </div>
                            </div>

                            <div class="mb-2">
                                <label for="email">Email:</label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    pattern=".+@bulsu\.edu\.ph$" 
                                    placeholder="Enter Email Address" 
                                    required 
                                    class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                />
                                <div class="pl-4 text-xs text-gray-500">
                                    <h6>Please enter a valid email address ending with @bulsu.edu.ph</h6>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="number"><span id="reg-type">Student</span> Number:</label>
                                <input 
                                    type="text" 
                                    id="number" 
                                    name="number" 
                                    oninput="allowNumbersOnly(event)"
                                    placeholder="Student | Faculty Number"
                                    class="bg-gray-200 appearance-none border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Enter Student Number" 
                                    required 
                                />
                            </div>
                            <div class="mb-2">
                                <label for="password">Password:</label>
                                <input
                                    type="password" 
                                    pattern="(?=.*\d)(?=.*[A-Z]).{8,}" 
                                    title="Password must contain at least one number, one uppercase letter, and be at least 8 characters long"
                                    id="password" 
                                    name="password" 
                                    placeholder="Enter Password" 
                                    required 
                                    class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                />
                                <div class="pl-4 text-xs text-gray-400">
                                    <h6 class="text-gray-500">Password must contain:</h6>
                                    <ul class="list-disc ml-3">
                                        <li>At least 1 capital letter</li>
                                        <li>At least one number</li>
                                        <li>8 characters</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="password2">Confirm Password:</label>
                                <input 
                                    type="password" 
                                    id="password2" 
                                    name="password2" 
                                    placeholder="Re-enter Password" 
                                    required 
                                    class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                                />
                            </div>
                            <div class="mb-2 text-sm">
                                <input 
                                    type="checkbox"
                                    name="agree"
                                    id="cb-agree"
                                    class="scale-90"
                                    required
                                    disabled
                                />
                                <label for="#" class="cursor-pointer">
                                    I agree to the 
                                    <span data-modal-target="terms-modal" data-modal-toggle="terms-modal" class="underline text-blue-400">
                                        Terms and Conditions
                                    </span>
                                    of the CICT-RRS.
                                </label>  
                            </div>
                            <div id="error-msg" class="hidden w-full px-4 py-1 border-red-500 border-2 bg-red-300 text-red-600 rounded-md"></div>
                            <button type="submit" name="signup" class="text-white bg-[#FF8A01] hover hover-[#CC6E00] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-4 text-center mb-4">
                                signup
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- START OF FORGOT MODAL -->
<div id="forgot-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full md:w-3/4 h-full flex justify-center items-center">
        <!-- Modal content -->
        <div class="relative bg-white w-full rounded-lg shadow overflow-y-hidden overflow-x-hidden">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                <img src="../src/img/logo.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl flex flex-row font-semibold whitespace-nowrap">CICT- <p class="text-[#FF8A01]">RRS</p></span>
                <button type="button" class="text-[#FF8A01] bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="forgot-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="container flex flex-col justify-content items-center gap-y-4">  
                    <div class="w-full flex flex-col justify-center p-4 mt-0 md:mt-4 lg:mt-8 ">
                        <p class="text-xl md:text-4xl lg:text-[4rem] font-medium mb-4">Forgot Password?</p>
                        <span class="flex flex-row text sm md:text-lg lg:text-xl">Enter the &nbsp; <p class="text-[#FF8A01]">email adress</p> &nbsp; associated</span>
                        <p class="text sm md:text-lg lg:text-xl">with your account.</p>
                    </div>
                    <div class="w-full lg:w-5/6 flex justify-center">                            
                        <div class="w-3/5 hidden md:flex justify-end mt-10 ">
                            <img src="../src/img/forgot.png" alt="">
                        </div>
                        <div class="w-full lg:w-2/5 flex justify-center lg:justify-start ">
                            <form class="flex flex-col gap-y-4 items-center" id="send-reset-form">
                                <label for="" class="text-sm md:text-md lg:text-lg flex text-center">We will send a link to your email to reset your password.</label>
                                <input 
                                    type="text" 
                                    placeholder="Your Email" 
                                    id="send-to-email" 
                                    class="w-full shadow-md rounded-md p-1 md:p-2 text-sm md:text-md lg:text-lg" 
                                    required
                                />
                                <button 
                                    id="send-reset-btn" 
                                    type="submit"
                                    data-modal-target="forgot2-modal" 
                                    data-modal-toggle="forgot2-modal"
                                    class="p-1 px-4 mt-4 lg:px-12 lg:p-2 lg:mt-8 shadow-xl rounded-md text-sm md:text-lg cursor-pointer bg-[#FF8A01] text-white" 
                                    
                                >
                                    Send Email
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END OF FORGOT MODAL -->

<!-- START OF FORGOT2 MODAL -->
<div id="forgot2-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full md:w-3/4 h-full flex justify-center items-center">
        <!-- Modal content -->
        <div class="relative bg-white w-full lg:w-1/4 rounded-lg shadow-2xl border-2 border-white overflow-y-hidden overflow-x-hidden">
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="flex flex-col justify-center items-center">
                    <img src="../src/img/forgot2.png" alt="">
                    <p class="text-md md:text-lg lg:text-xl flex text-center font-medium">Sent!</p>
                    <p class="text-sm md:text-md lg:text-lg flex text-center">An email has been sent. Please check your email address.</p>
                    <button data-modal-hide="forgot2-modal" class="p-1 px-4 mt-4 lg:px-12 lg:p-2 lg:mt-8 shadow-xl rounded-md text-sm md:text-lg cursor-pointer bg-[#FF8A01] text-white">
                        Okay</button>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- END OF FORGOT2 MODAL -->

<!-- START OF TERMS MODAL -->
<div id="terms-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full md:w-3/4 h-full flex justify-center items-center">
        <!-- Modal content -->
        <div class="relative bg-white w-full lg:w-2/5 rounded-lg shadow-2xl border-2 border-white overflow-y-hidden overflow-x-hidden">
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="flex flex-col justify-center items-center">
                    <section class="w-full flex items-center border-b-2 py-2">
                        <img src="../img/terms.png" alt="">
                        <span class="text-md md:text-lg lg:text-xl text-[#FF8A01]">Terms and Conditions: <p class="text-sm text-gray-950">Last updated May 3, 2024</p></span>
                    </section>
                    
                    <section class="w-full flex flex-col h-[500px] overflow-y-auto gap-y-2 pr-4">
                        <p class="font-normal text-sm pl-4">
                            <span class="font-medium text-md">1. Research Uploads:</span>
                            By uploading research materials to this repository system, you agree that you have the necessary rights and permissions to share these materials. You also grant the system the right to store, display, and distribute these materials to authorized users.    
                        </p>      
                        <p class="font-normal text-sm pl-4">
                            <span class="font-medium text-md">2. Surveys:</span>
                            When participating in surveys hosted on this platform, you agree to provide accurate and honest responses. Your survey data may be used for research and analysis purposes within the scope of the platform's intended use.
                        </p>      
                        <p class="font-normal text-sm pl-4">
                            <span class="font-medium text-md">3. Personal Use Only:</span>
                            Materials downloaded from this repository system, including research studies and survey data, are for personal use only. Redistribution or commercial use of these materials is strictly prohibited unless explicitly permitted by the content owner or applicable copyright laws.
                        </p>      
                        <p class="font-normal text-sm pl-4">
                            <span class="font-medium text-md">4. Recording Downloads:</span>
                            Your download activities, including the date and time of downloads and the specific materials downloaded, may be recorded by the system for security, tracking, and statistical purposes.
                        </p>      
                        <p class="font-normal text-sm pl-4">
                            <span class="font-medium text-md">5. User Responsibilities:</span>
                            You are responsible for maintaining the confidentiality of your account credentials and ensuring that your use of the platform complies with these terms and conditions, as well as any applicable laws and regulations.
                        </p>      
                        <p class="font-normal text-sm pl-4">
                            <span class="font-medium text-md">6. Disclaimer: </span>
                            The repository system and its administrators are not responsible for the accuracy, legality, or quality of the materials uploaded by users. Users are encouraged to verify the authenticity and reliability of any content obtained through the platform.
                        </p>                                                                                                                              
                        <p class="font-normal text-sm pl-4">
                            <span class="font-medium text-md">7. Changes to Terms:</span>
                            These terms and conditions are subject to change without prior notice. Users will be notified of any significant updates to these terms via email or through the platform's messaging system.
                        </p>                              
                        <p class="text-sm">By using this research repository system, you acknowledge that you have read, understood, and agree to abide by these terms and conditions.</p>                         
                        <div class="w-full flex flex-wrap justify-center items-center gap-x-4 text-center">

                            <button data-modal-hide="terms-modal" class="text-center w-1/4 p-1 mt-4 lg:p-2 lg:mt-8 shadow-xl rounded-md text-sm md:text-lg cursor-pointer bg-white text-[#FF8A01] border-2 border-[#FF8A01]">
                                Decline
                            </button>     
                            <button id="acceptButton" class="text-center items-center w-1/4 p-1 mt-4  lg:p-2 lg:mt-8 shadow-xl rounded-md text-sm md:text-lg cursor-pointer bg-[#FF8A01] text-white">
                                Accept
                            </button>       

                        </div>                        
                    </section>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- END OF TERMS MODAL -->

<?php include('../src/components/footerLP.php'); ?>
<script>
    document.getElementById('acceptButton').addEventListener('click', function() {
        document.getElementById('cb-agree').checked = true;
        document.getElementById('terms-modal').classList.add('hidden'); // Close the modal
    });
</script>
<script>
    tailwind.config = {
        theme: {
            extend: {
            },
        },
        darkMode: 'class',
        variants: {},
        plugins: [],
    }
</script>
<!-- <script>
    // tailwind.config.js
    module.exports = {
        theme: {
            extend: {
            screens: {
                'custom': {'min': '1100px'},   
            }
            }
        }
    }
</script> -->
<script>
    // const inputField = document.getElementById('inputField');
    // const submitButton = document.getElementById('submitButton');
    const sendResetForm = document.getElementById('send-reset-form');

    // inputField.addEventListener('input', function() {
    //     if (inputField.value.trim() !== '') {
    //         submitButton.removeAttribute('disabled');
    //     } else {
    //         submitButton.setAttribute('disabled', 'disabled');
    //     }
    // });

    function registerAs(str){
        document.getElementById('reg-type').innerText = str;
    }

    function allowNumbersOnly(e){
        var value = e.target.value;
        if (isNaN(value)) {
            e.preventDefault();
            event.target.value = value.replace(/\D/g, '');
        }
    }

    function accountRegistrationForm(form, e){
        e.preventDefault();
        const pass = document.getElementById('password1').value;
        const pass2 =document.getElementById('password2').value;
        if(pass !== pass2){
            const errorMsgDiv = document.getElementById('error-msg');
            errorMsgDiv.classList.toggle('hidden');
            errorMsgDiv.innerText =  'Password do not match';
            console.log(pass, pass2)
        }else{
            form.submit();
        }
    }

    sendResetForm.addEventListener('submit', function(e){
        e.preventDefault();
        console.log('clicked');
        const email = document.getElementById('send-to-email').value;
        var requestData = {
            email : email
        };
        $.ajax({
            url: '../src/ajax/send_token.php',
            method: 'POST',
            data: requestData, 
            success: function(response) {
                console.log('Email sent.');
            }
        });
    });
</script>