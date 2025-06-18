<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">
  <title>English Quiz - Animals</title>
</head>

<body>

  <h1>English Quiz - Animals</h1>

  <form action="quiz.php" method="POST">
    <div class="instructions">
      Choose a number from 1 to 20 and see the name of the animal in English.<br />
      Then, select if the noun is Countable, Uncountable, or Both.
    </div>

    <div class="numbers">
        <input type="radio" name="numero" id="num1" value="1" />
        <label for="num1">1</label>
        <input type="radio" name="numero" id="num2" value="2" />
        <label for="num2">2</label>
        <input type="radio" name="numero" id="num3" value="3" />
        <label for="num3">3</label>
        <input type="radio" name="numero" id="num4" value="4" />
        <label for="num4">4</label>
        <input type="radio" name="numero" id="num5" value="5" />
        <label for="num5">5</label>
        <input type="radio" name="numero" id="num6" value="6" />
        <label for="num6">6</label>
        <input type="radio" name="numero" id="num7" value="7" />
        <label for="num7">7</label>
        <input type="radio" name="numero" id="num8" value="8" />
        <label for="num8">8</label>
        <input type="radio" name="numero" id="num9" value="9" />
        <label for="num9">9</label>
        <input type="radio" name="numero" id="num10" value="10" />
        <label for="num10">10</label>
        <input type="radio" name="numero" id="num11" value="11" />
        <label for="num11">11</label>
        <input type="radio" name="numero" id="num12" value="12" />
        <label for="num12">12</label>
        <input type="radio" name="numero" id="num13" value="13" />
        <label for="num13">13</label>
        <input type="radio" name="numero" id="num14" value="14" />
        <label for="num14">14</label>
        <input type="radio" name="numero" id="num15" value="15" />
        <label for="num15">15</label>
        <input type="radio" name="numero" id="num16" value="16" />
        <label for="num16">16</label>
        <input type="radio" name="numero" id="num17" value="17" />
        <label for="num17">17</label>
        <input type="radio" name="numero" id="num18" value="18" />
        <label for="num18">18</label>
        <input type="radio" name="numero" id="num19" value="19" />
        <label for="num19">19</label>
        <input type="radio" name="numero" id="num20" value="20" />
        <label for="num20">20</label>
    </div>
    <button type="submit">Confirm</button>
  </form>

</body>

</html>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  switch ($_POST["numero"]) {
    case 1:
        $_SESSION["animal"] = "Cow";
        $_SESSION["tipo"] = "Countable";
        break;
    case 2:
        $_SESSION["animal"] = "Milk";
        $_SESSION["tipo"] = "Uncountable";
        break;
    case 3:
        $_SESSION["animal"] = "Fish";
        $_SESSION["tipo"] = "Both";
        break;
    case 4:
        $_SESSION["animal"] = "Dog";
        $_SESSION["tipo"] = "Countable";
        break;
    case 5:
        $_SESSION["animal"] = "Honey";
        $_SESSION["tipo"] = "Uncountable";
        break;
    case 6:
        $_SESSION["animal"] = "Chicken";
        $_SESSION["tipo"] = "Both";
        break;
    case 7:
        $_SESSION["animal"] = "Water";
        $_SESSION["tipo"] = "Uncountable";
        break;
    case 8:
        $_SESSION["animal"] = "Egg";
        $_SESSION["tipo"] = "Countable";
        break;
    case 9:
        $_SESSION["animal"] = "Cheese";
        $_SESSION["tipo"] = "Uncountable";
        break;
    case 10:
        $_SESSION["animal"] = "Cat";
        $_SESSION["tipo"] = "Countable";
        break;
    case 11:
        $_SESSION["animal"] = "Butter";
        $_SESSION["tipo"] = "Uncountable";
        break;
    case 12:
        $_SESSION["animal"] = "Goat";
        $_SESSION["tipo"] = "Countable";
        break;
    case 13:
        $_SESSION["animal"] = "Meat";
        $_SESSION["tipo"] = "Uncountable";
        break;
    case 14:
        $_SESSION["animal"] = "Horse";
        $_SESSION["tipo"] = "Countable";
        break;
    case 15:
        $_SESSION["animal"] = "Juice";
        $_SESSION["tipo"] = "Uncountable";
        break;
    case 16:
        $_SESSION["animal"] = "Rabbit";
        $_SESSION["tipo"] = "Countable";
        break;
    case 17:
        $_SESSION["animal"] = "Bread";
        $_SESSION["tipo"] = "Uncountable";
        break;
    case 18:
        $_SESSION["animal"] = "Sheep";
        $_SESSION["tipo"] = "Countable";
        break;
    case 19:
        $_SESSION["animal"] = "Yogurt";
        $_SESSION["tipo"] = "Uncountable";
        break;
    case 20:
        $_SESSION["animal"] = "Pig";
        $_SESSION["tipo"] = "Countable";
        break;
    default:
        $_SESSION["animal"] = "Unknown";
        $_SESSION["tipo"] = "Unknown";
        break;
  }
  header('Location: /trabalho_ingles/quiz2.php');
  exit;
}
?>