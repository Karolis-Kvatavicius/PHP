<head>
        <meta charset="utf-8">
        <title>Lesson5</title>
        <style media="screen">
            table, tr, td { border: 1px solid #000; }
        </style>
    </head>

    <body>

<table>
    <!-- <tr> table row - lentelės eilutė -->
    <tbody><tr>
        <!-- <td> table data - lentelės stulpelis/duomenys -->
        <td>1</td>
        <td>Row 1, Cell 1</td>
        <td>Row 1, Cell 2</td>
        <td>Row 1, Cell 3</td>
    </tr>

    <tr>
        <td>2</td>
        <td>Row 2, Cell 1</td>
        <td>Row 2, Cell 2</td>
        <td>Row 2, Cell 3</td>
    </tr>

    <tr>
        <td>3</td>
        <td>Row 3, Cell 1</td>
        <td>Row 3, Cell 2</td>
        <td>Row 3, Cell 3</td>
    </tr>
</tbody></table>

<table>
    <!-- table head - lentelės antraštė,
        paaiškinimai apie stulpelis -->
    <thead>
        <tr>
            <!-- table head - lentelės antraštė -->
            <th>#</th>
            <th>Suma</th>
            <th>Klientas</th>
        </tr>
    </thead>
    <!-- table body - lentelės "kūnas" pagrindiniai duomenys -->
    <tbody>
        <tr>
            <td>1</td>
            <td>200$</td>
            <td>Viktoras</td>
        </tr>
        <tr>
            <td>2</td>
            <td>400$</td>
            <td>Viktoras</td>
        </tr>
    </tbody>
    <!-- table foot - lentelės apatinė dalis -->
    <tfoot>
        <tr>
            <!-- colspan - pasako kiek stulpelių užiims-->
            <td colspan="3">Viso 2 klientai, pilna suma 600$</td>
        </tr>
    </tfoot>
</table>

<!-- action - nuoroda kur nukeliaus formos duomenis -->
<!-- jei action atributo nėra, duomenys nukeliaus į tą patį puslapį -->

<!-- method - pasakom, kaip siųsim duomenis: -->
<!-- 1. GET - yra matomi duomenys, vieši -->
<!-- 2. POST - paslėpti duomenys -->
<form action="http://google.com" method="GET">
    <!-- for - susieja "label" su "input" pagal jo id -->
    <label for="vardas">Vardas: </label>
    <!-- placeholder - "input" paaiškinimas vartotojui -->
    <input type="text" id="vardas" name="vardas" placeholder="Įveskite vardą">
    <p></p>
    <!-- <br> <!-- breakpoint - permeta - į kitą eilutę -->
    <label for="email">E-mail: </label>
    <input type="email" id="email" name="email" value="">
    <br>
    <label for="gender">Gender</label>
    <!-- select - pasirinkimų sąrašas -->
    <select id="gender" name="gender">
        <!-- value - keliauja į PHP / duomenų bazę -->
        <option value="female">Female</option>
        <!-- selected - pažymi pasirinkimą-->
        <option value="male" selected="">Male</option>
    </select>
    <br>
    <label for="message">Message</label>
    <!-- textarea - skirtas ilgesniem tekstam/žinutėm -->
    <!-- rows - nusako aukštį -->
    <!-- cols - nusako plotį -->
    <textarea id="message" name="name" rows="2" cols="20"></textarea>
    <br>
    <label>Nationality</label>
    <!-- name - susieja radio mygtukus -->
    <!-- gali būti tik vienas iš trijų pasirinkimų -->
    <input type="radio" name="nat" value="lt"> Lithuanian
    <input type="radio" name="nat" value="en"> English
    <input type="radio" name="nat" value="ru"> Russian
    <br>
    <label>Services</label>
    <!-- checkbox - galima keletą atsakymų sužymėti -->
    <input type="checkbox" name="design" value="yes"> Web Design
    <input type="checkbox" name="development" value="yes"> Web Development
    <input type="checkbox" name="seo" value="yes"> SEO

    <input type="password" name="password">
    <br>
    <!-- <a href="current.html">Cancel</a> -->
    <!-- 1. Pirmas variantas išsiuntimo mygtuko -->
    <!-- type privalo būti "submit" -->
    <button type="submit" name="button">Išsiųsti</button>
    <!-- 2. Antras variantas išsiuntimo mygtuko -->
    <!-- <input type="submit" name="button" value="Išsiųsti"> -->
</form>



<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
Name: <input type="text" name="name" value="<?php echo $name;?>">

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

Website: <input type="text" name="website" value="<?php echo $website;?>">

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
</body>