<?php session_start(); ?>







<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/component6.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bahnschrift:wght@300;400&display=swap"
    />
    <title>Услуги</title>
  </head>
  <body>
    <div class="services1">
      <div class="footer5">
        <div class="footer-child2"></div>
        <img class="icon9" id="logo" alt="" src="./image/-22.svg" id="node" />

        <div class="div116" id="text">Галерея</div>
        <div class="div117" id="text1">Услуги</div>
        <div class="div118" id="text2">Портфолио</div>
        <div class="div119" id="text3">О нас</div>
        <div class="div120" id="text4">Контакты</div>
        <div class="div121">
          <span class="txt9">
            <p class="p29">Художественная татуировка</p>
            <p class="p29">Коррекция</p>
          </span>
        </div>
        <div class="div122">+7 977 777 55 444</div>
        <div class="inkharmonygmailcom5">inkharmony@gmail.com</div>
      </div>
      <div class="table">
        <div class="table-child"></div>
        <div class="div123">Стажер с опытом</div>
        <div class="div124">Опытный мастер</div>
        <div class="div125">ТОП мастер</div>
        <div class="div126">Художественная татуировка</div>
        <div class="div127">Исправление татуриовки</div>
        <div class="div128">Разработка эскиза</div>
        <div class="div129">Минимальная стоимость за сеанс татуировки</div>
        <div class="div130">2000р./1 час</div>
        <div class="div131">2000р./1 час</div>
        <div class="div132">2000р./1 час</div>
        <div class="div133">1500р./1 час</div>
        <div class="div134">3000р./1 час</div>
        <div class="div135">3000р./1 час</div>
        <div class="div136">3000р./1 час</div>
        <div class="div137">2000р./1 час</div>
        <div class="div138">4000р./1 час</div>
        <div class="div139">4000р./1 час</div>
        <div class="div140">4000р./1 час</div>
        <div class="div141">3000р./1 час</div>
        <div class="div142">
          Стоимость татуировки в тату салоне от 2000 рублей
        </div>
      </div>
      <div class="table-del">
        <div class="table-del-child"></div>
        <div class="div143">Стажер с опытом</div>
        <div class="div144">Размер татуировки:</div>
        <div class="div145">Опытный мастер</div>
        <div class="div146">ТОП мастер</div>
        <div class="div147">до 3 см2</div>
        <div class="div148">от 4-5 см2</div>
        <div class="div149">от 5-10 см2</div>
        <div class="div150">от 10 см2</div>
        <div class="div151">750 руб.</div>
        <div class="div152">225 руб./см2</div>
        <div class="div153">200 руб./см2</div>
        <div class="div154">170 руб./см2</div>
        <div class="div155">1500 руб.</div>
        <div class="div156">450 руб./см2</div>
        <div class="div157">400 руб./см2</div>
        <div class="div158">350 руб./см2</div>
        <div class="div159">3000 руб.</div>
        <div class="div160">560 руб./см2</div>
        <div class="div161">435 руб./см2</div>
        <div class="div162">435 руб./см2</div>
        <div class="div142">Стоимость удаления татуировки за сеанс</div>
      </div>
      <div class="div164">
        <p class="p29">Татуировка от 2 000 руб.</p>
        <p class="p29">
          Чтоб рассчитать стоимость напишите нам нажав на иконку ниже, это
          бесплатно
        </p>
      </div>
      <div class="div165">Услуги</div>
      <div class="header5">
        <div class="header-child3" data-scroll-to="rectangle"></div>
        <div class="div166" id="text50">Галерея</div>
        <div class="div167" id="text51">Услуги</div>
        <div class="div168" id="text52">Портфолио</div>
        <div class="div169" id="text53">О нас</div>
        <div class="div170" id="text54">Контакты</div>
        <img class="icon10" id="logo" alt="" src="./image/2.svg" id="node1" />



        <img
          class="mdi-lightaccount-icon5"
          alt=""
          src="./image/mdilightaccount4.svg"
          id="mdiLightaccount"
        />

      </div>
    </div>


    <script>
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
        text1.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangle']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var logo = document.getElementById("logo");
      if (logo) {
        logo.addEventListener("click", function (e) {
          window.location.href = "./index.php";
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
        text4.addEventListener("click", function (e) {
          window.location.href = "./component2.php";
        });
      }
      
      var text50 = document.getElementById("text50");
      if (text50) {
        text50.addEventListener("click", function (e) {
          window.location.href = "./component7.php";
        });
      }
      
      var text51 = document.getElementById("text51");
      if (text51) {
        text51.addEventListener("click", function (e) {
          window.location.href = "component6.php";
        });
      }
      
      var text52 = document.getElementById("text52");
      if (text52) {
        text52.addEventListener("click", function (e) {
          window.location.href = "./component4.php";
        });
      }
      
      var text53 = document.getElementById("text53");
      if (text53) {
        text53.addEventListener("click", function (e) {
          window.location.href = "./component3.php";
        });
      }
      
      var text54 = document.getElementById("text54");
      if (text54) {
        text54.addEventListener("click", function (e) {
          window.location.href = "./component2.php";
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
      
      var text55 = document.getElementById("text55");
      if (text55) {
        text55.addEventListener("click", function () {
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
      
      var text56 = document.getElementById("text56");
      if (text56) {
        text56.addEventListener("click", function () {
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
