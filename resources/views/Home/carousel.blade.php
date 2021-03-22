
<script>
    addEventListener("load",() => { // "load" is safe but "DOMContentLoaded" starts earlier
        var index = 0;
        const slides = document.querySelectorAll(".lib-slides");
        const classHide = "lib-hidden", count = slides.length;
        nextSlide();
        function nextSlide() {
            slides[(index ++) % count].classList.add(classHide);
            slides[index % count].classList.remove(classHide);
            setTimeout(nextSlide, 9000);
        }
    });
</script>

<div class="flex justify-center m-2 md:m-5 md:pl-12">

    <img class="lib-slides  lib-hidden" src="storage/carousel/01">
    <img class="lib-slides  lib-hidden" src="storage/carousel/02">
    <img class="lib-slides  lib-hidden" src="storage/carousel/03">
    <img class="lib-slides  lib-hidden" src="storage/carousel/04">
    <img class="lib-slides  lib-hidden" src="storage/carousel/05">
</div>