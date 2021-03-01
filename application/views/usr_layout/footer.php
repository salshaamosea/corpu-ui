<!-- Footer Section Start -->
<footer>

  <!-- Copyright -->
  <div class="footer-end container-fluid text-center p-3" style="background-color: #B22341; font-size: 12px; color: white;">
    © 2021 Learning Data Analytics. All Rights Reserved
  </div>


  <!-- Copyright -->
</footer>
<!-- Footer Section End -->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
  <i class="lni-arrow-up"></i>
</a>

<!-- Preloader -->
<div id="preloader">
  <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url() ?>public/assets/js/jquery-min.js"></script>
<script src="<?= base_url() ?>public/assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/wow.js"></script>
<script src="<?= base_url() ?>public/assets/js/jquery.nav.js"></script>
<script src="<?= base_url() ?>public/assets/js/scrolling-nav.js"></script>
<script src="<?= base_url() ?>public/assets/js/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/main.js"></script>
<script src="<?= base_url() ?>public/assets/js/form-validator.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/contact-form-script.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" defer></script>
<script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js" defer></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
</script>
<!-- Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqcloud/1.0.4/jqcloud.min.js"></script>

<script type="text/javascript">
  // function myLoad(){
  //     document.getElementById("loader").style.display = "block";
  // }
  $(window).on('unload', function() {
    document.getElementById("loader").style.display = "block";
  });
  $(window).on('load', function() {
    document.getElementById("loader").style.display = "none";
  });


  $(document).ready(function() {
    $("#sidebarCollapse").on("click", function() {
      $("#sidebar").toggleClass("active");
      $(this).toggleClass("active");
    });
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $("#selector1").change(function() {
      $("#selector1").find("option:selected").each(function() {
        var optionValue = $(this).attr("value");
        if (optionValue) {
          $(".box1").not("." + optionValue).hide();
          $("." + optionValue).show();
        } else {
          $(".box1").hide();
        }
      });
    }).change();
  });

  $(document).ready(function() {
    $("#selector2").change(function() {
      $("#selector2").find("option:selected").each(function() {
        var optionValue = $(this).attr("value");
        if (optionValue) {
          $(".box2").not("." + optionValue).hide();
          $("." + optionValue).show();
        } else {
          $(".box2").hide();
        }
      });
    }).change();
  });
</script>

</body>

</html>