
<div class="w-full h-fit md:h-[calc(100vh-80px)] m-0 p-0 md:overflow-x-hidden bg-gray-200 z-[-2]">

    <main class="container mx-auto w-full lg:w-[70%] lg:ml-auto lg:mx-0 p-1 sm:p-4 h-full flex flex-col lg:justify-start z-10 lg:mb-0">

        <div class="flex flex-col relative rounded-lg mx-auto mb-5 bg-white lg:hidden px-8 py-6 gap-y-4 max-w-sm w-[98%] min-w-72 min-h-[446px] z-10">
            <div class="w-full">
                <h3>Survey Title</h3>
                <input type="text" value="<?=$row['survey_name']?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="w-full">
                <h3>Survey Creator</h3>
                <input type="text" value="<?=$row['id']?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="w-full">
                <h3>Date Published</h3>
                <input type="text" value="<?=$row['created_at']?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>  

            <p class="absolute bottom-4 text-sm self-center flex items-center mt-4">
                <img src="../src/img/Rating.png" height="24px" width="24px" alt="">  
                My points: <?=$_SESSION['points']?>
            </p>
        </div>

        <div class="bg-white rounded-lg p-2 sm:p-6 mx-auto max-w-[946px] h-fit z-10">
            <form action="actions/try_save_answer.php?id=<?=$id?>&file=<?=$row['filename']?>" method="POST">
                <div class="w-full mb-5">
                    <label for="survey-name">Survey Name</label>
                    <input type="text" id="survey-name" name="survey-name" value="<?=$row['survey_name']?>" class="input-text" disabled>
                </div>
                <div class="w-1/2 min-w-80">
                    <label for="url">URL <span class="text-gray-400">(if applicable)</span></label>
                    <input type="text" id="url" value="<?=$row['url']?>" class="input-text" disabled>
                </div>
                <div class="w-full mb-5">
                    <h3 class="text-xl">Survey Description</h3>
                    <p class="txtarea"><?=$row['description']?></p>
                </div>

                <div class="my-2 sm:my-8">
                    <h2 class="text-base md:text-xl font-bold text-center px-4 md:px-16">DATA PRIVACY ACT OF 2012 (DPA OF 2012) AND ITS IMPLEMENTING RULES AND REGULATIONS (RA 10173)</h2>
                    <p class="text-sm md:text-base my-3">In accordance with the Data Privacy Act of 2012 and its implementing rules and regulations, answering this form and disclosing your personal or sensitive information will give consent to the researcher to access, collect, and process the gathered data. These will solely be used for academic purposes only.</p>
                    <p class="text-sm md:text-base my-3">By completing this form, I hereby signify my consent and authorize the researchers to collect and process the data indicated, herein for participating in the aforementioned purpose of this survey.</p>
                    <div class="w-full my-2 flex items-center">
                        <input type="checkbox" name="agree" id="agree" class="mr-1" required>
                        <label for="agree" class="text-xs md:text-base">Yes, I understand and give my consent to the researcher</label>
                    </div>
                </div>

                <div class="w-full border-t">
                    <h3 class="text-base md:text-xl">Questions</h3>
                        <div id="form-container" class="w-full mx-auto flex flex-col items-center gap-y-2"></div>
                        <button class="px-3 py-2 rounded text-white bg-orange-400">Submit</button>
                </div>
            </form>
        </div>

        <div class="absolute left-0 top-[80px] sm:top-[80px] w-3/5 md:w-[30%] md:min-w-80 h-full md:h-[calc(100vh-80px)] bg-orange-400 z-[1] grid place-items-center">

            <div class="hidden relative rounded-lg bg-white lg:flex lg:flex-col px-8 py-6 gap-y-4 max-w-sm w-[98%] min-w-72 min-h-[446px]">
                <div class="w-full">
                    <h3>Survey Title</h3>
                    <input type="text" value="<?=$row['survey_name']?>"  placeholder="Sample Survey Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="w-full">
                    <h3>Survey Creator</h3>
                    <input type="text" value="<?=$row['id']?>"  placeholder="User Full Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="w-full">
                    <h3>Date Published</h3>
                    <input type="text" value="<?=$row['created_at']?>"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>  

                <p class="absolute bottom-4 text-sm self-center flex items-center mt-4">
                    <img src="../src/img/Rating.png" height="24px" width="24px" alt="">  
                    My points: <?=$_SESSION['points']?>
                </p>
            </div>

        </div>
    </main>

