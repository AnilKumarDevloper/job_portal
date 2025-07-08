
    <!--  Footer. -->
  <footer class="text-center mt-5" style="background-color: #ffffff">
       
        <div class="container pt-3 pb-3">

            <section class="mb-2">  
                <a class="btn btnoutlinelight  m-1" href="#!" role="button">
                    <i class="ri-facebook-line"></i>
                </a>

                <a class="btn btnoutlinelight m-1" href="#!" role="button">
                    <i class="ri-twitter-line"></i>
                </a>

                <a class="btn btnoutlinelight  m-1" href="#!" role="button">
                   <i class="ri-google-line"></i>
                </a>
            
                <a class="btn btnoutlinelight m-1" href="#!" role="button">
                    <i class="ri-instagram-line"></i>
                </a>
            
                <a class="btn btnoutlinelight m-1" href="#!" role="button">
                   <i class="ri-linkedin-line"></i>
                </a>
                
                <a class="btn btnoutlinelight m-1" href="#!" role="button">
                    <i class="ri-github-line"></i>
                </a>
                
            </section>
          
        </div> 
       
        <div class="text-center p-3" style="background-color: #f4f7fa;">
            © 2025 Copyright:
            <a class="text-muted text-decoration-none" href="https://mdbootstrap.com/">boltheight.com</a>
        </div>
        
  </footer>
 
 
</main>

 <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <!-- Slick JS -->
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script src="script/script.js"> </script>
 <script type="text/javascript">
$(document).ready(function () {
    $('.profiels').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,  
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.view_all_job').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});

</script>

<script>
  $(document).ready(function () {
    $('#search_job').on('input', function () {
      let value = $(this).val(); 
      $(this).val(value.replace(/[^a-zA-Z0-9 ]/g, ''));
    });
  });
</script>

</body>
</html>