<div class="relative overflow-x-auto p-2 lg:px-24 xl:px-48 min-h-[390px]">
    <div class="flex justify-center items-center gap-4 md:gap-12 p-8 ">
        <button id="btn-pending" class="active option-btns">Pending</button>
        <button id="btn-files" class="btn-bordered option-btns">Files</button>
        <button id="btn-arch" class="btn-bordered option-btns">Archived</button>
    </div>
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
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                        </svg>
                    <span id="radio-filter">All</span>
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownRadio" class="z-50 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                        <li onclick="()=>{document.querySelector('#radio-filter').innerText='All'}">
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input 
                                    <?= (!isset($_GET['type']) ? 'checked' : $_GET['type'] == 'all' ) ? 'checked' : '' ?> 
                                    id="filter-radio-example-5" 
                                    type="radio" 
                                    value="all" 
                                    name="date" 
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">All</label>
                            </div>
                        </li>
                        <li >
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input 
                                    <?= (!isset($_GET['type']) ? '' : $_GET['type'] == 'day' ) ? 'checked' : '' ?>
                                    id="filter-radio-example-1" 
                                    type="radio" 
                                    value="yesterday" 
                                    name="date" 
                                    onchange="()=>console.log(2)"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Yesterday</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input 
                                    <?= (!isset($_GET['type']) ? '' : $_GET['type'] == 'week' ) ? 'checked' : '' ?>
                                    id="filter-radio-example-2" 
                                    type="radio" 
                                    value="week" 
                                    name="date" 
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last Week</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input 
                                    <?= (!isset($_GET['type']) ? '' : $_GET['type'] == 'month' ) ? 'checked' : '' ?>
                                    id="filter-radio-example-3" 
                                    type="radio" 
                                    value="month" 
                                    name="date" 
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last Month</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input 
                                    <?= (!isset($_GET['type']) ? '' : $_GET['type'] == 'year' ) ? 'checked' : '' ?>
                                    id="filter-radio-example-4" 
                                    type="radio" 
                                    value="year" 
                                    name="date" 
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last Year</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="relative flex">
                <label for="table-search" class="sr-only">Search</label>
                <div class="absolute border-r-[1px] border-gray-300 px-2.5 h-[36.5px] top-0 start-0 flex items-center pointer-events-none">
                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input 
                    value="<?= !isset($_GET['key']) ? '': $_GET['key'] ?>"
                    type="text" 
                    id="table-search" 
                    name="key" 
                    class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="rounded bg-gray-50 max-h-[620px] overflow-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <div class="sticky top-0 bg-white flex justify-between p-5 border-b-[1px] rounded w-full">
                <h2 class="text-xl">File List</h2>
                <div class="flex justify-center items-center gap-2">
                    <a href="upload_research.php" class="px-4 py-2 bg-orange-400 text-white hover:brightness-110 rounded-md">Upload File</a>
                    <form action="../actions/export-pdf-studies.php" method="POST" onsubmit="waitSubmit(this, event)">
                        <input type="text" name="type" id="gen-when" hidden>
                        <input type="text" name="key" id="gen-key" hidden>
                        <button 
                            id="export-btn" 
                            type="submit"
                            class="hidden px-4 py-2 bg-[#4D4D4D] text-white hover:brightness-110 rounded-md">
                            Generate Report
                        </button>
                    </form>
                </div>
            </div>
            <thead class="sticky top-[81px] text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Research Title
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Upload by
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Date Upload
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="tbodies" id="pending-tbody">
                <?php   while($row = $presult->fetch_assoc()){ 
                        $dateTime = new DateTime($row['created_at']);
                        $row['created_at'] = $dateTime->format("F j, Y");    
                ?>
                        <tr id="ptr-<?=$row['id']?>" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?=$row['project_title']?>
                            </th>
                            <td class="px-1 sm:px-6 py-4 text-gray-600">
                                <?=$row['email']?>
                            </td>
                            <td class="px-1 sm:px-6 py-4 text-gray-600">
                                <?=$row['created_at']?>
                            </td>
                            <td class="px-1 sm:px-6 py-4 text-gray-600">
                                Pending
                            </td>
                            <td class="px-1 sm:px-6 py-4 text-gray-600 flex gap-x-4">
                                <a href="view_study.php?id=<?=$row['id']?>" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                    <img src="../../src/img/View.svg" alt="" title="View">
                                </a>
                                <img src="../../src/img/Ok.svg" alt="Approve" title="Approve" class="hover:brightness-110 cursor-pointer" onclick="uploadFunction(<?=$row['id']?>, 1)">
                                <img src="../../src/img/Cancel.svg" alt="Reject" title="Deny" class="hover:brightness-110 cursor-pointer" onclick="uploadFunction(<?=$row['id']?>, -1)">            
                            </td>
                        </tr>
                <?php } ?>
            </tbody>
            <tbody class="hidden tbodies" id="not-archived-tbody">
                <?php   while($row = $result->fetch_assoc()){ 
                        $dateTime = new DateTime($row['created_at']);
                        $row['created_at'] = $dateTime->format("F j, Y");    
                ?>
                        <tr id="tr-<?=$row['id']?>" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?=$row['project_title']?>
                            </th>
                            <td class="px-1 sm:px-6 py-4 text-gray-600">
                                <?=$row['email']?>
                            </td>
                            <td class="px-1 sm:px-6 py-4 text-gray-600">
                                <?=$row['created_at']?>
                            </td>
                            <td class="px-1 sm:px-6 py-4 text-gray-600">
                                Approved
                            </td>
                            <td class="px-1 sm:px-6 py-4 text-gray-600 flex gap-x-4">
                                <a href="view_study.php?id=<?=$row['id']?>" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                    <img src="../../src/img/View.svg" alt="">
                                    View
                                </a>
                                <span onclick="archiveFile(<?=$row['id']?>, 1, 'studies')" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                    <img src="../../src/img/Archive.svg" alt="">
                                    Archive
                                </span>
                            </td>
                        </tr>
                <?php } ?>
            </tbody>
            <tbody class="hidden tbodies" id="archived-tbody">
                <?php   while($row = $aresult->fetch_assoc()){ 
                        $dateTime = new DateTime($row['created_at']);
                        $row['created_at'] = $dateTime->format("F j, Y");    
                ?>
                        <tr id="atr-<?=$row['id']?>" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?=$row['project_title']?>
                            </th>
                            <td class="px-1 sm:px-6 py-4 text-gray-600">
                                <?=$row['email']?>
                            </td>
                            <td class="px-1 sm:px-6 py-4 text-gray-600">
                                <?=$row['created_at']?>
                            </td>
                            <td class="px-1 sm:px-6 py-4 text-gray-600">
                                <?= ($row['is_approved'] == 1) ? 'Approved' : 'Declined' ?>
                            </td>
                            <td class="px-1 sm:px-6 py-4 flex text-gray-600">
                                <span onclick="archiveFile(<?=$row['id']?>, 0, 'studies')" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                    <img src="../../src/img/Restore Page.svg" alt="">
                                    Unarchive
                                </span>                            
                            </td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<script>
    let active = 'files';
    setActiveNav('files');
    initiateFileButtons();

    const radioInputs = document.querySelectorAll('input[type="radio"][name="date"]');
    const span = document.getElementById('radio-filter');

    radioInputs.forEach(input => {
        input.addEventListener('change', updateSelectedFilter);
    });
    
    
    function getSelectedDateValue(){
        const type = document.getElementsByName("date");
        let selectedValue = "";
        for (var i = 0; i < type.length; i++) {
            if (type[i].checked) {
                selectedValue = type[i].value;
                break;
            }
        }
        return selectedValue;
    }

    function capitalizeFirst(str) {
        // return str.chatAt(0).toUpperCase() + str.slice(1);
        return str.toUpperCase();
    }

    function waitSubmit(form, event){
        event.preventDefault();
        const type = getSelectedDateValue();
        const key = document.getElementById('table-search').value;

        document.getElementById('gen-key').value = key;
        document.getElementById('gen-when').value = type;

        form.submit();
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
            }
        });
    }

    function formSubmit(form, event){
        event.preventDefault();
        const selectedValue = getSelectedDateValue();
        const activeType = document.getElementById('active-type').value == 'archived' ? 1 : 0 ;
        const key = document.getElementById('table-search').value;
        
        const radioFilter = selectedValue == 'yesterday' || selectedValue == 'all' ? capitalizeFirst(selectedValue) : `Last ${capitalizeFirst(selectedValue)}`;
        
        $.ajax({
            url: '../../src/ajax/table_rows.php',
            type: 'POST',
            data:{
                key: key,
                active:activeType,
                date:selectedValue,
                table: 'studies'
            },
            success: function(response){
                console.log(response);
                const parsed = JSON.parse(response);
                const elemId = activeType == '1' ? 'archived-tbody' : 'not-archived-tbody';
                let tbody = document.getElementById(elemId);
                
                if(parsed.length == 0){
                    tbody.innerHTML = `
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer">
                            <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] max-w-none font-medium text-gray-900 dark:text-white">
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
                                <a href="view_study.php?id=${data.id}" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                    <img src="../../src/img/View.svg" alt="">
                                    View
                                </a>
                                <span onclick="archiveFile(${data.id}, 1, 'studies')" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                    <img src="../../src/img/Archive.svg" alt="">
                                    Archive
                                </span>
                            `;
                        }else{
                            newId = `id="atr-${data.id}"`;
                            action = `
                                <span onclick="archiveFile(${data.id}, 0, 'studies')" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                    <img src="../../src/img/Restore Page.svg" alt="">
                                    Unarchive
                                </span>    
                            `;
                        }
                        return tr = `
                            <tr ${newId} class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ${data.project_title}
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

    function initiateFileButtons(){
        const optionButtons = document.querySelectorAll('.option-btns');
        const tbodies = document.querySelectorAll('.tbodies');
        optionButtons.forEach((btn, index) => {
            btn.addEventListener('click', function(event){
                const currBtn = event.target;
                optionButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.add('btn-bordered');
                })
                currBtn.classList.add('active');
                currBtn.classList.remove('btn-bordered');
                tbodies.forEach(tbody => tbody.classList.add('hidden'));
                tbodies[index].classList.remove('hidden')

                active = currBtn.innerText.toLowerCase();
                document.querySelector('#active-type').value = active;
                const exportBtn = document.querySelector('#export-btn');
                if(index !== 1) exportBtn.classList.add('hidden');
                else exportBtn.classList.remove('hidden');
            });
        });
    }

    function uploadFunction(id, action){
        const insertInto = action === 1 ? 'not-archived-tbody' : 'archived-tbody'; 
        const tbody = document.getElementById(insertInto);
        const tr =  document.getElementById(`ptr-${id}`);
        tr.remove();
        $.ajax({
            url: '../../src/ajax/app-deny-file.php',
            type: 'POST',
            data: {id, action},
            success: function(response){
                if(response === 'success'){
                    tr.id = action === 1 ? `tr-${id}` : `atr-${id}`; 
                    const lastTd = action === 1 
                        ? `
                            <a href="view_study.php?id=${id}" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                <img src="../../src/img/View.svg" alt="">
                                View
                            </a>
                            <span onclick="archiveFile(${id}, 1, 'studies')" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                <img src="../../src/img/Archive.svg" alt="">
                                Archive
                            </span>
                        `
                        : `
                            <span onclick="archiveFile(${id}, 0, 'studies')" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                <img src="../../src/img/Restore Page.svg" alt="">
                                Unarchive
                            </span> 
                        `;
                    tr.lastElementChild.previousElementSibling.innerText = 'Approved';
                    tr.lastElementChild.classList.add('flex');
                    tr.lastElementChild.classList.add('gap-x-4');
                    tr.lastElementChild.innerHTML = lastTd;
                    tbody.appendChild(tr);
                }else{
                    console.log('Something went wrong');
                }
                    
            }
        });
    }
</script>