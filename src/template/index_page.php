<script>var ARRAY_OF_IDS = [];</script>

<main class="container mx-auto lg:px-8 xl:px-32 flex flex-col gap-y-2 justify-center">

<?php if($previousRes->num_rows > 0){ ?>
    <!-- SECTION FOR PREVIOUS READING -->
    <section class="pt-4 px-4">
        <h4 class="text-xl font-bold text-center md:text-start md:indent-8 my-3">Previous Reading</h4>
        <div class="flex flex-wrap gap-x-8 gap-y-4 items-center justify-start h-fit">

            <?php while($row=$previousRes->fetch_assoc()){ ?>
                <a href="view_study.php?id=<?=$row['id']?>" class="cursor-pointer w-[28%] min-w-[290px] hover:brightness-105">
                    <div class="relative flex gap-x-2 p-4 h-[120px] min-w-[290px] bg-white rounded-lg shadow-md">
                        <img src="../public/images/cover/<?=$row['cover']?>" class="w-auto object-contain min-w-[120px] h-auto basis-[40%]" alt="">
                        <div class="flex flex-col justify-between">
                            <p class="text-md font-bold tracking-wider"><?=$row['project_title']?></p>
                            <p class="text-xs text-gray-500"><?=$row['research_title']?></p>
                            <!-- <p><?=$row['view_count']?> view/s</p> -->
                        </div>
                    </div>
                </a>
                
            <?php 
                echo '<script>ARRAY_OF_IDS.push('.$row['id'].');</script>';
            } ?>

        </div>
    </section>

<?php } ?>

    <!-- SECTION FOR RECOMMENDED STUDIES -->
    <section class="pt-4 px-4">
        <h4 class="text-xl font-bold text-center md:text-start md:indent-8 my-3">Recommended Studies</h4>
        <div class="flex flex-wrap gap-x-8 gap-y-4 items-center justify-start h-fit">

            <?php while($row=$res->fetch_assoc()){ ?>
                <a href="view_study.php?id=<?=$row['id']?>" class="cursor-pointer w-[28%] min-w-[290px] hover:brightness-105">
                    <div class="relative flex gap-x-2 p-4 h-[120px] min-w-[290px] bg-white rounded-lg shadow-md">
                        <img src="../public/images/cover/<?=$row['cover']?>" class="w-auto object-contain min-w-[120px] h-auto basis-[40%]" alt="">
                        <div class="flex flex-col justify-between">
                            <p class="text-md font-bold tracking-wider"><?=$row['project_title']?></p>
                            <p class="text-xs text-gray-500"><?=$row['research_title']?></p>
                            <p class="text-orange-400 text-sm"><?=$row['view_count']?> view/s</p>
                        </div>
                    </div>
                </a>
            <?php 
                echo '<script>ARRAY_OF_IDS.push('.$row['id'].');</script>';
            } ?>

        </div>

    </section>

    <!-- SECTION FOR RESEARCH LISTING -->
    <section class="p-4 relative">
        <div class="flex justify-between flex-col sm:flex-row gap-y-1 items-center mb-4 px-8 sm:mb-0">
            <h4 class="text-xl font-bold text-orange-400 text-center md:text-start my-3">Research Title</h4>
            <div class="relative max-w-[240px]">
                <div class="absolute border-r-2 px-2 h-[37px] top-0 start-0 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input 
                    type="search" 
                    id="default-search" 
                    onkeypress="searchContents(event)"
                    class="block w-full px-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Research Title | Tags" />
            </div>
        </div>
        <!-- DYNAMIC RESEARCH LISTING CONTAINER WITH PAGINATION -->
        <div class="border" id="page-content"></div>
    </section>
</main>

<!-- flowbite -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<script>
// Initial page load
    console.log(ARRAY_OF_IDS);
    let count = 1;
    loadPage(count);

    $('#next-btn').click(function(){
        // $('#page-content').html('');
        loadPage(++count);
    });

    $('#prev-btn').click(function(){
        loadPage(--count);
    });

    function loadPage(page, key='') {
        const arrayId = ARRAY_OF_IDS;
        $.ajax({
            url: '../src/components/load_content2.php',
            type: 'GET',
            data: {arrayId, page, key},
            success: function(response) {
                $('#page-content').html(response);
            }
        });
    }
    function searchContents(e){
        if (e.keyCode === 13) {
            loadPage(count, e.target.value);
        }
    }
</script>