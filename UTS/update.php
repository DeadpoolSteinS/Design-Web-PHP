<?php
$conn = mysqli_connect("localhost", "root", "", "design_web");

function select($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    // save every data/row on $rows array
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) $rows[] = $row;

    // return 2d array where [row][column]
    return $rows;
}

function update($id)
{
    global $conn;
    $name        = htmlspecialchars($_POST["name"]);
    $age         = ($_POST["age"] != "") ? $_POST["age"] : "NULL";
    $photo       = htmlspecialchars($_POST["photo"]);
    $nationality = htmlspecialchars($_POST["nationality"]);
    $flag        = htmlspecialchars($_POST["flag"]);
    $overall     = ($_POST["overall"] != "") ? $_POST["overall"] : "NULL";
    $potential   = ($_POST["potential"] != "") ? $_POST["potential"] : "NULL";
    $club        = htmlspecialchars($_POST["club"]);
    $club_logo   = htmlspecialchars($_POST["club_logo"]);
    $foot        = (isset($_POST["foot"])) ? htmlspecialchars($_POST["foot"]) : "";
    $skill_moves = ($_POST["skill_moves"] != "") ? $_POST["skill_moves"] : "NULL";
    $work_rate   = htmlspecialchars($_POST["work_rate"]);
    $body_type   = htmlspecialchars($_POST["body_type"]);
    $real_face   = (isset($_POST["real_face"])) ? htmlspecialchars($_POST["real_face"]) : "";
    $number      = ($_POST["number"] != "") ? $_POST["number"] : "NULL";
    $height      = htmlspecialchars($_POST["height"]);
    $weight      = htmlspecialchars($_POST["weight"]);
    $finishing   = ($_POST["finishing"] != "") ? $_POST["finishing"] : "NULL";
    $position    = htmlspecialchars($_POST["position"]);

    $query = "UPDATE fifa_player SET name='$name', age=$age, photo='$photo', nationality='$nationality', flag='$flag', overall=$overall, potential=$potential, club='$club', club_logo='$club_logo', foot='$foot', skill_moves=$skill_moves, work_rate='$work_rate', body_type='$body_type', real_face='$real_face', number=$number, height='$height', weight='$weight', finishing=$finishing, position='$position' WHERE id=$id";
    mysqli_query($conn, $query);
}

$id = $_GET["id"];
if(isset($_POST['submit']))
{
    update($id);
    echo "<script>
            alert('Data berhasil diupdate!');
            document.location.href = 'index.php';
        </script>";
}

$data = select("SELECT * FROM fifa_player WHERE id=$id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2003941 - Novaldi Sandi Ago</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>FIFA Players 2022</h1>
        <button class="mainButton active" onclick="backIndex()">Cancel</button>
        <div id="inputUpdate">
            <form action="" method="post">
                <li>
                    <label for="name">Nama:</label>
                    <input type="text" name="name" id="name" value="<?= $data["name"]; ?>">
                </li>
                <li>
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" value="<?= $data["age"]; ?>">
                </li>
                <li>
                    <label for="photo">Photo Link:</label>
                    <input type="text" name="photo" id="photo" value="<?= $data["photo"]; ?>">
                </li>
                <li>
                    <label for="nationality">Nationality:</label>
                    <input type="text" name="nationality" id="nationality" value="<?= $data["nationality"]; ?>">
                </li>
                <li>
                    <label for="flag">Flag Photo Link:</label>
                    <input type="text" name="flag" id="flag" value="<?= $data["flag"]; ?>">
                </li>
                <li>
                    <label for="overall">Overall (0-100):</label>
                    <input type="number" name="overall" id="overall" value="<?= $data["overall"]; ?>">
                </li>
                <li>
                    <label for="potential">Potential (0-100):</label>
                    <input type="number" name="potential" id="potential" value="<?= $data["potential"]; ?>">
                </li>
                <li>
                    <label for="club">Club:</label>
                    <input type="text" name="club" id="club" value="<?= $data["club"]; ?>">
                </li>
                <li>
                    <label for="club_logo">Club Logo Link:</label>
                    <input type="text" name="club_logo" id="club_logo" value="<?= $data["club_logo"]; ?>">
                </li>
                <li>
                    <label>Foot Preferred:</label>
                    <div class="option">
                        <input type="radio" name="foot" id="right" value="Right" <?php if($data["foot"] == "Right") echo "checked"; ?>>
                        <label for="right">Right</label>
                        <input type="radio" name="foot" id="left" value="Left" <?php if($data["foot"] == "Left") echo "checked"; ?>>
                        <label for="left">Left</label>
                    </div>
                </li>
                <li>
                    <label for="skill_moves">Skill Moves (0-100):</label>
                    <input type="number" name="skill_moves" id="skill_moves" value="<?= $data["skill_moves"]; ?>">
                </li>
                <li>
                    <label for="work_rate">Work Rate (-/-):</label>
                    <input type="text" name="work_rate" id="work_rate" value="<?= $data["work_rate"]; ?>">
                </li>
                <li>
                    <label for="body_type">Body Type:</label>
                    <input type="text" name="body_type" id="body_type" value="<?= $data["body_type"]; ?>">
                </li>
                <li>
                    <label>Real Face:</label>
                    <div class="option">
                        <input type="radio" name="face" id="yes" value="Yes" <?php if($data["real_face"] == "Yes") echo "checked"; ?>>
                        <label for="yes">Yes</label>
                        <input type="radio" name="face" id="no" value="No" <?php if($data["real_face"] == "No") echo "checked"; ?>>
                        <label for="no">No</label>
                    </div>
                </li>
                <li>
                    <label for="number">Number Jersey:</label>
                    <input type="number" name="number" id="number" value="<?= $data["number"]; ?>">
                </li>
                <li>
                    <label for="height">Height (cm):</label>
                    <input type="text" name="height" id="height" value="<?= $data["height"]; ?>">
                </li>
                <li>
                    <label for="weight">Weight (kg):</label>
                    <input type="text" name="weight" id="weight" value="<?= $data["weight"]; ?>">
                </li>
                <li>
                    <label for="finishing">Finishing:</label>
                    <input type="number" name="finishing" id="finishing" value="<?= $data["finishing"]; ?>">
                </li>
                <li>
                    <label for="position">Position:</label>
                    <input type="text" name="position" id="position" value="<?= $data["position"]; ?>">
                </li>
                <li id="li-submit">
                    <button type="submit" id="submit" name="submit">Submit</button>
                </li>
            </form>
        </div>
    </div>
    <script>
        function backIndex()
        {
            document.location.href = "index.php";
        }
    </script>
</body>
</html>