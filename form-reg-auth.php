

<!DOCTYPE html>
<html>
<head>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6LdNefMmAAAAAEhG4tDw6AH642c7ATtK22MpNL7j"></script>
<link rel="stylesheet" href="./css/global.css" />
  <style>
    body {
      background-color: #FFFFFF;
    }
    
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      width: 100%;
      height: auto;
      overflow: auto;
      margin: 0px auto;
      background-color: rgba(0, 0, 0, 0.4);
    }
    
    .modal-content {
    text-align: center;
      background-color: #FFFFFF;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 720px;
    }
    
    .close {
      color: #000000;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
    
    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    
    .tab-button {
      background-color: #000000;
      color: #FFFFFF;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      margin-right: 10px;
    }
    
    .tab-button:hover {
      background-color: #333333;
    }
    
    .active-tab {
      background-color: #333333;
    }
    
    .tab-content {
      display: none;
    }
    
    .tab-content.active {
      display: block;
    }

    input,
    button{
        margin-top: 10px;
    }

    input{
        background-color: #d6d6d6;
        width: 450px;
        height: 70px;
        border: 0;
    }
    .button1{
        width: 450px;
        height: 70px;
        background-color: #000000;
        color: #FFFFFF;
        --font-size-xl: 20px;
      
    }
    h2{
      font-size: var(--font-size-21xl);
    }
  </style>
</head>
<body>

<?php include('./php/reg.php') ?>
<?php include('./php/auth.php') ?>



  <div id="form" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      
      <div class="tab-buttons">
        <button class="tab-button active-tab" onclick="switchTab(event, 'login')">Вход</button>
        <button class="tab-button" onclick="switchTab(event, 'registration')">Регистрация</button>
      </div>
      
      <div id="login" class="tab-content active">
        <h2>Вход</h2>
        <form method="post" action="./php/auth.php">
        <input type="email" name="loginEmail" placeholder="Введите почту" required><br>
        <input type="password" name="loginPassword" placeholder="Введите пароль" required><br>
        <button class="button1" name="login">Войти</button>
      </form>
      </div>
      
      <div id="registration" class="tab-content">
        <h2>Регистрация</h2>
        <form method="post" action="./php/reg.php">
        <input type="username" name="registerName" placeholder="Введите Имя" required><br>
        <input type="email" name="registerEmail" placeholder="Введите почту" required><br>
        <input type="password" name="registerPassword" placeholder="Введите пароль" required><br>
        <button class="button1" name="register">Зарегистрироваться</button>
      </form>
      </div>
      
    </div>
  </div>



  <script>
    var modal = document.getElementById("form");
    
    function openModal() {
      modal.style.display = "block";
    }
    
    function closeModal() {
      modal.style.display = "none";
    }
    
    function switchTab(event, tabName) {
      var i, tabContent, tabButtons
      tabContent = document.getElementsByClassName("tab-content");
      tabButtons = document.getElementsByClassName("tab-button");
      
      // Скрываем все вкладки и убираем активный класс у кнопок
      for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
      }
      
      for (i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove("active-tab");
      }
      
      // Отображаем выбранную вкладку и добавляем активный класс кнопке
      document.getElementById(tabName).style.display = "block";
      event.currentTarget.classList.add("active-tab");
    }
  </script>
<script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LdNefMmAAAAAEhG4tDw6AH642c7ATtK22MpNL7j', {action: 'LOGIN'});
      // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
      // reCAPTCHA Enterprise to the end user's browser.
      // This token must be validated by creating an assessment.
      // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
    });
  }
</script>
</body>
</html>






