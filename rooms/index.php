<?php $title = "Номера";?>

<? include $_SERVER['DOCUMENT_ROOT'] . "/rooms/rooms_db.php"; ?>
<? include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>

<? $title_room1 = get_room_title(1);?>
<? $title_room2 = get_room_title(2);?>
<? $title_room3 = get_room_title(3);?>
<? $title_room4 = get_room_title(4);?>

<? $text_room1 = get_room_text(1);?>
<? $text_room2 = get_room_text(2);?>
<? $text_room3 = get_room_text(3);?>
<? $text_room4 = get_room_text(4);?>

<? $img_url1 = get_img_url(1);?>
<? $img_url2 = get_img_url(2);?>
<? $img_url3 = get_img_url(3);?>
<? $img_url4 = get_img_url(4);?>


<div class="container-fluid fotos">
  <div class="row">
     <div class="col align-self-center">
        <div class="standart">
            <h2><?= $title_room1?></h2>
            <div class="text-room"><?= $text_room1?></div>
            <img src="<?= $img_url1 ?>" class="foto" alt="<?= $title_room1?>">
        </div>
     </div>
     <div class="col align-self-center">
        <div class="luxe">
            <h2><?= $title_room2?></h2>
            <div class="text-room"><?= $text_room2?></div>
            <img src="<?= $img_url2 ?>" class="foto" alt="<?= $title_room2?>">
        </div>
     </div>
  </div>
  <div class="row">
     <div class="col align-self-center">
        <div class="deluxe">
            <h2><?= $title_room3?></h2>
            <div class="text-room"><?= $text_room3?></div>
            <img src="<?= $img_url3 ?>" class="foto" alt="<?= $title_room3?>">
        </div>
     </div>
     <div class="col align-self-center">
        <div class="president">
            <h2><?= $title_room4?></h2>
            <div class="text-room"><?= $text_room4?></div>
            <img src="<?= $img_url4 ?>" class="foto" alt="<?= $title_room4?>">
        </div>
     </div>
  </div>
</div>


<? include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>
