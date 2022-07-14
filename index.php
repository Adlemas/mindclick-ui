<?php @include('template-parts/header.php') ?>

<main>
  <div class="loading-modal" id="loading-modal">
    <div class="loading-modal__content">
      <div class="loading-modal__content__text">
        <p>Загрузка...</p>
      </div>
      <div class="loading-modal__content__spinner">
        <div class="spinner-border" role="status"></div>
      </div>
    </div>
  </div>

  <div class="app-modal__wrapper" id="app-modal">
    <div class="app-modal__modal">
      <h1 id="app-modal-status-text">Заявка отправлена</h1>

      <img
        id="app-modal-status-image"
        src="assets/images/jpg/mail-sent.jpg"
        alt="sent"
        width="300"
      />

      <button
        id="app-modal-btn"
        class="btn btn-primary btn-lg btn-block app-modal__btn"
      >
        Закрыть
      </button>
    </div>
  </div>

  <section class="intro block">
    <div class="container">
      <div class="intro-row">
        <div class="left">
          <div class="heading">
            Хватит тратить время<br />
            <strong>в поисках обучения</strong>
          </div>
          <div class="subheading">
            Повысьте эффективность, сэкономьте время и деньги. Всё на одном
            сайте.
          </div>
          <div class="buttons">
            <a class="btn btn-primary btn-lg" href="#app">Подать заявку</a>
            <a class="btn btn-outline btn-lg" href="#about">Подробнее</a>
          </div>
        </div>
        <div class="right">
          <!-- <img src="assets/images/jpg/looking-for.jpg" alt="Поиски"> -->
          <img src="assets/images/jpg/search-person.jpg" alt="Поиски" />
        </div>
      </div>
    </div>
  </section>

  <section id="why-us" class="block how-it-works">
    <div class="container">
      <div class="heading short-border">
        <strong>Почему вам нужно выбрать нас?</strong>
      </div>

      <!-- <i class="bi bi-envelope-check"></i>
            <i class="bi bi-bar-chart-line"></i>
            <i class="bi bi-graph-up"></i>
            <i class="bi bi-controller"></i>
            <i class="bi bi-telephone"></i> -->
      <div class="works-row works-slider">
        <div>
          <div class="works-block">
            <i class="bi bi-people"></i>
            <div class="title">Группы и участники</div>
            <label
              >Динамически создавайте и удаляйте группы и распределяйте по ним
              участников. Кастомизируйте группы и участников.</label
            >
          </div>
        </div>
        <div>
          <div class="works-block">
            <i class="bi bi-envelope-check"></i>
            <div class="title">Автоматизация</div>
            <label
              >Создавайте рассылки по почте и Telegram, задавайте задачи с
              интенсивным ростом сложности в зависимости от успеваемости и
              результатов.</label
            >
          </div>
        </div>
        <div>
          <div class="works-block">
            <i class="bi bi-bar-chart-line"></i>
            <div class="title">Система учёта</div>
            <label
              >Отслеживайте сроки оплат, выполнений заданий, успеваемость
              участников. Ведите дневник успехов и оценивайте участников.</label
            >
          </div>
        </div>
        <div>
          <div class="works-block">
            <i class="bi bi-graph-up"></i>
            <div class="title">Рейтинг</div>
            <label
              >Контролируйте свои успехи и успехи участников и повышайте свой
              рейтинг, чтобы выйти в топ педагогов на платформе.</label
            >
          </div>
        </div>
        <div>
          <div class="works-block">
            <i class="bi bi-controller"></i>
            <div class="title">Тренажёры</div>
            <label
              >Множество тренажёров по ментальной арифметике, английскому и
              программированию в одном месте. Тесты на IQ, реакцию,
              внимательность и многое другое.</label
            >
          </div>
        </div>
        <div>
          <div class="works-block">
            <i class="bi bi-telephone"></i>
            <div class="title">Видео-Аудио встречи</div>
            <label
              >Проводите уроки онлайн по видео и аудио, добавляйте участников из
              групп и приглашайте гостей по ссылке. Некоторые тренажёры
              поддерживают интеграцию с видео-аудио встречами.</label
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="why-important" class="block why-important">
    <div class="container">
      <div class="heading short-border">
        <strong>Почему это важно?</strong>
      </div>

      <small
        >Как много часов вы проводите при посещении репетиторов и доп. уроков,
        которые только отнимают ваше время?<br />В 2022 году была составлена
        статистика
        <a
          href="https://ru.wikipedia.org/wiki/%D0%94%D0%B8%D1%81%D1%82%D0%B0%D0%BD%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%BE%D0%B5_%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5"
          >онлайн-электронного обучения</a
        >
        и она говорит что...</small
      >

      <div class="stat-row">
        <div class="stat-card">
          <div class="quote">“</div>

          <div class="stat">
            <div class="left">
              <div class="title">65% миллениалов выбрали</div>
              <label class="subheading">
                свою нынешнюю работу из-за возможностей личного и
                профессионального развития.
              </label>
            </div>
            <div class="right">
              <img src="assets/images/svg/computer-work.svg" alt="computer" />
            </div>
          </div>

          <div class="quote">“</div>
        </div>
      </div>

      <small class="result-subheading"
        >Ощущение, что в сутках не хватает часов, — распространенная проблема, с
        которой сталкиваются многие лидеры в этом мире.</small
      >

      <div class="btn-form">
        <div class="btn btn-primary btn-inline btn-lg">
          Подать заявку сейчас
        </div>
      </div>
    </div>
  </section>

  <section id="plans" class="block plans">
    <div class="container">
      <div class="heading short-border">
        <strong>Цены подойдут для каждого!</strong>
      </div>

      <small
        >Мы сотрудничаем как с центрами, так и с индивидульными
        преподавателями.<br />Выберите план, который больше всего для вас
        подходит.</small
      >

      <div class="plans-row plans-slider">
        <div>
          <div class="plan secondary">
            <div class="title">
              <strong>Для педагога</strong>
            </div>
            <div class="price-block">
              <div class="currency">₽</div>
              <div class="cost">999</div>
              <div class="time">/m</div>
            </div>

            <ul class="includes">
              <li>1 бесплатный аккаунт учителя</li>
              <li>2 группы на 1 учителя</li>
              <li>15 участников на 1 группу</li>
              <li>1 рассылка</li>
              <li>1 рассылка Телеграм</li>
            </ul>

            <div class="btn btn-primary btn-lg">Получить для педагога</div>
          </div>
        </div>

        <div>
          <div class="plan">
            <div class="title">
              <strong>Для группы</strong>
            </div>
            <div class="price-block">
              <div class="currency">₽</div>
              <div class="cost">1999</div>
              <div class="time">/m</div>
            </div>

            <ul class="includes">
              <li>3 бесплатных аккаунта учителей</li>
              <li>3 группы на 1 учителя</li>
              <li>15 участников на 1 группу</li>
              <li>2 рассылки</li>
              <li>1 рассылка Телеграм</li>
            </ul>

            <div class="btn btn-primary-light btn-lg">Получить для группы</div>
          </div>
        </div>

        <div>
          <div class="plan secondary">
            <div class="title">
              <strong>Для центра</strong>
            </div>
            <div class="price-block">
              <div class="currency">₽</div>
              <div class="cost">4499</div>
              <div class="time">/m</div>
            </div>

            <ul class="includes">
              <li>10 бесплатных аккаунта учителей</li>
              <li>5 групп на 1 учителя</li>
              <li>25 участников на 1 группу</li>
              <li>10 рассылок</li>
              <li>10 рассылок Телеграм</li>
            </ul>

            <div class="btn btn-primary btn-lg">Получить для центра</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="block send-first">
    <div class="container">
      <h1>Сделайте первый шаг</h1>
      <span
        ><h1>
          Учите
          <h1 class="offline">оффлайн</h1>
          <h1>онлайн</h1>
        </h1></span
      >
      <div>
        <div class="btn btn-primary btn-inline btn-lg">
          Попробовать бесплатно
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="block about">
    <div class="container">
      <div class="heading short-border short-border__left-align">
        <strong>О нас</strong>
      </div>

      <p class="description">
        Мы платформа, которая предоставит вам возможность обучаться IT
        технологиям, ментальной арифметике и чтению. Просто представьте, вы
        обучайтесь программированию онлайн и используйте для написания кода одну
        программу, в то время общаетесь с учителем в другой программе для видео
        конференций, для выполнения домашний заданий вы уже используйте другую
        программу для отслеживания выполнения задач и для связи с преподавателем
        или руководителем использовуйте какую-либо социальную сеть. И при всём
        при этом ваш ноутбук для обучения не так силён чтобы одновременно
        использовать 4-7 программ.
      </p>

      <p class="list-title">
        Чтобы эфективно и быстро обучаться и при этом получать удовольствие от
        процесса вам нужно пять вещей
      </p>

      <ul class="points">
        <li>
          Всё в одном месте - конференции, задания, практика с теорией и связь.
        </li>
        <li>Простой но при этом функциональный интерфейс</li>
        <li>Возможность обучаться со всех видов устройств</li>
        <li>Стабильность и отслеживание статистики и успехов</li>
        <li>Умная и удобная система оплаты</li>
      </ul>

      <p class="description">
        MindClick - платформа созданная для учеников и руководителей, чтобы
        помочь не тратить время в поисках информации и инструментов для
        обучения. Благодаря автоматизации многих задач вы скоро повысите свою
        эфективность обучения и будете проводить высококлассные и
        суперэффективные совещания.
      </p>
    </div>
  </section>

  <section id="app" class="send-form">
    <div class="left">
      <h1 class="app-heading">
        Мы все знаем, что время это деньги... тогда хватить зря тратить время и
        учитесь онлайн
      </h1>
    </div>

    <div class="right">
      <form action="" id="app-form" class="grid-inputs">
        <input required type="text" name="name" placeholder="Имя" />
        <input required type="text" name="lastName" placeholder="Фамилия" />
        <input required type="text" name="email" placeholder="Почта" />
        <input required type="text" name="phone" placeholder="Телефон" />

        <textarea
          required
          name="message"
          placeholder="Напишите своё сообщение"
        ></textarea>

        <button type="submit" class="btn btn-primary">Отправить</button>
      </form>
    </div>
  </section>

  <?php @include('template-parts/footer.php') ?>
</main>
