<div class="container mx-auto relative overflow-x-auto p-2 lg:p-24 xl:px-48">
    <!-- SEARCH -->
    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
        <div>
            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                <!-- svg here -->
                Default
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="filter-radio-example-1" type="radio" value="approved" name="filter-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Approved</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input checked="" id="filter-radio-example-2" type="radio" value="declined" name="filter-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Declined</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="filter-radio-example-3" type="radio" value="pending" name="filter-status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Pending</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute border-r-[1px] border-gray-300 px-2.5 h-[36.5px] top-0 start-0 flex items-center pointer-events-none">
                <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <div class="flex gap-x-2">
                <input 
                    onkeypress="searchRequests(event)"
                    type="text" 
                    id="search-reqs" 
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    placeholder="Search for items" />
                <input type="button" value="Submit" class="btn bg-orange-400" onclick="searchAllRequests()">
            </div>
        </div>
    </div>
    <!-- TABLE -->
    <div class="rounded bg-gray-50 max-h-[620px] overflow-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <div class="flex p-5 border-b-[1px] rounded w-full">
                <h2 class="text-xl">Requests</h2>
            </div>
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" colspan="1" class="px-1 sm:px-6 py-3">
                        ID
                    </th>
                    <th scope="col" colspan="6" class="px-1 sm:px-6 py-3">
                        Research Title
                    </th>
                    <th scope="col" colspan="2" class="px-1 sm:px-6 py-3">
                        Date Requested
                    </th>
                    <th scope="col" colspan="2" class="px-1 sm:px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody id="req-tbody">
        <?php   if(count($data) > 0){   
                    // while($row = $requestResult->fetch_assoc()){ 
                    // $dateTime = new DateTime($row['created_at']);
                    // $row['created_at'] = $dateTime->format("F j, Y");   
                    for ($i=0; $i < count($data) ; $i++) { 
            ?>  <!-- PHP -->
                    <tr id="tr-<?=$data[$i]['id']?>" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location.href = 'view_study.php';">
                        <th scope="row" colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 dark:text-white">
                            <?=$data[$i]['id']?>
                        </th>
                        <td colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$data[$i]['research_title']?>
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$data[$i]['created_at']?>
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=($data[$i]['status'] == 0) ? 'Pending' : ($data[$i]['status'] == 1 ? 'Approved' : 'Declined')?>
                        </td>
                    </tr>
        <?php   }}else{ ?> <!-- PHP -->
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location.href = 'view_study.php';">
                        <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 dark:text-white">
                            NO RECORDS YET
                        </th>
                    </tr>
        <?php   } ?> <!-- PHP -->
            </tbody>
        </table>
    </div>

</div>

<script>
    function searchRequests(event){
        if(event.keyCode === 13){
            searchAllRequests();
        }
    }

    function searchAllRequests(){
        const key = document.getElementById('search-reqs').value;
        const radios = document.querySelectorAll('input[name="filter-status"]');
        radios.forEach(r => {if(r.checked) selected = r.value});
        console.log(selected);
        ajaxSearchCall(key, selected);
    }

    function ajaxSearchCall(key, selectedFilter){
        $.ajax({
            url:'../src/ajax/search-your-reqs.php',
            type:'POST',
            data:{ key, selectedFilter },
            success: function(response){
                updateTableRows(response);
            }
        })
    }

    function updateTableRows(response){
        const tbody = document.getElementById('req-tbody');
        const parsedData = JSON.parse(response);
        if(response !== 'null'){
            tbody.innerHTML = '';
            const parsedData = JSON.parse(response);
            parsedData.map(data => {
                tbody.innerHTML += `
                    <tr id="tr-${data.id}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location.href = 'view_study.php';">
                        <th scope="row" colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 dark:text-white">
                            ${data.id}
                        </th>
                        <td colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            ${data.research_title}
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            ${data.created_at}
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            ${data.status == 0 ? 'Pending' : data.status == 1 ? 'Approved' : 'Declined '}
                        </td>
                    </tr>
                `;
            });
        }else{
            tbody.innerHTML = `
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location.href = 'view_study.php';">
                    <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 dark:text-white">
                        NO RECORDS FOUND
                    </th>
                </tr>
            `;
        } 
    }
</script>