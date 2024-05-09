<div class="relative overflow-x-auto p-2 lg:px-24 xl:px-48">
    <div class="flex flex-col md:flex-row justify-center items-center gap-4 md:gap-12 p-8">
        <button class="active option-btns">Surveys</button>
        <button class="btn-bordered option-btns">Archived</button>
    </div>
    <div>
        <form class="flex flex-col sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4" onsubmit="formSubmit(this, event)">
            <input 
                id="active-type"
                type="text"
                value="<?= !isset($_GET['active']) || $_GET['active'] == '1' ? '1': '0' ?>" 
                name="active" 
                hidden/>
            <div>
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
                    <svg class="w-3 h-3 text-gray-500 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                        </svg>
                    <span id="radio-filter">All</span>
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownRadio" class="z-50 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                    <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioButton">
                        <li onclick="()=>{document.querySelector('#radio-filter').innerText='All'}">
                            <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                <input 
                                    <?= (!isset($_GET['type']) ? 'checked' : $_GET['type'] == 'all' ) ? 'checked' : '' ?> 
                                    id="filter-radio-example-5" 
                                    type="radio" 
                                    value="all" 
                                    name="date" 
                                    onclick="clickSubmitBtn()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">All</label>
                            </div>
                        </li>
                        <li >
                            <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                <input 
                                    <?= (!isset($_GET['type']) ? '' : $_GET['type'] == 'day' ) ? 'checked' : '' ?>
                                    id="filter-radio-example-1" 
                                    type="radio" 
                                    value="yesterday" 
                                    name="date" 
                                    onclick="clickSubmitBtn()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Yesterday</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                <input 
                                    <?= (!isset($_GET['type']) ? '' : $_GET['type'] == 'week' ) ? 'checked' : '' ?>
                                    id="filter-radio-example-2" 
                                    type="radio" 
                                    value="week" 
                                    name="date" 
                                    onclick="clickSubmitBtn()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last Week</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                <input 
                                    <?= (!isset($_GET['type']) ? '' : $_GET['type'] == 'month' ) ? 'checked' : '' ?>
                                    id="filter-radio-example-3" 
                                    type="radio" 
                                    value="month" 
                                    name="date" 
                                    onclick="clickSubmitBtn()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last Month</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100">
                                <input 
                                    <?= (!isset($_GET['type']) ? '' : $_GET['type'] == 'year' ) ? 'checked' : '' ?>
                                    id="filter-radio-example-4" 
                                    type="radio" 
                                    value="year" 
                                    name="date" 
                                    onclick="clickSubmitBtn()"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded">Last Year</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="relative flex">
                <label for="table-search" class="sr-only">Search</label>
                <div class="absolute border-r-[1px] border-gray-300 px-2.5 h-[36.5px] top-0 start-0 flex items-center pointer-events-none">
                    <svg class="w-3 h-3 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input 
                    value="<?= !isset($_GET['key']) ? '': $_GET['key'] ?>"
                    type="text" 
                    id="table-search" 
                    name="key" 
                    oninput="handleSearchInputs(event)"
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search for items">
                <button type="submit" id="search-form-btn" hidden>submit</button>
            </div>
        </form>
    </div>
    <div class="rounded bg-gray-50 max-h-[620px] overflow-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <div class="sticky top-0 bg-white flex justify-between p-5 border-b-[1px] rounded w-full">
                <h2 class="text-xl">File List</h2>
                <a href="upload_survey.php" class="px-4 py-2 bg-orange-400 text-white hover:brightness-110 rounded-md">Upload Survey</a>
            </div>
            <thead class="sticky top-[81px] text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Survey Name
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Upload by
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Date Upload
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="tbodies" id="not-archived-tbody">
            <?php   if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){ 
                        $dateTime = new DateTime($row['created_at']);
                        $row['created_at'] = $dateTime->format("F j, Y");    
                ?>
                    <tr id="tr-<?=$row['id']?>" class="bg-white border-b hover:bg-gray-50">
                        <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?=$row['survey_name']?>
                        </th>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['email']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['created_at']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600 flex gap-x-4">
                            <span class="flex items-center font-medium text-gray-500 hover:underline cursor-pointer" onclick="downloadResponses(<?=$row['id']?>)">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.625 15C5.625 14.5858 5.28921 14.25 4.875 14.25C4.46079 14.25 4.125 14.5858 4.125 15H5.625ZM4.875 16H4.125H4.875ZM19.275 15C19.275 14.5858 18.9392 14.25 18.525 14.25C18.1108 14.25 17.775 14.5858 17.775 15H19.275ZM11.1086 15.5387C10.8539 15.8653 10.9121 16.3366 11.2387 16.5914C11.5653 16.8461 12.0366 16.7879 12.2914 16.4613L11.1086 15.5387ZM16.1914 11.4613C16.4461 11.1347 16.3879 10.6634 16.0613 10.4086C15.7347 10.1539 15.2634 10.2121 15.0086 10.5387L16.1914 11.4613ZM11.1086 16.4613C11.3634 16.7879 11.8347 16.8461 12.1613 16.5914C12.4879 16.3366 12.5461 15.8653 12.2914 15.5387L11.1086 16.4613ZM8.39138 10.5387C8.13662 10.2121 7.66533 10.1539 7.33873 10.4086C7.01212 10.6634 6.95387 11.1347 7.20862 11.4613L8.39138 10.5387ZM10.95 16C10.95 16.4142 11.2858 16.75 11.7 16.75C12.1142 16.75 12.45 16.4142 12.45 16H10.95ZM12.45 5C12.45 4.58579 12.1142 4.25 11.7 4.25C11.2858 4.25 10.95 4.58579 10.95 5H12.45ZM4.125 15V16H5.625V15H4.125ZM4.125 16C4.125 18.0531 5.75257 19.75 7.8 19.75V18.25C6.61657 18.25 5.625 17.2607 5.625 16H4.125ZM7.8 19.75H15.6V18.25H7.8V19.75ZM15.6 19.75C17.6474 19.75 19.275 18.0531 19.275 16H17.775C17.775 17.2607 16.7834 18.25 15.6 18.25V19.75ZM19.275 16V15H17.775V16H19.275ZM12.2914 16.4613L16.1914 11.4613L15.0086 10.5387L11.1086 15.5387L12.2914 16.4613ZM12.2914 15.5387L8.39138 10.5387L7.20862 11.4613L11.1086 16.4613L12.2914 15.5387ZM12.45 16V5H10.95V16H12.45Z" fill="#000000"/>
                                </svg>
                                Download
                            </span>
                            <span onclick="archiveFile(<?=$row['id']?>, 1, 'surveys')" class="flex gap-1 items-center font-medium text-gray-500 hover:underline cursor-pointer">
                                <img src="../../src/img/Archive.svg" alt="">
                                Archive
                            </span>
                        </td>
                    </tr>
                <?php }
                     }else{ ?>
                        <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer">
                            <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900">
                                NO RECORDS YET
                            </th>
                        </tr>
                <?php } ?>
            </tbody>
            <tbody class="hidden tbodies" id="archived-tbody">
            <?php if ($aresult->num_rows > 0) {
                while ($row = $aresult->fetch_assoc()) {
                    $dateTime = new DateTime($row['created_at']);
                    $row['created_at'] = $dateTime->format("F j, Y");
                    ?>
                    <tr id="atr-<?= $row['id'] ?>" class="bg-white border-b">
                        <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?= $row['survey_name'] ?>
                        </th>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?= $row['email'] ?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?= $row['created_at'] ?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <span onclick="archiveFile(<?= $row['id'] ?>, 0, 'surveys')" class="flex gap-1 items-center font-medium text-gray-500 hover:underline">
                                <img src="../../src/img/Restore Page.svg" alt="">
                                Restore
                            </span>                            
                        </td>
                    </tr>
            <?php }
                     }else{ ?>
                        <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer">
                            <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] :max-w-none font-medium text-gray-900">
                                NO RECORDS YET
                            </th>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<script>
    let active = 'surveys';
    setActiveNav('surveys');
    initiateButtons();

    function capitalizeFirst(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }

    function archiveFile(id, func, table){
        $.ajax({
            url: '../../src/ajax/archive_file.php',
            type: 'POST',
            data: { 
                id: id,
                func: func,
                table: table
            },
            success:function(response){
                updateTableWhenArchived(id, func, table);
                alert(response);
            }
        });
    }

    function downloadResponses(id){
        $.ajax({
            url: `../actions/export-csv.php`,
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

    function handleSearchInputs(e){
        if(e.keyCode == 13){
            clickSubmitBtn();
        }
    }

    function clickSubmitBtn(){
        document.getElementById('search-form-btn').click();
    }

    function formSubmit(form, event){
        event.preventDefault();
        const type = document.getElementsByName("date");
        const activeType = document.getElementById('active-type').value == 'archived' ? 1 : 0 ;
        const key = document.getElementById('table-search').value;
        
        //GET SELECTED VALUE FROM THE RADIO INPUTS
        let selectedValue = "";
        for (var i = 0; i < type.length; i++) {
            if (type[i].checked) {
                selectedValue = type[i].value;
                break;
            }
        }
        
        const radioFilter = selectedValue == 'yesterday' || selectedValue == 'all' ? capitalizeFirst(selectedValue) : `Last ${capitalizeFirst(selectedValue)}`;
        
        $.ajax({
            url: '../../src/ajax/table_rows.php',
            type: 'POST',
            data:{
                key: key,
                active:activeType,
                date:selectedValue,
                table: 'surveys'
            },
            success: function(response){
                const parsed = JSON.parse(response);
                const elemId = activeType == '1' ? 'archived-tbody' : 'not-archived-tbody';
                let tbody = document.getElementById(elemId);
                
                if(parsed.length == 0){
                    tbody.innerHTML = `
                        <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer">
                            <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] max-w-none font-medium text-gray-900">
                                NO RECORDS FOUND
                            </th>
                        </tr>
                    `;
                }else{
                    renderedHTML = parsed.map(data => {
                        let action = '';
                        let newId = '';
                        if(activeType == 0){
                            newId = `id="tr-${data.id}"`;
                            action = `
                                <a href="view.php?id=${data.id}" class="flex gap-1 items-center font-medium text-gray-500 hover:underline">
                                    <img src="../../src/img/View.svg" alt="">
                                    View
                                </a>
                                <span onclick="archiveFile(${data.id}, 1, 'surveys')" class="flex gap-1 items-center font-medium text-gray-500  hover:underline">
                                    <img src="../../src/img/Archive.svg" alt="">
                                    Archiveee
                                </span>
                            `;
                        }else{
                            newId = `id="atr-${data.id}"`;
                            action = `
                                <span onclick="archiveFile(${data.id}, 0, 'surveys')" class="flex gap-1 items-center font-medium text-gray-500  hover:underline">
                                    <img src="../../src/img/Restore Page.svg" alt="">
                                    Restoree
                                </span>    
                            `;
                        }
                        return tr = `
                            <tr ${newId} class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    ${data.survey_name}
                                </th>
                                <td class="px-1 sm:px-6 py-4 text-gray-600">
                                    ${data.email}
                                </td>
                                <td class="px-1 sm:px-6 py-4 text-gray-600">
                                    ${data.created_at}
                                </td>
                                <td class="px-1 sm:px-6 py-4 text-gray-600 flex gap-x-4">
                                    ${action}
                                </td>
                            </tr>
                        `;
                    });
                    tbody.innerHTML = renderedHTML.join('');
                    document.querySelector('#radio-filter').innerHTML = radioFilter; 
                }
            }
        })
    }
</script>