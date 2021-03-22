<div class="container mx-auto sm:px-2 md:px-4">
    <div class="row">
        @include('Home.carousel')



        <div class="md:grid md:grid-rows-2 md:grid-flow-col md:gap-4">
            <div class="md:row-span-3 hidden md:block m-4 mt-10">

                <h6 class="text-white mb-4 page-section-title text-uppercase">&nbsp;</h6>
                <a href="{{ $settings->patreon_tag }}">
                    <img src="/storage/support/patreon.jpg" class="rounded img-fluid mb-3">
                </a>

                <iframe src="https://discordapp.com/widget?id={{ $settings->site_url }}&amp;theme=dark" width="100%"
                    height="500" allowtransparency="true" frameborder="0"></iframe>

            </div>
            <div class="md:col-span-2">@include('Home.newrelease')</div>
            <div class="md:row-span-2 md:col-span-2 ">
                @include('Home.recommended')</div>
        </div>







        <div class="w-100">
            <div class="md:hidden sm:w-3/5 ">

                <h6 class="text-white mb-4 page-section-title text-uppercase">&nbsp;</h6>
                <a href="{{ $settings->patreon_tag }}">
                    <img src="/storage/support/patreon.jpg" class="rounded img-fluid mb-3">
                </a>

                <iframe src="https://discordapp.com/widget?id={{ $settings->site_url }}&amp;theme=dark" width="100%"
                    height="500" allowtransparency="true" frameborder="0"></iframe>

            </div>


            <!-- scripts for adsense -->
        </div>
    </div>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

</script>
