<?php

require_once "layout/header.php";
require_once "layout/menu.php";

require_once "functions.php";
require_once "model/database.php";
?>



  <main>


    <div class="container">
      <h2>choisissez votre destination</h2>
      <div class="owl-carousel owl-theme">

        <article class="item">
          <div class="item-img"><a href=""><img src="./images/photo-choix-desti.jpg" alt=""></a></div>
          <div class="item-infos">
            <a href="">
              <h3>Mexique</h3>
            </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quia reprehenderit nobis, libero
              tempore deleniti est voluptas inventore voluptatum dolore.</p>
            <a href="" class="btn">Par ici l'aventure</a>
          </div>
        </article>

        <article class="item">
          <div class="item-img"><a href=""><img src="./images/photo-choix-desti2.jpg" alt=""></a></div>
          <div class="item-infos">
            <a href="">
              <h3>Costa Rica</h3>
            </a>
            <p>Officiis et doloribus laudantium totam id corrupti laboriosam ipsum dolore exercitationem
              obcaecati quae quam, illum inventore iusto ad ab deserunt.</p>
            <a href="" class="btn">Par ici l'aventure</a>
          </div>
        </article>


        <article class="item">
          <div class="item-img"><a href=""><img src="./images/photo-choix-desti3.jpg" alt=""></a></div>
          <div class="item-infos">
            <a href="">
              <h3>Honduras</h3>
            </a>
            <p>Nesciunt sequi fugiat rem natus cumque soluta doloribus facere harum eaque illo! Consectetur
              facilis, commodi ipsum itaque unde ut repellat.</p>
            <a href="" class="btn">Par ici l'aventure</a>
          </div>
        </article>

        <article class="item">
          <div class="item-img"><a href=""><img src="./images/photo-choix-desti4.jpg" alt=""></a></div>
          <div class="item-infos">
            <a href="">
              <h3>Salvador</h3>
            </a>
            <p>Error eos adipisci hic culpa, accusamus sunt accusantium sit perferendis natus earum unde
              corrupti tenetur sed beatae. Laborum, doloremque? Itaque.</p>
            <a href="" class="btn">Par ici l'aventure</a>
          </div>
        </article>
        <article class="item">
          <div class="item-img"><a href=""><img src="./images/photo-choix-desti5.jpg" alt=""></a></div>
          <div class="item-infos">
            <a href="">
              <h3>Guatemala</h3>
            </a>
            <p>Similique saepe doloremque placeat voluptas, iusto, aspernatur amet praesentium, sed eveniet
              quae repellat beatae ipsa quis natus.</p>
            <a href="" class="btn">Par ici l'aventure</a>
          </div>
        </article>
      </div>
    </div>




    <section class="blog">

      <div class="article-blog container">

        <h2>le blog des voyageurs</h2>

        <div class="card">
          <img class="img-blog" src="images/photo_blog1.jpg" alt="recitdevoyageur">
          <div class="card-body">
            <h5 class="card-title">Pyramides de Kukulcan</h5>
            <p>récits de voyageurs</p>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-blog">lire la suite</a>
          </div>
        </div>

        <div class="card">
          <img class="img-blog" src="images/photo_blog2.jpg" alt="recitdevoyageur">
          <div class="card-body">
            <h5 class="card-title">Pyramides de Kukulcan</h5>
            <p>récits de voyageurs</p>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-blog">lire la suite</a>
          </div>
        </div>

        <div class="card">
          <img class="img-blog" src="images/photo_blog3.jpg" alt="recitdevoyageur">
          <div class="card-body">
            <h5 class="card-title">Pyramides de Kukulcan</h5>
            <p>conseils de voyageurs</p>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-blog">lire la suite</a>
          </div>
        </div>



      </div>
    </section>

    <section class="instagram">
      <div class="photos-insta container">

        <h2>#aztrek sur instagram</h2>

        <div class="insta-col">

          <img src="images/photo-insta1.jpg" alt="photo de vacances">
          <img src="images/photo-insta2.jpg" alt="photo de vacances">
          <img src="images/photo-insta3.jpg" alt="photo de vacances">
          <img src="images/photo-insta4.jpg" alt="photo de vacances">
          <img src="images/photo-insta5.jpg" alt="photo de vacances">
          <img src="images/photo-insta6.jpg" alt="photo de vacances">
          <img src="images/photo-insta7.jpg" alt="photo de vacances">
          <img src="images/photo-insta8.jpg" alt="photo de vacances">
          <img src="images/photo-insta9.jpg" alt="photo de vacances">
          <img src="images/photo-insta10.jpg" alt="photo de vacances">
          <img src="images/photo-insta11.jpg" alt="photo de vacances">
          <img src="images/photo-insta12.jpg" alt="photo de vacances">
          <img src="images/photo-insta13.jpg" alt="photo de vacances">
          <img src="images/photo-insta14.jpg" alt="photo de vacances">

        </div>

        <a href="" class="btn btn-insta">Partageons nos expériences</a>


      </div>
    </section>

    <section class="reseaux-sociaux">

      <div class="contact-rs container">

        <h2>suivez-nous</h2>

        <nav class="social-nav">

          <ul>
            <li>
              <a class="tw-btn" href="#" title="Twitter"> <img src="./images/iconfinder_twitter.png" alt="twitter"></a>
            </li>
            <li>
              <a class="in-btn" href="#" title="Instagram"> <img src="./images/iconfinder_Instagram.png" alt="instagram"></a>
            </li>
            <li>
              <a class="fb-btn " href="#" title="Facebook"><img src="./images/iconfinder_facebook.png" alt="facebook"></a>
            </li>
            <li>
              <a class="yt-btn " href="#" title="Youtube"><img src="./images/iconfinder_youtube.png" alt="youtube"></a>
            </li>
            <li>
              <a class="nl-btn" href="#" title="News-letter"><img src="./images/iconfinder_mail.png" alt="mail"></a>
            </li>
          </ul>
        </nav>

        <p>Recevez nos idées voyages et nos promotions par mail</p>

      </div>

    </section>

<?php
require_once "layout/footer.php";
?>