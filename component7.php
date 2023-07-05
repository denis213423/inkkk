<?php session_start(); ?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./css/global.css" />
  <link rel="stylesheet" href="./css/component7.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bahnschrift:wght@300;400&display=swap" />
  <title>Галлерея</title>

</head>

<body>
  <div class="gallery1">
    <div class="footer6">
      <div class="footer-child3"></div>
      <img class="icon11" id="logo" alt="" src="./image/-23.svg" id="node" />

      <div class="div173" id="text">Галерея</div>
      <div class="div174" id="text1">Услуги</div>
      <div class="div175" id="text2">Портфолио</div>
      <div class="div176" id="text3">О нас</div>
      <div class="div177" id="text4">Контакты</div>
      <div class="div178">
        <span class="txt10">
          <p class="p33">Художественная татуировка</p>
          <p class="p33">Коррекция</p>
        </span>
      </div>
      <div class="div179">+7 977 777 55 444</div>
      <div class="inkharmonygmailcom6">inkharmony@gmail.com</div>
    </div>

    <?php
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ink";
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
      die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }


    $sql = "SELECT filename, original_filename FROM gallery";
    $result = $conn->query($sql);
    ?>

    <div class="foto-block">
      <?php
      // Проверка наличия фотографий в базе данных
      if ($result->num_rows > 0) {
        // Вывод фотографий
        while ($row = $result->fetch_assoc()) {
          $filename = $row['filename'];
          $originalFilename = $row['original_filename'];

          // Проверка наличия значения original_filename
          if (!empty($originalFilename)) {
            $imagePath = "gallery/" . $originalFilename;
          } else {
            $imagePath = "gallery/" . $filename;
          }
          ?>
          <div class="foto-block-item">
            <img class="image-item" src="<?php echo $imagePath; ?>" alt="">
          </div>
          <?php
        }
      } else {
        echo "Нет фотографий для отображения.";
      }
      ?>
    </div>

    <?php
    $conn->close();
    ?>
  </div>


  </div>
  <div class="div180">Галерея</div>
  <div class="header6">
    <div class="header-child4" data-scroll-to="rectangle"></div>
    <div class="div181" id="text8">Галерея</div>
    <div class="div182" id="text9">Услуги</div>
    <div class="div183" id="text10">Портфолио</div>
    <div class="div184" id="text11">О нас</div>
    <div class="div185" id="text12">Контакты</div>
    <img class="icon12" id="logo" alt="" src="./image/3.svg" id="node1" />

    <img class="mdi-lightaccount-icon6" alt="" src="./image/mdilightaccount5.svg" id="mdiLightaccount" />

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
      text.addEventListener("click", function () {
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
      text4.addEventListener("click", function (e) {
        window.location.href = "./component2.php";
      });
    }

    var text8 = document.getElementById("text8");
    if (text8) {
      text8.addEventListener("click", function (e) {
        window.location.href = "./component7.php";
      });
    }

    var text9 = document.getElementById("text9");
    if (text9) {
      text9.addEventListener("click", function (e) {
        window.location.href = "./component6.php";
      });
    }

    var text10 = document.getElementById("text10");
    if (text10) {
      text10.addEventListener("click", function (e) {
        window.location.href = "./component4.php";
      });
    }

    var text11 = document.getElementById("text11");
    if (text11) {
      text11.addEventListener("click", function (e) {
        window.location.href = "./component3.php";
      });
    }

    var text12 = document.getElementById("text12");
    if (text12) {
      text12.addEventListener("click", function (e) {
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

    var text13 = document.getElementById("text13");
    if (text13) {
      text13.addEventListener("click", function () {
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

    var text14 = document.getElementById("text14");
    if (text14) {
      text14.addEventListener("click", function () {
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