<div class="w-full h-fit md:h-[calc(100vh-80px)] m-0 p-0 py-20 overflow-x-hidden bg-gray-200 z-[-2] flex justify-center items-start">

    <main class="container h-[596px] mx-auto overflow-y-auto rounded-lg flex flex-col-reverse gap-6 justify-end items-center md:items-start lg:justify-around lg:flex-row z-10 lg:mb-0">
        <!-- LEFT SIDE -->
        <div class="w-[90%] sm:basis-[30%] sticky top-0 mx-auto flex flex-col items-center justify-center gap-y-20 h-[596px] border py-4 md:px-3 lg:px-20 bg-white rounded-lg z-10">
            <img src="../../public/images/cover/<?=$row['cover']?>" class="w-full h-auto max-w-[370px] aspect-video rounded" alt="" class="rounded">
            <div class="flex w-full">
                <img src="../../src/img/PDF.png" class="w-auto max-h-[50px] max-w-[50px]" alt="">
                <div class="flex flex-col">
                <h6 class="text-xl font-bold"><?=$row['project_title']?></h6>
                <p class="text-gray-400 text-sm"><?=$row['month_yr']?></p>
                </div>
            </div>
            <form action="../actions/download-paper.php">
                <input type="hidden" name="id" value="<?=$id?>">
                <button class="text-white bg-gray-700 px-5 py-2.5 rounded-lg" type="submit">Download</button>
            </form>
        </div>

        <!-- RIGHT SIDE -->
        <div class="w-[90%] md:basis-[56%] mx-auto md:ml-auto h-fit min-h-[596px] overflow-y-auto scroll-smooth mt-4 lg:mt-0 py-20 px-6 xl:px-16 relative bg-white rounded-lg z-10">
            <p class="text-base italic font-light text-gray-400 mb-7">Upload Date: <?=$row['created_at']?></p>
            <h2 class="text-4xl font-medium"><?=$row['project_title']?></h2>
            <div class="flex justify-between items-center">
                <h4 class="text-2xl font-normal"><?=$row['research_title']?></h4>
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
            </div>
        </div>
    </main>

<div class="absolute left-0 top-[80px] sm:top-[80px] w-[30%] h-full md:h-[calc(100vh-80px)] bg-orange-400 z-[1]"></div>
</div>

<script>
  function showAbstract(elem){
    abs = document.querySelector("#abstract-content");
    abs.classList.toggle('hidden');
    abs.classList.toggle('flex');
    elem.innerText= (abs.classList.contains('hidden')) ? 'Show Abstract' : 'Hide Abstract';
  }

//   function downloadPaper(id){
//     $.ajax({
//         url: '../../../src/ajax/download-paper.php',
//         type: 'POST',
//         data: { id : id},
//         success: function (data){
            
//         }
//     });
//   }
</script>
