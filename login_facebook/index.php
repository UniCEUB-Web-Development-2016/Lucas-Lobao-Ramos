<!DOCTYPE html>
<html>
    <meta><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <head>
        <title>Facebook</title>
    </head>
    <body>
    <form action="controller.php" method="post">
        <fieldset>
            <label for="name">Nome:</label>
            <input name="name" type="text" id="name"/><br>
            <label for="Email">Email:</label>
            <input name="Email" type="text" id="email"/><br>
            <label for="password">Senha:</label>
            <input name="password" type="password" id="password"/><br>
            <label for="birthday">Data de Aniversário:</label>
            <input type="date" id="birthday" name="birthday"><br>
            Gender:<input type="radio" name="iq" value="male" required="">Male
            <input type="radio" name="iq" value="female" required="">Female<br>
        </fieldset>

        <?php
        /**
         * Created by PhpStorm.
         * User: wanderson
         * Date: 08/03/2016
         * Time: 21:35
         */
        ?>
    </body>
    <input type="submit" name="upload_btn" value="Submit!" style="margin-top: 5px">
    </form>
</html>
