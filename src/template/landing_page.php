<div class="container relative mx-auto flex flex-col md:flex-col sm:flex-col gap-5 scroll-smooth">
    <!-- LANDING -->
    <section id="home" class="text-black justify-center items-center h-screen flex flex-col-reverse md:flex-row">

        <div class="h-1/2 w-full flex flex-col bg-transparent relative justify-center items-center md:h-full">
            <img src="../src/img/circles.svg" alt="" class="hidden absolute md:flex md:-left-6 md:w-[400px] md:h-[500px]">
            <div class="flex flex-col w-full h-full gap-8 p-1 z-10 ml-0 sm:ml-10 md:ml-64 mt-32 md:mt-64">
                <h1 class="text-[1.5rem] font-bold md:text-[3rem]">Research <br>Repository System</h1>
                <p class="text-1xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, in?</p>
                <a href="#" data-modal-target="signup-modal" data-modal-toggle="signup-modal" class="bg-[#FF8A01] text-white p-2 w-[120px] md:p-3 md:w-[140px] rounded-lg flex items-center justify-center cursor-pointer">
                    Get Started</a>
            </div>
        </div>

        <div class="h-1/2 w-full mt-20 flex flex-col justify-center items-center md:w-full md:h-full">
            <div class="relative flex h-full w-full md:w-full md:h-full md:ml-32">
                <img src="../src/img/circle.svg" alt="" class="absolute w-[400px] h-[350px] mt-6 md:w-[-20px] md:h-[450px] md:top-[20px]">
                <img src="../src/img/tm.svg" alt="" class="absolute w-[400px] h-[350px] mt-10 ml-0 sm:ml-4 md:w-[-10px] md:h-[450px] md:top-[30px] z-20">
                <img src="../src/img/circles.svg" alt="" class="absolute hidden md:flex md:w-[-40px] md:h-[380px] md:top-[350px] md:ml-36">

                <!-- FOR WHITE BG -->
                <div class="absolute bg-white text-black p-4 rounded-2xl border-2 border-black flex items-center justify-center flex-row shadow-2xl gap-4 z-30 ml-[200px] mt-[300px] md:w-[170px] md:top-[100px] md:left-[70px]">
                    <img src="../src/img/books.svg" alt="" class="bg-black p-2 rounded-lg">
                    <div class="justify-con items-center flex-col">
                        <p class="text-gray-400">Titles</p>
                        <p class="font-bold">250+</p>
                    </div>
                </div>
                <div class="absolute bg-black rounded-full hidden md:flex md:w-9 md:h-9 md:top-[430px] md:left-[30px]"></div>
                <div class="absolute bg-black rounded-full hidden md:flex md:w-3 md:h-3  md:top-[620px] md:left-[260px]"></div>
                <div class="absolute bg-black rounded-full hidden md:flex md:w-4 md:h-4 md:top-[550px] md:left-[420px]"></div>
                <div class="absolute bg-[#FBCF9A] rounded-full hidden md:flex md:w-5 md:h-5 md:top-[250px] md:left-[400px]"></div>
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
            <div class="max-w-sm p-6 gap-6 bg-white flex flex-col justify-center items-center border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-row gap-x-10 justify-center items-center">
                    <img src="../src/img/search.png" alt="" class="bg-[#F4EBFF] p-2 rounded-xl">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Find Studies</h5>
                    </a>
                </div>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Easy to find related studies for your research.</p>
            </div>
            <div class="max-w-sm p-6 gap-6 bg-white flex flex-col justify-center items-center border border-gray-200     rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-row gap-x-10 justify-center items-center">
                    <img src="../src/img/clipBoard.png" alt="" class="bg-[#E0EAFF] p-2 rounded-xl">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Find Studies</h5>
                    </a>
                </div>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Easily upload your questionnaires for your research studies.</p>
            </div>
            <div class="max-w-sm p-6 gap-6 bg-white flex flex-col justify-center items-center border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-row gap-x-10 justify-center items-center">
                    <img src="../src/img/redBook.png" alt="" class="bg-[#FCE7F6] p-2 rounded-xl">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Find Studies</h5>
                    </a>
                </div>
                <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Long-term preservation of research studies for future researchers.</p>
            </div>
        </div>
    </section>
    <!-- ABOUT -->
    <section id="about" class="box-sizing text-black bg-transparent pt-14 w-screen sm:-ml-[calc((100vw-648px)/2+12px)]
        md:-ml-[calc((100vw-768px)/2+12px)] lg:-ml-[calc((100vw-1032px)/2+12px)] xl:-ml-[calc((100vw-1288px)/2+12px)] 2xl:-ml-[calc((100vw-1544px)/2+12px)]">
        <div class="flex flex-col justify-center items-center bg-white h-fit w-full pt-2">
            <p class="text-4xl text-[#4D4D4D] font-bold my-3">About Us</p>
            <div class="flex flex-col justify-center items-center w-4/5 p-0 sm:p-6 md:px-10 gap-2">
                <p class="text-base sm:text-lg">College of information and Communication Technology - Research Repository System</p>
                <p class="text-center text-[#4D4D4D] text-sm sm:text-base">CICT-RRS is designed to assist the entire college community with their research endeavors. Our platform empowers students and faculty members alike to effortlessly discover pertinent topics for their studies, anytime and anywhere. Additionally, researchers can utilize our website to efficiently gather respondents by uploading their questionnaires, streamlining the data collection process. With this website, the college can now preserve all completed studies conducted by the entire college community, ensuring that valuable research contributions are archived and accessible for future reference and knowledge dissemination.</p>
            </div>
        </div>
    </section>

    <!-- STUDIES -->
    <section id="#" class="relative text-black bg-transparent flex flex-col items-center h-fit mb-24 md:mb-0 md:h-screen md:screen gap-y-8">
        
        <div class="w-3/4 md:-ml-24">
            <p class="text-2xl text-[#4D4D4D] font-bold mt-2 -ml-42 md:w-full md:mt-12 md:ml-18 md:items-start">Popular Studies</p>
        </div>

        <a href="#" class="dark:bg-[#4D4D4D] w-3/4 md:w-4/5 p-2 flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xxl hover:bg-gray-100 dark:hover:brightness-105">
            <img class="object-cover w-full md:w-[200px]" 
            src="../src/img/wall.jpeg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <p class="text-[#FF8A01]">November 26, 2021</p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-[#667085] dark:text-gray-400">
                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <div class="flex flex-row gap-6">
                    <p class="bg-[#FDF2FA] text-[#C11574] p-1 rounded-xl">Blood</p>
                    <p class="bg-[#ECFDF3] text-[#027A48] p-1 rounded-xl">Medical</p>
                </div>
            </div>
        </a>

        <a href="#" class="dark:bg-[#4D4D4D] w-3/4 md:w-4/5 p-2 flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xxl hover:bg-gray-100 dark:hover:brightness-105">
            <img class="object-cover w-full md:w-[200px]" 
            src="../src/img/wall.jpeg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <p class="text-[#FF8A01]">November 26, 2021</p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-[#667085] dark:text-gray-400">
                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <div class="flex flex-row gap-6">
                    <p class="bg-[#FDF2FA] text-[#C11574] p-1 rounded-xl">Blood</p>
                    <p class="bg-[#ECFDF3] text-[#027A48] p-1 rounded-xl">Medical</p>
                </div>
            </div>
        </a>

        <a href="#" class="dark:bg-[#4D4D4D] w-3/4 md:w-4/5 p-2 flex flex-col items-center bg-white rounded-lg shadow md:flex-row md:max-w-xxl hover:bg-gray-100 dark:hover:brightness-105">
            <img class="object-cover w-full md:w-[200px]" 
            src="../src/img/wall.jpeg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <p class="text-[#FF8A01]">November 26, 2021</p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-[#667085] dark:text-gray-400">
                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <div class="flex flex-row gap-6">
                    <p class="bg-[#FDF2FA] text-[#C11574] p-1 rounded-xl">Blood</p>
                    <p class="bg-[#ECFDF3] text-[#027A48] p-1 rounded-xl">Medical</p>
                </div>
            </div>
        </a>
    </section>
    <?php include('../src/components/footerLP.php'); ?>
</div>



<!-- FOR LOGIN MODAL -->
<div id="login-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-3/4 h-full flex justify-center items-center">
        <!-- Modal content -->
        <div class="relative bg-white w-full h-3/5 md:w-full md:h-full rounded-lg shadow dark:bg-gray-700 overflow-y-hidden overflow-x-hidden">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                <img src="../src/img/logo.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl flex flex-row font-semibold whitespace-nowrap dark:text-white">CICT- <p class="text-[#FF8A01]">RRS</p></span>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="login-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">

                <div class="container mx-auto flex flex-row justify-content items-center md:flex-row sm:flex-col">

                    <div class="relative hidden md:flex md:w-[800px] md:h-[680px] md:mt-[100px] md:flex-col">
                        <div class="absolute top-24 left-10">
                            <p class="text-[5rem] font-[500]">Log In To</p>
                            <p class="text-[2rem] font-[400]">CICT Research <br> Repository System</p>
                            <p>if you don't have an account register</p>
                            <span>You can <a href="signup.php" class="cursor-pointer text-[#FF8A01] hover:">Register Here !</a></span>
                        </div>
                        <img src="../src/img/pic1.svg" alt="" class="absolute bottom-0 ml-[400px] w-96 hidden sm:block custom:hidden">
                    </div>

                    <div class="relative w-[550px] h-[680px] flex justify-content">
                        <form class="w-3/4 mx-auto gap-2 flex flex-col justify-content" method="POST" action="actions/login.php">
                            <p class="text-[2.5rem] mb-5">Login</p>
                            <div class="mb-5">
                                <input type="email" id="email" name="email" class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Enter Student Number" required />
                            </div>
                            <div class="mb-5">
                                <input type="password" id="password" name="password" class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Password" required />
                            </div>
                            <div class="flex justify-end mb-10">
                                <p class="text-gray-500 hover hover-[#E0E0E0] cursor-pointer" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                                    <a href="forgot.php">
                                        Forgot Password?
                                    </a>
                                </p>
                            </div>
                            <button name="submit" type="submit" class="text-white bg-[#FF8A01] hover hover-[#CC6E00] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-4 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
<div id="signup-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-3/4 h-full flex justify-center items-center">
        <!-- Modal content -->
        <div class="relative bg-white w-full h-4/5 md:w-full md:h-full rounded-lg shadow dark:bg-gray-700 overflow-y-hidden overflow-x-hidden">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                <img src="../src/img/logo.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl flex flex-row font-semibold whitespace-nowrap dark:text-white">CICT- <p class="text-[#FF8A01]">RRS</p></span>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="signup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">

                <div class="container mx-auto flex flex-row justify-content items-center md:flex-row sm:flex-col">
                    <div class="relative hidden md:flex md:w-[800px] md:h-[680px] md:mt-[100px]">
                        <div class="absolute top-24 left-10">
                            <p class="text-[5rem] font-[500]">Log In To</p>
                            <p class="text-[2.5rem] font-[500]">CICT Research <br> Repository System</p>
                            <p>if you already have an account</p>
                            <span>You can <a href="login.php" class="cursor-pointer text-[#FF8A01] hover:">Login Here !</a></span>
                        </div>
                        <img src="../src/img/pic2.svg" alt="" class="hidden lg:absolute bottom-2 ml-[400px] w-96 md:block">
                    </div>

                    <div class="relative w-[550px] h-[680px] flex flex-col justify-content">
                        <form class="w-3/4 mx-auto gap-2 flex flex-col justify-content" method="POST" action="actions/signup.php">
                            <p class="text-[2.5rem] mb-5">Sign up</p>
                            <p class="text-[1rem] mb-5 text-gray-500">Register As:</p>
                            <div class="flex flex-row items-center justify-between mb-10">
                                <div class="flex items-center mb-4 gap-10">
                                    <div class="dv">
                                        <input id="default-radio-1" type="radio" value="student" name="type" class="w-4 h-4 text-gray-500 bg-gray-100 border-gray-300 focus:ring-gray-500 dark:focus:ring-gray-500 dark:ring-offset-gray-500 focus:ring-2 dark:bg-gray-500 dark:border-gray-500">
                                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Student</label>
                                    </div>

                                    <div class="dv">
                                        <input id="default-radio-1" type="radio" value="faculty" name="type" class="w-4 h-4 text-gray-500 bg-gray-100 border-gray-300 focus:ring-gray-500 dark:focus:ring-gray-500 dark:ring-offset-gray-500 focus:ring-2 dark:bg-gray-500 dark:border-gray-500">
                                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Faculty</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <input type="email" id="email" name="email" class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Enter Email Address" required />
                            </div>
                            <div class="mb-5">
                                <input type="text" id="number" name="number" class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Enter Student Number" required />
                            </div>
                            <div class="mb-5">
                                <input type="password" id="password" name="password" class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Enter Password" required />
                            </div>
                            <div class="mb-5">
                                <input type="password" id="password" name="password2" class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Re-enter Password" required />
                            </div>
                            <button type="submit" name="signup" class="text-white bg-[#FF8A01] hover hover-[#CC6E00] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-4 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                signup
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
