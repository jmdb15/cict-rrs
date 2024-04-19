<div class="relative overflow-x-auto p-2 lg:p-24 xl:px-48">
    <!-- SEARCH -->
    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 justify-center sm:justify-between items-center pb-4">
        <div>
            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200 flex items-center gap-x-8" aria-labelledby="dropdownRadioButton">
                <li id="docs-list" class="selections cursor-pointer transition-colors uppercase hover:text-orange-400 text-orange-400" onclick="showTable('docs')">
                    Documents
                </li>
                <li id="surveys-list" class="selections cursor-pointer transition-colors uppercase hover:text-orange-400" onclick="showTable('surveys')">
                    Surveys
                </li>
                <li id="requests-list" class="selections cursor-pointer transition-colors uppercase hover:text-orange-400" onclick="showTable('requests')">
                    Requests
                </li>
            </ul>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute border-r-[1px] border-gray-300 px-2.5 h-[36.5px] top-0 start-0 flex items-center pointer-events-none">
                <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
        </div>
    </div>
    <div class="w-full relative border">

        <!-- DOCUMENTS TABLE -->
        <div id="docs-table" class="upload-tables">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <div class="flex p-2.5 sm:p-5 border-b-[1px] rounded w-full">
                    <h2 class="text-base sm:text-xl">Documents</h2>
                </div>
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" colspan="2" class="px-1 sm:px-6 py-3">
                            Title
                        </th>
                        <th scope="col" colspan="6" class="px-1 sm:px-6 py-3">
                            Research Title
                        </th>
                        <th scope="col" colspan="1" class="px-1 sm:px-6 py-3">
                            Views
                        </th>
                        <th scope="col" colspan="2" class="px-1 sm:px-6 py-3">
                            Date Uploaded
                        </th>
                    </tr>
                </thead>
                <tbody>
        <?php   if($docResult->num_rows > 0){   
                    while($row = $docResult->fetch_assoc()){ 
                    $dateTime = new DateTime($row['created_at']);
                    $row['created_at'] = $dateTime->format("F j, Y");   
        ?> <!-- PHP -->
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location.href = 'view_study.php';">
                        <a href="view_study.php" class="my-4">
                            <th scope="row" colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?=$row['project_title']?>
                            </th>
                            <td colspan="6" class="px-1 sm:px-6 py-1 sm:py-4 text-xs sm:text-sm text-gray-600">
                                <?=$row['research_title']?>
                            </td>
                            <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                200
                            </td>
                            <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                <?=$row['created_at']?>
                            </td>
                        </a>
                    </tr>
        <?php   }}else{ ?> <!-- PHP -->
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer">
                        <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 dark:text-white">
                            NO RECORDS YET
                        </th>
                    </tr>
        <?php   } ?> <!-- PHP -->
                </tbody>
            </table>
        </div>

        <!-- SURVEYS TABLE -->
        <div id="surveys-table" class="hidden upload-tables">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <div class="flex p-2.5 sm:p-5 border-b-[1px] rounded w-full">
                    <h2 class="text-base sm:text-xl">Surveys</h2>
                </div>
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" colspan="6" class="px-1 sm:px-6 py-3">
                            Survey Title
                        </th>
                        <th scope="col" colspan="1" class="px-1 sm:px-6 py-3">
                            Respondents
                        </th>
                        <th scope="col" colspan="2" class="px-1 sm:px-6 py-3">
                            Date Uploaded
                        </th>
                        <th scope="col" colspan="1" class="px-1 sm:px-6 py-3">
                            Result
                        </th>
                    </tr>
                </thead>
                <tbody>
        <?php   if($surveyResult->num_rows > 0){   
                    while($row = $surveyResult->fetch_assoc()){ 
                    $dateTime = new DateTime($row['created_at']);
                    $row['created_at'] = $dateTime->format("F j, Y");   
        ?>  <!-- PHP -->
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 dark:text-white">
                            <?=$row['survey_name']?>
                        </th>
                        <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$row['responses']?> /<?=$row['respondents']?> 
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$row['created_at']?>
                        </td>
                        <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <span onclick="downloadResponses(<?=$row['id']?>)" class="w-fit h-fit cursor-pointer">
                                <img src="../src/img/dlres.png" alt="">
                            </span>
                        </td>
                    </tr>
        <?php   }}else{ ?> <!-- PHP -->
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer">
                        <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 dark:text-white">
                            NO RECORDS YET
                        </th>
                    </tr>
        <?php   } ?> <!-- PHP -->
                </tbody>
            </table>
        </div>

        <!-- REQUESTS TABLE -->
        <div id="requests-table" class="hidden upload-tables">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <div class="flex p-2.5 sm:p-5 border-b-[1px] rounded w-full">
                    <h2 class="text-base sm:text-xl">Requests</h2>
                </div>
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" colspan="1" class="px-1 sm:px-6 py-3">
                            ID
                        </th>
                        <td colspan="6" class="px-1 sm:px-6 py-4 text-gray-600">
                            Research Title
                        <th scope="col" colspan="1"class="px-1 sm:px-6 py-3">
                            Date
                        </th>
                        <th scope="col" colspan="2" class="px-1 sm:px-6 py-3">
                            Requested By
                        </th>
                        <th scope="col" colspan="1" class="px-1 sm:px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
        <?php   //if($requestResult->num_rows > 0){   
            // while($row = $requestResult->fetch_assoc()){ 
            // $dateTime = new DateTime($row['created_at']);
            // $row['created_at'] = $dateTime->format("F j, Y");   
        ?>  <!-- PHP -->
                    <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location.href = 'view_study.php';">
                        <a href="view_study.php" class="my-4">
                            <th scope="row" colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                01
                            </th>
                            <td colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                An E-Commerce Website for Malolos Branch of UR OOTD’s Clothing Shop 
                            </td>
                            <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                02/27/23 
                            </td>
                            <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                Juan dela Cruz
                            </td>
                            <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                Pending
                            </td>
                        </a>
                    </tr> -->
        <?php   //}}else{ ?> <!-- PHP -->
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer">
                        <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 dark:text-white">
                            NO RECORDS YET
                        </th>
                    </tr>
        <?php   //} ?> <!-- PHP -->
                </tbody>
            </table>
        </div>

    </div>

</div>

<script>
    function showTable(id){
        const tables = document.querySelectorAll('.upload-tables');
        const lists = document.querySelectorAll('.selections');
        tables.forEach(table => {
            if(!table.classList.contains('hidden')){
                table.classList.add('hidden');
            }
        });
        lists.forEach(li => {
            if(li.classList.contains('text-orange-400')){
                li.classList.remove('text-orange-400');
            }
        });
        document.getElementById(`${id}-table`).classList.remove('hidden');
        document.getElementById(`${id}-list`).classList.add('text-orange-400');
    }

    function downloadResponses(id){
        $.ajax({
            url: `actions/export-csv.php`,
            type:'POST',
            data: { id: id },
            success:function(response){
                // alert(response)
                var blob = new Blob([response], {type: 'text/csv'});
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = 'output.csv';

                // Simulate a click on the link to trigger the download
                link.click();
            }
        })
    }
</script>