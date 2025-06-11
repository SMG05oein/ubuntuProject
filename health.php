<?php
include_once "./header.php";
include_once "./topMenu.php";
?>

<?php
$stretches = [
  '목 스트레칭<br><iframe width="560" height="315" src="https://www.youtube.com/embed/mUnSpfItRf0?si=wQ-6V_noirM8WSoe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
  '어깨 스트레칭<br><iframe width="560" height="315" src="https://www.youtube.com/embed/zUJguxMwfII?si=e25EZdAxsd_AlNoL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
  '팔 스트레칭<br><iframe width="560" height="315" src="https://www.youtube.com/embed/95zU3LHB5SQ?si=uomuckyin7nTHJRC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
  '허리 스트레칭<br><iframe width="560" height="315" src="https://www.youtube.com/embed/DeIMXLIYM1g?si=YHYdu0qmfOwER9eM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
];

$meals = [
  "현미밥, 된장국, 시금치나물, 고등어구이",
  "귀리밥, 미역국, 두부조림, 배추김치",
  "보리밥, 북어국, 호박볶음, 달걀찜",
  "잡곡밥, 들깨무국, 버섯볶음, 연어구이"
];

$todayStretch = $stretches[3];
$todayMeal = $meals[3];
?>


<div class="rowColSort" style="display: flex; justify-content: center; margin-top: 20px;">
    <div class="baseBox" style="margin-top:8px; padding:20px; font-size: 20px" >
        <h2 style = "text-align: center; font-size: 60px; color: #2e8b57;">오늘의 건강 정보</h2>

    <div style="margin-top: 30px;">
      <strong style="font-size: 50px;"> 오늘의 스트레칭</strong><br>
      <p style="margin-top: 5px; font-size: 35px;"><?php echo $todayStretch; ?></p>
    </div>

    <div style="margin-top: 30px;">
      <strong style="font-size: 50px;"> 오늘의 건강 식단</strong><br>
      <p style="margin-top: 5px; font-size: 35px;"><?php echo $todayMeal; ?></p>
    </div>
  </h2>
</div>

<?php
include_once "./footer.php";
?>
