<div class="w-full h-fit md:h-[calc(100vh-68px)] m-0 p-0 overflow-x-hidden bg-gray-200 z-[-2]">

  <main class="container mx-auto h-full flex flex-col-reverse gap-y-6 justify-center items-center md:justify-around md:flex-row z-10  mb-10 md:mb-0">
  <!-- LEFT SIDE -->
    <div class="w-[90%] md:basis-[34%] flex flex-col gap-y-20 h-[596px] border items-center py-4 md:px-3 lg:px-20 flex flex-col justify-center bg-white rounded-lg z-10">
      <img src="../src/img/BloodLink 2.png" class="w-full h-auto max-w-[370px] aspect-video rounded" alt="" class="rounded">
      <div class="flex">
        <img src="../src/img/PDF.png" class="w-auto" alt="">
        <div class="flex flex-col">
          <h6>Blood Bank Management System</h6>
          <p>August 23, 2024</p>
        </div>
      </div>
      <button class="text-white bg-gray-700 px-5 py-2.5 rounded-lg">Request Download</button>
    </div>
  <!-- RIGHT SIDE -->
    <div class="w-[90%] md:basis-[56%] h-[596px] mt-4 md:mt-0 py-20 px-6 xl:px-16 relative bg-white rounded-lg z-10">
      <p class="text-base italic font-light text-gray-400 mb-7">Upload Date: August 23, 2024</p>
      <h2 class="text-4xl font-medium"><?=$row['project_title']?></h2>
      <h4 class="text-2xl font-normal"><?=$row['research_title']?></h4>
      <div class="flex flex-col mt-4">
        <div class="flex mb-3">
          <p class="basis-[24%] text-center text-gray-400">Authors:</p>
          <p class="basis-[74%] text-gray-700"><?php foreach(json_decode($row['authors']) as $aut){echo $aut.', ';}?></p>
        </div>
        <div class="flex mb-3">
          <p class="basis-[24%] text-center text-gray-400">Panel/Critic:</p>
          <p class="basis-[74%] text-gray-700"><?php foreach(json_decode($row['panels']) as $aut){echo $aut.', ';}?></p>
        </div>
        <div class="flex mb-3">
          <p class="basis-[24%] text-center text-gray-400">Description:</p>
          <p class="basis-[74%] text-gray-700"><?=$row['description']?></p>
        </div>
        <div class="flex mb-3">
          <p class="basis-[24%] text-center text-gray-400">Date:</p>
          <p class="basis-[74%] text-gray-700"><?=$row['month_yr']?></p>
        </div>
        <div class="flex mb-3">
          <p class="basis-[24%] text-center text-gray-400">Tags:</p>
          <p class="basis-[74%] flex">
            <?php foreach(json_decode($row['tags']) as $aut){
              echo '<span class="text-red-400 bg-red-100 px-2 rounded-full">'.$aut.'</span>';
            }?>
          </p>
        </div>
        <a href="view_pdf.php?id=<?=$id?>" target="_blank" class="self-center">
          <button class="px-5 py-2.5 w-fit text-white bg-orange-400 rounded-lg">View Document</button>
        </a>
        <p class="text-sm self-center flex items-center mt-4">
          <img src="../src/img/Rating.png" height="24px" width="24px" alt="">  
          My points: 24
        </p>
      </div>
    </div>
    <div class="absolute left-0 top-[72px] md:top-[64px] w-[30%] h-full md:h-[calc(100vh-68px)] bg-orange-400 z-[1]"></div>
  </main>

  <!-- <div class="absolute top-0 left-0 flex w-full h-full z-[-1]">
    <div class="w-[30%] h-full bg-orange-400 "></div>
    <div class="w-[70%] h-full bg-gray-200 opacity-80"></div>
  </div> -->
</div>