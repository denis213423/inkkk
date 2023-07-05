

<!DOCTYPE html>
<html>

<head>
    <title>Запись</title>
    <style>
        .modal2 {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content2 {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 300px;
        }

        .close2 {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close2:hover,
        .close2:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        h2 {
            text-align: center;
        }

        input {

            background-color: #d6d6d6;
            width: 150px;
            height: 25px;
            border: 0;

        }
    </style>
</head>

<body>


    <div id="modal" class="modal2">
        <div class="modal-content2">
            <span class="close2" onclick="closeModal2()">&times;</span>
            <h2>Запись</h2>
            <form method="post" action="./php/zapic.php">
                <div class="contt">
                    <label for="date">Дата записи:</label>
                    <input type="date" id="date" name="date" required><br>
                    <label for="time">Время назначения:</label>
                    <input type="time" id="time" name="time" required><br>
                    <input type="submit" value="Записаться">
                </div>
            </form>
        </div>
    </div>


    <script>
        function openModal2() {
            document.getElementById("modal").style.display = "block";
        }

        function closeModal2() {
            document.getElementById("modal").style.display = "none";
        }
    </script>
</body>

</html>