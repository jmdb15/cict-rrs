<div class="relative overflow-x-auto p-2 lg:p-24 xl:px-48">

    <div class="rounded bg-gray-50 max-h-[620px] overflow-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <div class="flex justify-between p-5 border-b-[1px] rounded w-full">
                <h2 class="text-xl">Available Surveys</h2>
                <a href="upload_survey.php">
                    <button class="px-4 py-2 bg-orange-400 text-white hover:brightness-110 rounded-md">Upload Survey</button>
                </a>
            </div>
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Survey Name
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Respondents
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Upload by
                    </th>
                    <th scope="col" class="px-1 sm:px-6 py-3">
                        Date Upload
                    </th>
                </tr>
            </thead>
            <tbody>
        <?php   foreach($data as $row){ ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location.href = 'answer_survey.php?id=<?=$row['id']?>';">
                        <th scope="row" class="px-1 sm:px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?=$row['survey_name']?>
                        </th>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['total_respondents']?>/<?=$row['respondents']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['email']?>
                        </td>
                        <td class="px-1 sm:px-6 py-4 text-gray-600">
                            <?=$row['created_at']?>
                        </td>
                    </tr>
        <?php   } ?>
            </tbody>
        </table>
    </div>

</div>
