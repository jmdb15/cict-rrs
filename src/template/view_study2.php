<div class="w-full h-fit md:h-[calc(100vh-80px)] m-0 p-0 py-20 overflow-x-hidden bg-gray-200 z-[-2] flex justify-center items-start">

    <main class="container h-[596px] mx-auto overflow-y-auto rounded-lg flex flex-col-reverse gap-6 justify-end items-center md:items-start lg:justify-around lg:flex-row z-10 lg:mb-0">
        <!-- LEFT SIDE -->
        <div class="w-[90%] sm:basis-[30%] sticky top-0 mx-auto flex flex-col items-center justify-center gap-y-20 h-[596px] border py-4 md:px-3 lg:px-20 bg-white rounded-lg z-10">
            <img src="../public/images/cover/<?=$row['cover']?>" class="w-full h-auto max-w-[370px] aspect-video rounded" alt="" class="rounded">
            <div class="flex w-full">
                <img src="../src/img/PDF.png" class="w-auto max-h-[50px] max-w-[50px]" alt="">
                <div class="flex flex-col">
                <h6 class="text-sm font-bold"><?=$row['research_title']?></h6>
                <p class="text-gray-400 text-sm"><?=$row['month_yr']?></p>
                </div>
            </div>
            <button class="text-white bg-gray-700 px-5 py-2.5 rounded-lg disabled:cursor-not-allowed"  data-modal-target="terms-modal" data-modal-toggle="terms-modal"
                <?=($btnDisable)? 'disabled' : ''?>>Request Download</button>
        </div>

        <!-- RIGHT SIDE -->
        <div class="w-[90%] md:basis-[56%] mx-auto md:ml-auto h-fit min-h-[596px] overflow-y-auto scroll-smooth mt-4 lg:mt-0 py-20 px-6 xl:px-16 relative bg-white rounded-lg z-10">
            <p class="text-base italic font-light text-gray-400 mb-7">Upload Date: <?=$row['created_at']?></p>
            <h2 class="text-3xl font-medium"><?=$row['research_title']?></h2>
            <div class="flex justify-between items-center">
                <span id="abstract-btn" class="hover:underline text-blue-500 text-sm cursor-pointer" onclick="showAbstract(this)">Show Abstract</span>
            </div>
            <div class="flex flex-col mt-4">
                <div class="flex mb-3">
                    <p class="basis-[24%] text-center text-gray-400">Authors:</p>
                    <p class="basis-[74%] text-gray-700"> <?php foreach(json_decode($row['authors']) as $aut){echo $aut.', ';}?></p>
                </div>
                <div class="flex mb-3">
                    <p class="basis-[24%] text-center text-gray-400">Panel/Critic:</p>
                    <p class="basis-[74%] text-gray-700"> <?php foreach(json_decode($row['panels']) as $aut){echo $aut.', ';}?></p>
                </div>
                <div class="mb-3 hidden" id="abstract-content">
                    <p class="basis-[24%] text-center text-gray-400">Abstract:</p>
                    <p class="basis-[74%] text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat optio, architecto cumque modi maxime nisi non, perferendis quas perspiciatis quam qui, delectus odio eos nam. Nulla porro soluta commodi libero quo quis, iste possimus hic, placeat praesentium, corporis esse molestiae magnam. Odit velit corrupti accusamus voluptate, ullam enim laborum quas quibusdam at aperiam mollitia eaque in unde beatae provident aliquam alias omnis asperiores fuga, harum dolorum praesentium exercitationem. Ab eum ut ex. Sunt praesentium, eaque ea perspiciatis velit, libero rem aut pariatur saepe soluta porro sit eum quia recusandae neque suscipit facilis iste impedit nesciunt reiciendis hic? Iste aspernatur doloribus minima accusantium maiores fuga sed debitis, sint tempore nihil asperiores in tempora omnis quasi molestias, saepe corporis enim, voluptas nostrum illum a obcaecati recusandae est sit? Quo suscipit quidem, similique dolor minima, sunt blanditiis, veritatis esse voluptatibus ut cum commodi enim placeat perferendis corporis? Reiciendis sed veritatis deserunt voluptatem rem non natus quos repudiandae temporibus eaque, culpa ea ex tempora aliquam totam, iusto eius est. Odit hic mollitia tenetur deserunt culpa et, totam laborum nemo, a unde ad? Eos cupiditate saepe nihil non! Nihil est, animi alias accusamus amet consectetur? Recusandae totam cupiditate voluptatem, hic quam quisquam voluptatibus optio. Impedit.</p>
                </div>
                <div class="flex mb-3">
                    <p class="basis-[24%] text-center text-gray-400">Date:</p>
                    <p class="basis-[74%] text-gray-700"><?=$row['month_yr']?></p>
                </div>
                <div class="flex mb-3">
                    <p class="basis-[24%] text-center text-gray-400">Tags:</p>
                    <p class="basis-[74%] flex">
                        <?php foreach(json_decode($row['tags']) as $aut){
                        echo '<span class="text-red-400 bg-red-100 px-2 mx-1 rounded-full">'.$aut.'</span>';
                        } ?>
                    </p>
                </div>
                <a href="view_pdf.php?id=<?=$id?>" target="_blank" class="self-center">
                    <button class="px-5 py-2.5 w-fit text-white bg-orange-400 rounded-lg">View Document</button>
                </a>
                <p class="text-sm self-center flex items-center mt-4">
                    <img src="../src/img/Rating.png" height="24px" width="24px" alt="">  
                    My points: <?=$_SESSION['points']?>
                </p>
            </div>
        </div>
    </main>

<!-- START OF TERMS MODAL -->
<div id="terms-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full md:w-3/4 h-full flex justify-center items-center">
        <!-- Modal content -->
        <div class="relative bg-white w-full lg:w-2/5 rounded-lg shadow-2xl border-2 border-white overflow-y-hidden overflow-x-hidden">
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <div class="flex flex-col justify-center items-center">
                    <section class="w-full flex items-center border-b-2 py-2">
                        <img src="../src/img/terms.png" alt="">
                        <span class="text-md md:text-lg lg:text-xl text-[#FF8A01]">Terms and Conditions for Downloading Research Paper</span>
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
                            <button id="acceptButton" data-modal-hide="terms-modal" onclick="sendRequest(this, <?=$id?>)" class="text-center items-center w-1/4 p-1 mt-4  lg:p-2 lg:mt-8 shadow-xl rounded-md text-sm md:text-lg cursor-pointer bg-[#FF8A01] text-white">
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

<div class="absolute left-0 top-[80px] sm:top-[80px] w-[30%] h-full md:h-[calc(100vh-80px)] bg-orange-400 z-[1]"></div>
</div>

<script>
  function showAbstract(elem){
    abs = document.querySelector("#abstract-content");
    abs.classList.toggle('hidden');
    abs.classList.toggle('flex');
    elem.innerText= (abs.classList.contains('hidden')) ? 'Show Abstract' : 'Hide Abstract';
  }

  function sendRequest(btn, id){
    btn.setAttribute('disabled', '');
    $.ajax({
        url: '../src/ajax/request_dl.php',
        type: 'POST',
        data: { id : id},
        success: function (data){
            const toast = document.getElementById('toast-default');
            const toastMsg = document.getElementById('toast-msg');
            toast.classList.remove('hidden');
            toastMsg.innerText = data;
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 3000);
        }
    });
  }
</script>
