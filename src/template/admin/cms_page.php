<main class="container mx-auto">
        <div class="w-full flex flex-col p-8 gap-y-10">
            <section class="w-full flex flex-col">
                <p class="text-lg md:text-4xl font-medium text-[#FF8A01]">Settings</p>
                <p class="text-sm md:text-md">Update the system settings</p>
            </section>
            <section class="w-full flex flex-col md:flex-row py-4 gap-y-10 rounded-lg bg-white">
                <!-- START LEFT -->
                <div class="w-full md:w-1/4">
                    <ul class="flex w-full flex-wrap md:flex-col gap-x-4 p-2">
                        <li class="flex items-center cursor-pointer gap-x-1 px-0 p-0 md:gap-x-2 md:px-8 md:p-2 hover:bg-gray-100 text-sm md:text-lg" id="A1">
                            <img src="../img/about.png" alt="">
                            About
                        </li>
                        <li class="flex items-center cursor-pointer gap-x-1 px-0 p-0 md:gap-x-2 md:px-8 md:p-2 hover:bg-gray-100 text-sm md:text-lg" id="A2">
                            <img src="../img/course.png" alt="">
                            CICT Course
                        </li>
                        <li class="flex items-center cursor-pointer gap-x-1 px-0 p-0 md:gap-x-2 md:px-8 md:p-2 hover:bg-gray-100 text-sm md:text-lg" id="A3">
                            <img src="../img/terms.png" alt="">
                            Academic Rank
                        </li>                                                
                    </ul>
                </div>
                <!-- END LEFT -->

                <!-- START RIGHT -->
                <div class="w-full md:w-3/4 p-2">
                    <form action="../actions/update-xml.php" class="w-full" method="POST">
                    <!-- START ABOUT -->
                    <div class="w-full flex justify-center border-t-2 md:border-t-0 md:border-l-2" id="showA1">
                        <div class="w-full md:w-4/5 flex flex-col place-self-center gap-10 md:gap-y-36">
                            <div class="w-full flex flex-col gap-y-2">
                                <p class="text-sm md:text-md lg:text-lg">About Us (Landing Page)</p>
                                <textarea name="about" id="about" cols="30" rows="10" class="rounded-md text-justify p-2 md:px-4 border-2 text-sm border-gray-500"><?php 
                                        $xml = simplexml_load_file('../../public/info.xml');
                                        $about = $xml->xpath('//element[@attr="about"]');
                                        echo $about[0][0];
                                    ?></textarea>                            
                            </div>
                            <div class="w-full flex justify-end items-end">
                                <button type="submit" class="bg-[#FF8A01] text-white p-1 px-5 text-sm md:text-md md:p-2 md:px-10 rounded-md">Update</button>
                            </div>
                        </div>
                    </div>
                    <!-- END ABOUT -->

                    <!-- START CICT COURSE -->
                    <div class="w-full hidden border-l-2" id="showA2">
                        <div class="w-full flex flex-col justify-center items-center gap-10 md:gap-y-36">
                            <div class="w-full md:w-4/5 flex flex-col gap-y-2">
                                <p class="text-sm md:text-md lg:text-lg">CICT Courses / Program</p>
                                <textarea name="courses" id="courses" cols="30" rows="10" class="rounded-md text-justify p-2 md:px-4 border-2 text-sm border-gray-500"><?php 
    $xml = simplexml_load_file('../../public/info.xml');
    $courses = $xml->xpath('//element[@attr="course"]/course');
    foreach ($courses as $course) {
        echo $course.'&#13;&#10;';
    }
?></textarea>                            
                            </div>
                            <div class="w-full md:w-4/5 flex justify-end items-end">
                                <button type="submit" class="bg-[#FF8A01] text-white p-1 px-5 text-sm md:text-md md:p-2 md:px-10 rounded-md">Update</button>
                            </div>
                        </div>   
                    </div>
                    <!-- END CICT COURSE -->

                    <!-- START TERMS -->
                    <div class="w-full hidden border-l-2" id="showA3">
                        <div class="w-full flex flex-col justify-center items-center gap-10 md:gap-y-36">
                            <div class="w-full md:w-4/5 flex flex-col gap-y-2">
                                <p class="text-sm md:text-md lg:text-lg">Academic Rank</p>
                                <textarea name="ranks" id="ranks" cols="30" rows="10" class="rounded-md text-justify p-2 md:px-4 border-2 text-sm border-gray-500"><?php 
    $xml = simplexml_load_file('../../public/info.xml');
    $ranks = $xml->xpath('//element[@attr="rank"]/rank');
    foreach ($ranks as $rank) {
        echo $rank.'&#13;&#10;';
    }
?></textarea>                            
                            </div>
                            <div class="w-full md:w-4/5 flex justify-end items-end">
                                <button type="submit" class="bg-[#FF8A01] text-white p-1 px-5 text-sm md:text-md md:p-2 md:px-10 rounded-md">Update</button>
                            </div>
                        </div>                        
                    </div>
                    <!-- END TERMS -->     
                    </form>                                   
                </div>
                <!-- END RIGHT -->
            </section>
        </div>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
<!-- flowbite -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script>
    setActiveNav('cms');

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