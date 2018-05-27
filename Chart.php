<?php
class Chart {
    public function drawBg($x,$y){
        return imageCreateTrueColor($x,$y);   
    }
    public function drawArc($img,$color,$startRad,$endRad){
        imagefilledarc($img,150,150,280,280,$startRad,$endRad,$color,IMG_ARC_PIE);
    }
    public function drawDiagramm($img,$dataArr,$colorArr){
        $runs   = count($dataArr);
        $sum    = array_sum($dataArr);
        $startRad = 0;
        $endRad = floor(($dataArr[0]*360)/$sum);
        $this->drawArc($img,$colorArr[0],$startRad,$endRad);
            $k = 1;
            while(($runs - 1) > $k){
                $startRad = $endRad;
                $endRad = $startRad + floor(($dataArr[$k]*360)/$sum);
                $this->drawArc($img,$colorArr[$k],$startRad,$endRad);
                $k++;
            }
            $startRad = $endRad;
            $endRad = 360;
            $this->drawArc($img,$colorArr[$runs-1],$startRad,$endRad);
            $colorwhite = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
            imagefilledarc($img,150,150,120,120,0,360,$colorwhite,IMG_ARC_PIE);
        }
        
    public function imgPrint($img){
        $colorwhite = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
        imageFill($img, 0, 0, $colorwhite);
        imageantialias($img, true);
        header('Content-type: image/png');
        imagepng($img);
        imagedestroy($img);
    }


}