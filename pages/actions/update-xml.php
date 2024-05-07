<?php
$xmlOrig = simplexml_load_file('../../public/info.xml');
$aboutXml = $xmlOrig->xpath('//element[@attr="about"]');
$rankXml = $xmlOrig->xpath('//element[@attr="rank"]/rank');
$courseXml = $xmlOrig->xpath('//element[@attr="course"]');

$about = $_POST['about'];
$courses = $_POST['courses'];
$ranks = $_POST['ranks'];

$arrCourses = explode("\n", $courses);
$trimCourses = array_map('trim', $arrCourses);
$trimCourses = array_filter($trimCourses);

$arrRanks = explode("\n", $ranks);
$trimRanks = array_map('trim', $arrRanks);
$trimRanks = array_filter($trimRanks);

$aboutXml[0][0] = $about;
foreach ($xmlOrig->xpath('//element[@attr="rank"]/rank') as $child) {
    unset($child[0]);
}
foreach ($xmlOrig->xpath('//element[@attr="course"]/course') as $child) {
    unset($child[0]);
}

foreach($trimCourses as $course){
    $xmlOrig->element[1]->addChild('course', $course);
}

foreach($trimRanks as $rank){
    $xmlOrig->element[2]->addChild('rank', $rank);
}

$_SESSION['toast']['error'] = false;
$_SESSION['toast']['message'] = 'Changes have been made successfully.';


file_put_contents('../../public/info.xml', $xmlOrig->asXML());

header("Location:../admin/cms.php");