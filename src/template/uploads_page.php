<div class="container mx-auto relative overflow-x-auto p-2 lg:p-24 xl:px-48">
    <!-- SEARCH -->
    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 justify-center sm:justify-between items-center pb-4">
        <div>
            <ul class="p-3 space-y-1 text-sm text-gray-700 flex items-center gap-x-8" aria-labelledby="dropdownRadioButton">
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
                <svg class="w-3 h-3 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input 
                onkeypress="searchUploads(event)"
                type="text" 
                id="table-search" 
                class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " 
                placeholder="Search for items">
        </div>
    </div>
    <div class="w-full relative border">

        <!-- DOCUMENTS TABLE -->
        <div id="docs-table" class="upload-tables">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <div class="flex p-2.5 sm:p-5 border-b-[1px] rounded w-full">
                    <h2 class="text-base sm:text-xl">Documents</h2>
                </div>
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
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
                <tbody id="docs-tbody">
        <?php   if($docResult->num_rows > 0){   
                    while($row = $docResult->fetch_assoc()){ 
                    $dateTime = new DateTime($row['created_at']);
                    $row['created_at'] = $dateTime->format("F j, Y");   
        ?> <!-- PHP -->
                    <tr id="docs-tr-<?=$row['id']?>" class="bg-white border-b hover:bg-gray-50 cursor-pointer" onclick="window.location.href = 'view_study.php';">
                        <a href="view_study.php" class="my-4">
                            <th scope="row" colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 whitespace-nowrap ">
                                <?=$row['project_title']?>
                            </th>
                            <td colspan="6" class="px-1 sm:px-6 py-1 sm:py-4 text-xs sm:text-sm text-gray-600">
                                <?=$row['research_title']?>
                            </td>
                            <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                <?=$row['view_count']?>
                            </td>
                            <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                <?=$row['created_at']?>
                            </td>
                        </a>
                    </tr>
        <?php   }}else{ ?> <!-- PHP -->
                    <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer">
                        <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 ">
                            NO RECORDS YET
                        </th>
                    </tr>
        <?php   } ?> <!-- PHP -->
                </tbody>
            </table>
        </div>

        <!-- SURVEYS TABLE -->
        <div id="surveys-table" class="hidden upload-tables">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <div class="flex p-2.5 sm:p-5 border-b-[1px] rounded w-full">
                    <h2 class="text-base sm:text-xl">Surveys</h2>
                </div>
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
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
                <tbody id="surveys-tbody">
        <?php   if($surveyResult->num_rows > 0){   
                    while($row = $surveyResult->fetch_assoc()){ 
                    $dateTime = new DateTime($row['created_at']);
                    $row['created_at'] = $dateTime->format("F j, Y");   
        ?>  <!-- PHP -->
                    <tr id="survey-tr-<?=$row['id']?>" class="bg-white border-b hover:bg-gray-50">
                        <th colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 ">
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
                    <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer">
                        <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 ">
                            NO RECORDS YET
                        </th>
                    </tr>
        <?php   } ?> <!-- PHP -->
                </tbody>
            </table>
        </div>

        <!-- REQUESTS TABLE -->
        <div id="requests-table" class="hidden upload-tables">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <div class="flex p-2.5 sm:p-5 border-b-[1px] rounded w-full">
                    <h2 class="text-base sm:text-xl">Requests</h2>
                </div>
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
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
                <tbody id="requests-tbody">
        <?php   if($requestResult->num_rows > 0){   
            while($row = $requestResult->fetch_assoc()){ 
            $dateTime = new DateTime($row['created_at']);
            $row['created_at'] = $dateTime->format("F j, Y");   
        ?>  <!-- PHP -->
                    <tr id="reqs-tr-<?=$row['id']?>" class="bg-white border-b hover:bg-gray-50">
                        <th scope="row" colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 ">
                            <?=$row['id']?>
                        </th>
                        <td colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600  text-wrap">
                            <?=$row['project_title']?>
                        </td>
                        <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$row['created_at']?>
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$row['first_name']?> <?=$row['last_name']?>
                        </td>
                        <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600 flex items-center gap-3">
                            <?php if($row['status'] == 0){ ?>
                                <img src="../src/img/Ok.svg" alt="Approve" class="hover:brightness-110 cursor-pointer" onclick="requestFunction(<?=$row['id']?>, 1)">
                                <img src="../src/img/Cancel.svg" alt="Reject" class="hover:brightness-110 cursor-pointer" onclick="requestFunction(<?=$row['id']?>, -1)">
                            <?php }else{ ?>
                                <?= ($row['status'] == 1) ? 'Approved' : 'Declined' ?>
                            <?php } ?>
                        </td>
                    </tr>
        <?php   }}else{ ?> <!-- PHP -->
                    <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer">
                        <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 ">
                            NO RECORDS YET
                        </th>
                    </tr>
        <?php   } ?> <!-- PHP -->
                </tbody>
            </table>
        </div>

    </div>

</div>

<script>
    let currentActiveTable = '';
    let tableToUpdate ='docs';

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
        currentActiveTable = id === 'requests' ? id : id === 'surveys' ? id :'studies';
        tableToUpdate = id;
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

    function requestFunction(id, toDo) {
        const toast =document.getElementById('toast-default');
        const toastMsg = document.getElementById('toast-msg');
        toastMsg.innerText = `We're processing your action, please wait.`;
        toast.classList.remove('hidden');
        toast.classList.add('flex');
        const action = toDo == 1 ? 'approved' : 'declined'
        setTimeout(() => {
            toast.classList.remove('flex');
            toast.classList.add('hidden');
        }, 2000);
        $.ajax({
            url: '../src/ajax/app-deny-request.php',
            type: 'POST',
            data: { id:id, toDo:toDo, is_admin: false},
            success: function (response) {
                if(response === 'Message has been sentsuccess') response2 = `Request has been ${action}, we have informed the user.`
                toastMsg.innerText = response2;
                toast.classList.remove('hidden');
                toast.classList.add('flex');
                const tr = document.getElementById(`reqs-tr-${id}`);
                tr.lastElementChild.innerHTML = toDo === 1 ? 'Approved' : 'Declined';
                setTimeout(() => {
                    toast.classList.remove('flex');
                    toast.classList.add('hidden');
                }, 3000);
            }
        });
    }

    function searchUploads(event){
        if(event.keyCode === 13){
            const key = event.target.value;
            if(tableToUpdate == 'docs') url = '../src/ajax/search-upl-file.php';
            else if(tableToUpdate == 'requests') url = '../src/ajax/search-their-reqs.php';
            else if(tableToUpdate == 'surveys') url = '../src/ajax/search-upl-survey.php';
            $.ajax({
                url: url,
                type:'POST',
                data: {key},
                success:function(response){
                    const tbody = document.getElementById(`${tableToUpdate}-tbody`);
                    tbody.innerHTML = '';
                    if(response !== 'null'){
                        const parsed = JSON.parse(response);
                        if(tableToUpdate == 'docs') updateDocs(parsed, tbody);
                        else if(tableToUpdate == 'requests') updateReqs(parsed, tbody);
                        else if(tableToUpdate == 'surveys') updateSurveys(parsed, tbody);
                    }else{
                        tbody.innerHTML = `
                            <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer" onclick="window.location.href = 'view_study.php';">
                                <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 ">
                                    NO RECORDS FOUND
                                </th>
                            </tr>
                        `;
                    }
                }
            });
        }
    }

    function updateDocs(data, tbody){
        data.map(d => {
            tbody.innerHTML += `
                <tr id="docs-tr-${d.id}" class="bg-white border-b hover:bg-gray-50 cursor-pointer" onclick="window.location.href = 'view_study.php';">
                    <a href="view_study.php" class="my-4">
                        <th scope="row" colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 whitespace-nowrap ">
                            ${d.project_title}
                        </th>
                        <td colspan="6" class="px-1 sm:px-6 py-1 sm:py-4 text-xs sm:text-sm text-gray-600">
                            ${d.research_title}
                        </td>
                        <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            200
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            ${d.created_at}                           
                        </td>
                    </a>
                </tr>
            `;
        });
    }

    function updateReqs(data, tbody){
        data.map(d => {
            let condition = '';
            if(d.status == 0){ 
                condition = `
                    <img src="../src/img/Ok.svg" alt="Approve" class="hover:brightness-110 cursor-pointer" onclick="requestFunction(${d.id}, 1)">
                    <img src="../src/img/Cancel.svg" alt="Reject" class="hover:brightness-110 cursor-pointer" onclick="requestFunction(${d.id}, -1)">
                `;
            }else{ 
                condition = (d.id == 1) ? 'Approved' : 'Declined' 
            } 
            tbody.innerHTML += `
                <tr id="reqs-tr-${d.id}" class="bg-white border-b hover:bg-gray-50">
                    <th scope="row" colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 ">
                        ${d.id}
                    </th>
                    <td colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600  text-wrap">
                        ${d.project_title}
                    </td>
                    <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                        ${d.created_at}
                    </td>
                    <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                        ${d.first_name} ${d.last_name}
                    </td>
                    <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600 flex items-center gap-3">
                        ${condition}
                    </td>
                </tr>
            `;
        });
    }

    function updateSurveys(data, tbody){
        data.map(d => {
            tbody.innerHTML += `
                <tr id="survey-tr-${d.id}" class="bg-white border-b hover:bg-gray-50">
                    <th colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900 ">
                        ${d.survey_name}
                    </th>
                    <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                        ${d.responses} / ${d.respondents}
                    </td>
                    <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                        ${d.created_at}
                    </td>
                    <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                        <span onclick="downloadResponses(${d.id})" class="w-fit h-fit cursor-pointer">
                            <img src="../src/img/dlres.png" alt="">
                        </span>
                    </td>
                </tr>
            `;
        });
    }
</script>