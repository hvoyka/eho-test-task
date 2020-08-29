<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>World Bank Publications</title>
  <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__top">
        <div class="header__logo">
          <a href="/"><img class="header__logo-img" src="./img/logo.png" alt="World Bank Publications logotype" title="World Bank Publications logotype"></a>
        </div>
        <div class="header__phones">
          <a href="tel:+88001005005">8-800-100-5005</a>
          <a href="tel:+73452522000">+7 (3452) 522-000</a>
        </div>
      </div>
      <div class="header__bottom">
        <button class="header__burger js-burger"></button>
        <nav class="header__nav">
          <ul class="header__nav-list nav-list">
            <li class="nav-list__item"><a class="nav-list__item-link" href="#">Кредитные карты</a></li>
            <li class="nav-list__item"><a class="nav-list__item-link nav-list__item-link--active" href="#">Вклады</a></li>
            <li class="nav-list__item"><a class="nav-list__item-link" href="#">Дебетовая карта</a></li>
            <li class="nav-list__item"><a class="nav-list__item-link" href="#">Страхование</a></li>
            <li class="nav-list__item"><a class="nav-list__item-link" href="#">Друзья</a></li>
            <li class="nav-list__item"><a class="nav-list__item-link" href="#">Интернет-банк</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>
    <div class="breadcrumbs__wrapper">
      <div class="container container__inner">
        <ul class="breadcrumbs">
          <li class="breadcrumbs__item">
            <a class="breadcrumbs__item-link" href="/"><span>Главная</span></a>
          </li>
          <li class="breadcrumbs__item">
            <a class="breadcrumbs__item-link" href="#"><span>Вклады</span></a>
          </li>
          <li class="breadcrumbs__item">
            <span>
              <span class="breadcrumbs__item-link breadcrumbs__item-link--active">Калькулятор</span>
            </span>
          </li>
        </ul>
      </div>
    </div>

    <div class="calc">
      <div class="container container__inner">
        <div class="calc__wrapper">
          <h1 class="calc__title">Калькулятор</h1>
          <form class="calc__form">
            <div class="calc__form-item">
              <label for="calc__form-date" class="calc__form-label">
                Дата оформления вклада:
              </label>
              <input id="calc__form-date" class="calc__form-input " type="date">
            </div>
            <div class="calc__form-item">
              <label for="calc__form-sum" class="calc__form-label">
                Сумма вклада:
              </label>
              <input id="calc__form-sum" class="calc__form-input" type="text" min="1000" max="3000000">
            </div>

            <div class="calc__form-item">
              <label for="calc__form-time" class="calc__form-label">
                Срок вклада:
              </label>
              <select id="calc__form-time" class="calc__form-input">
                <option value="1">1 год</option>
                <option value="2">2 год</option>
                <option value="3">3 год</option>
                <option value="4">4 год</option>
                <option value="5">5 год</option>
              </select>
            </div>

            <div class="calc__form-item">
              <label class="calc__form-label">
                Пополнение вклада:
              </label>

              <label>
                <input type="radio" id="caclRadioDep1" name="calcDep" value="dep" checked>
                Нет</label>

              <label>
                <input type="radio" id="caclRadioDep2" name="calcDep" value="dep">
                да</label>
            </div>
            <div class="calc__form-item">
              <label for="calc__form-sum-dep" class="calc__form-label">
                Сумма пополнения вклада:
              </label>
              <input id="calc__form-sum-dep" class="calc__form-input" type="text" min="1000" max="3000000">
            </div>
            <div class="calc__form-item">
              <button class="calc__form-btn">Рассчитать</button>
              <span class="calc__form-result-text">
                Результат:&nbsp;
              </span>
              <span class="calc__form-result-box">
                <span id="calcFormValue">0</span>
                &nbsp;руб
              </span>
            </div>
          </form>
        </div>
      </div>

    </div>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer__wrapper">
        <ul class="footer-list">
          <li class="footer-list__item"><a class="footer-list__item-link" href="#">Кредитные карты</a></li>
          <li class="footer-list__item"><a class="footer-list__item-link" href="#">Вклады</a></li>
          <li class="footer-list__item"><a class="footer-list__item-link" href="#">Дебетовая карта</a></li>
          <li class="footer-list__item"><a class="footer-list__item-link" href="#">Страхование</a></li>
          <li class="footer-list__item"><a class="footer-list__item-link" href="#">Друзья</a></li>
          <li class="footer-list__item"><a class="footer-list__item-link" href="#">Интернет-банк</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <script src="js/libs.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>