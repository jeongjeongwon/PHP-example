<?php
var_dump($_FILES);

//* 입력된 정보 임시 저장
$temp = $_FILES['imgfile']['tmp_name'];
//* 파일의 타입 및 확장자 확인
$fileTypeExt = explode('/', $_FILES['imgFile']['type']);
//* 파일의 타입
$fileType = $fileTypeExt[0];
//* 파일의 확장자
$fileExt = $fileTypeExt[1];
//* 확장자 검사
$fileExt = false;

switch($fileExt){
  case 'jpg':
  case 'jpeg':
  case 'gif':
  case 'bmp':
  case 'png':
    $extStatus = true;
    break;
  default:
    echo "이미지 전용 확장자 외의 나머지는 사용이 불가";
    break;
}

/**
 * *imageFile 저장
 * *먼저 받은 파일이 이미지가 맞는가를 확인
 * *파일형식이 이미지라면 ./img폴더 내에 이미지파일을 저장(폴더가 없을경우 자동 생성 됨)
 * *move_uploaded_file: 등록된 이미지를 저장함(형식은 저장할 파일, 저장될 장소)
 */
if($fileType == 'image'){
  if($extStatus){
    $resFile = "./img/{$_FILES['imgFile']['name']}";
    $imageUplode = move_uploaded_file($temp, $resFile);

    if($imageUplode == true){
      echo "<img src='{$resFile}'>";
    } else {
      echo "오류 발생! 이미지 업로드에 실패하였습니다";
    }
  } else {
    echo "파일의 형식은 이미지여야 합니다 이미지 전용 확장자인가 확인해 보십시오";
    exit;
  }
}
?>