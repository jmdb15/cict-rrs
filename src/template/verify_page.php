<div class="container mx-auto flex justify-center items-center mt-28 md:mt-32 p-2">
    <div class="w-full md:w-1/2 lg:w-1/5 flex flex-col justify-center items-center shadow-lg rounded-sm p-8 bg-white">
        <section class="flex flex-col justify-center items-center">
            <img src="../src/img/ver1.png" alt="">
            <p class="text-md md:text-xl lg:text-2xl font-semibold">Verify Your Email</p>
        </section>
        <section class="p-4 flex flex-col justify-center items-center gap-y-4">
            <p class="text-sm md:text-md text-center">Congratulations! You are already one step closer to have a fully access to your account. Please click the button and check your email to verify your account</p>
            <p id="sent-msg" class="hidden text-blue-500 text-xs text-center">We have sent a verification email.</p>
            <button 
                onclick="sendVerification('<?=$_SESSION['email']?>')"
                class="rounded-md flex p-1 md:p-2 px-4 md:px-6 shadow-lg text-sm md:text-md text-white bg-[#FF8A01]">
                Verify Email
            </button>
        </section>
    </div>
</div>

<script>
    function sendVerification(email){
        $.ajax({
            url: '../src/ajax/send_verification.php',
            method: 'POST',
            data: {email},
            success:function(response){
                document.getElementById('sent-msg').classList.remove('hidden');
            }
        });
    }
</script>