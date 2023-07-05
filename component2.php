<?php session_start(); ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/component2.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bahnschrift:wght@300;400&display=swap"
    />
    <title>Контакты</title>

  </head>
  <body>
    <div class="contacts">
      <div class="footer1">
        <div class="footer-item"></div>
        <img class="icon1" id="logo" alt="" src="./image/-2.svg" id="node" />

        <div class="div39" id="text">Галерея</div>
        <div class="div40" id="text1">Услуги</div>
        <div class="div41" id="text2">Портфолио</div>
        <div class="div42" id="text3">О нас</div>
        <div class="div43" id="text4">Контакты</div>
        <div class="div44">
          <span class="txt3">
            <p class="p6">Художественная татуировка</p>
            <p class="p6">Коррекция</p>
          </span>
        </div>
        <div class="div45">+7 977 777 55 444</div>
        <div class="inkharmonygmailcom1">inkharmony@gmail.com</div>
      </div>
      <div class="connection1">
        <img class="icon-call1" alt="" src="./image/-icon-call.svg" />

        <img class="icon-location1" alt="" src="./image/-icon-location.svg" />

        <div class="div46">Наши контакты</div>
        <div class="div47">
          <span class="txt3">
            <p class="p6">
              Наша студия открывается ежедневно с 11:00 и работает до 22:00.
            </p>
            <p class="p6">Выберите удобный способ связи и свяжитесь с нами.</p>
          </span>
        </div>
        <div class="div48">+7 977 777 55 44</div>
        <div class="div49">г. Москва, ул. Арбат, д. 50, кв. 33</div>
        <div class="inkharmonygmaicom1">inkharmony@gmai.com</div>
        <div class="gps">
          <script
           
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A95afcd9d8fb28f2f145b94debb255f039342d6a6b9d0df3229fc0676bdc92bd0&amp;width=1058&amp;height=400&amp;lang=ru_RU&amp;scroll=true"
          ></script>
        </div>
        <img class="image-11-icon1" alt="" src="./image/image-11@2x.png" />

        <div class="div50">График работы</div>
        <div class="div51">
          <span class="txt3">
            <p class="p6">Понедельник: 11:00 – 23:00</p>
            <p class="p6">Вторник: 11:00 – 23:00</p>
            <p class="p6">Среда: 11:00 – 23:00</p>
            <p class="p6">Четверг: 11:00 – 23:00</p>
            <p class="p6">Пятница: 11:00 – 23:00</p>
            <p class="p6">Суббота: 11:00 – 23:00</p>
            <p class="p6">Воскресенье: 11:00 – 23:00</p>
          </span>
        </div>
        <img class="image-13-icon" alt="" src="./image/image-13@2x.png" />
      </div>
      <div class="header1">
        <div class="header-item" data-scroll-to="rectangle"></div>
        <div class="div52" id="text13">Галерея</div>
        <div class="div53" id="text14">Услуги</div>
        <div class="div54" id="text15">Портфолио</div>
        <div class="div55" id="text16">О нас</div>
        <div class="div56" id="text17">Контакты</div>
        <img class="icon2" id="logo" alt="" src="./image/-2.svg" id="node1" />

  
        <img
          class="mdi-lightaccount-icon1"
          alt=""
          src="./image/mdilightaccount.svg"
          id="mdiLightaccount"
        />

      </div>
    </div>

    <script>

var logo = document.getElementById("logo");
      if (logo) {
        logo.addEventListener("click", function (e) {
          window.location.href = "./index.php";
        });
      }


      var node = document.getElementById("node");
      if (node) {
        node.addEventListener("click", function (e) {
          window.location.href = "/";
        });
      }
      
      var text = document.getElementById("text");
      if (text) {
        text.addEventListener("click", function (e) {
          window.location.href = "./component7.php";
        });
      }
      
      var text1 = document.getElementById("text1");
      if (text1) {
        text1.addEventListener("click", function (e) {
          window.location.href = "./component6.php";
        });
      }
      
      var text2 = document.getElementById("text2");
      if (text2) {
        text2.addEventListener("click", function (e) {
          window.location.href = "./component4.php";
        });
      }
      
      var text3 = document.getElementById("text3");
      if (text3) {
        text3.addEventListener("click", function (e) {
          window.location.href = "./component3.php";
        });
      }
      
      var text4 = document.getElementById("text4");
      if (text4) {
        text4.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangle']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var text13 = document.getElementById("text13");
      if (text13) {
        text13.addEventListener("click", function (e) {
          window.location.href = "./component7.php";
        });
      }
      
      var text14 = document.getElementById("text14");
      if (text14) {
        text14.addEventListener("click", function (e) {
          window.location.href = "./component6.php";
        });
      }
      
      var text15 = document.getElementById("text15");
      if (text15) {
        text15.addEventListener("click", function (e) {
          window.location.href = "./component4.php";
        });
      }
      
      var text16 = document.getElementById("text16");
      if (text16) {
        text16.addEventListener("click", function (e) {
          window.location.href = "./component3.php";
        });
      }
      
      var text17 = document.getElementById("text17");
      if (text17) {
        text17.addEventListener("click", function (e) {
          window.location.href = "component2.php";
        });
      }
      
      var node1 = document.getElementById("node1");
      if (node1) {
        node1.addEventListener("click", function (e) {
          window.location.href = "/";
        });
      }
      
      var mdiLightaccount = document.getElementById("mdiLightaccount");
      if (mdiLightaccount) {
        mdiLightaccount.addEventListener("click", function (e) {
          window.location.href = "./component5.php";
        });
      }
      
      var text18 = document.getElementById("text18");
      if (text18) {
        text18.addEventListener("click", function () {
          var popup = document.getElementById("regContainer");
          if (!popup) return;
          var popupStyle = popup.style;
          if (popupStyle) {
            popupStyle.display = "flex";
            popupStyle.zIndex = 100;
            popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
            popupStyle.alignItems = "center";
            popupStyle.justifyContent = "center";
          }
          popup.setAttribute("closable", "");
      
          var onClick =
            popup.onClick ||
            function (e) {
              if (e.target === popup && popup.hasAttribute("closable")) {
                popupStyle.display = "none";
              }
            };
          popup.addEventListener("click", onClick);
        });
      }
      
      var text19 = document.getElementById("text19");
      if (text19) {
        text19.addEventListener("click", function () {
          var popup = document.getElementById("vhodContainer");
          if (!popup) return;
          var popupStyle = popup.style;
          if (popupStyle) {
            popupStyle.display = "flex";
            popupStyle.zIndex = 100;
            popupStyle.backgroundColor = "rgba(113, 113, 113, 0.3)";
            popupStyle.alignItems = "center";
            popupStyle.justifyContent = "center";
          }
          popup.setAttribute("closable", "");
      
          var onClick =
            popup.onClick ||
            function (e) {
              if (e.target === popup && popup.hasAttribute("closable")) {
                popupStyle.display = "none";
              }
            };
          popup.addEventListener("click", onClick);
        });
      }
      </script>
  </body>
</html>
