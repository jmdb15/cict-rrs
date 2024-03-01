let input = document.getElementById("tag-input");
let dropdown = document.getElementById("tag-dropdown");
let here = document.getElementById("here");
let form = document.querySelector('form');

input.addEventListener("focus", function() {
    dropdown.style.display = "block";
});

window.addEventListener("click", function(event) {
    if (!event.target.matches('#tag-input')) {
    dropdown.style.display = "none";
    }
});

function addOption(){
    var options = dropdown.querySelectorAll(".tag-option");
    options.forEach(function(option) {
    option.addEventListener("click", function(event) {
        event.preventDefault();
        here.innerHTML += `<span onclick="removeMe(this)" class="tag-chosen">${event.target.textContent}</span>`;
        option.remove();
    });
    });
}

function removeMe(e){
    e.remove();
    dropdown.innerHTML += `<option class="tag-option">${e.innerText}</option>`;
    addOption();
}

addOption();

form.addEventListener('submit', function(event) {
    event.preventDefault();
    let parentDiv = document.querySelector('#here');
    let childDivs = parentDiv.querySelectorAll('span');
    let texts = [];
    childDivs.forEach(function(childDiv) {
        texts.push(childDiv.innerText);
    });
    input.value = JSON.stringify(texts);
    form.submit();
});

// Initialize Flatpickr for startDate input
flatpickr("#month-yr", {
    dateFormat: "m/Y",
});
