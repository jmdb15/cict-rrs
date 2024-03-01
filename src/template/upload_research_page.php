<form method="POST" enctype="multipart/form-data" class="container mt-[68px] mx-auto">
    <div class="p-4 flex flex-wrap gap-4 h-inherit">

        <div class="w-full lg:basis-[62%] border h-full py-6 px-12 bg-white shadow rounded-lg">
            <h4 class="text-lg font-medium mb-5">Tell us about your study</h4>
            <!-- TITLES -->
            <div class="flex flex-col sm:flex-row justify-around">
                <div class="mb-5 basis-[48%]">
                    <label for="project-title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Title</label>
                    <input type="text" id="project-title" name="project-title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="Enter your project title"/>
                </div>
                <div class="mb-5 basis-[48%]">
                    <label for="research-title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Research Title</label>
                    <input type="text" id="research-title" name="research-title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="Enter your research title" />
                </div>
            </div>

            <!-- AUTHORS & PANELS -->
            <div class="relative flex flex-col sm:flex-row justify-around pb-4">
                <div class="mb-5 basis-[48%]">
                    <label for="authors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Authors</label>
                    <textarea id="authors" name="authors" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter authors full name"></textarea>
                </div>
                <div class="mb-5 basis-[48%]">
                    <label for="panels" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Panel/Critic</label>
                    <textarea id="panels" name="panels" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter panel/critic names"></textarea>
                </div>
                <div class="absolute bottom-2 mt-1 text-sm text-gray-400 dark:text-gray-300">Separate names by entering a new line</div>

            </div>

            <!-- ACCESSION NO. & ADVISER -->
            <div class="flex flex-col sm:flex-row justify-around">
                <div class="mb-5 basis-[48%]">
                    <label for="accession" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Accession Number
                    </label>
                    <input type="number" id="accession" name="accession" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="Enter Accession Number"/>
                </div>
                <div class="mb-5 basis-[48%]">
                    <label for="adviser" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adviser</label>
                    <input type="text" id="adviser" name="adviser" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="Enter Adviser Name" />
                </div>
            </div>

                <!-- TAGS & MONTH, YEAR -->
                <div class="flex flex-col sm:flex-row justify-around">
                <div class="mb-5 basis-[48%]">
                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fields (Tags)</label>
                    <div class="dropdown relative w-full">
                        <div class="w-full flex flex-wrap border-[1px] border-gray-300 bg-gray-50 rounded-lg pt-1 pl-1">
                            <div id="here" class="flex flex-wrap gap-1"></div>
                            <input type="text" id="tag-input" name="tags" class="bg-gray-50 border-none outline-none rounded-lg text-gray-900 text-sm min-w-[120px] w-full dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your project title"/>
                        </div>
                        
                        <div class="hidden absolute bg-gray-50 shadow z-1 w-full h-72 overflow-scroll scroll-smooth" id="tag-dropdown">
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
                        </div>
                    </div>
                </div>
                <div class="mb-5 basis-[48%]">
                    <label for="month-yr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Month, Year</label>
                    <input type="text" id="month-yr" name="month-yr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required placeholder="Enter your research title" />
                </div>
                </div>
            
            <!-- ABSTRACT / DESCRIPTION -->
            <div class="w-[98%] mx-auto mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Abstract</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter short description"></textarea>
            </div>


            <div class="flex flex-col sm:flex-row justify-around gap-y-6">
                <div class="w-full sm:basis-1/2 lg:basis-[48%]">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="research-paper">Upload your file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="research-paper" accept=".pdf" type="file" name="file" required>
                    <!-- <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A profile picture is useful to confirm your are logged into your account</div> -->
                </div>
                <div class="w-full sm:basis-1/4 sm:mt-5 lg:basis-[48%] flex justify-center sm:justify-end items-center">
                    <input class="bg-orange-400 w-full sm:w-auto px-10 py-2 text-white text-sm rounded" type="submit" name="upload" value="Upload">
                </div>
            </div>

        </div>

        <!-- RIGHT SIDE BOX DEFAULT -->
        <div class="flex flex-col gap-y-4 justify-between w-full lg:basis-[36%] h-[750px] sm:flex-row lg:flex-col">

            <!-- TOP RIGHT BOX -->
            <div class="basis-[48%] h-[375px] shadow rounded-lg bg-white p-4 border">
                <h4 class="text-lg font-medium">Select landscape cover photo</h4>
                <div class="flex flex-col">
                    <div class="flex p-4">
                        <img src="../src/img/SVG_margin.png" alt="" class="inline h-12">
                        <div class="flex flex-col inline">
                            <p class="font-normal text-lg">Choose image</p>
                            <p class="text-gray-500 font-light text-md">JPG, GIF, or PNG. Max size of 800KB</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-4 pb-5">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" name="cover" class="hidden" />
                        </label>
                    </div> 

                </div>
            </div>

            <!-- BOTTOM RIGHT BOX -->
            <div class="basis-[48%] h-[375px] shadow overflow-hidden rounded-lg bg-white p-4 border">
                <h4 class="text-lg font-medium text-center">Upload History</h4>
                <!-- ITERATABLE -->
                <div class="overflow-scroll px-4">
                    <div class="my-4 flex">
                        <img src="../src/img/file.png" class="">
                        <div class="flex flex-col">
                            <h6>Blood Bank Management System</h6>
                            <p class="text-sm text-gray-400">August 23, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> <!-- FLAT PICKR -->
<script src="../src/js/upload_res.js"></script>
