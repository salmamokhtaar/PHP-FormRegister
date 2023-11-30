<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling in PHP</title>
    <style>
        pre {font-family: times new roman;}
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Online form:</legend>
            <label for="">First name:</label>
            <input type="text" name="fname" id="" placeholder="magacaada qor" autocomplete="off">
            <label for="">Last name:</label>
            <input type="text" name="lname" id="" placeholder="Adoogaa qor">
            <br>
            <!-- <label for="">Password:</label>
            <input type="password" name="password" id=""> -->
            <label for="">Sex:</label>
            <input type="radio" name="sex" id="" value="male" checked>Male
            <input type="radio" name="sex" id="" value="female">Female
            <br>
            <label for="">Faculties:</label>
            <input type="checkbox" name="faculties[]" id="" value="faculty of Computer sciences">Faculty of Computer 
            <input type="checkbox" name="faculties[]" id="" value="faculty of education">Waxbarashada
            <input type="checkbox" name="faculties[]" id="" value="Faculty of Sharica and Law">كلية الشريعة والقانون
            <input type="checkbox" name="faculties[]" id="" value="faculty of medicne">Dawayta
            <br>
            <label for="">Place of birth:</label>
            <select name="pob" id="">
                <option value="">choose a city</option>
                <option value="Mogadishu">Muqdisho</option>
                <option value="Hargeysa">Hargisa</option>
                <option value="Kismayo">Kismayo</option>
                <option value="Burca">Burco</option>
                <option value="Baydhaba">Baydhaba Jannaay</option>
                <option value="Marka">Marka Caddey</option>
                <option value="Beledweyne">B/weyne</option>
                <option value="Galkacyo">Galkacyo</option>
            </select>
            <br>
            <label for="">Date of birth:</label>
            <input type="date" name="dob" id="" min ="1900-01-01" max = "2008-01-01">
            <br>
            <label for="">Recidency (goobta deegaanka):</label> <br>
            <select name="recidency[]" id="" multiple size = "3">
                <!-- <option value="">choose a city</option> -->
                <option value="Mogadishu" selected>Muqdisho</option>
                <option value="Hargeysa">Hargisa</option>
                <option value="Kismayo">Kismayo</option>
                <option value="Burca">Burco</option>
                <option value="Baydhaba">Baydhaba Jannaay</option>
                <option value="Marka">Marka Caddey</option>
                <option value="Beledweyne">B/weyne</option>
                <option value="Galkacyo">Galkacyo</option>
            </select>
            <br>
            <label for="">Upload your photo:</label>
            <input type="file" name="photo" id="" accept="image/*">
            <br>
            <label for="">Leave comment:</label> <br>
            <textarea name="tarea" id="" cols="30" rows="10">Mudane/Marwo</textarea>
            <br>
            <br>
            <input type="reset" name="" id="" value="Clear data">
            <input type="submit" name="submit" id="" value="Send data">
        </fieldset>
    </form>
    <?php
        if (isset($_POST['submit'])) {
            echo ("<br>Form data is ready to be printed.");
            if (!empty($_POST['fname']))
                echo ("<br>First name is: ". $_POST['fname']);
            if (!empty($_POST['lname']))
                echo ("<br>Last name is: ". $_REQUEST['lname']);
            // if (!empty($_POST['password']))
            //     echo ("<br>Password is: ". $_POST['password']);
            if (!empty($_POST['sex']))
                echo ("<br>Your sex is: ". $_POST['sex']);
            if (!empty($_POST['faculties'])) {
                echo ("<br>You have choosen ". count($_POST['faculties']). " faculties:<br>");
                foreach ($_POST['faculties'] as $v)
                    echo ("$v, ");
            }
            if (!empty($_POST['pob']))
                echo ("<br>Place of birth is: ". $_POST['pob']);
            if (!empty($_POST['dob']))
                echo ("<br>Date of birth is: "). $_POST['dob'];
            if (!empty($_POST['recidency'])) {
                echo ("<br>Recidency cities are:<br>");
                foreach ($_POST['recidency'] as $v)
                    echo("$v, ");
            }
            echo ("<br>You valuable comment and suggesion is:<br><pre>". $_POST['tarea']. "</pre>");
            // upload files in php 
            echo ("<pre>");
            var_dump ($_FILES['photo']);
            echo ("</pre>");
            if (move_uploaded_file ($_FILES['photo']['tmp_name'], "Documents/". $_FILES['photo']['name']))
                echo ("<br>Your file has been uploaded successfully.");
            else
                echo ("<br>Nothing has been uploaded");
        }
    ?>
</body>
</html>