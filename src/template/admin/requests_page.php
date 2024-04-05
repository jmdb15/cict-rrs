<div class="relative overflow-x-auto p-2 md:px-8 lg:px-18 xl:px-48">
    <div class="flex justify-center items-center gap-4 md:gap-12 p-8">
        <button class="active option-btns">Pending</button>
        <button class="btn-bordered option-btns">Transactions</button>
    </div>
    <div>
        <form class="flex flex-col sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4" onsubmit="formSubmit(this, event)">
            <input 
                id="active-type"
                type="text"
                value="pending" 
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
                                    name="type" 
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
                                    name="type" 
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
                                    name="type" 
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
                                    name="type" 
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
                                    name="type" 
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
                <button class="px-4 py-2 bg-orange-400 text-white hover:brightness-110 rounded-md">Upload File</button>
            </div>
            <thead class="sticky top-[81px] text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" colspan="1" class="px-1 sm:px-6 py-3">
                        ID
                    </th>
                    <th scope="col" colspan="6" class="px-1 sm:px-6 py-3">
                        Research Title
                    </th>
                    <th scope="col" colspan="2" class="px-1 sm:px-6 py-3">
                        Requested by
                    </th>
                    <th scope="col" colspan="2" class="px-1 sm:px-6 py-3">
                        Date Requested
                    </th>
                    <th scope="col" colspan="2" class="hidden tbodies px-1 sm:px-6 py-3">
                        Updated at
                    </th>
                    <th scope="col" colspan="2" class="px-1 sm:px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="tbodies" id="pending-tbody">
                <?php   while($row = $result->fetch_assoc()){ 
                        $dateTime = new DateTime($row['created_at']);
                        $row['created_at'] = $dateTime->format("F j, Y");    
                ?>
                    <tr id="pend-<?=$row['id']?>" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 dark:text-white">
                            <?=$row['id']?>
                        </th>
                        <td colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600  text-wrap">
                            <?=$row['project_title']?>
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$row['email']?>
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$row['created_at']?>
                        </td>
                        <td colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600 flex items-center gap-3">
                            <img src="../../src/img/Ok.svg" alt="Approve" class="hover:brightness-110 cursor-pointer" onclick="requestFunction(<?=$row['id']?>, 1)">
                            <img src="../../src/img/Cancel.svg" alt="Reject" class="hover:brightness-110 cursor-pointer" onclick="requestFunction(<?=$row['id']?>, -1)">
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tbody class="hidden tbodies" id="transaction-tbody">
                <?php   while($row = $tresult->fetch_assoc()){ 
                        $dateTime = new DateTime($row['created_at']);
                        $row['created_at'] = $dateTime->format("F j, Y");    
                        $dateTimee = new DateTime($row['updated_at']);
                        $row['updated_at'] = $dateTimee->format("F j, Y");    
                ?>
                    <tr id="transact-<?=$row['id']?>" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 dark:text-white">
                            <?=$row['id']?>
                        </th>
                        <td colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600  text-wrap">
                            <?=$row['project_title']?>
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$row['email']?>
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$row['created_at']?>
                        </td>
                        <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                            <?=$row['updated_at']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?= ($row['status'] == 1) ? 'Approved' : 'Declined' ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    let active = 'pending';
    setActiveNav('requests');
    initiateButtons(updatedAtPresent=true);

    function initiateButtons(updatedAtPresent=false) {
  const optionButtons = document.querySelectorAll('.option-btns');
  optionButtons.forEach((btn, index) => {
    btn.addEventListener('click', function (event) {
      const oppositeIndex = index == 0 ? 1 : 0;
      const tbodies = document.getElementsByClassName('tbodies');
      optionButtons[0].classList.toggle('active');
      optionButtons[1].classList.toggle('active');
      optionButtons[0].classList.toggle('btn-bordered');
      optionButtons[1].classList.toggle('btn-bordered');
      tbodies[0].classList.toggle('hidden');
      tbodies[1].classList.toggle('hidden');
      (updatedAtPresent) ? tbodies[2].classList.toggle('hidden') : null;
      active = event.target.innerText.toLowerCase();
      activeOnInput = document.querySelector('#active-type');
      active === activeOnInput.value
        ? activeOnInput.value = optionButtons[oppositeIndex].innerText.toLowerCase()
        : activeOnInput.value = active;
      const exportBtn = document.querySelector('#export-btn');
      if (exportBtn != null) {
        exportBtn.classList.toggle('hidden');
      }
    });
  });
}

    function requestFunction(id, toDo) {
        $.ajax({
            url: '../../src/ajax/app-deny-request.php',
            type: 'POST',
            data: { id:id, toDo:toDo },
            success: function (response) {
                alert(response);
                var formattedDate = getDateToday();
                const tr = document.getElementById(`pend-${id}`);
                tr.remove();
                tr.id = `transact-${id}`;
                tr.lastElementChild.innerHTML = toDo === 1 ? 'Approved' : 'Declined';
                var newChild = document.createElement("td");
                newChild.classList = 'px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600';
                newChild.colSpan = 2;
                newChild.innerText = formattedDate;
                var lastChild = tr.lastElementChild;
                tr.insertBefore(newChild, lastChild);
                document.getElementById('transaction-tbody').innerHTML += tr.outerHTML;
            }
        });
    }

    function getDateToday() {
        var currentDate = new Date();
        var day = currentDate.getDate();
        var month = currentDate.getMonth() + 1;
        var year = currentDate.getFullYear();
        var options = { year: 'numeric', month: 'long', day: 'numeric' };
        var formattedDate = currentDate.toLocaleDateString('en-US', options);
        return formattedDate;
    }

    function capitalizeFirst(str) {
        // return str.chatAt(0).toUpperCase() + str.slice(1);
        return str.toUpperCase();
    }

    // function initiateButtons() {
    //     const optionButtons = document.querySelectorAll('.option-btns');
    //     optionButtons.forEach((btn, index) => {
    //         const oppositeIndex = index == 0 ? 1 : 0;
    //         btn.addEventListener('click', function (event) {
    //             const tbodies = document.getElementsByClassName('tbodies');
    //             optionButtons[0].classList.toggle('active');
    //             optionButtons[1].classList.toggle('active');
    //             optionButtons[0].classList.toggle('btn-bordered');
    //             optionButtons[1].classList.toggle('btn-bordered');
    //             tbodies[0].classList.toggle('hidden');
    //             tbodies[1].classList.toggle('hidden');
    //             active = event.target.innerText.toLowerCase();
    //             activeOnInput = document.querySelector('#active-type');
    //             active === activeOnInput.value 
    //             ? activeOnInput.value = optionButtons[oppositeIndex].innerText.toLowerCase()
    //             : activeOnInput.value = active;
    //             const exportBtn = document.querySelector('#export-btn');
    //             if (exportBtn != null) {
    //                 exportBtn.classList.toggle('hidden');
    //             }
    //         });
    //     });
    // }


    function formSubmit(form, event){
        event.preventDefault();
        const type = document.getElementsByName("type");
        const activeType = document.getElementById('active-type').value == 'pending' ? 'pending' : 'transaction' ;
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
            url: '../../src/ajax/request-rows.php',
            type: 'POST',
            data:{
                key: key,
                active:activeType,
                type:selectedValue,
            },
            success: function(response){
                console.log(response);
                const parsed = JSON.parse(response);
                const elemId = activeType == 'pending' ? 'pending-tbody' : 'transaction-tbody';
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
                        if(activeType == 'pending'){
                            action = `
                            <td class="px-1 sm:px-6 py-4 text-gray-600 flex gap-4">
                                <img src="../../src/img/Ok.svg" alt="Approve" class="hover:brightness-110 cursor-pointer" onclick="requestFunction(${data.id}, 1)">
                                <img src="../../src/img/Cancel.svg" alt="Reject" class="hover:brightness-110 cursor-pointer" onclick="requestFunction(${data.id}, -1)">
                            </td>
                            `;
                        }else{
                            action = `
                                <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                    ${data.updated_at}
                                </td>
                                <td class="px-1 sm:px-6 py-4 text-gray-600 flex gap-4">
                                    <span onclick="archiveFile(${data.id}, 0)" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
                                        ${data.status == 1 ? 'Approved' : 'Declined'}
                                    </span>    
                                </td>
                            `;
                        }
                        return tr = `
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" colspan="1" class="px-1 sm:px-6 py-4 text-xs sm:text-sm font-medium text-gray-900 dark:text-white">
                                    ${data.id}
                                </th>
                                <td colspan="6" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600  text-wrap">
                                    ${data.project_title}
                                </td>
                                <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                    ${data.email}
                                </td>
                                <td colspan="2" class="px-1 sm:px-6 py-4 text-xs sm:text-sm text-gray-600">
                                    ${data.created_at}
                                </td>
                                ${action}
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