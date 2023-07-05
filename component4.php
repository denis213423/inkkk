<?php session_start(); ?>







<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/component4.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bahnschrift:wght@300;400&display=swap"
    />
    <title>Портфолио</title>

  </head>
  <body>
    <div class="portfolio">
      <div class="footer3">
        <div class="rectangle-div"></div>
        <img class="icon5" id="logo" alt="" src="./image/-2.svg" id="node" />

        <div class="div75" id="text">Галерея</div>
        <div class="div76">Услуги</div>
        <div class="div77" id="text2">Портфолио</div>
        <div class="div78" id="text3">О нас</div>
        <div class="div79" id="text4">Контакты</div>
        <div class="div80">
          <span class="txt7">
            <p class="p25">Художественная татуировка</p>
            <p class="p25">Коррекция</p>
          </span>
        </div>
        <div class="div81">+7 977 777 55 444</div>
        <div class="inkharmonygmailcom3">inkharmony@gmail.com</div>
      </div>
      <div class="hand">
        <div class="div82">Татуировки на руке</div>
        <img class="hand-child" alt="" src="./image/rectangle-9@2x.png" />

        <img class="hand-item" alt="" src="./image/rectangle-10@2x.png" />

        <img class="hand-inner" alt="" src="./image/rectangle-11@2x.png" />

        <img class="rectangle-icon" alt="" src="./image/rectangle-12@2x.png" />
      </div>
      <div class="chest">
        <div class="div82">Татуировки на груди</div>
        <img class="hand-child" alt="" src="./image/rectangle-17@2x.png" />

        <img class="hand-item" alt="" src="./image/rectangle-19@2x.png" />

        <img class="hand-inner" alt="" src="./image/rectangle-21@2x.png" />

        <img class="rectangle-icon" alt="" src="./image/rectangle-23@2x.png" />
      </div>
      <div class="back">
        <div class="div84">Татуировки на спине</div>
        <img class="hand-child" alt="" src="./image/rectangle-13@2x.png" />

        <img class="hand-item" alt="" src="./image/rectangle-14@2x.png" />

        <img class="hand-inner" alt="" src="./image/rectangle-15@2x.png" />

        <img class="rectangle-icon" alt="" src="./image/rectangle-16@2x.png" />
      </div>
      <div class="leg">
        <div class="div84">Татуировки на ноге</div>
        <img class="hand-child" alt="" src="./image/rectangle-18@2x.png" />

        <img class="hand-item" alt="" src="./image/rectangle-20@2x.png" />

        <img class="hand-inner" alt="" src="./image/rectangle-22@2x.png" />

        <img class="rectangle-icon" alt="" src="./image/rectangle-24@2x.png" />
      </div>
      <div class="div86">Наши работы</div>
      <div class="header3">
        <div class="header-child1" data-scroll-to="rectangle"></div>
        <div class="div87" id="text12">Галерея</div>
        <div class="div88" id="text13">Услуги</div>
        <div class="div89" id="text14">Портфолио</div>
        <div class="div90" id="text15">О нас</div>
        <div class="div91" id="text16">Контакты</div>
        <img class="icon6" id="logo" alt="" src="./image/1.svg" id="node1" />

    
        <img
          class="mdi-lightaccount-icon3"
          alt=""
          src="./image/mdilightaccount2.svg"
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
      
      var text2 = document.getElementById("text2");
      if (text2) {
        text2.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangle']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
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
      
      var text12 = document.getElementById("text12");
      if (text12) {
        text12.addEventListener("click", function (e) {
          window.location.href = "./component7.php";
        });
      }
      
      var text13 = document.getElementById("text13");
      if (text13) {
        text13.addEventListener("click", function (e) {
          window.location.href = "./component6.php";
        });
      }
      
      var text14 = document.getElementById("text14");
      if (text14) {
        text14.addEventListener("click", function (e) {
          window.location.href = "component4.php";
        });
      }
      
      var text15 = document.getElementById("text15");
      if (text15) {
        text15.addEventListener("click", function (e) {
          window.location.href = "./component3.php";
        });
      }
      
      var text16 = document.getElementById("text16");
      if (text16) {
        text16.addEventListener("click", function (e) {
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
      
      var text17 = document.getElementById("text17");
      if (text17) {
        text17.addEventListener("click", function () {
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
      
      var text18 = document.getElementById("text18");
      if (text18) {
        text18.addEventListener("click", function () {
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