</div>

<?php 
    $js =  file_get_contents('../src/js/surveys/'.$row['filename']);
    echo '<script>let formObject = '.json_decode($js).';</script>';
?>
<script>
    // let formObject = {};
    // $.ajax({
    //     url:'../src/ajax/answer_survey.php',
    //     type:'POST',
    //     success: function(response){
    //         formObject = JSON.parse(response)
    //         console.log(formObject);
    //         showObject(formObject);
    //     }
    // });
    showObject(formObject);
    function showObject(object){
        for (const key in object[0].questionnaire) {
            if (Object.hasOwnProperty.call(object[0].questionnaire, key)) {
                const type = object[0].questionnaire[key].type;
                let newDiv = document.createElement('div');
                newDiv.classList = 'w-full mb-5 border shadow rounded p-2';
                if(type !== 'grid' && type !== 'textarea' && type !== 'text'){
                    let options = object[0].questionnaire[key].options.map((option, index) => {
                        if(type == 'checkbox'){
                            name = `name="question-${key}[]"`;
                        }else{
                            name = `name="question-${key}"`;
                        }
                        return (`<div><input required type="${type}" ${name} value="${object[0].questionnaire[key].options[index]}" id="${option.toLowerCase()}-${key}"><label for="${option.toLowerCase()}-${key}">${option}</label></div>`);
                    });
                    const showOpts = options.map(option => option).join('');    
                    newDiv.innerHTML = (
                       `<h3 class="text-xl">${object[0].questionnaire[key]?.question ?? 'WHAT IS THIS?'}</h3><div class="flex flex-col">${showOpts}</div>`);
                }else if(type == 'grid'){
                    let columns = object[0].questionnaire[key].options.col.map(column => {
                        return (
                            `<div class="flex-1 text-center">${column}</div>`
                            );
                    });
                    const colLen = object[0].questionnaire[key].options.col.length;
                    let rows = object[0].questionnaire[key].options.row.map(row => {
                        let stri = `
                        <div class="w-full h-fit flex justify-between p-1 bg-gray-200 opacity-80 my-1">
                            <div class="flex-1 text-center">${row}</div>
                        `;
                        for (let index = 0; index < colLen; index++) {
                            stri += (`
                            <div class="flex-1 text-center"> <input required type="radio" name="question-${key}-${row.toLowerCase()}" value="${object[0].questionnaire[key].options.col[index]}"> </div>
                            `);
                        }
                        stri += '</div>';
                        return stri;
                    });
                    const showCols = columns.map(col => col).join('');
                    const showRows = rows.map(row => row).join('');
                    newDiv.innerHTML = `
                        <div class="w-full h-fit flex justify-between">
                            <div class="flex-1"></div>
                            ${showCols}
                        </div>
                        ${showRows}
                    `;
                }else{
                    if(type == 'text'){
                        newDiv.innerHTML = `
                            <h3 class="text-xl">${object[0].questionnaire[key]?.question ?? 'WHAT IS THIS?'}</h3>
                            <input required type="text" class="input-text" name="question-${key}">
                        `;
                    }else if(type == 'textarea'){
                        newDiv.innerHTML = `
                            <h3 class="text-xl">${object[0].questionnaire[key]?.question ?? 'WHAT IS THIS?'}</h3>
                            <textarea required rows="4" name="question-${key}" class="txtarea"></textarea>
                        `;
                    }
                }
                document.querySelector('#form-container').append(newDiv);
            }
        }
    }
</script>
