<main class="w-screen h-fit lg:h-[calc(100vh-80px)] bg-gray-100 dark:bg-slate-700 md:overflow-y-hidden">
    <div class="container h-full mx-auto">
        <!-- Survey Form -->
        <form action="save_survey.php" onsubmit="saveForm(event, this)" method="POST" id="upload-survey-form" class="h-full overflow-y-auto lg:overflow-hidden flex flex-col-reverse justify-center p-3 gap-6 lg:flex-row">
            <div class="w-full lg:w-1/2 h-full lg:h-[800px] flex flex-col p-6 mb-4 gap-y-3 flex-2 bg-white rounded-lg lg:overflow-auto">
                <h3 class="text-xl font-medium">Upload Survey Form</h3>
                <div class="w-full mb-5">
                    <label for="survey-name">Survey Name</label>
                    <input type="text" id="survey-name" name="survey-name" placeholder="Sample Survey Name" class="input-text">
                </div>
                <div class="w-full mb-5 flex gap-2">
                    <div class="flex-1">
                        <label for="url">URL <span class="text-gray-400">(if applicable)</span></label>
                        <input type="text" id="url" placeholder="Sample Survey Name" class="input-text">
                    </div>
                    <div class="flex-1">
                        <label for="respondents">Target Respondents </label>
                        <input type="text" name="respondents" id="survey-name" placeholder="Enter a number" class="input-text">
                    </div>
                </div>
                <div class="w-full mb-5">
                    <label for="survey-desc">Survey Description</label>
                    <textarea name="description" id="survey-desc" rows="4" class="txtarea"></textarea>
                </div>
                <div class="w-1/2 mb-5">
                    <label for="deadline">Deadline</label>
                    <input type="date" class="input-text" name="deadline" id="deadline">
                </div>

                <div class="w-full my-4 bg-orange-300 p-2">
                    Questions
                </div>
                <div id="form-container" class="w-full relative mx-auto pb-6 sm:pb-0 flex flex-col items-end gap-y-2">
                    <button id="add-btn" class="fixed sm:absolute right-10 bottom-10 sm:-right-3 sm:top-[86px] max-h-[26px] max-w-[26px] rounded-full border-2 border-black p-1 hover:bg-gray-50 hover:brightness-95" onclick="appendFormDiv()">
                        <svg height="14px" width="14px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            viewBox="0 0 309.059 309.059" xml:space="preserve">
                            <g>
                                <g>
                                    <path style="fill:#010002;" d="M280.71,126.181h-97.822V28.338C182.889,12.711,170.172,0,154.529,0S126.17,12.711,126.17,28.338
                                        v97.843H28.359C12.722,126.181,0,138.903,0,154.529c0,15.621,12.717,28.338,28.359,28.338h97.811v97.843
                                        c0,15.632,12.711,28.348,28.359,28.348c15.643,0,28.359-12.717,28.359-28.348v-97.843h97.822
                                        c15.632,0,28.348-12.717,28.348-28.338C309.059,138.903,296.342,126.181,280.71,126.181z"/>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Uploader Details -->
            <div class="flex flex-col p-12 mt-12 lg:mt-0 max-w-sm h-[446px] flex-1 bg-white rounded-lg place-self-center">
                <div class="mb-5">
                    <label for="uploader">Survey Uploader</label>
                    <input type="text" id="uploader" name="uploader" class="input-text" value="<?=$_SESSION['email']?>">
                </div>
                <div class="mb-5">
                    <label for="upload-date">Upload Date</label>
                    <input type="text" id="upload-date" name="upload-date" value="<?=date("F j, Y")?>" class="input-text">
                </div>
                <div class="my-10 flex flex-col justify-center items-center gap-y-4">
                    <button class="btn bg-orange-400" type="submit">Upload Survey</button>
                    <button class="btn bg-gray-500">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</main>

<!-- <script src="../src/js/forms.js"></script> -->
<script>
    let cont = document.querySelector('#form-container');
    const closeIcon = `<svg xmlns="http://www.w3.org/2000/svg" class="opacity-60 hover:opacity-100" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>`;
const closeGridSpan = `<button type="button" class="remove-option" title="Remove" onclick="removeGridOption(this)" >${closeIcon}</button>`;
const closeSpan = `<button type="button" class="remove-option" title="Remove" onclick="removeOption(this)" >${closeIcon}</button>`;
let divcount = 1;
let myObject = {};
appendFormDiv();

