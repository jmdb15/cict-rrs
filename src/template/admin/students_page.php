<div class="relative overflow-x-auto p-2 lg:px-24 xl:px-48">
    <div class="flex flex-col md:flex-row justify-center items-center gap-4 md:gap-12 p-8">
        <button class="active option-btns">Students</button>
        <button class="btn-bordered option-btns">Archived</button>
        <input 
            id="active-type"
            type="text"
            value="students" 
            name="active" 
            hidden
            />
    </div>
    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-end pb-4">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute border-r-[1px] border-gray-300 px-2.5 h-[36.5px] top-0 start-0 flex items-center pointer-events-none">
                <svg class="w-3 h-3 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <form action="" onsubmit="searchUser(this, event)">
                <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search for items">
            </form>
        </div>
    </div>
    <div class="rounded bg-gray-50 max-h-[620px] overflow-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
            <div class="sticky top-0 bg-white flex justify-between p-5 border-b-[1px] rounded w-full">
                <h2 class="text-xl">File List</h2>
                <button class="px-4 py-2 bg-orange-400 text-white hover:brightness-110 rounded-md">Upload File</button>
            </div>
            <thead class="sticky top-[81px] text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Student No.
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Course
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Year & Section
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="tbodies" id="not-archived-tbody">
                <?php   while($row = $result->fetch_assoc()){  ?>
                    <tr id="tr-<?=$row['id']?>" class="bg-white border-b">
                        <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <?=$row['number']?>
                        </th>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['first_name']?> <?=$row['last_name']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['email']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['course']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['year']?? 'unset'.$row['section']?? ''?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <span onclick="archiveFile(<?=$row['id']?>, 1, 'account')" class="flex gap-1 items-center font-medium text-gray-500 hover:underline">
                                <img src="../../src/img/Archive.svg" alt="">
                                Archive
                            </span>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tbody class="hidden tbodies" id="archived-tbody">
                <?php   while($row = $aresult->fetch_assoc()){  ?>
                    <tr id="atr-<?=$row['id']?>" class="bg-white border-b hover:bg-gray-50 ">
                        <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <?=$row['number']?>
                        </th>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['first_name']?> <?=$row['last_name']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['email']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['contact']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['course']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['year']?? 'unset'.$row['section']?? ''?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <span onclick="archiveFile(<?=$row['id']?>, 0, 'account')" class="flex gap-1 items-center font-medium text-gray-500 hover:underline">
                                <img src="../../src/img/Restore Page.svg" alt="">
                                Restore
                            </span> 
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    let active = 'students';
    setActiveNav('users');
    initiateButtons();

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
                updateTableWhenArchived(id, func, table, isUser=true);
                alert(response)
            }
        });
    }

    function searchUser(form, e){
        e.preventDefault();
        const key = document.getElementById('table-search').value;
        const activeType = document.getElementById('active-type').value == 'archived' ? 1 : 0 ;
        
        $.ajax({
            url: '../../src/ajax/search-user.php',
            type: 'POST',
            data: {
                key: key,
                type: 'student',
                is_archived: activeType
            },
            success: function(response){
                const elemId = activeType == '1' ? 'archived-tbody' : 'not-archived-tbody';
                let tbody = document.getElementById(elemId);
                if(response != 'none'){
                    const parsed = JSON.parse(response);
                    
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
                                    <span onclick="archiveFile(${data.id}, 1, 'account')" class="flex gap-1 items-center font-medium text-gray-500 hover:underline">
                                        <img src="../../src/img/Archive.svg" alt="">
                                        Archive
                                    </span>
                                `;
                            }else{
                                newId = `id="atr-${data.id}"`;
                                action = `
                                    <span onclick="archiveFile(${data.id}, 0, 'account')" class="flex gap-1 items-center font-medium text-gray-500 hover:underline">
                                            <img src="../../src/img/Restore Page.svg" alt="">
                                            Restore
                                        </span>   
                                `;
                            }
                            return tr = `
                                <tr ${newId} class="bg-white border-b hover:bg-gray-50-600">
                                    <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        ${data.number}
                                    </th>
                                    <td class="px-1 sm:px-6 py-4 text-gray-600">
                                        ${data.first_name} ${data.last_name}
                                    </td>
                                    <td class="px-1 sm:px-6 py-4 text-gray-600">
                                        ${data.email}
                                    </td>
                                    <td class="px-1 sm:px-6 py-4 text-gray-600">
                                        ${data.contact}
                                    </td>
                                    <td class="px-1 sm:px-6 py-4 text-gray-600">
                                        BSIT
                                    </td>
                                    <td class="px-1 sm:px-6 py-4 text-gray-600">
                                        4E-G1
                                    </td>
                                    <td class="px-1 sm:px-6 py-4 text-gray-600">
                                        ${action}
                                    </td>
                                </tr>
                            `;
                        });
                        tbody.innerHTML = renderedHTML.join('');
                    }
                }else{
                    tbody.innerHTML = `
                            <tr class="bg-white border-b hover:bg-gray-50 cursor-pointer">
                                <th colspan="11" class="px-1 text-center sm:px-6 py-4 text-xs sm:text-sm max-w-[170px] max-w-none font-medium text-gray-900">
                                    NO RECORDS FOUND
                                </th>
                            </tr>
                        `;
                }
            }
        })
    }
</script>