<?php
//* 입력된 정보 임시 저장
$temp = $_FILES['imgfile']['tmp_name'];
//* 파일의 타입 및 확장자 확인
$fileTypeExt = explode('/', $_FILES['imgFile']['type']);
//* 파일의 타입
$fileType = $fileTypeExt[0];
//* 파일의 확장자
$fileExt = $fileTypeExt[1];

if($fileExt != 'jpg' && $fileExt != 'png' && $fileExt != 'jpeg' && $fileExt != 'bmp' && $fileExt != 'gif'){
  echo "확장자가 이미지 파일의 확장자가 아닙니다 이미지 파일인지 확인해 주십시오";
}
?>