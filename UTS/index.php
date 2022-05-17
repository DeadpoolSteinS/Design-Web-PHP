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

function insert()
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

    $query = "INSERT INTO fifa_player VALUES (NULL, '$name', $age, '$photo', '$nationality', '$flag', $overall, $potential, '$club', '$club_logo', '$foot', $skill_moves, '$work_rate', '$body_type', '$real_face', $number, '$height', '$weight', $finishing, '$position')";
    mysqli_query($conn, $query);
}

if(isset($_POST['submit']))
{
    insert();
    echo "<script>
            alert('Data berhasil ditambahkan!');
        </script>";
    // var_dump($_POST);
    // exit;
}

$data = select("SELECT * FROM fifa_player");
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
        <button class="mainButton" onclick="getInput()">Tambah Data</button>
        <div id="input">
            <form action="" method="post">
                <li>
                    <label for="name">Nama:</label>
                    <input type="text" name="name" id="name">
                </li>
                <li>
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age">
                </li>
                <li>
                    <label for="photo">Photo Link:</label>
                    <input type="text" name="photo" id="photo">
                </li>
                <li>
                    <label for="nationality">Nationality:</label>
                    <input type="text" name="nationality" id="nationality">
                </li>
                <li>
                    <label for="flag">Flag Photo Link:</label>
                    <input type="text" name="flag" id="flag">
                </li>
                <li>
                    <label for="overall">Overall (0-100):</label>
                    <input type="number" name="overall" id="overall">
                </li>
                <li>
                    <label for="potential">Potential (0-100):</label>
                    <input type="number" name="potential" id="potential">
                </li>
                <li>
                    <label for="club">Club:</label>
                    <input type="text" name="club" id="club">
                </li>
                <li>
                    <label for="club_logo">Club Logo Link:</label>
                    <input type="text" name="club_logo" id="club_logo">
                </li>
                <li>
                    <label>Foot Preferred:</label>
                    <div class="option">
                        <input type="radio" name="foot" id="right" value="Right">
                        <label for="right">Right</label>
                        <input type="radio" name="foot" id="left" value="Left">
                        <label for="left">Left</label>
                    </div>
                </li>
                <li>
                    <label for="skill_moves">Skill Moves (0-100):</label>
                    <input type="number" name="skill_moves" id="skill_moves">
                </li>
                <li>
                    <label for="work_rate">Work Rate (-/-):</label>
                    <input type="text" name="work_rate" id="work_rate">
                </li>
                <li>
                    <label for="body_type">Body Type:</label>
                    <input type="text" name="body_type" id="body_type">
                </li>
                <li>
                    <label>Real Face:</label>
                    <div class="option">
                        <input type="radio" name="real_face" id="yes" value="Yes">
                        <label for="yes">Yes</label>
                        <input type="radio" name="real_face" id="no" value="No">
                        <label for="no">No</label>
                    </div>
                </li>
                <li>
                    <label for="number">Number Jersey:</label>
                    <input type="number" name="number" id="number">
                </li>
                <li>
                    <label for="height">Height (cm):</label>
                    <input type="text" name="height" id="height">
                </li>
                <li>
                    <label for="weight">Weight (kg):</label>
                    <input type="text" name="weight" id="weight">
                </li>
                <li>
                    <label for="finishing">Finishing:</label>
                    <input type="number" name="finishing" id="finishing">
                </li>
                <li>
                    <label for="position">Position:</label>
                    <input type="text" name="position" id="position">
                </li>
                <li id="li-submit">
                    <button type="submit" id="submit" name="submit">Submit</button>
                </li>
            </form>
        </div>
        <div class="table">
            <div class="header">
                <p>No.</p>
                <p>Nama</p>
                <p>Age</p>
                <p>Overall</p>
                <p>Potential</p>
                <p>Club</p>
                <p>Nationality</p>
                <p>Jersey</p>
                <p>Action</p>
            </div>
            <?php $i = 1; foreach($data as $item): ?>
            <div  class="common">
                <p><?= $i; ?></p>
                <a href="<?= $item["photo"]; ?>" target="_blank"><span><?= $item["name"]; ?></span></a>
                <p><?= $item["age"]; ?></p>
                <p><span><?php if($item["overall"] == NULL) echo "00"; else if($item["overall"] < 10) echo "0"; ?><?= $item["overall"]; ?></span></p>
                <p><span><?php if($item["overall"] == NULL) echo "00"; else if($item["overall"] < 10) echo "0"; ?><?= $item["potential"]; ?></span></p>
                <a href="<?= $item["club_logo"]; ?>" target="_blank"><span><?= $item["club"]; ?></span></a>
                <a href="<?= $item["flag"]; ?>" target="_blank"><span><?= $item["nationality"]; ?></span></a>
                <p><?= $item["number"]; ?></p>
                <div>
                    <a href="update.php?id=<?= $item["id"]; ?>">Update</a>
                    <a href="drop.php?id=<?= $item["id"]; ?>">Delete</a>
                </div>
            </div>
            <div class="acommon">
                <div>
                    <p><span>Name </span><?= ": " . $item["name"]; ?></p>
                    <p><span>Age </span><?= ": " . $item["age"]; ?></p>
                    <p><span>Club </span><?= ": " . $item["club"]; ?></p>
                    <p><span>Nationality </span><?= ": " . $item["nationality"]; ?></p>
                </div>
                <div>
                    <p><span>Overall </span><?= ": " . $item["overall"]; ?></p>
                    <p><span>Potential </span><?= ": " . $item["potential"]; ?></p>
                    <p><span>Foot Preferred </span><?= ": " . $item["foot"]; ?></p>
                    <p><span>Skill Moves </span><?= ": " . $item["skill_moves"]; ?></p>
                </div>
                <div>
                    <p><span>Work Rate </span><?= ": " . $item["work_rate"]; ?></p>
                    <p><span>Body Type </span><?= ": " . $item["body_type"]; ?></p>
                    <p><span>Real Face </span><?= ": " . $item["real_face"]; ?></p>
                    <p><span>Number Jersey </span><?= ": " . $item["number"]; ?></p>
                </div>
                <div>
                    <p><span>Height </span><?= ": " . $item["height"]; ?></p>
                    <p><span>Weight </span><?= ": " . $item["weight"]; ?></p>
                    <p><span>Finishing </span><?= ": " . $item["finishing"]; ?></p>
                    <p><span>Position </span><?= ": " . $item["position"]; ?></p>
                </div>
            </div>
            <?php $i++; endforeach; ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>