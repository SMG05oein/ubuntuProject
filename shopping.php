<?php
include_once "./header.php";
include_once "./topMenu.php";
?>

<div class="rowColSort">
    <div class="baseBox">
        <div class="flexItem rowSort title">
            쇼핑
        </div>
        
        <div class="colSort">
            <div>
                <a href="#" id="coupangLink">쿠팡</a>
                <a href="https://shopping.naver.com">네이버쇼핑</a>
                <a href="https://www.11st.co.kr">11번가</a>
            </div>
            <div>
                <a href="https://www.gmarket.co.kr">G마켓</a>
                <a href="https://www.amazon.com">아마존</a>
                <a href="https://www.aliexpress.com">알리익스프레스</a>
            </div>
        </div>

        <div id="youtubeModal" class="flexItem rowSort" style="display: none;">
            <button style="height:20px" id="closeModal">X</button>
            <iframe id="youtubeVideo" class="" width="55%" height="500px"
                src=""
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
                title="쿠팡 쇼핑 영상"
            ></iframe>
        </div>
    </div>
</div>

<script>
document.getElementById('coupangLink').addEventListener('click', function(e) {
    e.preventDefault();
    var modal = document.getElementById('youtubeModal');
    var video = document.getElementById('youtubeVideo');
    video.src = "https://www.youtube.com/embed/4fw07wUU2aQ?autoplay=1";
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
