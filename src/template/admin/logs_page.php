<div class="relative overflow-x-auto p-2 lg:px-24 xl:px-48">
    <div >
        <form class="flex flex-col sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4" onsubmit="formSubmit(this, event)">
            <input 
                id="active-type"
                type="text"
                value="files" 
                name="active" 
                hidden 
                />
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
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
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
                                    onchange="()=>console.log(2)"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
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
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
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
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
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
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
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
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
                <button type="submit" id="search-form-btn" hidden>submit</button>
            </div>
        </form>
    </div>
    <div class="rounded bg-gray-50 max-h-[620px] overflow-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <div class="bg-white flex justify-between p-5 border-b-[1px] rounded w-full">
                <h2 class="text-xl">File List</h2>
                <form action="../actions/export-pdf-logs.php" method="POST" onsubmit="waitSubmit(this, event)">
                    <input type="text" name="type" id="gen-when" hidden>
                    <input type="text" name="key" id="gen-key" hidden>
                    <button 
                        id="export-btn" 
                        type="submit"
                        class="px-4 py-2 bg-[#4D4D4D] text-white hover:brightness-110 rounded-md">
                        Generate Report
                    </button>
                </form>
            </div>
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Number
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Activity
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Date
                    </th>
                </tr>
            </thead>
            <tbody id="logs-tbody">
                <?php   while($row = $result->fetch_assoc()){ 
                    $dateTime = new DateTime($row['created_at']);
                    $row['created_at'] = $dateTime->format("F j, Y");    
                ?>
                    <tr id="tr-<?=$row['account_id']?>" class="bg-white border-b hover:bg-gray-50">
                        <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <?=$row['account_id']?>
                        </th>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['first_name']?> <?=$row['last_name']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['activity']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['created_at']?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    setActiveNav('logs');

    function getSelectedDateValue(){
        const type = document.getElementsByName("date");
        for (var i = 0; i < type.length; i++) {
            if (type[i].checked) {
                return type[i].value;
            }
        }
    }

     function handleSearchInputs(e){
        if(e.keyCode == 13){
            clickSubmitBtn();
        }
    }

    function clickSubmitBtn(){
        document.getElementById('search-form-btn').click();
    }
    
    function waitSubmit(form, event){
        event.preventDefault();
        const type = getSelectedDateValue();
        const key = document.getElementById('table-search').value;

        document.getElementById('gen-key').value = key;
        document.getElementById('gen-when').value = type;

        form.submit();
    }

    function capitalizeFirst(str) {
        // return str.chatAt(0).toUpperCase() + str.slice(1);
        return str.toUpperCase();
    }

    function formSubmit(form, event){
        event.preventDefault();
        const selectedValue = getSelectedDateValue();
        const key = document.getElementById('table-search').value;
        
        const radioFilter = selectedValue == 'yesterday' || selectedValue == 'all' ? capitalizeFirst(selectedValue) : `Last ${capitalizeFirst(selectedValue)}`;
        
        $.ajax({
            url: '../../src/ajax/filter_logs.php',
            type: 'POST',
            data:{
                key: key,
                date:selectedValue,
            },
            success: function(response){ 
                const parsed = JSON.parse(response);
                let tbody = document.getElementById('logs-tbody');
                
                if(parsed.length == 0){
                    tbody.innerHTML = `
                        <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer">
                            <th class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] max-w-none font-medium text-gray-900">
                                NO RECORDS FOUND
                            </th>
                        </tr>
                    `;
                }else{
                    renderedHTML = parsed.map(data => {
                        return tr = `
                            <tr id="tr-${data.id}" class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    ${data.account_id}
                                </th>
                                <td class="px-1 sm:px-6 py-4 text-gray-600">
                                    ${data.first_name} ${data.last_name}
                                </td>
                                <td class="px-1 sm:px-6 py-4 text-gray-600">
                                    ${data.activity}
                                </td>
                                <td class="px-1 sm:px-6 py-4 text-gray-600">
                                    ${data.created_at}
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