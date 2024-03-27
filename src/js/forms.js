let cont = document.querySelector('#form-container');
const closeGridSpan = `<span class="remove-option" title="Remove" onclick="removeGridOption(this)" unselectable="on" onselectstart="return false;">x</span>`;
const closeSpan = `<button class="remove-option" title="Remove" onclick="removeOption(this)" unselectable="on" onselectstart="return false;">x</button>`;
let divcount = 1;
let myObject = {};
appendFormDiv();

function saveForm(event, form) {
    event.preventDefault();
    newObject = [
        {
            questionnaire: myObject
        }, {
            answers: {}
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
    cont.innerHTML += `
        <div data-id="${count}" id="form-${count}" class="custom-div relative m-4 mr-auto p-4 border border-gray-300 rounded-lg w-[88%] transition-all focus:outline-none" tabindex="1" onfocus="handleDivFocus(this, 0)" onblur="handleDivBlur(this)">
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
                <button class="px-[9px] pb-[1.5px] rounded-full bg-orange-400 text-white font-medium" onclick="removeMe(this)">x</button>
            </div>
        </div>
        `;
    myObject[count] = {
        type: 'text',
        options: {}
    };
    changeField(count, 'text');
    console.log(myObject);
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
                <input type="${type}" id="${count}-${type}-2" class="mx-1 text-gray-300" disabled> 
                <div data-id="${count}-${type}-1" class="grid-form" contenteditable="true" oninput="insertOptions(this)">
                    Option 1
                    ${closeSpan}
                </div>
            </div> 
            <div class="w-full h-fit flex">
                <input type="${type}" id="${count}-${type}-2" class="mx-1 text-gray-300" disabled> 
                <div data-id="${count}-${type}-2" class="grid-form text-gray-300" contenteditable="true" onfocus="addFormItem(this, ${count}, 2, '${type}')">Add option</div>
            </div>
            `;
    } else {
        if (type == 'grid') {
            div.classList.add('flex');
            div.innerHTML = `
                <div id="${count}-grid-row" class="w-full h-fit flex flex-col flex-1">
                    <div data-id="${count}-row-1" class="grid-form" contenteditable="true" oninput="insertOptions(this)"> 
                        Row 1
                        <span class="remove-option" title="Remove" onclick="removeGridOption(this)" unselectable="on" onselectstart="return false;">x</span>
                    </div>
                    <div data-id="${count}-row-2" class="grid-form text-gray-300" onfocus="addFormItem(this, ${count}, 2, 'row')" contenteditable="true">Add row</div>
                </div>
                <div id="${count}-grid-col" class="w-full h-fit flex flex-col flex-1">
                    <div data-id="${count}-col-1" class="grid-form" contenteditable="true" oninput="insertOptions(this)">
                        Column 1
                        <span class="remove-option" title="Remove" onclick="removeGridOption(this)" unselectable="on" onselectstart="return false;">x</span>
                    </div>
                    <div data-id="${count}-col-2" class="grid-form text-gray-300" onfocus="addFormItem(this, ${count}, 2, 'col')" contenteditable="true">Add column</div>
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
    if (addTo == 'radio' || addTo == 'checkbox') {
        let newDiv = document.createElement('div');
        newDiv.innerHTML = `
                <input type="${addTo}" id="${count}-${addTo}-${row}" class="mx-1 text-gray-300" disabled> 
                <div data-id="${count}-${addTo}-${row}" class="grid-form text-gray-300" contenteditable="true" onfocus="addFormItem(this, ${count}, ${row}, '${addTo}')">Add option</div>`;
        newDiv.classList = 'w-full h-fit flex';
        elem.parentNode.parentNode.insertBefore(newDiv, elem.parentNode.nextSibling);
        // const parent = elem.parentNode.parentElement;
        // const index = Array.from(parent.children).indexOf(elem);
        elem.textContent = `Option ${row - 1}`
        elem.innerHTML += closeSpan;
        myObject[count].options.push(`Option ${row - 1}`)
    } else {
        // let div = document.getElementById(`${count}-grid-${addTo}`);
        let newDiv = document.createElement('div');
        newDiv.innerHTML = `${(addTo == 'col') ? 'Add column' : 'Add row'}`;
        newDiv.classList = 'grid-form text-gray-300';
        newDiv.onfocus = function (event) {
            addFormItem(this, count, row, addTo);
            this.onfocus = null;
        };
        newDiv.oninput = function (event) {
            insertOptions(event.target);
        }
        newDiv.contentEditable = 'true';
        newDiv.dataset.id = count + '-' + addTo + '-' + row;
        elem.parentNode.insertBefore(newDiv, elem.nextSibling);
        elem.textContent = `${(addTo == 'col') ? 'Column' : 'Row'} ${row - 1}`
        elem.innerHTML += closeGridSpan;
        (addTo == 'col') ? myObject[count].options.col.push(`Column ${row - 1}`) : myObject[count].options.row.push(`Row ${row - 1}`);
    }
    elem.classList.remove('text-gray-300');
    elem.removeAttribute('onfocus');
    elem.oninput = function (event) {
        insertOptions(event.target);
    };
}

//OBJECT MANIPULATION
function insertOptions(elem) {
    const elem_id = elem.dataset.id;
    const [count, type, id] = elem_id.split('-');
    let textContent = elem.textContent.trim().replace(/\nX$/, '');
    if (myObject[count].type === 'grid') {
        const parent = elem.parentElement;
        const index = Array.from(parent.children).indexOf(elem);
        (type == 'col') ? myObject[count].options.col[index] = textContent : myObject[count].options.row[index] = textContent;
    } else {
        const parent = elem.parentElement.parentElement;
        const index = Array.from(parent.children).indexOf(elem.parentElement);
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
        elem.classList.remove('question')
        elem.classList.add('default')
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
    const [count, type, row] = elem.parentNode.dataset.id.split('-');
    if (elem.parentNode.parentNode.childElementCount > 2) {
        const parent = elem.parentElement.parentElement;
        const index = Array.from(parent.children).indexOf(elem.parentElement);
        elem.parentNode.remove();
        (type == 'col') ? myObject[count].options.col.splice(index, 1) : myObject[count].options.row.splice(index, 1);
    }

}
function removeOption(elem) {
    const [count, type, row] = elem.parentNode.dataset.id.split('-');
    const nonEmptyValues = myObject[count].options.filter(value => value !== "");
    if (nonEmptyValues.length > 1) {
        const parent = elem.parentElement.parentElement;
        const index = Array.from(parent.children).indexOf(elem.parentElement);
        delete myObject[count].options.splice(index, 1);;
        elem.parentNode.parentNode.remove()
    }
}

// FIND THE CHANGEABLE DIV DYNAMICALLY
function findDiv(count) {
    return document.querySelector(`#changeable-${count}`);
}

//MOVING ITEMS
function updateButtonPosition(elem) {
    const firstChildRect = elem.getBoundingClientRect();
    const btn = document.querySelector('#add-btn');
    const parent = elem.parentNode.getBoundingClientRect();
    const topp = firstChildRect.top - parent.top + elem.parentElement.scrollTop;
    btn.style.top = `${topp + 70}px`;
}