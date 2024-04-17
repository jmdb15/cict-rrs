<main class="mx-auto h-auto md:h-[calc(100vh-80px)] bg-[#f0f0f0] dark:bg-slate-700">
    <section id="landscape-container" class="lg:h-full w-full flex flex-col lg:flex-row justify-start md:justify-center items-center lg:items-start gap-x-6 border border-orange-400">
        <!-- PROFILE IMAGE -->
        <div class="basis-[29%] h-[80%] py-20 relative flex flex-col justify-center">
            <div class="mt-1 -mb-10 w-3/4 mx-auto z-20">
                <img src="../src/img/qbi.png" alt="Profile Pic" class="rounded-full h-auto w-full border border-red-700">
            </div>
            <div class="-mt-5 pt-20 px-12 pb-5 rounded-xl shadow-md flex flex-col justify-center items-center bg-white contrast-[95%] z-10 w-full sm:min-w-[420px]">
                <p>Ma. Christina Mellizo</p>
                <p>Student</p>
                <div class="w-full mt-4 flex flex-col items-center justify-center">
                    <button type="button" class="w-[200px] py-2.5 px-10 me-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#263238] rounded-lg border border-gray-200 hover:bg-[#FF8A01] hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Update
                    </button>
                    <button type="button" class="w-[200px] py-2.5 px-10 me-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#455A64] rounded-lg border border-gray-200 hover:bg-[#FF8A01] hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Delete Image
                    </button>
                    <button type="button" class="w-[200px] py-2.5 px-10 me-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#455A64] rounded-lg border border-gray-200 hover:bg-[#FF8A01] hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        data-modal-target="changePassword-modal" data-modal-toggle="changePassword-modal">
                        Change Password
                    </button>
                    <button 
                        type="button" 
                        onclick="sendVerification('<?=$_SESSION['email']?>')" 
                        id="verify-account" 
                        class="w-[200px] py-2.5 px-10 me-2 mb-2 text-sm font-medium text-white focus:outline-none bg-[#455A64] rounded-lg border border-gray-200 hover:bg-[#FF8A01] hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Verify Account
                    </button>
                </div>
                <p class="text-sm self-center flex items-center mt-4">
                    <img src="../src/img/Rating.png" height="24px" width="24px" alt="">  
                    My points: 24
                </p>
            </div>
        </div>

        <!-- PROFILE INFO -->
        <div class="basis-[59%] h-[800px] w-96 bg-orange-300">
            <div class="w-[95%] h-[90%] mx-auto z-5">
                <form class="flex flex-col justify-center pb-5 h-full" >
                    <p class="text-[2.5rem]">User Profile</p>

                    <div class="mx-auto flex flex-col w-full h-full  gap-x-1">

                        <section class="pt-6 flex flex-col gap-4 w-full">
                            <div class="flex flex-col md:flex-row w-full gap-4">
                                <div class="flex flex-col gap-x-8 w-full basis-1/3">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                    <input type="text" placeholder="Ma. Christina" class="rounded-xl edit-input">
                                </div>
                                <div class="flex flex-col gap-x-8 w-full basis-1/3">
                                    <label for="message" class="flex flex-row mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name <p class="italic text-gray-400">(optional)</p></label>
                                    <input type="text" placeholder="Ma. Christina" class="rounded-xl edit-input">
                                </div>
                                <div class="flex flex-col gap-x-8 w-full basis-1/3">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                    <input type="text" placeholder="Ma. Christina" class="rounded-xl edit-input">
                                </div>
                            </div>
                        </section>

                        <section class="pt-6 flex flex-col gap-4 w-full">
                            <div class="flex flex-col md:flex-col lg:flex-row w-full gap-4">
                                <div class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/2">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                                    <select name="course" id="course-input" class="rounded-xl p-2 edit-input w-full">
                                        <option value="bsit">Bachelor of Science in Information Technology</option>
                                        <option value="blis">Bachelor of Library and Information Science</option>
                                        <option value="bsis">Bachelor of Science in Information Science</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/2">
                                    <label for="message" class="flex flex-row mb-2 text-sm font-medium text-gray-900 dark:text-white">Position <p class="italic text-gray-400">(optional)</p></label>
                                    <input type="text" placeholder="Ma. Christina" class="rounded-xl edit-input">
                                </div>
                            </div>
                        </section>

                        <section class="pt-6 flex flex-col gap-4 w-full">
                            <div class="flex flex-col md:flex-row w-full gap-4">
                                <div class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/4">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                    <select name="" id="" class="rounded-xl p-2 sm:w-3/4 edit-input w-full">
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                        <option value="">Transgender</option>
                                        <option value="">Others...</option>
                                    </select>
                                </div>
                                <div class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/2">
                                    <label for="message" class="flex flex-row mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name <p class="italic text-gray-400">(optional)</p></label>
                                    <input type="text" placeholder="Ma. Christina" class="rounded-xl edit-input">
                                </div>
                                <div class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/2">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                    <input type="text" placeholder="Ma. Christina" class="rounded-xl edit-input">
                                </div>
                            </div>
                        </section>

                        <section class="pt-6 flex flex-col gap-4 w-full">
                            <div class="flex flex-col md:flex-col w-full gap-4">
                                <div class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/2">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" placeholder="machristina.mellizo.s@bulsu.edu.ph" class="rounded-xl edit-input">
                                </div>
                                <!-- <div class="w-full flex flex-row gap-x-10">
                                    <div class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/4">
                                        <label for="message" class="flex flex-row mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Password
                                        </label>
                                        <label for="message" id="newpass" class="flex flex-row mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Passwordss
                                        </label>
                                        <input type="password" class="rounded-xl edit-input">
                                    </div>
                                    <div id="passwordDiv" class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/4" style="display: none;">
                                        <label for="message" class="flex flex-row mb-2 text-sm font-medium text-gray-900 dark:text-white">Re-enter password</label>
                                        <input type="password" class="rounded-xl edit-input">
                                    </div>
                                </div> -->

                            </div>
                        </section>

                        <section class="pt-6 flex justify-center items-end flex-col gap-4 w-full">
                            <div class="flex md:flex-col w-1/2  gap-4 justify-end items-end place-content-end">
                                <a href="#" id="enableEditButton" class="flex justify-center items-end place-content-end cursor-pointer text-white bg-[#ff8a01] h-10  hover:brightness-110 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-md rounded-lg text-sm w-[26%] mx-auto mt-2 md:mt-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="showCancelButton();">
                                    Edit Profile
                                </a>   
                                <a href="#" id="cancelEditButton" class="justify-center items-end place-content-end cursor-pointer text-white bg-[#ff8a01] h-10  hover:brightness-110 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-md rounded-lg text-sm w-[26%] mx-auto mt-2 md:mt-12 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="display:none;" onclick="cancelEditing();">
                                    Cancel
                                </a>  
                            </div>
                        </section>
                    </div>

                </form>
            </div>
        </div>

    </section>
</main>