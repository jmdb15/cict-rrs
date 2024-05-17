<form method="POST" action="actions/save_research.php" enctype="multipart/form-data" class="container mt-[68px] mx-auto">
    <div class="p-4 flex flex-wrap gap-4 h-inherit">

        <div class="w-full lg:basis-[62%] border h-full py-6 px-12 bg-white shadow rounded-lg">
            <h4 class="text-lg font-medium mb-5">Tell us about your study</h4>
            <!-- TITLES -->
            <div class="flex flex-col sm:flex-row justify-around">
                <div class="mb-5 basis-full">
                    <label for="research-title" class="block mb-2 text-sm font-medium text-gray-900">Research Title</label>
                    <input type="text" id="research-title" name="research-title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required placeholder="Enter your research title" />
                </div>
            </div>

            <!-- AUTHORS & PANELS -->
            <div class="relative flex flex-col sm:flex-row justify-around pb-4">
                <div class="mb-5 basis-[48%]">
                    <label for="authors" class="block mb-2 text-sm font-medium text-gray-900">Authors</label>
                    <textarea id="authors" name="authors" rows="4" class="txtarea" placeholder="Enter authors full name"></textarea>
                </div>
                <div class="mb-5 basis-[48%]">
                    <label for="panels" class="block mb-2 text-sm font-medium text-gray-900">Panel/Critic</label>
                    <textarea id="panels" name="panels" rows="4" class="txtarea" placeholder="Enter panel/critic names"></textarea>
                </div>
                <div class="absolute bottom-2 mt-1 text-sm text-gray-400">Separate names by entering a new line</div>

            </div>

            <!-- ACCESSION NO. & ADVISER -->
            <div class="flex flex-col sm:flex-row justify-around">
                <div class="mb-5 basis-[48%]">
                    <label for="accession" class="block mb-2 text-sm font-medium text-gray-900">Accession Number</label>
                    <input type="text" id="accession" name="accession" class="input-text" required placeholder="Enter Accession Number"/>
                </div>
                <div class="mb-5 basis-[48%]">
                    <label for="adviser" class="block mb-2 text-sm font-medium text-gray-900">Adviser</label>
                    <input type="text" id="adviser" name="adviser" class="input-text" required placeholder="Enter Adviser Name" />
                </div>
            </div>

                <!-- TAGS & MONTH, YEAR -->
                <div class="flex flex-col sm:flex-row justify-around">
                <div class="mb-5 basis-[48%]">
                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-900">Fields (Tags)</label>
                    <div class="dropdown relative w-full">
                        <div class="w-full flex flex-wrap border-[1px] border-gray-300 bg-gray-50 rounded-lg pt-1 pl-1">
                            <div id="here" class="flex flex-wrap gap-1"></div>
                            <input type="text" id="tag-input" name="tags" class="bg-gray-50 border-none outline-none rounded-lg text-gray-900 text-sm min-w-[120px] w-full" placeholder="Enter your project title"/>
                        </div>
                        
                        <div class="hidden absolute bg-gray-50 shadow z-1 w-full h-72 overflow-y-scroll scroll-smooth" id="tag-dropdown">
                            <option class="tag-option">Programming</option>
                            <option class="tag-option">Medical</option>
                            <option class="tag-option">Food</option>
                            <option class="tag-option">Crypto</option>
                            <option class="tag-option">Documents</option>
                            <option class="tag-option">Web-based</option>
                            <option class="tag-option">Business</option>
                            <option class="tag-option">Community</option>
                            <option class="tag-option">Students</option>
                            <option class="tag-option">Technology</option>
                            <option class="tag-option">Android</option>
                            <option class="tag-option">Mobile</option>
                            <option class="tag-option">School</option>
                            <option class="tag-option">E-learning</option>
                            <option class="tag-option">Agriculture</option>
                            <option class="tag-option">Map</option>
                            <option class="tag-option">University</option>
                            <option class="tag-option">Directory</option>
                            <option class="tag-option">Coffee</option>
                            <option class="tag-option">Ecommerce</option>
                            <option class="tag-option">Clothes</option>
                            <option class="tag-option">Inventory</option>
                            <option class="tag-option">System</option>
                            <option class="tag-option">Booking</option>
                            <option class="tag-option">Calendar</option>
                        </div>
                    </div>
                </div>
                <div class="mb-5 basis-[48%]">
                    <label for="month-yr" class="block mb-2 text-sm font-medium text-gray-900">Month, Year</label>
                    <input type="text" id="month-yr" name="month-yr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required placeholder="Enter your research title" />
                </div>
                </div>
            
            <!-- ABSTRACT / DESCRIPTION -->
            <div class="w-[98%] mx-auto mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Abstract</label>
                <textarea id="description" name="description" rows="4" class="txtarea" required placeholder="Enter short description"></textarea>
                <div id="desc-error" class="text-gray-500 text-sm">Description must be greater than 300 words.</div>
            </div>


            <div class="flex flex-col sm:flex-row justify-around gap-y-6">
                <div class="w-full sm:basis-1/2 lg:basis-[48%]">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="research-paper">Upload your file</label>
                    <input 
                        id="research-paper" 
                        accept="application/pdf" 
                        type="file" 
                        name="file" 
                        required
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" 
                    />
                    <!-- <div class="mt-1 text-sm text-gray-500" id="user_avatar_help">A profile picture is useful to confirm your are logged into your account</div> -->
                </div>
                <div class="w-full sm:basis-1/4 sm:mt-5 lg:basis-[48%] flex justify-center sm:justify-end items-center">
                    <input class="bg-orange-400 w-full sm:w-auto px-10 py-2 text-white text-sm rounded" type="submit" name="upload" value="Upload">
                </div>
            </div>

        </div>

        <!-- RIGHT SIDE BOX DEFAULT -->
        <div class="flex flex-col gap-y-4 justify-between w-full h-[750px] flex-wrap md:flex-row lg:flex-col lg:basis-[36%] ">

            <!-- TOP RIGHT BOX -->
            <div class="basis-[48%] h-[375px] shadow rounded-lg bg-white p-4 border ">
                <h4 class="text-lg font-medium">Select landscape cover photo</h4>
                <div class="flex flex-col">
                    <div class="flex p-4">
                        <img src="../src/img/SVG_margin.png" alt="" class="inline h-12">
                        <div class="flex flex-col">
                            <p class="font-normal text-lg">Choose image</p>
                            <p class="text-gray-500 font-light text-md">JPG & PNG</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <div class="flex flex-col items-center justify-center pt-4 pb-5" id="img-cont">
                                <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 ">JPG & PNG</p>
                            </div>
                            <input id="dropzone-file" type="file" name="cover" class="hidden" accept="image/jpeg, image/png" onchange="displayFile()"/>
                        </label>
                    </div> 

                </div>
            </div>

            <!-- BOTTOM RIGHT BOX -->
            <div class="basis-[48%] h-[375px] shadow overflow-hidden rounded-lg bg-white p-4 border ">
                <h4 class="text-lg font-medium text-center">Upload History</h4>
                <!-- ITERATABLE -->
                <div class="overflow-y-hidden hover:overflow-y-auto h-full px-4">
            <?php   while($row = $res->fetch_assoc()){  
                    $dateTime = new DateTime($row['created_at']);
                    $row['created_at'] = $dateTime->format("F j, Y");       
            ?>  <!-- PHP -->
                        <div class="my-4 flex"> 
                            <img src="../src/img/file.png" class="">
                            <div class="flex flex-col">
                                <h6><?=$row['research_title']?></h6>
                                <p class="text-sm text-gray-400"><?=$row['created_at']?></p>
                            </div>
                        </div>
            <?php   } ?> <!-- PHP -->
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> <!-- FLAT PICKR -->
<!-- <script src="../src/js/upload_res.js"> -->
<script>
let input = document.getElementById("tag-input");
let dropdown = document.getElementById("tag-dropdown");
let here = document.getElementById("here");
let form = document.querySelector('form');

