<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$js =  file_get_contents('../src/js/surveys/1710402196.js');
echo "<script>const json = ".json_decode($js)."</script>" ;
?>
<script>
    // const json = [{"questionnaire":{"1":{"type":"textarea","options":null,"question":"Question 1 for one"},"2":{"type":"checkbox","options":["Option 1","Option 2","Option 3"],"question":"Question 2 for one"},"3":{"type":"grid","options":{"row":["Row 1","Row 2","Row 3"],"col":["Column 1","Column 2","Column 3","Column 4","Column 5"]},"question":"Question 3 for one"}}},{"answers":[{"1":"ndgxdsfgbx","2":["0","1"],"3":["Column 2","Column 1","Column 3"]}, {"1":"always","2":["2"],"3":["Column 5","Column 4","Column 2"]}]}];
    let csvContent = '';
    // Extracting headers from questionnaire
    const questionnaireHeaders = [];
    const questionnaire = json[0].questionnaire;
    Object.keys(questionnaire).forEach(key => {
        if(questionnaire[key].type == 'grid'){
            questionnaire[key].options.row.map(r => questionnaireHeaders.push(`${questionnaire[key].question}--${r}`));
        }else{
            questionnaireHeaders.push(questionnaire[key].question);
        }
    });

    csvContent = questionnaireHeaders.join(',') + '\n';

    // Extracting data from answers
    const dataRows = [];
    json[1].answers.forEach(item => {
        let hi = [];
        for (const key in item) {
            if (Object.hasOwnProperty.call(item, key)) {
                if(typeof item[key] == 'string'){
                    console.log(key, item[key].replace(/\r\n/g, ' '));
                    hi.push(item[key].replace(/\r\n/g, '. '));
                }else{
                    if(questionnaire[key].type == 'grid'){
                        hi.push(item[key].map(i => i))
                    }else{
                        hi.push(item[key].map(i => i).join(' & '));
                    }
                }
            }
        }
        dataRows.push(hi);
        console.log(hi);
        // csvContent += '\n' + hi.map(row => (typeof row == 'string') ? row : row.map(r => r));
        // csvContent += '\n';
    });
    console.log(questionnaireHeaders);
    console.log(dataRows);

    // Convert to CSV format
    // const csvContent2 = questionnaireHeaders.join(',') + '\n' + dataRows.map(row => row).join('\n');
    const csvContent2 = questionnaireHeaders.join(',') + '\n' + dataRows.join('\n');
    console.log(csvContent2);

    // Download CSV
    const blob = new Blob([csvContent2], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'exported_data.csv';
    a.innerText="click me"
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    window.URL.revokeObjectURL(url);

</script>
</body>
</html>