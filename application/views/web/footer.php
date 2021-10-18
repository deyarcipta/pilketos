  <script type="text/javascript" src="assets/js/jquery.easypiechart.min.js"></script>
  <script>
    var img = ['<?php echo base_url(); ?>asset/img/web/paskibra.jpg', '<?php echo base_url(); ?>asset/img/web/paskibtopik.jpg', '<?php echo base_url(); ?>asset/img/web/teamit.jpg'];
    $(".cover").zeroSlide(img, 5000);

    // ANIMATE
    $("#title-about").zeroAnimate('fadein');
    $("#img-about1").zeroAnimate('slideFromLeft');
    $("#img-about2").zeroAnimate('slideFromRight');
    $("#img-about3").zeroAnimate('slideFromRight');
    $("#img-about4").zeroAnimate('slideFromLeft');
    $("#about-service .col-md-4").each(function() {
      $(this).zeroAnimate('fadein');
    })
    $(".gallery .gallery-link").each(function() {
      $(this).zeroAnimate('slideFromLeft');
    });
    $("#box-contact").zeroAnimate('slideFromLeft');
    $("#box-map").zeroAnimate('fadein');
    $("#chart-skill li").each(function() {
      $(this).zeroAnimate('slideFromRight');
    })
    $("#our-process .media-border").each(function() {
      $(this).zeroAnimate("slideFromLeft");
    });
    $(".gallery-author").zeroAnimate('slideFromRight');
    // ENABLE LOADING ANIMATE
    // $.zeroLoading("circle-simple");

    // SKILL CHART
    var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
    $('.easy-pie-chart.percentage').each(function() {
      $(this).easyPieChart({
        barColor: $(this).data('color'),
        trackColor: '#DDD',
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: 30,
        animate: oldie ? false : 1000,
        size: 264
      }).css('color', $(this).data('color'));
    });
  </script>
  </body>

  </html>