function saveForm(event, form) {focus:border-none
    event.preventDefault();
    newObject = [
        {
            questionnaire: myObject
        }, {
            answers: []
        }
    ]
    $.ajax({
        url: '../src/ajax/upload_survey.php',
        type: 'POST',
        data: { json: JSON.stringify(newObject) },
        success: function (data) {
            var input = document.createElement("input");
            input.type = "hidden";
            input.name = "filename";
            input.value = data;
            form.appendChild(input);
            form.submit();
        }
    })
}
function appendFormDiv() {
    let count = divcount++;
    let newDiv = document.createElement('div');
    cont.innerHTML += `
        <div 
        data-id="${count}" 
        id="form-${count}" 
        class="custom-div relative m-4 mr-auto p-4 border border-gray-300 rounded-lg w-[88%] transition-all focus:outline-none" 
        tabindex="1" 
        onfocus="handleDivFocus(this, 0)" 
        onblur="handleDivBlur(this)">
            <div class="flex items-center justify-between">
                <div id="editable-${count}" class="editable default" contenteditable="true" onfocus="handleEditableFocus(this)" onblur="handleEditableBlur(this)" oninput="insertQuestion(this)">Question</div>
                <div class="select-wrapper mt-2">
                    <select class="border border-gray-300 rounded-lg px-2 py-1 w-full focus:outline-none basis-[29%]" onchange="changeType(${count}, this)">
                        <option value="text">Short Answer</option>
                        <option value="textarea">Long Answer</option>
                        <option value="radio">Radio</option>
                        <option value="checkbox">Checkbox</option>
                        <option value="grid">Linear Scale</option>
                    </select>
                </div>
            </div>
            <div id="changeable-${count}" class="p-1">
                <div class="w-full h-fit flex">
                    <input type="type" id="0-type-1" class="w-full border-none" placeholder="Short answer" disabled> 
                </div>
            </div>
            <div class="w-full border-t border-gray-200 mt-5 pt-3 flex justify-end gap-x-6">
                <button class="h-6 w-6" onclick="removeMe(this)">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </button>
            </div>
        </div>
        `;
    myObject[count] = {
        type: 'text',
        options: {}
    };
    changeField(count, 'text');
}
function changeType(count, elem) {
    var selectedOption = elem.options[elem.selectedIndex].value;
    if (myObject.hasOwnProperty(count)) {
        switch (selectedOption) {
            case 'text':
            case 'textarea':
                myObject[count].options = null;
                break;
            case 'radio':
            case 'checkbox':
                myObject[count].options = ['Option 1'];
                break;
            case 'grid':
                myObject[count].options = { row: ['Row 1'], col: ['Column 1'] };
                break;
        }
    }
    console.log(myObject);
    changeField(count, selectedOption);
}
function changeField(count, type) {
    let div = findDiv(count);
    myObject[count].type = type;
    if (type == "text") {
        div.classList.remove('flex');
        div.innerHTML = `
            <div class="w-full h-fit flex">
                <input type="text" id="${count}-text-1" class="w-full  border-b border-t-0 border-l-0 border-r-0" placeholder="Short answer" disabled> 
            </div>
            `;
    } else if (type !== 'grid' && type !== 'textarea') {
        div.classList.remove('flex');
        div.innerHTML = `
            <div class="w-full h-fit flex">
                <input type="${type}" id="${count}-${type}-1" class="mx-1 text-gray-300" disabled> 
                <div class="grid-form">
                    <div data-id="${count}-${type}-1" class="div-editable" contenteditable="true" onclick="selectAllText(this)" onblur="checkValue(this)" oninput="insertOptions(this)">Option 1</div>
                    ${closeSpan}
                </div>
            </div> 
            <div class="w-full h-fit flex">
                <input type="${type}" id="${count}-${type}-2" class="mx-1 text-gray-300" disabled> 
                <div class="grid-form">
                    <div data-id="${count}-${type}-2" class="text-gray-300 div-editable" onclick="selectAllText(this)" oninput="insertOptions(this)" contenteditable="true" onblur="checkValue(this)" onfocus="addFormItem(this, ${count}, 2, '${type}')">Add option</div>
                </div>
            </div>
            `;
    } else {
        if (type == 'grid') {
            div.classList.add('flex');
            div.innerHTML = `
                <div id="${count}-grid-row" class="w-full h-fit flex flex-col flex-1">
                    <div class="grid-form">
                        <div data-id="${count}-row-1" class="div-editable" contenteditable="true" oninput="insertOptions(this)" onclick="selectAllText(this)" onblur="checkValue(this)">Row 1</div>
                        <button class="remove-option" title="Remove" onclick="removeGridOption(this)" >
                            ${closeIcon}
                        </button>
                    </div>
                    <div class="grid-form">
                        <div data-id="${count}-row-2" class="div-editable text-gray-300" onclick="selectAllText(this)" oninput="insertOptions(this)" onfocus="addFormItem(this, ${count}, 2, 'row')" onblur="checkValue(this)" oninput="insertOptions(this)" contenteditable="true">Add row</div>
                    </div>
                </div>
                <div id="${count}-grid-col" class="w-full h-fit flex flex-col flex-1">
                    <div class="grid-form">
                        <div data-id="${count}-col-1" class="div-editable" contenteditable="true" onclick="selectAllText(this)" oninput="insertOptions(this)" onblur="checkValue(this)">Column 1</div>
                        <button class="remove-option" title="Remove" onclick="removeGridOption(this)">
                            ${closeIcon}
                        </button>
                    </div>
                    <div class="grid-form">
                        <div data-id="${count}-col-2" class="div-editable text-gray-300" onclick="selectAllText(this)" oninput="insertOptions(this)" onfocus="addFormItem(this, ${count}, 2, 'col')" onblur="checkValue(this)" oninput="insertOptions(this)" contenteditable="true">Add column</div>
                    </div>
                </div>
            `;
        } else if (type == 'textarea') {
            div.classList.remove('flex');
            div.innerHTML = `
                <div class="w-full h-fit flex">
                    <textarea id="${count}-${type}-1" disabled rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                </div>
                `;
        }
    }
}
function addFormItem(elem, count, row, addTo) {
    row++;
    let newDiv = document.createElement('div');
    if (addTo == 'radio' || addTo == 'checkbox') {
        newDiv.innerHTML = `
                <input type="${addTo}" id="${count}-${addTo}-${row}" class="mx-1 text-gray-300" disabled> 
                <div class="grid-form">
                    <div data-id="${count}-${addTo}-${row}" class="text-gray-300 div-editable" onclick="selectAllText(this)" oninput="insertOptions(this)" contenteditable="true" onblur="checkValue(this)" onfocus="addFormItem(this, ${count}, ${row}, '${addTo}')">Add option</div>
                </div>`;
        newDiv.classList = 'w-full h-fit flex';
        elem.parentNode.parentNode.parentNode.insertBefore(newDiv, elem.parentNode.parentNode.nextSibling);
        const parent = elem.parentElement.parentElement.parentElement;
        const index = Array.from(parent.children).indexOf(elem.parentElement.parentElement);
        elem.textContent = `Option ${index + 1}`
        document.querySelector(`[data-id="${elem.dataset.id}"`).parentElement.innerHTML += closeSpan;
        myObject[count].options.push(`Option ${index + 1}`)
    } else {
        // let div = document.getElementById(`${count}-grid-${addTo}`);
        newDiv.innerHTML = `
            <div data-id="${count + '-' + addTo + '-' + row}" class="div-editable text-gray-300" onclick="selectAllText(this)" oninput="insertOptions(this)" onblur="checkValue(this)" onfocus="addFormItem(this, ${count}, ${row}, '${addTo}')" contenteditable="true">
                ${(addTo == 'col') ? 'Add column' : 'Add row'}
            </div>
        `;
        newDiv.classList = 'grid-form';
        // newDiv.onfocus = function (event) {
        //     addFormItem(this, count, row, addTo);
        //     this.onfocus = null;
        // };
        // newDiv.oninput = function (event) {
        //     insertOptions(event.target);
        // }
        const parent = elem.parentElement.parentElement;
        const index = Array.from(parent.children).indexOf(elem.parentElement);
        elem.parentNode.parentNode.insertBefore(newDiv, elem.parentNode.nextSibling);
        elem.textContent = `${(addTo == 'col') ? 'Column' : 'Row'} ${index + 1}`
        elem.parentElement.innerHTML += closeGridSpan;
        (addTo == 'col') ? myObject[count].options.col.push(`Column ${index + 1}`) : myObject[count].options.row.push(`Row ${index + 1}`);
    }
    document.querySelector(`[data-id="${elem.dataset.id}"`).removeAttribute('onfocus');
    document.querySelector(`[data-id="${elem.dataset.id}"`).classList.remove('text-gray-300');
    document.querySelector(`[data-id="${elem.dataset.id}"`).addEventListener('click', function(event){
        selectAllText(event.target);
    });
    // document.querySelector(`[data-id="${elem.dataset.id}"`).addEventListener('input', function (event) {
    //     insertOptions(event.target);
    // });
    document.querySelector(`[data-id="${elem.dataset.id}"`).focus();
}

