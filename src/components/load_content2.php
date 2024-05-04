<?php
include("../../db/db.php");
$key = $_GET['key'];
$idArray = $_GET['arrayId'] ?? [];
$idString = implode(",", $idArray);
$sql_count = "SELECT COUNT(*) AS total FROM studies WHERE id NOT IN ($idString) AND is_approved = 1 AND (project_title LIKE '%$key%' OR research_title LIKE '%$key%' OR tags LIKE '%$key%')";
$count_result = $conn->query($sql_count);
$count_row = $count_result->fetch_assoc();
$total_records = $count_row['total'];

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$active = '<li>
<button onclick="loadPage('.($page).')" aria-current="page" class="z-10 pointer-events-none flex items-center justify-center px-4 py-6 h-10 leading-tight text-white border border-gray-800 bg-gray-800 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">'.($page).'</button>
</li>';

if($total_records <= 6){

    $sql = "SELECT s.*, COALESCE(view_count, 0)  AS view_count 
    FROM studies s 
    LEFT JOIN (SELECT studies_id, COUNT(id) AS view_count FROM logs WHERE activity LIKE '%Viewed%' GROUP BY studies_id) AS viewed_logs 
    ON s.id = viewed_logs.studies_id  
    WHERE s.id NOT IN ($idString) AND is_approved = 1 AND (project_title LIKE '%$key%' OR research_title LIKE '%$key%' OR tags LIKE '%$key%')";
    $result = $conn->query($sql);

    echo '<div class="flex flex-wrap gap-x-8 gap-y-4 items-center justify-start h-fit">';
    while($row = $result->fetch_assoc()) {
        echo '  <a href="view_study.php?id='.$row['id'].'" class="cursor-pointer w-[28%] min-w-[290px]">
                    <div class="relative flex gap-x-2 p-4 h-[120px] bg-white rounded-lg shadow-md hover:brightness-105">
                        <img src="../public/images/cover/'.$row['cover'].'" class="w-auto object-contain min-w-[120px] h-auto basis-[40%]" alt="Cover">
                        <div class="flex flex-col justify-between">
                            <p class="text-md font-bold tracking-wider">'. $row['project_title'] .'</p>
                            <p class="text-xs text-gray-500 text-ellipsis overflow-hidden">'. $row['research_title'] .'</p>
                            <p class="text-sm text-gray-400">'. $row['view_count'] .' views</p>
                        </div>
                    </div>
                </a>';
    }
    echo '</div>';

    echo '
    <div id="pagination" aria-label="Page navigation example" class="mt-10">
        <ul class="flex items-center justify-center -space-x-px h-10 text-base">
            <li>
                <button onclick="loadPage('.($page - 1).')" disabled class="flex disabled:cursor-not-allowed disabled:hover:bg-gray-300 disabled:hover:text-gray-500 disabled:bg-gray-300 disabled:dark:hover:text-gray-400 items-center justify-center px-4 py-6 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Previous
                </button>
            </li>';
                echo $active;
    echo '
            <button onclick="loadPage('.($page + 1).')" disabled class="flex disabled:cursor-not-allowed disabled:hover:bg-gray-300 disabled:hover:text-gray-500 disabled:bg-gray-300 disabled:dark:hover:text-gray-400 items-center justify-center px-4 py-6 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
            </button>
            </li>
        </ul>
    </div>
    ';

}else{
    $perpage = 6; 
    $start = ($page - 1) * $perpage;

    $sql = "SELECT s.*, COALESCE(view_count, 0)  AS view_count 
    FROM studies s 
    LEFT JOIN (SELECT studies_id, COUNT(id) AS view_count FROM logs WHERE activity LIKE '%Viewed%' GROUP BY studies_id) AS viewed_logs 
    ON s.id = viewed_logs.studies_id  
    WHERE s.id NOT IN ($idString) AND is_approved = 1 AND (project_title LIKE '%$key%' OR research_title LIKE '%$key%' OR tags LIKE '%$key%') LIMIT $start, $perpage";
    $result = $conn->query($sql);

    $limit = $total_records / $perpage;
    if (is_float($limit)) {
        $limit++;
    }


    echo '<div class="flex flex-wrap gap-x-8 gap-y-4 items-center justify-start h-fit">';
    while($row = $result->fetch_assoc()) {
        echo '  <a href="view_study.php?id='.$row['id'].'" class="cursor-pointer w-[28%] min-w-[290px]">
                    <div class="relative flex gap-x-2 p-4 h-[120px] min-w-[290px] bg-white rounded-lg shadow-md hover:brightness-105">
                        <img src="../public/images/cover/'.$row['cover'].'" class="w-auto object-contain min-w-[120px] h-auto basis-[40%]" alt="Cover">
                        <div class="flex flex-col justify-between">
                            <p class="text-md font-bold tracking-wider">'. $row['project_title'] .'</p>
                            <p class="text-xs text-gray-500 text-ellipsis overflow-hidden">'. $row['research_title'] .'</p>
                            <p class="text-sm text-gray-400">'. $row['view_count'] .' view/s</p>
                        </div>
                    </div>
                </a>';
    }
    echo '</div>';

    $iterator = ($page - 2 <= -1 ? 1 : $page - 2 <= 0) ? 1 : $page - 2;
    $endIterator = $page + 2 <= $limit ? $page + 2 : ($page + 1 <= $limit ? $page + 1 : $page);
    $endIterator2 = $endIterator + 2 <= $limit ? $endIterator + 2 : ($endIterator + 1 <= $limit ? $endIterator + 1 : $limit+1);
    $isPrevDisabled = ($page==1) ? "disabled" : "";
    $isNextDisabled = ($page==intval($limit)) ? "disabled" : "";

    echo '
    <div id="pagination" aria-label="Page navigation example" class="mt-10">
        <ul class="flex items-center justify-center -space-x-px h-10 text-base">
            <li>
                <button onclick="loadPage('.($page - 1).')"'. $isPrevDisabled .' class="flex disabled:cursor-not-allowed disabled:hover:bg-gray-300 disabled:hover:text-gray-500 disabled:bg-gray-300 disabled:dark:hover:text-gray-400 items-center justify-center px-4 py-6 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Previous
                </button>
            </li>';
                if($iterator == 1 && $limit > 2){
                    $endIterator2++;
                }
                if($endIterator2 - 2 == $limit){
                    $iterator--;
                }else if($endIterator2 - 1 == $limit){
                    $iterator -= 1;
                }
                if($limit == $page){
                    $iterator -= 1;
                }
                $breaker = 0;
                if($page == $limit - 2){
                    $iterator++;
                    $endIterator2++;
                }
                for ($i = $iterator; $i < intval($endIterator2); $i++) {
                    if($i <=0 ){
                        continue;
                    }else if($breaker > 4 || $i >= $limit) {
                        break;
                    }
                    if($i == $page){
                        echo $active;
                    }else{
                        echo '<li>
                            <button onclick="loadPage('.($i).')" class="flex items-center justify-center px-4 py-6 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">'.($i).'</button>
                            </li>';
                    }
                    $breaker++;
                }

    echo '
            <button onclick="loadPage('.($page + 1).')"'. $isNextDisabled .' class="flex disabled:cursor-not-allowed disabled:hover:bg-gray-300 disabled:hover:text-gray-500 disabled:bg-gray-300 disabled:dark:hover:text-gray-400 items-center justify-center px-4 py-6 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
            </button>
            </li>
        </ul>
    </div>
    ';
}
?>