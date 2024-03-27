    <div class="max-auto w-screen h-[calc(100vh-64px)] justify-center items-center gap-x-12 flex flex-col lg:flex-row gap-4 border-blue-800">
        
        <!-- LEFT SIDE -->
        <div class="max-w-[500px] w-full h-[860px] flex flex-col justify-center items-center relative">
            <div class="w-full h-[320px] flex justify-center items-center">
                <img src="../src/img/user.png" class="cursor-pointer w-[250px] h-[250px] border-2 border-[#FF8A01] rounded-full absolute top-32 z-10" alt="pic">
            </div>
            <div class="w-full h-[420px] bg-white shadow-md rounded-xl flex flex-col justify-center items-center mb-32 gap-y-2 relative">
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
            </div>
        </div>
        
        <!-- RIGHT SIDE -->
        <div class="max-w-[1200px] w-full h-auto md:h-[700px] bg-white shadow-md rounded-xl flex justify-center items-center p-4">
            <div class="w-[95%] h-[90%] mx-auto z-5">
                <form class="flex flex-col justify-center pb-5 h-full" >
                    <p class="text-[2.5rem]">User Profile</p>

                    <div class="mx-auto flex flex-col w-full h-full  gap-x-1">

                        <section class="pt-6 flex flex-col gap-4 w-full">
                            <div class="flex flex-col md:flex-row w-full gap-4">
                                <div class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/2">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                    <input type="text" placeholder="Ma. Christina" class="rounded-xl edit-input">
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
                            <div class="flex flex-col md:flex-col lg:flex-row w-full gap-4">
                                <div class="flex flex-wrap flex-col gap-x-8 w-full md:w-1/2">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                                    <select name="" id="" class="rounded-xl p-2 edit-input">
                                        <option value="">Bachelor of Science in Information Technology (BSIT)</option>
                                        <option value="">Bachelor of Library and Information Science (BLIS)</option>
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
                                    <select name="" id="" class="rounded-xl p-2 w-3/4 edit-input">
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


        <!-- Main modal -->
        <div id="changePassword-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Change Password
                        </h3>
                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="changePassword-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" action="#">
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter your old password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter your new password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Re-enter your new password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                            </div>
                            <div class="w-full flex flex-row gap-4">
                                <button type="submit" class="w-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Confirm</button>
                                <button type="submit" class="w-1/2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    data-modal-hide="changePassword-modal">Cancel</button>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
<!-- JavaScript code -->
<script>
    // Function to show cancel button and hide enable button
    function showCancelButton() {
        document.getElementById('enableEditButton').style.display = 'none';
        document.getElementById('cancelEditButton').style.display = 'inline-block';
        document.getElementById('passwordDiv').style.display = 'block'; // Show the password input div
        document.getElementById('newpass').style.display = 'block'; // Show the new-pass label input div
    }

    // Function to enable editing
    function enableEditing() {
        const editInputs = document.querySelectorAll('.edit-input');
        editInputs.forEach(input => {
            input.classList.remove('dark-input');
            input.disabled = false; // Enable editing
        });
        showCancelButton(); // Call function to show cancel button
    }

    // Function to cancel editing
    function cancelEditing() {
        const editInputs = document.querySelectorAll('.edit-input');
        editInputs.forEach(input => {
            input.classList.add('dark-input');
            input.disabled = true; // Disable editing
        });
        document.getElementById('enableEditButton').style.display = 'inline-block'; // Show enable button
        document.getElementById('cancelEditButton').style.display = 'none'; // Hide cancel button
        document.getElementById('passwordDiv').style.display = 'none'; // Hide the password input div
        document.getElementById('newpass').style.display = 'none'; // Hide the new-pass label input div
    }

    // Add event listeners to the buttons
    document.getElementById('enableEditButton').addEventListener('click', enableEditing);
    document.getElementById('cancelEditButton').addEventListener('click', cancelEditing);

    // Apply dark styling initially
    const editInputs = document.querySelectorAll('.edit-input');
    editInputs.forEach(input => {
        input.classList.add('dark-input');
        input.disabled = true; // Disable editing
    });

    function sendVerification(email){
        $.ajax({
            url: '../src/ajax/send_verification.php',
            method: 'POST',
            data: { email: email },
            success:function(response){
                alert(response);
            }
        });
    }
</script>
