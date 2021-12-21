<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <title>The Psychology of Graphic Design Pricing</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto+Condensed:wght@700&family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />

    <link rel="preload" as="style" href="css/swiper-bundle.min.css" />
    <link rel="preload" href="js/swiper-bundle.min.js" as="script" />
    <link rel="preload" href="js/jquery.validate.min.js" as="script" />

    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />

    <script defer src="js/jquery-3.6.0.min.js"></script>
  </head>

  <body>
    <header class="navbar navbar-fixed">
      <div class="container navbar__container">
        <div class="navbar__wrapper">
          <div class="logo navbar__logo">
            <a href="https://lidiya-style.ru/design-theory" class="logo__link"
              ><img
                src="img/logo-header.svg"
                alt="логотип издания"
                class="logo__link-img"
            /></a>
          </div>
          <!-- /.logo navbar__logo -->

          <div class="navbar__wrapper-menu">
            <nav class="navbar__menu navbar__menu--mobile">
              <ul class="navbar-menu">
                <li class="navbar-menu__item">
                  <a href="#reference" class="navbar-menu__link"
                    >Рекомендации</a
                  >
                </li>
                <li class="navbar-menu__item">
                  <a href="#theme" class="navbar-menu__link">Книги</a>
                </li>
                <li class="navbar-menu__item">
                  <a href="#blog" class="navbar-menu__link">Блог</a>
                </li>
              </ul>
            </nav>
            <!-- /.navbar__menu-mobile -->

            <button
              class="button navbar__button"
              data-toggle="modal"
              data-href="#read-modal"
            >
              Получить
            </button>

            <!-- кнопка меню для мобильных экранов -->
            <button class="menu-button navbar__menu-button">
              <img
                src="img/menu-button.svg"
                alt="картинка кнопки вызова меню"
                class="menu-button__line"
              />
            </button>
          </div>
          <!-- /.navbar__menu -->
        </div>
        <!-- /.navbar-menu -->
      </div>
      <!-- /.container -->
    </header>

    <!-- _________________FOOTER_________________ -->

    <footer class="footer">
      <div class="container footer__container">
        <div class="footer__grid">
          <!-- create -->
          <div class="footer__create create">
            <a
              class="create__logo"
              href="https://lidiya-style.ru/design-theory"
            >
              <img src="img/logo-header.svg" alt="" class="footer__logo" /> </a
            ><!-- /.create__logo -->

            <p class="create__text">
              Создайте современный и креативный веб-сайт с crealand
            </p>

            <div class="create__social-network social-network">
              <a
                target="_blank"
                rel="nofollow noopener"
                href="https://www.google.com"
                class="social-network__link"
              >
                <img
                  src="img/icon-google.svg"
                  alt="иконка google"
                  class="social-network__icon"
                />
              </a>
              <a
                target="_blank"
                rel="nofollow noopener"
                href="https://twitter.com"
                class="social-network__link"
              >
                <img
                  src="img/icon-twitter.svg"
                  alt="иконка twitter"
                  class="social-network__icon"
                />
              </a>
              <a
                target="_blank"
                rel="nofollow noopener"
                href="https://www.instagram.com"
                class="social-network__link"
              >
                <img
                  src="img/icon-instagram.svg"
                  alt="иконка instagram"
                  class="social-network__icon"
                />
              </a>
              <a
                target="_blank"
                rel="nofollow noopener"
                href="https://linkadd.in"
                class="social-network__link"
              >
                <img
                  src="img/icon-in.svg"
                  alt="иконка in"
                  class="social-network__icon"
                />
              </a>
            </div>
            <!-- /.create__social-network social-network -->
          </div>
          <!-- /.footer__create -->

          <!-- product -->
          <div class="footer__product product">
            <h3 class="footer__title">Продукт</h3>
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#!" class="footer__link">Лэндинг</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Функции</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Документация</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Скидки</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Расценки</a>
              </li>
            </ul>
            <!-- /.footer__list -->
          </div>
          <!-- /.footer__product product -->

          <!-- service -->
          <div class="footer__service service">
            <h3 class="footer__title">Сервисы</h3>
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#!" class="footer__link">Документация</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Дизайн</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Темы</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Илюстрации</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">UI Kit</a>
              </li>
            </ul>
            <!-- /.footer__list -->
          </div>
          <!-- .юfooter__service service -->

          <!-- company -->
          <div class="footer__company company">
            <h3 class="footer__title">Компания</h3>
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#!" class="footer__link">О нас</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Условия</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Privacy Policy</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Careers</a>
              </li>
            </ul>
            <!-- /.footer__list -->
          </div>
          <!-- .юfooter__company company -->

          <!-- else -->
          <div class="footer__else else">
            <h3 class="footer__title">Еще..</h3>
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#!" class="footer__link">Документация</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Лицензия</a>
              </li>
              <li class="footer__item">
                <a href="#!" class="footer__link">Изменения</a>
              </li>
            </ul>
            <!-- /.footer__list -->
          </div>
          <!-- .юfooter__else else -->

          <!-- _________copyright_________ -->
          <div class="footer__copyright copyright">
            <img
              src="img/footer-like.svg"
              alt="иконка - сердечко"
              class="footer__like-icone copyright__like"
            />
            <p class="copyright__text">Copyright © 2019. Crafted with love.</p>
          </div>
          <!-- /.footer__copyright -->
        </div>
        <!-- /.footer__grid -->
      </div>
      <!-- /.container footer__container -->
    </footer>
    <!-- /.footer -->

    <!-- ___________MODAL______________ -->
    <div class="modal" id="read-modal">
      <div class="modal__overlay"></div>
      <!-- /.modal__overlay -->

      <div class="modal__dialog">
        <div class="modal__dialog-wrapper">
          <div class="modal__dialog-scroll">
            <a href="#" class="modal__close">
              <img
                src="img/close.svg"
                alt="иконка закрыть"
                class="modal__icon-close"
              />
            </a>

            <h3 class="modal__title modal__title-form">Заказать книгу</h3>

            <form action="send.php" method="POST" class="modal__form form">
              <input
                type="text"
                class="input modal__input"
                placeholder="Ваше имя*"
                name="name"
                required
                minlength="2"
              />
              <input
                type="tel"
                class="input modal__input phone"
                placeholder="Ваш номер телефона*"
                name="phone"
                minlength="17"
                required
              />
              <input
                type="email"
                class="input modal__input"
                placeholder="Ваш email*"
                name="email"
                required
              />

              <textarea
                class="messege modal__message"
                placeholder="Комментарий"
                name="message"
              ></textarea>

              <button class="button modal__button" type="submit">
                Отправить
              </button>
              <div class="modal__info">
                * Нажимая кнопку отправить вы соглашаетесь на обработку
                персональных данных
              </div>
            </form>
            <!-- /.modal__form -->
          </div>
          <!-- /.modal__dialog-scroll -->
        </div>
        <!-- /.modal__dialog-wrapper -->
      </div>
      <!-- /.modal__dialog -->
    </div>
    <!-- /.modal -->

    <!-- фиксированный значек возврата на верх страницы -->
    <a href="#" class="arrow-up" data-toggle="rell">
      <img src="img/up-arrow.svg" alt="#" class="arrow-up__img" />
    </a>

    <script defer src="js/swiper-bundle.min.js"></script>
    <script defer src="js/jquery.validate.min.js"></script>
    <script defer src="js/jquery.mask.min.js"></script>
    <script defer src="js/jquery.fancybox.min.js"></script>
    <script defer src="js/main.min.js"></script>
  </body>
</html>