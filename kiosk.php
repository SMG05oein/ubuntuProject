<?php
include_once "./header.php";
include_once "./topMenu.php";
?>

<div class="rowColSort">
    <div class="baseBox">
        <div class="flexItem rowSort title">
            패스트푸드
        </div>
        
        <div class="colSort">
            <div>
                <a href="#" id="lotteriaLink">롯데리아</a>
                <a href="https://www.mcdonalds.co.kr">맥도날드</a>
            </div>
            <div>
                <a href="https://www.burgerking.co.kr">버거킹</a>
                <a href="https://www.momstouch.co.kr">맘스터치</a>
            </div>
        </div>

        <div id="youtubeModal" class="flexItem rowSort" style="display: none;">
							<button style="height:20px" id="closeModal">X</button>
            	<iframe id="youtubeVideo" class="rowSort" width="55%" height="500px"
              	  src=""
                	frameborder="0"
                	allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                	allowfullscreen
                	title="롯데리아 키오스크 영상"
            	>
							</iframe>
        </div>
    </div>
</div>

<script>
document.getElementById('lotteriaLink').addEventListener('click', function(e) {
    e.preventDefault();
    var modal = document.getElementById('youtubeModal');
    var video = document.getElementById('youtubeVideo');
    video.src = "https://www.youtube.com/embed/ASc1GDy8KB4?autoplay=1";
    modal.style.display = "flex";
});

document.getElementById('closeModal').addEventListener('click', function() {
    var modal = document.getElementById('youtubeModal');
    var video = document.getElementById('youtubeVideo');
    modal.style.display = "none";
    video.src = "";
});
</script>

<?php
include_once "./footer.php";
?>
