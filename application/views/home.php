<?php
require_once("template/header.php");
require_once("template/nav.php");
require_once("template/banner.php");
?>

<div class="home">
     <div class="section-about">
          <div class="container d-flex">
               <div class="section-about--left">
                    <div class="section-about__image section-about__image--2">
                         <img src="/public/images/home-about-converse.jpeg" alt="Converse shoe">
                    </div>
                    <div class="section-about__image section-about__image--1">
                         <img src="./public/images/home-about-palladium.jpg" alt="Palladium shoe">
                    </div>
                    <div class="section-about__image section-about__image--3">
                         <img src="./public/images/home-about-vans.jpg" alt="Vans shoe">
                    </div>
               </div>
               <div class="section-about--right">
                    <h3 class="heading-h3 section-about__heading heading-h3--main">
                         HIGH VALUES
                    </h3>
                    <p class="section-about__content"><i class="fas fa-quote-left quote-icon"></i>Our success is not only due to the quality of our products; it's down to attitude, our approach and the way we treat our clients.</p>
                    <a href="about" class="section__link">Read more <span>&#8594;</span></a>
               </div>
          </div>
     </div>

     <div class="brand">
          <div class="container">
               <div class="brand__list d-flex">
                    <div class="brand--column brand--column-circle"><a href="palladium"><img src="./public/images/palladium-logo.jpg" alt="Palladium logo"></a></div>
                    <div class="brand--column brand--column-rec-1"><a href="converse"><img src="./public/images/converse-logo.png" alt="Converse logo"></a></div>
                    <div class="brand--column brand--column-rec-2"><a href="vans"><img src="./public/images/vans-logo.png" alt="Vans logo"></a></div>
               </div>
          </div>
     </div>

     <div class="featured-products">
          <div class="container">
               <h3 class="heading-h3">
                    <p class="heading-h3--sub">FEATURED SHOP ITEMS</p>
                    <p class="heading-h3--main">FEATURED PRODUCTS</p>
               </h3>

               <div class="product">
                    <div class="row d-flex">
                         <?php
                         foreach ($data["info"] as $row) : ?>
                              <div href="#" class="product__item">
                                   <?php if ($row["IsNew"] == 1) : ?>
                                        <span class="product__new">NEW</span>
                                   <?php endif; ?>
                                   <?php if ($row["PercentSaleOff"]) : ?>
                                        <span class="product__sale"><?php echo $row["PercentSaleOff"] ?>%</span>
                                   <?php endif; ?>
                                   <a class="product__image">
                                        <img src="/public/uploads/<?= $row["ProductImage"]; ?>" alt="item-img">
                                   </a>
                                   <div class="product__summary">
                                        <div class="product__info">
                                             <p class="product__name"><?= $row["ProductName"] ?></p>
                                             <p class="product__price">&dollar; <?= $row["Price"] ?></p>
                                        </div>
                                        <div class="product__action d-flex">
                                             <span class="product__add">ADD TO CART</span>
                                             <div class="product__action--right">
                                                  <a href="detail/show/<?= $row["ProductID"] ?>" class="product__view"><i class="far fa-eye product__icon"></i></a>
                                                  <span class="product__love "><i class="far fa-heart product__icon"></i></span>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         <?php endforeach; ?>
                    </div>
               </div>
          </div>
     </div>

     <div class="event">
          <div class="container d-flex">
               <div class="event__info">
                    <p class="event__title">HOT DEAL THIS YEAR</p>
                    <p class="event__content">GET AN EXTRA <span class="text-bold">30% OFF</span> YOUR FIRST ORDER</p>
                    <div class="event__time text-bold">
                         <div class="event__time--column">
                              <p class="event__time--num event__time--day">423</p>
                              <p class="event__time--text">DAY(S)</p>
                         </div>

                         <div class="event__time--column">
                              <p class="event__time--num event__time--hour">23</p>
                              <p class="event__time--text">HOUR(S)</p>
                         </div>

                         <div class="event__time--column">
                              <p class="event__time--num event__time--min">23</p>
                              <p class="event__time--text">MIN</p>
                         </div>

                         <div class="event__time--column">
                              <p class="event__time--num event__time--sec">23</p>
                              <p class="event__time--text">SEC</p>
                         </div>
                    </div>
               </div>
               <div class="event__image"></div>
          </div>
     </div>

     <div class="service">
          <div class="container">
               <div class="service__item">
                    <div class="service__icon">
                         <i class="fa fa-shipping-fast"></i>
                    </div>

                    <div class="service__info">
                         <p class="service__heading">
                              FREE SHIPPING
                         </p>
                         <p class="service__content">
                              Free shipping on all Vietnam order
                         </p>
                    </div>
               </div>

               <div class="service__item">
                    <div class="service__icon">
                         <i class="fas fa-phone-volume"></i>
                    </div>

                    <div class="service__info">
                         <p class="service__heading">
                              ONLINE SUPPORT 24/7
                         </p>
                         <p class="service__content">
                              Support online 24 hours a day
                         </p>
                    </div>
               </div>

               <div class="service__item">
                    <div class="service__icon">
                         <i class="far fa-money-bill-alt"></i>
                    </div>

                    <div class="service__info">
                         <p class="service__heading">
                              MONEY RETURN
                         </p>
                         <p class="service__content">
                              Back guarantee under 7 days
                         </p>
                    </div>
               </div>

               <div class="service__item">
                    <div class="service__icon">
                         <i class="far fa-id-card"></i>
                    </div>

                    <div class="service__info">
                         <p class="service__heading">
                              MEMBER DISCOUNT
                         </p>
                         <p class="service__content">
                              On every order over $120.00
                         </p>
                    </div>
               </div>
          </div>
     </div>
</div>

<script src="./public/js/countDown.js"></script>
<?php
require_once("template/footer.php");
