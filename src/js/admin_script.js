// FILES / ARCHIVED BUTTON STYLE 
function initiateButtons() {
  const optionButtons = document.querySelectorAll('.option-btns');
  optionButtons.forEach((btn) => {
    btn.addEventListener('click', function (event) {
      const tbodies = document.getElementsByClassName('tbodies');
      optionButtons[0].classList.toggle('active');
      optionButtons[1].classList.toggle('active');
      optionButtons[0].classList.toggle('btn-bordered');
      optionButtons[1].classList.toggle('btn-bordered');
      tbodies[0].classList.toggle('hidden');
      tbodies[1].classList.toggle('hidden');
      active = event.target.innerText.toLowerCase();
      document.querySelector('#active-type').value = active;
      const exportBtn = document.querySelector('#export-btn');
      if(exportBtn != null){
          exportBtn.classList.toggle('hidden');
      }
    });
  });
}

function capitalizeFirst(str){
    return str[0].toUpperCase() + str.substr(1);
}

//DISPLAY ORANGE BG
function setActiveNav(str){
  const element = document.getElementById(str);
  element.classList.add('bg-orange-400');
  element.firstElementChild.classList.add('brightness-100');
  element.firstElementChild.nextElementSibling.classList.add('text-white');
}

// UPDATE DATE FILTER TEXT
function updateSelectedFilter() {
    radioInputs.forEach(input => {
        if (input.checked) {
            let selectedValue = input.value;
            span.textContent = selectedValue == 'yesterday' || selectedValue == 'all' ? capitalizeFirst(selectedValue) : `Last ${capitalizeFirst(selectedValue)}`;
        }
    });
}

// UPDATE TABLE ROW WHEN ARCHIVED
function updateTableWhenArchived(id, archive) {
  if (archive !== 0) {
    var tr = document.querySelector(`#tr-${id}`);
    tr.id = `atr-${id}`;
    tr.lastElementChild.innerHTML = `
      <span onclick="archiveFile(${id}, 0)" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
        <img src="../../src/img/Restore Page.svg" alt="">
        Unarchive 
      </span>        
    `;
    console.log(tr.lastElementChild.classList);
    tbody = 'archived-tbody';
  } else {
    var tr = document.querySelector(`#atr-${id}`);
    tr.id = `tr-${id}`;
    tr.lastElementChild.innerHTML = `
      <a href="view.php?id=${id}" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
          <img src="../../src/img/View.svg" alt="">
          View
      </a>
      <span onclick="archiveFile(${id}, 1)" class="flex gap-1 items-center font-medium text-gray-500 dark:text-blue-500 hover:underline">
          <img src="../../src/img/Archive.svg" alt="">
          Archive
      </span>   
    `;
    console.log(tr.lastElementChild.classList);
    tbody = 'not-archived-tbody';
  }
  tr.remove();
  trHtml = tr.outerHTML;
  document.getElementById(tbody).innerHTML += trHtml;
}