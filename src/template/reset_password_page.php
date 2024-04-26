<main class="h-screen flex bg-white">
    <div class="container mx-auto w-full rounded-lg overflow-y-hidden flex flex-col justify-start overflow-x-hidden">
        <!-- Modal header -->
        <div class="flex gap-x-2 p-4 md:p-5 rounded-t">
            <img src="../src/img/logo.png" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl flex flex-row font-semibold whitespace-nowrap">CICT- <p class="text-[#FF8A01]">RRS</p></span>
            <!-- <button type="button" class="text-[#FF8A01] bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button> -->
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5 space-y-4 flex justify-center items-center">
            <div class="container flex flex-col justify-content items-center gap-y-4">  
                <div class="w-full flex flex-col justify-center items-center md:items-start p-4 mt-0 md:mt-4 lg:mt-8 ">
                    <p class="text-4xl md:text-4xl lg:text-[4rem] font-medium mb-4">Reset Password</p>
                </div>
                <div class="w-full lg:w-5/6 flex justify-center">                            
                    <div class="w-3/5 hidden md:flex justify-start mt-10 ">
                        <img src="../src/img/reset.png" alt="">
                    </div>
                    <div class="w-full lg:w-2/5 flex justify-center lg:justify-center ">
                        <form method="post" class="flex flex-col gap-y-4 items-center ">
                            <p class="text-sm md:text-md lg:text-lg flex text-center">Hey! Please don't reuse your old password. Create a new, strong one to keep your account secure. Thanks!.</p>
                            <input type="text" value="<?= $_GET['token'] ?>" name="token" hidden>
                            <div class="w-full">
                                <label class="text-start" for="password1">New Password:</label>
                                <input 
                                    type="password" 
                                    placeholder="Enter New Password" 
                                    id="password1" 
                                    name="password" 
                                    class="w-full shadow-md rounded-md p-1 md:p-2 text-sm md:text-md lg:text-lg" 
                                    required
                                />
                            </div>
                            <div class="w-full">
                                <label class="text-start" for="password2">Confirm New Password:</label>
                                <input 
                                    type="password" 
                                    placeholder="Re-Enter New Password" 
                                    id="password2" 
                                    name="confirm" 
                                    class="w-full shadow-md rounded-md p-1 md:p-2 text-sm md:text-md lg:text-lg" 
                                    required
                                />
                            </div>
                            <button 
                                id="submitButton"
                                type="submit" 
                                name="reset" 
                                value="reset"
                                class="p-1 w-full md:w-4/6 mt-4 lg:p-2 lg:mt-8 shadow-xl rounded-md text-sm md:text-lg cursor-pointer bg-[#FF8A01] text-white" 
                            >
                                Confirm
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>