//OBJECT MANIPULATION
function insertOptions(elem) {
    const elem_id = elem.dataset.id;
    const [count, type, id] = elem_id.split('-');
    let textContent = elem.textContent.trim();
    textContent = (textContent == '') ? 'Option' :textContent;
    if (myObject[count].type === 'grid') {
        const parent = elem.parentElement.parentElement;
        const index = Array.from(parent.children).indexOf(elem.parentElement);
        (type == 'col') ? myObject[count].options.col[index] = textContent : myObject[count].options.row[index] = textContent;
    } else {
        const parent = elem.parentElement.parentElement.parentElement;
        const index = Array.from(parent.children).indexOf(elem.parentElement.parentElement);
        myObject[count].options[index] = textContent;
    }
}
function insertQuestion(elem) {
    const elem_id = elem.id;
    const [type, count] = elem_id.split('-');
    myObject[count].question = elem.textContent;
}

//HANDLE FUNCTIONS
function handleEditableFocus(elem) {
    if (elem.innerText == 'Question') {
        elem.innerText = '';
        elem.classList.remove('default')
        elem.classList.add('question')
    }
}
function handleEditableBlur(elem) {
    if (elem.innerText.trim() === '') {
        elem.innerText = 'Question';
        elem.classList.remove('question');
        elem.classList.add('default');
    }
}
function handleDivBlur(elem) {
    let childDiv = elem.querySelector(`.editable`);
    childDiv.blur();
    // elem.querySelector('[contenteditable="true"]').setAttribute('contenteditable', 'false')
}
function handleDivFocus(elem, count) {
    let childDiv = elem.querySelector(`.editable`);
    options = elem.querySelector('select').options;
    updateButtonPosition(elem);
    for (let index = 0; index < options.length; index++) {
        if (options[index].value == myObject[elem.dataset.id]) {
            options.selectedIndex = index
        }
    }
    // childDiv.setAttribute("contenteditable", "true");
    childDiv.focus();
}
function checkValue(elem){
    if(elem.textContent.trim() === ''){
        elem.textContent = 'Option';
    }
}

