function initiateButtons(){
  const optionButtons = document.querySelectorAll('.option-btns');
  optionButtons.forEach((btn) => {
      btn.addEventListener('click', function(event){
          optionButtons[0].classList.toggle('active');
          optionButtons[1].classList.toggle('active');
          optionButtons[0].classList.toggle('btn-bordered');
          optionButtons[1].classList.toggle('btn-bordered');
          document.getElementById('file-tbody').classList.toggle('hidden');
          document.getElementById('archive-tbody').classList.toggle('hidden');
          active = event.target.innerText.toLowerCase();
          document.querySelector('#active-type').value = active;
      });
  });
}

function setActiveNav(str){
  const element = document.getElementById(str);
  element.classList.add('bg-orange-400');
  element.firstElementChild.classList.add('brightness-100');
  element.firstElementChild.nextElementSibling.classList.add('text-white');
}