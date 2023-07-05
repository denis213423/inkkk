<?php session_start();

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./css/global.css" />
  <link rel="stylesheet" href="./css/component5.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bahnschrift:wght@300;400&display=swap" />
  <title>Личный кабинет</title>

</head>

<body>
  <?php include('form-reg-auth.php') ?>
  <?php include('zapis.php') ?>
  <div class="lichka">
    <div class="footer4">
      <div class="footer-child1"></div>
      <img class="icon7" id="logo" alt="" src="./image/-2.svg" id="node" />

      <div class="div94" id="text">Галерея</div>
      <div class="div95" id="text1">Услуги</div>
      <div class="div96" id="text2">Портфолио</div>
      <div class="div97" id="text3">О нас</div>
      <div class="div98" id="text4">Контакты</div>
      <div class="div99">
        <span class="txt8">
          <p class="p27">Художественная татуировка</p>
          <p class="p27">Коррекция</p>
        </span>
      </div>
      <div class="div100">+7 977 777 55 444</div>
      <div class="inkharmonygmailcom4">inkharmony@gmail.com</div>
    </div>




    <?php

    // Подключение к базе данных 
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ink";
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if (isset($_SESSION['email'])) {
      $userId = $_SESSION['email'];


      // SQL-запрос для получения данных пользователя из таблицы "users" 
      $query = "SELECT name, email FROM users WHERE email = '$userId' ";

      // Выполнение запроса к базе данных 
      $result = $conn->query($query);

      // Проверка наличия данных 
      if ($result && $result->num_rows > 0) {
        // Получение данных пользователя из результата запроса 
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $name = $row['name']; // Получение имени пользователя
    
        ?>

        <!-- Вывод данных пользователя в элементы с классом "profile-info" -->
        <?php
        $email = $_SESSION['email'];

        // Получение значения роли пользователя из базы данных на основе почты (пример)
        $sql = "SELECT role FROM users WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $role = $row['role'];
        } else {
          $role = 0; // Если роль не найдена или возникла ошибка, устанавливаем значение по умолчанию
        }

        // Генерация HTML-кода с кнопкой на основе значения роли
        ?>

        <div class="profile-info">
          <div class="profile-info-t-block">
            <p class="profile-info-t">Имя:
              <?php echo $name; ?>
            </p>
            <p class="profile-info-t">Почта:
              <?php echo $email; ?>
            </p>
            
            <a href="./php/logout.php">Выход</a>

            <?php
            // Проверка значения роли и добавление кнопки при необходимости
            if ($role == 1) {
              echo '<button onclick="openAdminProfile()">Админ профиль</button>';
            }
            ?>

          </div>
          <div class="div107">
            <button onclick="openModal2()">Запись</button>
            <img class="ava-icon" alt="" src="./image/ellipse-1@2x.png" />
          </div>
        </div>

        <?php
        // Закрытие соединения с базой данных (пример)
        $conn->close();
        ?>

        <?php
      }
    }
    ?>

    <div class="div108">Личный кабинет</div>
    <div class="header4">
      <div class="header-child2" data-scroll-to="rectangle">
        <div class="div109" id="text15">Галерея</div>
        <div class="div110" id="text16">Услуги</div>
        <div class="div111" id="text17">Портфолио</div>
        <div class="div112" id="text18">О нас</div>
        <div class="div113" id="text19">Контакты</div>
        <img class="icon8" id="logo" alt="" src="./image/-2.svg" id="node1" />
        <img class="mdi-lightaccount-icon4" alt="" src="./image/mdilightaccount3.svg" id="mdiLightaccount" />
        <button class="div115" onclick="openModal()">Войти</button>
      </div>
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
      text4.addEventListener("click", function (e) {
        window.location.href = "./component2.php";
      });
    }

    var text15 = document.getElementById("text15");
    if (text15) {
      text15.addEventListener("click", function (e) {
        window.location.href = "./component7.php";
      });
    }

    var text16 = document.getElementById("text16");
    if (text16) {
      text16.addEventListener("click", function (e) {
        window.location.href = "./component6.php";
      });
    }

    var text17 = document.getElementById("text17");
    if (text17) {
      text17.addEventListener("click", function (e) {
        window.location.href = "./component4.php";
      });
    }

    var text18 = document.getElementById("text18");
    if (text18) {
      text18.addEventListener("click", function (e) {
        window.location.href = "./component3.php";
      });
    }

    var text19 = document.getElementById("text19");
    if (text19) {
      text19.addEventListener("click", function (e) {
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
      mdiLightaccount.addEventListener("click", function () {
        var anchor = document.querySelector("[data-scroll-to='rectangle']");
        if (anchor) {
          anchor.scrollIntoView({
            block: "start",
            behavior: "smooth"
          });
        }
      });
    }

    var text20 = document.getElementById("text20");
    if (text20) {
      text20.addEventListener("click", function () {
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
  </script>

  <script>
    function openAdminProfile() {
      // Перенаправление на страницу админ панели
      window.location.href = "admin_profile.php";
    }

   
  </script>
</body>

</html>