function selectAllText(elem){
    if(elem.textContent.includes('Option')){
        window.getSelection().selectAllChildren(elem);
    }
}

// REMOVING FUNCTIONS
function removeMe(elem) {
    let count = elem.parentNode.parentNode.dataset.id;
    if (myObject.hasOwnProperty(count)) {
        delete myObject[count];
    }
    elem.parentNode.parentNode.remove();
    console.log(myObject);
}
function removeGridOption(elem) {
    const [count, type, row] = elem.previousElementSibling.dataset.id.split('-');
    if (elem.parentNode.parentNode.childElementCount > 2) {
        const parent = elem.parentElement.parentElement;
        const index = Array.from(parent.children).indexOf(elem.parentElement);
        elem.parentNode.remove();
        (type == 'col') ? myObject[count].options.col.splice(index, 1) : myObject[count].options.row.splice(index, 1);
    }

}
function removeOption(elem) {
    const [count, type, row] = elem.previousElementSibling.dataset.id.split('-');
    const nonEmptyValues = myObject[count].options.filter(value => value !== "");
    if (nonEmptyValues.length > 1) {
        const parent = elem.parentElement.parentElement.parentElement;
        const index = Array.from(parent.children).indexOf(elem.parentElement.parentElement);
        delete myObject[count].options.splice(index, 1);
        elem.parentNode.parentNode.remove();
    }
}

// FIND THE CHANGEABLE DIV DYNAMICALLY
function findDiv(count) {
    return document.querySelector(`#changeable-${count}`);
}

//MOVING ITEMS
function updateButtonPosition(elem) {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if(width > 560){
        const firstChildRect = elem.getBoundingClientRect();
        const btn = document.querySelector('#add-btn');
        const parent = elem.parentNode.getBoundingClientRect();
        const topp = firstChildRect.top - parent.top + elem.parentElement.scrollTop;
        btn.style.top = `${topp + 70}px`;
    }
}
</script>