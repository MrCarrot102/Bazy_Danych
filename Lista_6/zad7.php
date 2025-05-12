<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = htmlspecialchars($_POST['fname'] ?? '');
    $lname = htmlspecialchars($_POST['lname'] ?? '');
    $year = htmlspecialchars($_POST['year'] ?? 'nieznany');

    $subjects = $_POST['subjects'] ?? [];
    $interests = $_POST['interests'] ?? [];

    echo "<h2>Podsumowanie:</h2>";
    echo "Student <strong>$year</strong> roku <strong>$fname $lname</strong>";

    if (!empty($subjects)) {
        echo " lubi zajęcia z <strong>" . implode(", ", array_map('htmlspecialchars', $subjects)) . "</strong>";
    } else {
        echo " nie wskazał ulubionych przedmiotów";
    }

    if (!empty($interests)) {
        echo ", a w wolnym czasie uprawia <strong>" . implode(", ", array_map('htmlspecialchars', $interests)) . "</strong>.";
    } else {
        echo ", ale nie podał żadnych zainteresowań.";
    }
} else {
?>

<form method="post">
    <label>Imię: <input type="text" name="fname" required></label><br><br>
    <label>Nazwisko: <input type="text" name="lname" required></label><br><br>

    <label>Zainteresowania:</label><br>
    <label><input type="checkbox" name="interests[]" value="sport"> Sport</label><br>
    <label><input type="checkbox" name="interests[]" value="muzyka"> Muzyka</label><br>
    <label><input type="checkbox" name="interests[]" value="gry"> Gry</label><br>
    <label><input type="checkbox" name="interests[]" value="czytanie"> Czytanie</label><br>
    <label><input type="checkbox" name="interests[]" value="podróże"> Podróże</label><br><br>

    <label>Ulubione przedmioty:</label><br>
    <select name="subjects[]" multiple size="5">
        <option value="Bazy danych">Bazy danych</option>
        <option value="Systemy operacyjne">Systemy operacyjne</option>
        <option value="Sieci komputerowe">Sieci komputerowe</option>
        <option value="Algorytmy">Algorytmy</option>
        <option value="Programowanie obiektowe">Programowanie obiektowe</option>
    </select><br><br>

    <label>Rok studiów:</label><br>
    <label><input type="radio" name="year" value="1" required> 1</label><br>
    <label><input type="radio" name="year" value="2"> 2</label><br>
    <label><input type="radio" name="year" value="3"> 3</label><br><br>

    <input type="submit" value="Wyślij">
</form>

<?php } ?>
