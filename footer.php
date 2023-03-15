<footer>
    <div class="container">
      <h2><?php the_field('footer_titulo', 'options') ?>?</h2>
      <span class="city"><?php the_field('footer_city', 'options') ?></span>
      <a class="email" href="<?php the_field('footer_email_link', 'options') ?>"><?php the_field('footer_email', 'options') ?></a>
      <a class="phone" href="<?php the_field('footer_phone_link', 'options') ?>"><?php the_field('footer_phone', 'options') ?></a>

      <!-- REDES SOCIAIS -->
      <?php include(TEMPLATEPATH .'/includes/socials.php') ?>

      <!-- <p class="copy">&copy; 2023 Todos os direitos reservados por <a href="https://www.linkedin.com/in/francysantos/"> Francy Santos</a></p> -->
      <p class="copy">&copy; <?php the_field('footer_copy', 'options') ?></p>
    </div>
  </footer>

  <div class="modal-overlay modal-hidden">

    <div class="modal-certificate origamid item-modal-hidden">
      <div class="item origamid">
        <div class="close-modal">
          <button><img src="<?php echo get_template_directory_uri() ?>/img/close-i.svg" alt="Close icon"></button>
        </div>

        <div class="certificate-img">
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/certificate-one.png" alt="Certificado Udemy"></a>
        </div>

        <a class="view-pdf-btn" href="#">VER PDF</a>

      </div>
    </div>

    <div class="modal-certificate ebac item-modal-hidden">
      <div class="item ebac">
        <div class="close-modal">
          <button><img src="<?php echo get_template_directory_uri() ?>/img/close-i.svg" alt="Close icon"></button>
        </div>


        <div class="certificate-img">
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/certificado ebac.svg" alt="Certificado Ebac"></a>
        </div>

        <a class="view-pdf-btn" href="#">VER PDF</a>

      </div>
    </div>

    <div class="modal-certificate udemy item-modal-hidden">
      <div class="item udemy">
        <div class="close-modal">
          <button><img src="<?php echo get_template_directory_uri() ?>/img/close-i.svg" alt="Close icon"></button>
        </div>

        <div class="certificate-img">
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/udemy-certificate.png" alt="Certificado Udemy"></a>
        </div>
        <!-- <div class="view-pdf-btn"> -->
        <a class="view-pdf-btn" href="#">VER PDF</a>
        <!-- </div> -->
      </div>
    </div>

  </div>


  <script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
  <!-- <script src="<?php echo get_template_directory_uri() ?>/js/certificates.js"></script> -->
</body>

</html>