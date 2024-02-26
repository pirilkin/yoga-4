<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Йога</title>

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
                <div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>
                <div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>
                <div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>
                <div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>
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
                Обо мне
              </a>
            </li>
            <li class="header-list__item">
              <a href="#contact_us" class="header-list__link">
                Контакты 
              </a>
            </li>
            <li class="header-list__item">
               <button class="header-list__lang" onclick="window.location.href = './'">EN</button>
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
            <p class="header-main__subtitle">Преобразите свое тело и разум с помощью йоги, Фитнеса и осознанности</p>
            <div class="header-main__btn">
              <a href="#contact_us" class="header-main__link">Записаться на бесплатный сеанс</a>
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
          <h2 class="col-xl-7 col-lg-8 col-12 gallery-title">Выбирайте и исследуйте мир йоги вместе со мной</h2>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
          <div class="gallery-title__container">
            <h4 class="gallery-title__item">Хатха йога</h4>
          </div>
          <img src="./img/gallery-1.png" alt="" class="gallery-title__img">
          <a href="#popup" class="gallery-title__link link-1">
            <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt=""></a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
          <div class="gallery-title__container">
            <h4 class="gallery-title__item">Виньяса флоу</h4>
          </div>
          <img src="./img/gallery-2.png" alt="" class="gallery-title__img">
          <a href="#popup-2" class="gallery-title__link link-2">
            <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt=""></a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
          <div class="gallery-title__container">
            <h4 class="gallery-title__item">Дыхательные практики</h4>
          </div>
          <img src="./img/gallery-3.png" alt="" class="gallery-title__img">
          <a href="#popup-3" class="gallery-title__link link-3">
            <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt=""></a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
          <div class="gallery-title__container">
            <h4 class="gallery-title__item">Стретчинг</h4>
          </div>
          <img src="./img/gallery-4.png" alt="" class="gallery-title__img">
          <a href="#popup-4" class="gallery-title__link link-4">
            <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt="">
          </a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
          <div class="gallery-title__container">
            <h4 class="gallery-title__item">Фитнес тренировка</h4>
          </div>
          <img src="./img/gallery-5.png" alt="" class="gallery-title__img">
          <a href="#popup-5" class="gallery-title__link link-5">
            <img class="gallery-title__arrow" src="./img/gallery-link.svg" alt=""></a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 gallery-block">
          <div class="gallery-title__container">
            <h4 class="gallery-title__item">Групповые классы</h4>
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
                    Хатха йога идеальна для начинающих и практикующих, это простой и эффективный стиль, включающий в себя
                    упражнения для полной проработки тела - спины, ног, пресса, гибкости.
                    Асаны в хатха йоге воздействуют на мышцы тела и стимулируют выработку гормонов , массируют
                    внутренние органы брюшной полости человека.
                    Хатха йога принесёт расслабление и умиротворение, появятся заряд бодрости и прилив сил.
                  </p>

                </div>
              </div>
              <div class="header-main__btn popup-btn">
                <a href="#contact_us" class="header-main__link popup-link  popup-link__form">Записаться на бесплатный сеанс</a>
              </div>
            </div>
          </div>
        </div>
        <div  id="popup-2" class="popup popup-2">
          <div class="container popup-container">
            <div class="row popup__content">
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
                    Виньяса- это стиль йоги, характеризующийся объединением поз так, что вы плавно переходите от одной к
                    другой, используя дыхание. Занятия Виньяса предлагают разнообразные позы и нет двух одинаковых
                    занятий.
                    Разнообразный характер Виньяса-йоги помогает развить более сбалансированное тело, а также
                    предотвратить травмы от повторяющихся движений, которые могут возникнуть, если вы каждый день
                    делаете одно и то же.
                    Как философия Виньяса признаёт временную природу вещей. Мы принимаем позу, находимся там некоторое
                    время и затем выходим.
                  </p>
                  
                </div>
              </div>
              <div class="header-main__btn  popup-btn">
                <a href="#contact_us" class="header-main__link popup-link popup-link__form">Записаться на бесплатный сеанс</a>
              </div>
            </div>
          </div>
        </div>
        <div id="popup-3" class="popup popup-3">
          <div class="container popup-container">
            <div class="row popup__content">
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
                    Дыхательные упражнения помогают успокоить ум, снизить уровень стресса, активизировать работу
                    внутренних органов и систем, усиливая метаболизм.
                    Когда мы медитируем, практикуем асаны, поём мантры - беспокойный ум создаёт барьер между нами и тем,
                    на чём мы пытаемся сконцентрироваться. Владение техниками дыхания решит эту проблему- углубит
                    практику, сделает ее эффективной и расширит наше восприятие.
                  </p>
     
                </div>
              </div>
              <div class="header-main__btn  popup-btn">
                <a href="#contact_us" class="header-main__link popup-link popup-link__form">Записаться на бесплатный сеанс</a>
              </div>
            </div>
          </div>
        </div>
        <div id="popup-4" class="popup popup-4">
          <div class="container popup-container">
            <div class="row popup__content">
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
                    Стретчинг - комплекс упражнений направленный на повышение гибкости связок мышц. Без растяжки не
                    может обойтись ни одна тренировка.
                    Разогревая мышцы, растяжка уменьшает риск получения травм перед интенсивными занятиями, снижает
                    вероятность судорог у страдающих от них людей, корректирует осанку, помогает ускорить
                    восстановительные процессы после тренировки , снижает риск отложения солей, ускоряет кровообращение,
                    в результате которого не возникают застои лимфы, уменьшается отечность в конечностях.
                  </p>
                 
                </div>
              </div>
              <div class="header-main__btn  popup-btn">
                <a href="#contact_us" class="header-main__link popup-link popup-link__form">Записаться на бесплатный сеанс</a>
              </div>
            </div>
          </div>
        </div>
        <div  id="popup-5" class="popup popup-5">
          <div class="container popup-container">
            <div class="row popup__content">
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
                    Фитнес-тренировки - это сочетание регулярных физических упражнений и здорового питания. Помимо того,
                    что фитнес-тренировки дают вам желаемую фигуру, они также продлевают вашу жизнь и приносят некоторые
                    психологические преимущества.
                    Среди преимуществ фитнес-тренировок- избавление от лишнего веса, развитие мышечной силы, увеличение
                    плотности костей, снижение риска заболеваний и улучшение способности выполнять повседневную
                    деятельность.
                  </p>
     
                </div>
              </div>
              <div class="header-main__btn  popup-btn">
                <a href="#contact_us" class="header-main__link popup-link popup-link__form">Записаться на бесплатный сеанс</a>
              </div>
            </div>
          </div>
        </div>
        <div  id="popup-6" class="popup popup-6">
          <div class="container popup-container">
            <div class="row popup__content">
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
                    Ищете развлечения с пользой?
                    Присоединяйтесь к моим групповым занятиям в одиночку или с друзьями, как для занятий йогой, так и
                    для фитнеса.
                  </p>
                 
                </div>
              </div>
              <div class="header-main__btn  popup-btn">
                <a href="#contact_us" class="header-main__link popup-link popup-link__form">Записаться на бесплатный сеанс</a>
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
                <div
                  class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                  <img class="popup-img__item image-slider__img" src="./img/slider-1.png" alt="">
                </div>
                <div class="popup-content image-slider__items">
                  <div class="popup-item image-slider__item">
                    <p class="popup-text">
                      Хатха йога идеальна для начинающих и практикующих, это простой и эффективный стиль, включающий в
                      себя упражнения для полной проработки тела - спины, ног, пресса, гибкости.
                      <br>
                      Асаны в хатха йоге воздействуют на мышцы тела и стимулируют выработку гормонов , массируют
                      внутренние органы брюшной полости человека.
                      Хатха йога принесёт расслабление и умиротворение, появятся заряд бодрости и прилив сил.
                    </p>

                  </div>
                </div>
                <div class="popup-btn popup-btn__slider">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Отправить заявку</a>
                </div>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="col-12 slider-title">
                <h4 class="slider-title__item">Виньяса флоу</h4>
              </div>
              <div class="image-slider__container">
                <div
                  class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                  <img class="popup-img__item image-slider__img" src="./img/slider-2.png" alt="">
                </div>
                <div class="popup-content image-slider__items">
                  <div class="popup-item image-slider__item">
                    <p class="popup-text">
                      Виньяса - это стиль йоги, характеризующийся объединением поз так, что вы плавно переходите от
                      одной к другой, используя дыхание. Занятия Виньяса предлагают разнообразные позы и нет двух
                      одинаковых занятий. <br>
                      Разнообразный характер Виньяса-йоги помогает развить более сбалансированное тело, а также
                      предотвратить травмы от повторяющихся движений, которые могут возникнуть, если вы каждый день
                      делаете одно и то же. <br>
                      Как философия Виньяса признаёт временную природу вещей. Мы принимаем позу, находимся там некоторое
                      время и затем выходим.
                    </p>

                  </div>
                </div>
                <div class="popup-btn popup-btn__slider">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Отправить заявку</a>
                </div>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="col-12 slider-title">
                <h4 class="slider-title__item">Дыхательные практики</h4>
              </div>
              <div class="image-slider__container">
                <div
                  class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                  <img class="popup-img__item image-slider__img" src="./img/slider-3.png" alt="">
                </div>
                <div class="popup-content image-slider__items">
                  <div class="popup-item image-slider__item">
                    <p class="popup-text">
                      Дыхательные упражнения помогают успокоить ум, снизить уровень стресса, активизировать работу
                      внутренних органов и систем, усиливая метаболизм. <br>
                      Когда мы медитируем, практикуем асаны, поём мантры - беспокойный ум создаёт барьер между нами и
                      тем, на чём мы пытаемся сконцентрироваться. Владение техниками дыхания решит эту проблему- углубит
                      практику, сделает ее эффективной и расширит наше восприятие.
                    </p>

                  </div>
                </div>
                <div class="popup-btn popup-btn__slider">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Отправить заявку</a>
                </div>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="col-12 slider-title">
                <h4 class="slider-title__item">Стретчинг</h4>
              </div>
              <div class="image-slider__container">
                <div
                  class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                  <img class="popup-img__item image-slider__img" src="./img/slider-4.png" alt="">
                </div>
                <div class="popup-content image-slider__items">
                  <div class="popup-item image-slider__item">
                    <p class="popup-text">
                      Стретчинг - комплекс упражнений направленный на повышение гибкости связок мышц. Без растяжки не
                      может обойтись ни одна тренировка. <br>
                      Разогревая мышцы, растяжка уменьшает риск получения травм перед интенсивными занятиями, снижает
                      вероятность судорог у страдающих от них людей, корректирует осанку, помогает ускорить
                      восстановительные процессы после тренировки , снижает риск отложения солей, ускоряет
                      кровообращение, в результате которого не возникают застои лимфы, уменьшается отечность в
                      конечностях.
                    </p>

                  </div>
                </div>
                <div class="popup-btn popup-btn__slider">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Отправить заявку</a>
                </div>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="col-12 slider-title">
                <h4 class="slider-title__item">Фитнес-тренировка</h4>
              </div>
              <div class="image-slider__container">
                <div
                  class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                  <img class="popup-img__item image-slider__img" src="./img/slider-5.png" alt="">
                </div>
                <div class="popup-content image-slider__items">
                  <div class="popup-item image-slider__item">
                    <p class="popup-text">
                      Фитнес-тренировки - это сочетание регулярных физических упражнений и здорового питания. Помимо
                      того, что фитнес-тренировки дают вам желаемую фигуру, они также продлевают вашу жизнь и приносят
                      некоторые психологические преимущества. <br>
                      Среди преимуществ фитнес-тренировок- избавление от лишнего веса, развитие мышечной силы,
                      увеличение плотности костей, снижение риска заболеваний и улучшение способности выполнять
                      повседневную деятельность.
                    </p>

                  </div>
                </div>
                <div class="popup-btn popup-btn__slider">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Отправить заявку</a>
                </div>
              </div>
            </div>
            <div class="image-slider__slide swiper-slide">
              <div class="col-12 slider-title">
                <h4 class="slider-title__item">Групповые классы</h4>
              </div>
              <div class="image-slider__container">
                <div
                  class="popup-img  popup-img__1 image-slider__items image-slider__items_img">
                  <img class="popup-img__item image-slider__img" src="./img/slider-6.png" alt="">
                </div>
                <div class="popup-content image-slider__items">
                  <div class="popup-item image-slider__item">
                    <p class="popup-text">
                      Ищете развлечения с пользой? <br>
                      Присоединяйтесь к моим групповым занятиям в одиночку или с друзьями, как для занятий йогой, так и
                      для фитнеса.
                    </p>
                  </div>
                </div>
                <div class="popup-btn popup-btn__slider">
                  <a href="#contact_us" class="header-main__link popup-link popup-link__slider">Отправить заявку</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    <div class="gallery-btn">
      <a href="#contact_us" class="gallery-btn__item">Отправить заявку</a>
    </div>
    <img src="./img/gallery-flower-right.png" alt="" class="flower question-img__left gallery-img__left">
    <img src="./img/gallery-flower-left.png" alt="" class=" flower gallery-img__right">
  </section>
  <section class="question" id="question">
    <div class="container container-xxl">
      <div class="row">
        <div class="col-xl-7 question-block">
          <div class="question-items">
            <h3 class="question-title">Кому Полезна Йога?</h2>
              <ul class="question-list">

                <li class="question-list__item">
                  <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                  <div class="question-list__block">
                    <p class="question-list__text">
                      Людям страдающим от стресса и тревоги
                    </p>
                  </div>
                </li>

                <li class="question-list__item">
                  <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                  <div class="question-list__block">
                    <p class="question-list__text">
                      Людям с болями в спине и суставах
                    </p>
                  </div>
                </li>

                <li class="question-list__item">
                  <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                  <div class="question-list__block">
                    <p class="question-list__text">
                      Спортсменам для улучшения гибкости и восстановления после тренировок
                    </p>
                  </div>
                </li>

                <li class="question-list__item">
                  <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                  <div class="question-list__block">
                    <p class="question-list__text">
                      Людям стремящимся к духовному развитию
                    </p>
                  </div>
                </li>

              </ul>
          </div>
          <div class="question-items">
            <h3 class="question-title">Что Даёт Практика Йоги?</h2>
              <ul class="question-list question-list__last">

                <li class="question-list__item">
                  <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                  <div class="question-list__block">
                    <p class="question-list__text">
                      Укрепляет мышцы, повышает гибкость, улучшает баланс и координацию
                    </p>
                  </div>
                </li>

                <li class="question-list__item">
                  <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                  <div class="question-list__block">
                    <p class="question-list__text">
                      Йога способствует снижению стресса, улучшается сон, увеличивается гормон счастья и духовная
                      гармонии
                    </p>
                  </div>
                </li>
                <li class="question-list__item">
                  <img class="question-list__img" src="./img/question-Vector.svg" alt="">
                  <div class="question-list__block">
                    <p class="question-list__text">
                      Правильное дыхание при выполнении асанов обогощает оррганизм кислородом
                    </p>
                  </div>
                </li>

              </ul>
          </div>
        </div>
        <div class="col-xl-5 question-bg__img">
        </div>
        <div class="question-btn">
          <a href="#contact_us" class="gallery-btn__item">Отправить заявку</a>
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
              Давайте Познакомимся
            </h3>
          </div>
          <p class="about-text">Обо мне: ваш гид на пути к йоге, фитнесу и личной трансформации.</p>
          <p class="about-text">Добро пожаловать на путь самопознания, благополучия и личной трансформации. Я Карина,
            сертифицированный тренер по фитнесу и инструктор йоги с более чем 7 летним стажем, и я рада быть вашим
            наставником в этом необычном путешествии.
          <p class="about-text">
            Я верю, что йога ии фитнес положительно влияют не только на наше физическое здоровье, но также на наше
            психическое и духовное благополучие. Мой собственный путь в эти дисциплины начался около 10 лет назад, когда
            я впервые попробовала пилатес и силовые тренировки, а затем йогу, и с тех пор моим призванием стало делиться
            из преимуществами с другими.
          </p>
          <p class="about-text">
            Что вас ожидает:
            </p>
          <p class="about-text">
            На моих занятиях вы можете рассчитывать на гостеприимную и поддерживающую атмосферу, подходящую для людей
            любого уровня подготовки. Независимо от того, являетесь ли вы новичком, начинающим свой путь к улучшению
            здоровья, энтузиастом фитнеса, стремящимся улучшить свои тренировки, или кем-то, кто ищет рекомендации для
            достижения личностного роста, я стараюсь адаптировать свои занятия для достижения ваших конктетных целей.
          </p>
          <p class="about-text">
            Мы будем работать над развитием силы, гибкости, выносливость, внутренний мир и самопознание.
          </p>
          <p class="about-text">
            Присоединяйтесь ко мне на занятия и позвольте этим преобразующим практиками изменить вашу жизнь.
            </p>
          <p class="about-text">
            Намасте!
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
          <h3 class="form-title">Чтобы получить первое бесплатное занятие со мной, отправьте заявку</h3>
          
          <?php if(isset($_SESSION['sent'])): ?>
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                 <b> <?php echo $_SESSION ['sent']; unset($_SESSION['sent']); ?> </b>
           </div>
           <?php endif; ?>
           
           <?php if(isset($_SESSION['notsent'])): ?>
             
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <b> <?php echo $_SESSION ['notsent']; unset($_SESSION['notsent']); ?> </b>
           </div>
           <?php endif; ?>
          
          <div class="form-container">
            <div class="form-block">
              <form action="./mail/mail.php" class="form-block__item" method="post">
                <div class="form-row">
                  <input type="text" name="title" class="form-input form-control questions-form__input_item" placeholder="имя" required>
                  <input type="tel" name="tel" class="form-input form-control questions-form__input_item" placeholder="+(__)" required>
                  <input type="Email" name="email" class="form-input form-control questions-form__input_item" placeholder="@mail" >
                  <div class="form-checkbox">
                    <input type="checkbox" id="cb1" onchange="document.getElementById('send-btn').disabled = !this.checked;"> <label for="cb1"></label>
                    <p class="form-checkbox__text">Я согласен(на) на <a href="policy.pdf" class="form-checkbox__policy" required>обработку персональных данных</a></p>
                  </div>
                </div>
                <div class="form-btn__container">
                  <button id="send-btn" type="submit" class="form-btn form-btn__ru" disabled>Отправить заявку</button>
                </div>
              </form>
             </div>
          </div>
        </div>
        <div class="col-xl-4 offset-xl-1 col-lg-12 col-md-9 col-12">
          <h3 class="form-title">Вы также можете написать мне </h3>

          <ul class="form-socials">

            <li class="form-socials__item"><a href="https://wa.me/message/MQTNMNZNE6EHH1" class="form-socials__link">
                <img src="./img/form-whatsapp.svg" alt="" class="form-socials__img">
              </a></li>
            <li class="form-socials__item"><a href="https://www.instagram.com/kari_fitdxb?igsh=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr" class="form-socials__link">
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
                  Хатха йога
                </a>
              </li>
              <li class="li footer-list__item">
                <a href="#gallery" class="footer-list__link">
                  Виньяса флоу
                </a>
              </li>
              <li class="li footer-list__item">
                <a href="#gallery" class="footer-list__link">
                  Дыхательные практики
                </a>
              </li>
              <li class="li footer-list__item">
                <a href="#gallery" class="footer-list__link">
                  Стретчинг
                </a>
              </li>
              <li class="li footer-list__item">
                <a href="#gallery" class="footer-list__link">
                  Фитнес тренировка
                </a>
              </li>
              <li class="li footer-list__item">
                <a href="#gallery" class="footer-list__link">
                  Групповые классы
                </a>
              </li>
            </ul>
          </div>
          <div class="col-xl-5 col-lg-4 col-sm-4 col-6 footer-row__item">
            <ul class="footer-list footer-list__about">
              <li class="footer-list__item">
                <a href="#question" class="footer-list__link">
                  Кому полезна йога?
                </a>
              </li>
              <li class="footer-list__item">
                <a href="#question" class="footer-list__link">
                  Что даёт практика йоги?
                </a>
              </li>
            </ul>
            <ul class="footer-list">
              <li class="footer-list__item">
                <a href="#about_me" class="footer-list__link">
                  Обо мне
                </a>
              </li>
              <li class="footer-list__item">
                <a href="#contact_us" class="footer-list__link">Контакты</a>
              </li>
            </ul>
          </div>
          <div class="col-xl-4 col-lg-4 col-sm-9 footer-block">
           <ul class="footer-block__items">
            <li class="footer-block__item">
              <h3 class="footer-title">Вы можете написать мне</h3>
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
                  <a href="https://www.instagram.com/kari_fitdxb?igsh=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr " class="footer-social__icon">
                    <img src="./img/inst-footer.svg" alt="" class="footer-social__img">
                  </a>
                </li>
              </ul>
            </div>
          </li>
            <li class="footer-block__item">
              <div class="header-main__btn footer-social__btn">
                <a href="#contact_us" class="header-main__link footer-social__link_ru">Записаться на бесплатный сеанс</a>
              </div>
          </li>
           </ul>
          </div>
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