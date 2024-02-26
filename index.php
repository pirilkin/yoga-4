<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yoga</title>

  <link rel="stylesheet" href="./libs/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="./libs/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="./libs/css/bootstrap-grid.min.css">

  <link href="libs/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.min.css">

  <link type="image/x-icon" href="./img/icon-3.ico" rel="shortcut icon">
  <link type="Image/x-icon" href="./img/icon-3.ico" rel="icon">

</head>

<body>
  <div class="wrapper">

    <div class="mask">
      <div class="cssload-fond">
        <div class="cssload-container-general">
          <div class="cssload-internal">
            <div class="cssload-ballcolor cssload-ball_1"> </div>
          </div>
          <div class="cssload-internal">
            <div class="cssload-ballcolor cssload-ball_2"> </div>
          </div>
          <div class="cssload-internal">
            <div class="cssload-ballcolor cssload-ball_3"> </div>
          </div>
          <div class="cssload-internal">
            <div class="cssload-ballcolor cssload-ball_4"> </div>
          </div>
        </div>
      </div>
    </div>
    <header class="header ">
      <div class="container-xxl container">
        <div class="row">
          <nav class="header-nav burger-menu">
            <ul class="header-list offset-xl-7 col-xl-5">
              <li class="header-list__item">
                <a href="#about_me" class="header-list__link">
                  About me
                </a>
              </li>
              <li class="header-list__item">
                <a href="#contact_us" class="header-list__link">
                  Contact
                </a>
              </li>
              <li class="header-list__item">
                <!-- <a href="index-ru.html" class="header-list__lang">RU</a> -->
                <button class="header-list__lang" onclick="window.location.href = './index-ru.php'">RU</button>
              </li>
            </ul>
            <a href="" class="burger-menu_button">
              <span class="burger-menu_lines"></span>
            </a>
          </nav>
          <main class="header-main row">
            <img src="./img/header-flower-left.png" alt="" class="flower header-flower__right">
            <img src="./img/header-flower-right.png" alt="" class="flower header-flower__left">
            <img src="./img/question-flower-right.png" alt="" class="flower header-flower__right-btm">
            <div class="col-xl-6 header-main__content">
              <ul class="header-main__title">
                <li class="header-main__move">
                  <span class="header-main__word">MOVE</span>
                </li>
                <li class="">
                  <span class="header-main__word header-main__with">WITH</span>
                </li>
                <li class="header-main__karina">
                  <span class="header-main__word">KARINA</span>
                </li>
              </ul>
              <p class="header-main__subtitle">Transform your body and mind through yoga, fitness and mindfulness</p>
              <div class="header-main__btn">
                <a href="#contact_us" class="header-main__link">Sign up for a free session</a>
              </div>
            </div>
            <div class="header-main__img col-xl-6">
              <div class="header-main__img-item">
              </div>
            </div>
          </main>
        </div>
      </div>
    </header>
    <section class="gallery" id="gallery">
      <div class="container-xxl container">
        <div class="row gallery-row">
          <div class=" gallery-title__block">
            <h2 class="col-xl-7 col-lg-8 col-12 gallery-title">Choose and Explore the world of yoga with me</h2>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
            <div class="gallery-title__container">
              <h4 class="gallery-title__item">Hatha-yoga</h4>
            </div>
            <img src="./img/gallery-1.png" alt="" class="gallery-title__img">
            <a href="#popup" class="gallery-title__link link-1">
              <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt=""></a>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
            <div class="gallery-title__container">
              <h4 class="gallery-title__item">Vinyasa flow</h4>
            </div>
            <img src="./img/gallery-2.png" alt="" class="gallery-title__img">
            <a href="#popup-2" class="gallery-title__link link-2">
              <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt=""></a>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
            <div class="gallery-title__container">
              <h4 class="gallery-title__item">Breathing practice</h4>
            </div>
            <img src="./img/gallery-3.png" alt="" class="gallery-title__img">
            <a href="#popup-3" class="gallery-title__link link-3">
              <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt=""></a>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
            <div class="gallery-title__container">
              <h4 class="gallery-title__item">Stretching</h4>
            </div>
            <img src="./img/gallery-4.png" alt="" class="gallery-title__img">
            <a href="#popup-4" class="gallery-title__link link-4">
              <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt="">
            </a>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
            <div class="gallery-title__container">
              <h4 class="gallery-title__item">Fitness training</h4>
            </div>
            <img src="./img/gallery-5.png" alt="" class="gallery-title__img">
            <a href="#popup-5" class="gallery-title__link link-5">
              <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt=""></a>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
            <div class="gallery-title__container">
              <h4 class="gallery-title__item">Group classes</h4>
            </div>
            <img src="./img/gallery-6.png" alt="" class="gallery-title__img">
            <a href="#popup-6" class="gallery-title__link link-6">
              <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt=""></a>
          </div>
          <div id="popup" class="popup popup-1">
            <div class="container popup-container">
              <div class="row popup__content">
                <button class="close">
                  <div class="">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                  </div>
                </button>
                <div class="col-xl-6 col-md-6 popup-img  popup-img__1">
                  <img class="popup-img__item" src="./img/popup-1.png" alt="">
                </div>
                <div class="col-xl-6 col-md-6 popup-content">
                  <div class="popup-item">
                    <p class="popup-text">
                      Hatha yoga is ideal for beginners as well as advanced practitioners. It is a simple and effective
                      style
                      that includes exercises to fully develop the body- back, legs, abs, as well as improve
                      flexibility.
                      Asanas in hatha yoga affect the muscles of the body and stimulate the production of hormones,
                      massage
                      the
                      internal organs of the human abdominal cavity.
                      Hatha yoga will bring relaxation and peace, a boost of energy and a surge of strength.
                    </p>

                  </div>
                </div>
                <div class="header-main__btn popup-btn">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__form">Sign up for a free
                    session</a>
                </div>
              </div>
            </div>
          </div>
          <div id="popup-2" class="popup popup-2">
            <div class="container popup-container">
              <div class="row">
                <button class="close">
                  <div class="">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                  </div>
                </button>
                <div class="col-xl-6 col-md-6 popup-img  popup-img__2">
                  <img class="popup-img__item" src="./img/popup-2.png" alt="">
                </div>
                <div class="col-xl-6 col-md-6 popup-content">
                  <div class="popup-item">
                    <p class="popup-text">
                      Vinyasa is a style of yoga characterized by stringing postures together so that you move from one
                      to
                      another, seamlessly, using breath.
                      Vinyasa classes offer a variety of postures and no two classes are ever alike. The variable nature
                      of
                      Vinyasa Yoga helps to develop a more balanced body as well as prevent repetitive motion injuries
                      thet
                      csn
                      happen if you are alwsys doing the same thing ezery day.
                      As a philosophy , Vimyasa recognizes the temporary nature of things. We enteer into a posture, are
                      there
                      for a while and then leave.
                    </p>

                  </div>
                </div>
                <div class="header-main__btn  popup-btn">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__form">Sign up for a free
                    session</a>
                </div>
              </div>
            </div>
          </div>
          <div id="popup-3" class="popup popup-3">
            <div class="container popup-container">
              <div class="row">
                <button class="close">
                  <div class="">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                  </div>
                </button>
                <div class="col-xl-6 col-md-6 popup-img popup-img__3">
                  <img class="popup-img__item" src="./img/popup-3.png" alt="">
                </div>
                <div class="col-xl-6 col-md-6 popup-content">
                  <div class="popup-item">
                    <p class="popup-text">
                      Breathing exercises help to calm our mind, reduce stress levels, activate the functioning of
                      internal
                      organs and systems, increasing metabolism.
                      When we meditate, practice asanas, or chant mantras - a restless mind creates a barrier between us
                      and
                      what we are trying to concentrate on. Mastery of breathing techniques will solve this problem -
                      deepen
                      the
                      practice, make it effective and expand our perception.
                    </p>

                  </div>
                </div>
                <div class="header-main__btn  popup-btn">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__form">Sign up for a free
                    session</a>
                </div>
              </div>
            </div>
          </div>
          <div id="popup-4" class="popup popup-4">
            <div class="container popup-container">
              <div class="row">
                <button class="close">
                  <div class="">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                  </div>
                </button>
                <div class="col-xl-6 col-md-6 popup-img  popup-img__4">
                  <img class="popup-img__item" src="./img/popup-4.png" alt="">
                </div>
                <div class="col-xl-6 col-md-6 popup-content">
                  <div class="popup-item">
                    <p class="popup-text">
                      Stretching is a set of exercises aimed at increasing the flexibility of muscles and ligaments. No
                      workout
                      is complete without stretching.
                      By warming up the muscles, stretching reduces the risk of injury during intense exercise, reduces
                      the
                      likelihood of cramps, corrects posture, helps speed up recovery processes after training, reduces
                      the
                      risk
                      of salt deposits, accelerates blood circulation, which helps to avoid lymph stagnation and reduces
                      swelling in the limbs.
                    </p>
                  </div>
                </div>
                <div class="header-main__btn  popup-btn">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__form">Sign up for a free
                    session</a>
                </div>
              </div>
            </div>
          </div>
          <div id="popup-5" class="popup popup-5">
            <div class="container popup-container">
              <div class="row">
                <button class="close">
                  <div class="">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                  </div>
                </button>
                <div class="col-xl-6 col-md-6 popup-img  popup-img__5">
                  <img class="popup-img__item" src="./img/popup-5.png" alt="">
                </div>
                <div class="col-xl-6 col-md-6 popup-content">
                  <div class="popup-item">
                    <p class="popup-text">
                      Fitness training is a combination of regular physical exercises and healthy diet. Besides giving
                      you
                      the
                      body you want, fitness training also prolongs your life and provides you with some mental
                      benefits.
                      Among
                      benefits of the fitness training is fat loss, developing muscle strength, increasing bones
                      density,
                      reduced risk of diseases, and improved ability to do everyday activities.
                    </p>

                  </div>
                </div>
                <div class="header-main__btn  popup-btn">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__form">Sign up for a free
                    session</a>
                </div>
              </div>
            </div>
          </div>
          <div id="popup-6" class="popup popup-6">
            <div class="container popup-container">
              <div class="row">
                <button class="close">
                  <div class="">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                  </div>
                </button>
                <div class="col-xl-6 col-md-6 popup-img popup-img__6">
                  <img class="popup-img__item" src="./img/popup-6.png" alt="">
                </div>
                <div class="col-xl-6 col-md-6 popup-content">
                  <div class="popup-item">
                    <p class="popup-text">
                      Looking for some fun with benefits?
                      Join my group classes alone or with your friends, both for yoga and fitness training.
                    </p>

                  </div>
                </div>
                <div class="header-main__btn  popup-btn">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__form">Sign up for a free
                    session</a>
                </div>
              </div>
            </div>
          </div>


          <div class="image-slider swiper-container">
            <div class="image-slider__wrapper swiper-wrapper">
              <div class="image-slider__slide swiper-slide">
                <div class="col-12 slider-title">
                  <h4 class="slider-title__item">Hatha-yoga</h4>
                </div>
                <div class="image-slider__container">
                  <div class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                    <img class="popup-img__item image-slider__img" src="./img/slider-1.png" alt="">
                  </div>
                  <div class="popup-content image-slider__items">
                    <div class="popup-item image-slider__item">
                      <p class="popup-text">
                        Hatha yoga is ideal for beginners as well as advanced practitioners. It is a simple and
                        effective
                        style that includes exercises to fully develop the body- back, legs, abs, as well as improve
                        flexibility. <br>
                        Asanas in hatha yoga affect the muscles of the body and stimulate the production of hormones,
                        massage the internal organs of the human abdominal cavity. <br>
                        Hatha yoga will bring relaxation and peace, a boost of energy and a surge of strength.
                      </p>

                    </div>
                  </div>
                  <div class="popup-btn popup-btn__slider">
                    <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="image-slider__slide swiper-slide">
                <div class="col-12 slider-title">
                  <h4 class="slider-title__item">Vinyasa flow</h4>
                </div>
                <div class="image-slider__container">
                  <div class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                    <img class="popup-img__item image-slider__img" src="./img/slider-2.png" alt="">
                  </div>
                  <div class="popup-content image-slider__items">
                    <div class="popup-item image-slider__item">
                      <p class="popup-text">
                        Vinyasa is a style of yoga characterized by stringing postures together so that you move from
                        one
                        to another, seamlessly, using breath. <br>
                        Vinyasa classes offer a variety of postures and no two classes are ever alike. The variable
                        nature
                        of Vinyasa Yoga helps to develop a more balanced body as well as prevent repetitive motion
                        injuries thet csn happen if you are alwsys doing the same thing ezery day. <br>
                        As a philosophy , Vimyasa recognizes the temporary nature of things. We enteer into a posture,
                        are
                        there for a while and then leave.
                      </p>

                    </div>
                  </div>
                  <div class="popup-btn popup-btn__slider">
                    <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="image-slider__slide swiper-slide">
                <div class="col-12 slider-title">
                  <h4 class="slider-title__item">Breathing practice</h4>
                </div>
                <div class="image-slider__container">
                  <div class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                    <img class="popup-img__item image-slider__img" src="./img/slider-3.png" alt="">
                  </div>
                  <div class="popup-content image-slider__items">
                    <div class="popup-item image-slider__item">
                      <p class="popup-text">
                        Breathing exercises help to calm our mind, reduce stress levels, activate the functioning of
                        internal organs and systems, increasing metabolism. <br>
                        When we meditate, practice asanas, or chant mantras - a restless mind creates a barrier between
                        us
                        and what we are trying to concentrate on. Mastery of breathing techniques will solve this
                        problem
                        - deepen the practice, make it effective and expand our perception.
                      </p>

                    </div>
                  </div>
                  <div class="popup-btn popup-btn__slider">
                    <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="image-slider__slide swiper-slide">
                <div class="col-12 slider-title">
                  <h4 class="slider-title__item">Stretching</h4>
                </div>
                <div class="image-slider__container">
                  <div class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                    <img class="popup-img__item image-slider__img" src="./img/slider-4.png" alt="">
                  </div>
                  <div class="popup-content image-slider__items">
                    <div class="popup-item image-slider__item">
                      <p class="popup-text">
                        Stretching is a set of exercises aimed at increasing the flexibility of muscles and ligaments.
                        No
                        workout is complete without stretching. <br>
                        By warming up the muscles, stretching reduces the risk of injury during intense exercise,
                        reduces
                        the likelihood of cramps, corrects posture, helps speed up recovery processes after training,
                        reduces the risk of salt deposits, accelerates blood circulation, which helps to avoid lymph
                        stagnation and reduces swelling in the limbs.
                      </p>

                    </div>
                  </div>
                  <div class="popup-btn popup-btn__slider">
                    <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="image-slider__slide swiper-slide">
                <div class="col-12 slider-title">
                  <h4 class="slider-title__item">Fitness training</h4>
                </div>
                <div class="image-slider__container">
                  <div class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                    <img class="popup-img__item image-slider__img" src="./img/slider-5.png" alt="">
                  </div>
                  <div class="popup-content image-slider__items">
                    <div class="popup-item image-slider__item">
                      <p class="popup-text">
                        Fitness training is a combination of regular physical exercises and healthy diet. Besides giving
                        you the body you want, fitness training also prolongs your life and provides you with some
                        mental
                        benefits. <br>
                        Among benefits of the fitness training is fat loss, developing muscle strength, increasing bones
                        density, reduced risk of diseases, and improved ability to do everyday activities.
                      </p>

                    </div>
                  </div>
                  <div class="popup-btn popup-btn__slider">
                    <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Get Started</a>
                  </div>
                </div>
              </div>
              <div class="image-slider__slide swiper-slide">
                <div class="col-12 slider-title">
                  <h4 class="slider-title__item">Group classes</h4>
                </div>
                <div class="image-slider__container">
                  <div class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                    <img class="popup-img__item image-slider__img" src="./img/slider-6.png" alt="">
                  </div>
                  <div class="popup-content image-slider__items">
                    <div class="popup-item image-slider__item">
                      <p class="popup-text">
                        Looking for some fun with benefits? <br>
                        Join my group classes alone or with your friends, both for yoga and fitness training.
                      </p>
                    </div>
                  </div>
                  <div class="popup-btn popup-btn__slider">
                    <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <div class="gallery-btn">
        <a href="#contact_us" class="gallery-btn__item">Get Started</a>
      </div>
      <img src="./img/gallery-flower-right.png" alt="" class="flower question-img__left gallery-img__left">
      <img src="./img/gallery-flower-left.png" alt="" class=" flower gallery-img__right">
    </section>
    <section class="question" id="question">
      <div class="container container-xxl">
        <div class="row">
          <div class="col-xl-7 question-block">
            <div class="question-items">
              <h3 class="question-title">Who benefits from yoga?</h2>
                <ul class="question-list">

                  <li class="question-list__item">
                    <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                    <div class="question-list__block">
                      <p class="question-list__text">
                        People suffering from stress and anxiety
                      </p>
                    </div>
                  </li>

                  <li class="question-list__item">
                    <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                    <div class="question-list__block">
                      <p class="question-list__text">
                        People with back and joint pain
                      </p>
                    </div>
                  </li>

                  <li class="question-list__item">
                    <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                    <div class="question-list__block">
                      <p class="question-list__text">
                        Athletes to improve flexibility and recover after training
                      </p>
                    </div>
                  </li>

                  <li class="question-list__item">
                    <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                    <div class="question-list__block">
                      <p class="question-list__text">
                        People seeking spiritual development
                      </p>
                    </div>
                  </li>

                </ul>
            </div>
            <div class="question-items">
              <h3 class="question-title">What does yoga practice give?</h2>
                <ul class="question-list question-list__last">

                  <li class="question-list__item">
                    <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                    <div class="question-list__block">
                      <p class="question-list__text">
                        Strengthens muscles, increases flexibility, improves balance and coordination
                      </p>
                    </div>
                  </li>

                  <li class="question-list__item">
                    <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                    <div class="question-list__block">
                      <p class="question-list__text">
                        Reduces stress, improves sleep, increases happiness and spiritual harmony
                      </p>
                    </div>
                  </li>
                  <li class="question-list__item">
                    <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                    <div class="question-list__block">
                      <p class="question-list__text">
                        Proper breathing enriches the body with oxygen
                      </p>
                    </div>
                  </li>

                </ul>
            </div>
          </div>
          <div class="col-xl-5 question-bg__img">
          </div>
          <div class="question-btn">
            <a href="#contact_us" class="gallery-btn__item">Get Started</a>
          </div>
        </div>
      </div>
      <img src="./img/question-flower-left.png" alt="" class="flower question-img__left">

    </section>
    <section class="about" id="about_me">
      <div class="container container-xxl about-container">
        <div class="row">
          <div class="offset-xl-6 col-xl-6">

          </div>
          <div class="col-xl-6 col-12 about-bg__img">
            <img id="about-bg__img" src="./img/about-img.png" alt="">
          </div>
          <div class="col-xl-6 col-12 about-items">
            <div class="about-title">
              <h3 class="about-title__item">
                Lets get acquainted
              </h3>
            </div>
            <p class="about-text"> Your Guide to Yoga, Fitness, and Personal Transformation</p>
            <p class="about-text">Hello, and welcome to the path of self-discovery, well-being, and personal
              transformation. I’m Karina, a
              dedicated yoga instructor and fitness/personal trainer with over 7 years of experience in the field, and I
              am delighted to be your guide on this extraordinary journey.
            <p class="about-text">
              I believe the incredible power of yoga and fitness to positively impact not only our physical health but
              also our mental and spiritual well-being. My own journey into these disciplines began about 10 years ago
              when I first tried Pilates and strength training, and later yoga, and since then, it’s been my calling to
              share their profound benefits with others.
            </p>
            <p class="about-text">
              What to Expect
            </p>
            <p class="about-text">
              In my classes, you can expect a welcoming and supportive environment suitable for individuals of all
              fitness
              levels. Whether you’re a beginner starting your journey to improved health, a fitness enthusiast seeking
              to
              elevate your training, or someone looking for guidance to achieve personal growth, I’m committed to
              tailoring my sessions to address your specific, flexibility, endurance, and resilience, all while
              nurturing
              mindfulness, inner peace, and self-discovery.
            </p>
            <p class="about-text">
              Join me for a class and allow these transformative practices to reshape your life. Let’s embrace the
              fusion
              of yoga and fitness as a catalyst for personal transformation.
            </p>
            <p class="about-text">
              Namaste!
            </p>

          </div>
        </div>
      </div>
      <img src="./img/about-flower-right.png" alt="" class=" flower about-img__flower">
    </section>
    <section class="form" id="contact_us">
      <div class="container container-xxl">
        <div class="row justify-content-md-center">
          <div class="col-xl-5 offset-xl-1 col-lg-12 col-md-9 col-12">
            <h3 class="form-title">To get your first free lesson with me,
              send a request</h3>

            <?php if(isset($_SESSION['sent'])): ?>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              <b>
                <?php echo $_SESSION ['sent']; unset($_SESSION['sent']); ?>
              </b>
            </div>
            <?php endif; ?>

            <?php if(isset($_SESSION['notsent'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <b>
                <?php echo $_SESSION ['notsent']; unset($_SESSION['notsent']); ?>
              </b>
            </div>
            <?php endif; ?>
            <div class="form-container">
              <div class="form-block">
                <form action="./mail/mail.php" class="form-block__item" method="post">
                  <div class="form-row">
                    <input type="text" name="title" class="form-input form-control questions-form__input_item"
                      placeholder="name" required>
                    <input type="tel" name="tel" class="form-input form-control questions-form__input_item"
                      placeholder="+(__)" required>
                    <input type="Email" name="email" class="form-input form-control questions-form__input_item"
                      placeholder="@mail">
                    <div class="form-checkbox">
                      <input type="checkbox" id="cb1"
                        onchange="document.getElementById('send-btn').disabled = !this.checked;"> <label
                        for="cb1"></label>
                      <p class="form-checkbox__text">I agree to the <a href="policy.pdf" class="form-checkbox__policy"
                          required>processing of
                          persolan data</a></p>
                    </div>
                  </div>
                  <div class="form-btn__container">
                    <button id="send-btn" type="submit" class="form-btn" disabled>Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-xl-4 offset-xl-1 col-lg-12 col-md-9 col-12">
            <h3 class="form-title">You can also write to me</h3>

            <ul class="form-socials">

              <li class="form-socials__item"><a href="https://wa.me/message/MQTNMNZNE6EHH1" class="form-socials__link">
                  <img src="./img/form-whatsapp.svg" alt="" class="form-socials__img">
                </a></li>
              <li class="form-socials__item"><a
                  href="https://www.instagram.com/kari_fitdxb?igsh=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr"
                  class="form-socials__link">
                  <img src="./img/form-inst.svg" alt="" class="form-socials__img">
                </a></li>
            </ul>
          </div>

        </div>
      </div>
      <img src="./img/form-flower-left.png" alt="" class=" flower form-img">
      <img src="./img/form-flower__right.png" alt="" class="flower form-img__right">
    </section>
    <footer class="footer">
      <div class="footer-container">
        <div class="container container-xxl">
          <div class="row footer-row">
            <div class="col-xl-3 col-lg-4 col-sm-4 col-6 footer-row__item">
              <ul class="footer-list">
                <li class="li footer-list__item">
                  <a href="#gallery" class="footer-list__link">
                    Hatha-yoga
                  </a>
                </li>
                <li class="li footer-list__item">
                  <a href="#gallery" class="footer-list__link">
                    Vinyasa flow
                  </a>
                </li>
                <li class="li footer-list__item">
                  <a href="#gallery" class="footer-list__link">
                    Breathing practice
                  </a>
                </li>
                <li class="li footer-list__item">
                  <a href="#gallery" class="footer-list__link">
                    Stretching
                  </a>
                </li>
                <li class="li footer-list__item">
                  <a href="#gallery" class="footer-list__link">
                    Fitness training
                  </a>
                </li>
                <li class="li footer-list__item">
                  <a href="#gallery" class="footer-list__link">
                    Group classes
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-xl-5 col-lg-4 col-sm-4 col-6 footer-row__item">
              <ul class="footer-list footer-list__about">
                <li class="footer-list__item">
                  <a href="#question" class="footer-list__link">
                    Who benefits from yoga?
                  </a>
                </li>
                <li class="footer-list__item">
                  <a href="#question" class="footer-list__link">
                    What does yoga practice give?
                  </a>
                </li>
              </ul>
              <ul class="footer-list">
                <li class="footer-list__item">
                  <a href="#about_me" class="footer-list__link">
                    About me
                  </a>
                </li>
                <li class="footer-list__item">
                  <a href="#contact_us" class="footer-list__link">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-9 footer-block">
              <ul class="footer-block__items">
                <li class="footer-block__item">
                  <h3 class="footer-title">You can also write to me</h3>
                </li>
                <li class="footer-block__item">
                  <div class="footer-socials">
                    <ul class="footer-social">

                      <li class="footer-social__item">
                        <a href="https://wa.me/message/MQTNMNZNE6EHH1" class="footer-social__icon">
                          <img src="./img/wp-footer.svg" alt="" class="footer-social__img">
                        </a>
                      </li>
                      <li class="footer-social__item">
                        <a href="https://www.instagram.com/kari_fitdxb?igsh=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr "
                          class="footer-social__icon">
                          <img src="./img/inst-footer.svg" alt="" class="footer-social__img">
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="footer-block__item">
                  <div class="header-main__btn footer-social__btn">
                    <a href="#contact_us" class="header-main__link footer-social__link">Sign up for a free session</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </footer>
    <div class="btn-up btn-up_hide"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>