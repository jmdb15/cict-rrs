<div class="container mx-auto w-full h-[calc(100vh-80px)] justify-start lg:justify-center gap-x-12 flex flex-col lg:flex-row gap-4">
        <!-- LEFT SIDE -->
        <div class="max-w-[360px] w-full h-[630px] flex flex-col justify-center relative mx-auto">
            <div class="w-full h-fit absolute top-4 lg:top-20 z-10">
                <img src="../public/images/display/<?=$row['image']?>" class="mx-auto cursor-pointer h-[140px] lg:w-[200px] lg:h-[200px] border bg-white border-[#FF8A01] rounded-full z-10" alt="pic" onerror="setProfilePic(this)">
                <!-- USER PROFILE PIC DYNAMIC -->
            </div>
            <div class="w-full h-[320px] mt-12 bg-white shadow-md rounded-xl flex flex-col justify-center items-center self-center gap-y-2 relative">
                <div class="w-full flex flex-col gap-4">            
                    <div class="w-full mt-24 flex flex-col items-center justify-center">
                        <div class="text-center mb-8">
                            <p class="text-lg font-semibold"><?=$row['first_name']?> <?=$row['middle_name'] != null ? $row['middle_name'] : ''?> <?=$row['last_name']?> </p>
                            <p class="text-sm"> <?=ucfirst($row['type'])?> </p>
                        </div>
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="w-[150px] cursor-pointer py-2 md:py-2.5 px-5 me-2 mb-2 text-xs md:text-md font-medium text-white focus:outline-none bg-[#263238] rounded-lg border border-gray-200 hover:bg-orange-400 focus:z-10 focus:ring-4 focus:ring-gray-100" >
                            Update
                        </button>
                        <button type="button" class="w-[150px] py-2 md:py-2.5 px-5 me-2 mb-2 text-xs md:text-md font-medium text-white focus:outline-none bg-[#455A64] rounded-lg border border-gray-200 hover:bg-orange-400 focus:z-10 focus:ring-4 focus:ring-gray-100"
                            data-modal-target="changePassword-modal" data-modal-toggle="changePassword-modal">
                            Change Password
                        </button>
                    </div>
                    <div class="flex flex-row justify-center items-center">
                        <img src="../src/img/star.svg" alt="star">&nbsp;
                        <p class="text-xs md:text-sm lg:text-md">My points: <?=$row['points']?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- RIGHT SIDE -->
        <div class="max-w-[1200px] w-full h-fit bg-white shadow-md rounded-xl flex justify-center items-center mt-0 lg:mt-24 p-4">
            <div class="w-[95%] h-[90%] z-5">
                <form class="flex flex-col justify-center pb-5 h-full" method="POST" action="actions/update-profile.php">
                    <p class="text-[2.5rem]">User Profile</p>
                    <div class="flex flex-col">
                        <!-- NAME -->
                        <section class="pt-6 flex w-full disabled">
                            <div class="w-full flex flex-wrap justify-between items-center">
                                <div class="w-full sm:w-[31%] min-w-[180px]">
                                    <label for="message" class="block mb-2 text-sm md:text-md font-medium text-gray-900">First Name</label>
                                    <input id="first_name" name="first_name" type="text" value="<?=$row['first_name']?>" class="myInput w-full rounded-xl border p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                </div>
                                <div class="w-full sm:w-[31%] min-w-[180px]">
                                    <label for="message" class="flex flex-row mb-2 text-sm md:text-md font-medium text-gray-900">Middle Initial <span class="italic text-gray-400">(optional)</span></label>
                                    <input id="middle_name" name="middle_name" type="text" value="<?=$row['middle_name'] ?? ''?>" class="myInput w-full rounded-xl border p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                </div>
                                <div class="w-full sm:w-[31%] min-w-[180px]">
                                    <label for="message" class="block mb-2 text-sm md:text-md font-medium text-gray-900">Last Name</label>
                                    <input id="last_name" name="last_name" type="text" value="<?=$row['last_name']?>" class="myInput w-full rounded-xl border p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                </div>
                            </div>
                        </section>

                        <!-- COURSE & SECTION -->
                        <?php if($row['type'] == 'student'){ ?>

                            <section class="pt-6 flex flex-col gap-4 w-full disabled">
                                <div class="flex flex-wrap gap-x-4">
                                    <div>
                                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Course</label>
                                        <select name="course" id="" class="myInput w-full rounded-xl p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                            <option value="none" selected disabled>None</option>
                                            <?php 
                                                $xml = simplexml_load_file('../public/info.xml');
                                                $courseElements = $xml->xpath('//element[@attr="course"]/course');
                                                foreach ($courseElements as $course) {
                                                $is_selected = $crs == $course ? "selected" : "";
                                                    echo "
                                                        <option value='$course' $is_selected>$course</option>
                                                    ";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="specs" class="block mb-2 text-sm font-medium text-gray-900">Specialization</label>
                                        <select name="specs" id="specs" class="myInput rounded-xl p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                            <option value="none" <?=$row['specialization'] == 'none' || $row['specialization'] == '' ? 'selected' : ''?> >None</option>
                                            <option value="wmad" <?=$row['specialization'] == 'wmad' ? 'selected' : ''?> >Web Dev</option>
                                            <option value="ba" <?=$row['specialization'] == 'ba' ? 'selected' : ''?> >Bussiness Analytics</option>
                                            <option value="sm" <?=$row['specialization'] == 'sm' ? 'selected' : ''?> >Service Management</option>
                                        </select>
                                    </div>
                                    <div>   
                                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Year</label>
                                        <select name="year" id="" class="myInput rounded-xl p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                            <option value="1" <?=$row['year'] == '1' ? 'selected' : ''?> >1st</option>
                                            <option value="2" <?=$row['year'] == '2' ? 'selected' : ''?> >2nd</option>
                                            <option value="3" <?=$row['year'] == '3' ? 'selected' : ''?> >3rd</option>
                                            <option value="4" <?=$row['year'] == '4' ? 'selected' : ''?> >4th</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="section" class="block mb-2 text-sm font-medium text-gray-900">Section</label>
                                        <input id="section" name="section" type="text" value="<?=$row['section']?>" class="myInput rounded-xl border p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                    </div>                                                                
                                </div>
                            </section>
                            
                        <?php }else{ ?>
                                <div class="pt-6 w-1/2">
                                    <label for="acad_rank" class="block mb-2 text-sm font-medium text-gray-900">Academic Rank</label>
                                    <select name="acad_rank" id="acad_rank" class="myInput w-full rounded-xl p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                        <?php 
                                            $xml = simplexml_load_file('../public/info.xml');
                                            $ranks = $xml->xpath('//element[@attr="rank"]/rank');
                                            foreach ($ranks as $rank) {
                                            $is_selected = $acad_rank == $rank ? "selected" : "";
                                                echo "
                                                    <option value='$rank' $is_selected>$rank</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>

                        <?php } ?>

                

                        <!-- SEX - STUDENT NUMBER - EMAIL -->
                        <section class="pt-6 flex flex-col md:flex-row gap-4 w-full">
                            <!-- INPUT FIELDS -->
                            <div class="flex-1 sm:min-w-[430px]">
                                <div class="flex flex-wrap w-full gap-4">
                                    <!-- STUDENT NUMBER -->
                                    <div class="flex flex-col gap-x-8 w-full flex-1">
                                        <label for="message" class="flex flex-row mb-2 text-sm font-medium text-gray-900"><?=($row['type'] == 'student') ? 'Student' : 'Employee'?> Number</label>
                                        <input type="number" value="<?=$_SESSION['id']?>" class="rounded-xl border p-1 md:p-2 text-sm md:text-md" disabled name="#_number" max="10">
                                    </div>
                                    <!-- SEX DROPDOWN -->
                                    <div class="flex flex-col gap-x-8 w-full flex-1">
                                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Sex</label>
                                        <select name="sex" id="sex" class="myInput rounded-xl border p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                            <option value="male" <?=$row['sex'] == 'male' ? 'selected' : ''?> >Male</option>
                                            <option value="female" <?=$row['sex'] == 'female' ? 'selected' : ''?> >Female</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- EMAIL FIELD -->
                                <div class="pt-6 flex flex-col gap-x-8 w-full md:w-[430px]">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                    <input type="email" name="email" id="email" value="<?=$row['email']?>" class="myInput rounded-xl border p-1 md:p-2 text-sm md:text-md bg-gray-100 disabled:bg-transparent" disabled>
                                </div>
                            </div>
                            <!-- BUTTONS -->
                            <div class="flex flex-1 items-end justify-center md:justify-end min-w-[180px]">
                                <button id="enableBtn" type="button"
                                    class="w-full sm:w-[180px] max-h-[46px] py-2 px-3 text-base text-white focus:outline-none bg-orange-400 rounded-lg border border-gray-200 ">
                                    Edit
                                </button>
                                <div id="editSection" class="hidden h-full w-full flex-col lg:flex-row justify-end items-end gap-2">
                                    <button id="saveBtn"
                                        type="submit"
                                        class="w-full sm:w-[180px] max-h-[46px] justify-center items-center cursor-pointer py-2.5 px-3 rounded-lg border text-sm border-gray-200 text-white bg-[#ff8a01]">Save</button>
                                    <button id="cancelBtn"
                                        type="button"
                                        class="w-full sm:w-[180px] max-h-[46px] justify-center items-center cursor-pointer py-2.5 px-3 rounded-lg border text-sm border-gray-200 text-white bg-[#263238]">Cancel</button>
                                </div>
                            </div>
                        </section>

                    </div>
                </form>
            </div>
        </div>

    <!-- CHANGE PASSWORD MODAL -->
    <div id="changePassword-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-sm lg:text-lg font-semibold text-gray-900">
                        Change Password
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="changePassword-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" onsubmit="changePassAjax(event)">
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Enter your old password</label>
                            <input type="password" name="current_password" id="current_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Enter your new password</label>
                            <input type="password" name="new_password" id="new_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  pattern="(?=.*\d)(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one uppercase letter, and be at least 8 characters long" required />
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Re-enter your new password</label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  pattern="(?=.*\d)(?=.*[A-Z]).{8,}" title="Password must contain at least one number, one uppercase letter, and be at least 8 characters long" required />
                        </div>
                        <div id="error-cont" class="hidden w-full text-center text-red-500 text-sm border-red-500 border bg-red-200 py-1 px-2 rounded-md">Password does not match</div>
                        <div class="w-full flex flex-row gap-4">
                            <button type="submit" class="w-1/2 text-white bg-[#FF8A01] hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" name="changePass">
                                Confirm</button>
                            <button type="submit" class="w-1/2 text-white bg-gray-500 hover:bg-white-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                data-modal-hide="changePassword-modal">Cancel</button>   
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div> 

    <!-- CHANGE PROFILE Modal -->
    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-xl max-h-full">
            <div class="relative bg-white rounded-lg drop-shadow-2xl ">
                <div class="p-4 md:p-5 text-center gap-4">
                    <h3 class="mb-5 text-lg font-normal text-gray-900 uppercase">Change Profile Picture</h3>                    
                    <form action="actions/change-dp.php" method="POST" enctype="multipart/form-data" class="w-full flex flex-col gap-16 justify-center items-center">
                        <div class="flex w-24 md:w-36 lg:w-48 bg-gray-500 rounded-full border-4 border-gray-900">
                            <img id="profile-picture" src="../public/images/display/<?=$row['image']?>" onerror="setProfilePic(this)" alt="" class="h-24 w-24 md:h-36 md:w-36 lg:h-48 lg:w-48 aspect-square object-cover rounded-full">
                        </div>                        
                        <div class="w-full flex flex-col md:flex-row items-center justify-center lg:justify-between gap-2">
                            <div class="flex w-full md:w-1/2 justify-center md:justify-start">
                                <input type="file" name="pict" id="pict" class="hidden" accept="image/*">
                                <label for="pict" class="py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-[#FF8A01] rounded-lg border border-gray-200 cursor-pointer hover:brightness-110 focus:z-10 focus:ring-4 focus:ring-gray-100">
                                    Change picture
                                </label>
                            </div>
                            <div class="flex w-full md:w-1/2 gap-1 justify-center md:justify-end">
                                <button type="submit" class="py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-[#FF8A01] rounded-lg border border-gray-200  focus:z-10 focus:ring-4 focus:ring-gray-100">Save</button>
                                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-black rounded-lg border border-gray-200  focus:z-10 focus:ring-4 focus:ring-gray-100">No, cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= 
        '<script>
            const LOGGED_EMAIL = "'.$_SESSION['email'].'"
        </script>'
    ?>
    
<!-- JavaScript code -->
<script>
    function setProfilePic(elem){
        elem.src = '../src/img/user.png';
    }

    function changePassAjax(event){
        event.preventDefault();
        const errorContainer = document.getElementById('error-cont');
        const oldPass = document.getElementById('current_password').value;
        const newPass = document.getElementById('new_password').value;
        const confPass = document.getElementById('confirm_password').value;
        if(newPass != confPass){
            errorContainer.classList.remove('hidden');
        }else{
            errorContainer.classList.add('hidden');
            $.ajax({
                url: 'actions/change-pass.php',
                type: 'POST',
                data: {
                    oldPass,
                    newPass,
                    confPass
                },
                success: function(data){
                    if(data === 'success') location.reload();
                }
            });
        }
    }

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
    // document.getElementById('enableEditButton').addEventListener('click', enableEditing);
    // document.getElementById('cancelEditButton').addEventListener('click', cancelEditing);

    // Apply dark styling initially
    const editInputs = document.querySelectorAll('.edit-input');
    editInputs.forEach(input => {
        input.classList.add('dark-input');
        input.disabled = true; // Disable editing
    });

    document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.getElementById('pict');
    const profilePicture = document.getElementById('profile-picture');

    // Function to handle file input change
    fileInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                profilePicture.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // Function to set default profile picture when profile is hidden
    function setDefaultProfilePicture() {
        profilePicture.src = '../img/user.png';
    }

    // Call setDefaultProfilePicture function initially
    setDefaultProfilePicture();
});
</script>

<script>

function setBackgroundWhenEditing() {
        var inputFields = document.querySelectorAll('.myInput');
        inputFields.forEach(function (inputField) {
            inputField.classList.remove('bg-gray-300', 'text-gray-900');
            inputField.classList.add('bg-white', 'text-gray-900');
        });
    }

    // Function to set default background color
    function setDefaultBackgroundColor() {
        var inputFields = document.querySelectorAll('.myInput');
        inputFields.forEach(function (inputField) {
            inputField.classList.remove('bg-white', 'bg-gray-800', 'text-white', 'text-gray-900');
            inputField.classList.add('bg-gray-300', 'text-gray-900');
        });
    }

    document.getElementById('enableBtn').addEventListener('click', function () {
        var inputFields = document.querySelectorAll('.myInput');
        var editSection = document.getElementById('editSection');
        var enableBtn = document.getElementById('enableBtn');

        enableBtn.classList.add('hidden');
        editSection.classList.remove('hidden');
        editSection.classList.add('flex');

        // Set background color when editing
        setBackgroundWhenEditing();

        // Enable input fields
        inputFields.forEach(function (inputField) {
            inputField.removeAttribute('disabled');
        });

        // Focus on the first input field
        inputFields[0].focus();
    });

    document.getElementById('cancelBtn').addEventListener('click', function () {
        var inputFields = document.querySelectorAll('.myInput');
        var editSection = document.getElementById('editSection');
        var enableBtn = document.getElementById('enableBtn');

        enableBtn.classList.remove('hidden');
        editSection.classList.remove('flex');
        editSection.classList.add('hidden');

        // Set default background color
        setDefaultBackgroundColor();

        // Disable input fields
        inputFields.forEach(function (inputField) {
            inputField.setAttribute('disabled', 'disabled');
        });
    });

    // Set default background color initially
    setDefaultBackgroundColor();
</script>