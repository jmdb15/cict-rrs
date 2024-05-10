<?php
use setasign\Fpdi\Fpdi;
require_once('../../vendor/autoload.php');

function sendFileWithWatermark($receiverName, $recipients, $subject, $body, $fileDirs){
  require_once('emailer.php');
  
  // Source file and watermark config 
  $text = 'Downloaded by: '. $receiverName; 
  $text_image = '../img/images.png';
  
  // CREATION OF TEXT WATERMARK 
      $name = uniqid(); 
      $font_size = 5; 
      $opacity = 100; 
      $ts = explode("\n", $text); 
      $width = 0; 
      foreach($ts as $k=>$string){ 
          $width = max($width, strlen($string)); 
      } 
      $width  = imagefontwidth($font_size)*$width; 
      $height = imagefontheight($font_size)*count($ts); 
      $el = imagefontheight($font_size); 
      $em = imagefontwidth($font_size); 
      $img = imagecreatetruecolor($width, $height); 
      
      // Background color 
      $bg = imagecolorallocate($img, 255, 255, 255); 
      imagefilledrectangle($img, 0, 0, $width, $height, $bg); 
      
      // Font color settings 
      $color = imagecolorallocate($img, 0, 0, 0); 
      foreach($ts as $k=>$string){ 
          $len = strlen($string); 
          $ypos = 0; 
          for($i=0;$i<$len;$i++){ 
              $xpos = $i * $em; 
              $ypos = $k * $el; 
              imagechar($img, $font_size, $xpos, $ypos, $string, $color); 
              $string = substr($string, 1);       
          } 
      } 
      imagecolortransparent($img, $bg); 
      $blank = imagecreatetruecolor($width, $height); 
      $tbg = imagecolorallocate($blank, 255, 255, 255); 
      imagefilledrectangle($blank, 0, 0, $width, $height, $tbg); 
      imagecolortransparent($blank, $tbg); 
      $op = !empty($opacity)?$opacity:100; 
      if ( ($op < 0) OR ($op >100) ){ 
          $op = 100; 
      } 
      // Create watermark image 
      imagecopymerge($blank, $img, 0, 0, 0, 0, $width, $height, $op); 
      imagepng($blank, $name.".png"); 
  // END OF TEXT WATERMARK CREATION
  
  // CREATION OF BULSU IMAGE WATERMARK
      $image = imagecreatefrompng($text_image);
      
      $width = imagesx($image);
      $height = imagesy($image);

      // Create a new true color image with transparency
      $transparentImage = imagecreatetruecolor($width, $height);
      imagealphablending($transparentImage, false);
      imagesavealpha($transparentImage, true);

      // Fill the image with transparent background
      $transparentColor = imagecolorallocatealpha($transparentImage, 254, 254, 254, 122);
      imagefilledrectangle($transparentImage, 0, 0, $width, $height, $transparentColor);

      // imagecopy($transparentImage, $image, 0, 0, 0, 0, $width, $height);
      imagecopymerge($transparentImage, $image, 0, 0, 0, 0, $width, $height, 30); 

      // Save the modified image to a temporary file
      $tempImagePath = tempnam(sys_get_temp_dir(), 'image') . '.png';
      imagepng($transparentImage, $tempImagePath);
  // END OF CREATION OF BULSU IMAGE WATERMARK

  // Set source PDF file 
  $pdf = new Fpdi(); 
  if(file_exists($fileDirs)){ 
      $pagecount = $pdf->setSourceFile($fileDirs); 
  }else{ 
      die('Source PDF not found!'); 
  } 
  
  // Add watermark to PDF pages 
  for($i=1;$i<=$pagecount;$i++){ 
      $tpl = $pdf->importPage($i); 
      $size = $pdf->getTemplateSize($tpl); 
      $pdf->addPage(); 
      
      //TEXT POSITION  
      $xxx_final_txt = 16; 
      $yyy_final_txt = ($size['height']); 

      // IMAGE POSITION
      $xxx_final_img = ($size['width']-172); 
      $yyy_final_img = ($size['height']-190); 

      $pdf->Image($name.'.png', $xxx_final_txt, $yyy_final_txt, 0, 0, 'png'); 
      $pdf->Image($tempImagePath, $xxx_final_img, $yyy_final_img, 130, 0, 'png');

      $pdf->useTemplate($tpl, 1, 1, $size['width'], $size['height'], TRUE); 
  } 
  @unlink($name.'.png'); 
  
  // Output PDF with watermark 
  $outputPdf = 'request.pdf';
// $pdf->Output();
  $pdf->Output($outputPdf, 'F');
  sendEmail([$recipients], $subject, $body, [$outputPdf]);

  unlink($tempImagePath);
  imagedestroy($image);
  imagedestroy($transparentImage);
}