input.addEventListener("focus", function () {
    dropdown.style.display = "block";
});

window.addEventListener("click", function (event) {
    if (!event.target.matches('#tag-input')) {
        dropdown.style.display = "none";
    }
});

function addOption() {
    var options = dropdown.querySelectorAll(".tag-option");
    options.forEach(function (option) {
        option.addEventListener("click", function (event) {
            event.preventDefault();
            here.innerHTML += `<span onclick="removeMe(this)" class="tag-chosen">${event.target.textContent}</span>`;
            option.remove();
        });
    });
}

function removeMe(e) {
    e.remove();
    dropdown.innerHTML += `<option class="tag-option">${e.innerText}</option>`;
    addOption();
}

addOption();

form.addEventListener('submit', function (event) {
    event.preventDefault();
    const desc = document.getElementById('description').value;
    const descArray = desc.split(' ');
    let parentDiv = document.querySelector('#here');
    let childDivs = parentDiv.querySelectorAll('span');
    let texts = [];
    childDivs.forEach(function (childDiv) {
        texts.push(childDiv.innerText);
    });
    input.value = JSON.stringify(texts);
    if(descArray.length >= 300) form.submit();
    else document.getElementById('desc-error').classList = 'my-1 px-2 py-2 text-red-500 border border-red-500 bg-red-200 text-sm';
});

// Initialize Flatpickr for startDate input
flatpickr("#month-yr", {
    dateFormat: "m/Y",
});

function displayFile() {
    const fileInput = document.getElementById('dropzone-file');
    const file = fileInput.files[0];
    const fileContentsDisplay = document.getElementById('img-cont');
    const divContent = `<svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 ">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>`;
    
    if (file) {
        const uploadedImage = document.createElement('img');
        uploadedImage.classList = 'w-full max-w-[320px] h-auto aspect-video';
        uploadedImage.src = URL.createObjectURL(file);
        fileContentsDisplay.innerHTML = '';
        fileContentsDisplay.append(uploadedImage);
    } else {
        fileContentsDisplay.innerHTML = divContent;
    }
}
</script>