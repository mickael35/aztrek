<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_projects = getAllProjects(3);

get_header("Accueil");
?>
    <section class="owl-carousel">

      <article class="item">
        <img src="./images/guatemala_slider.png" alt="">
      </article>
      <article class="item">
        <img src="./images/guatemala_slider.png" alt="">
      </article>



    </section>

    <section class="sejour">
      <div class="sejour-home-pres">
        <a href="#" class="sejour-home-visuel">
          <img src="images/photo_costa.png" alt="">
        </a>
        <article class="sejour-home-infos">
          <h3 class="title-sejour">Costa ricas </h3>


          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua...
          </p>

        </article>
      </div>
      <nav class="sejour-home-ctc">
        <a href="#" class="detail-sejour">Voir Plus</a>

      </nav>
    </section>
    <section class="sejour">
      <div class="sejour-home-pres">
        <a href="#" class="sejour-home-visuel">
          <img src="images/photo_guatemala.png" alt="">
        </a>
        <article class="sejour-home-infos">
          <h3 class="title-sejour">guatemala </h3>


          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua...
          </p>

        </article>
      </div>
      <nav class="sejour-home-ctc">
        <a href="#" class="detail-sejour">Voir Plus</a>

      </nav>
    </section>
    <section class="sejour">
      <div class="sejour-home-pres">
        <a href="#" class="sejour-home-visuel">
          <img src="images/photo_honduras.png" alt="">
        </a>
        <article class="sejour-home-infos">
          <h3 class="title-sejour">honduras </h3>


          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua...
          </p>

        </article>
      </div>
      <nav class="sejour-home-ctc">
        <a href="#" class="detail-sejour">Voir Plus</a>

      </nav>
    </section>
    <section class="sejour">
      <div class="sejour-home-pres">
        <a href="#" class="sejour-home-visuel">
          <img src="images/photo_mexico.png" alt="">
        </a>
        <article class="sejour-home-infos">
          <h3 class="title-sejour">mexique </h3>


          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua...
          </p>

        </article>
      </div>
      <nav class="sejour-home-ctc">
        <a href="#" class="detail-sejour">Voir Plus</a>

      </nav>
    </section>
    <section class="sejour">
      <div class="sejour-home-pres">
        <a href="#" class="sejour-home-visuel">
          <img src="images/photo_salvador.png" alt="">
        </a>
        <article class="sejour-home-infos">
          <h3 class="title-sejour">salvador </h3>


          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua...
          </p>

        </article>
      </div>
      <nav class="sejour-home-ctc">
        <a href="#" class="detail-sejour">Voir Plus</a>

      </nav>
    </section>
<?php get_footer(); ?>

  