<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Form</title>
    <style>
        body {
            margin: 0;
            background-color: #F8F8f8;
        }

        div.container {
            width: 800px;
            padding: 20px 80px;
            margin: 40px auto;
            background-color: #FFF;
        }

        s label {
            float: left;
            width: 150px;
        }

        input[type=text],
        input[type=tel],
        input[type=email],
        textarea {
            width: 250px;
        }

        textarea {
            height: 100px;
        }

        input+label {
            float: initial;
            width: initial;
        }

        input[type=checkbox],
        input[type=radio] {
            margin-left: 40px;
            margin-right: 10px;
        }

        label[for=size] {
            width: 215px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>"My Shoes" Contest Entry Form</h1>
        <p>
            Want to trade in your old sneakers for a custom pair of Forcefields? Make a case
            for why your shoes have <em>got</em> to go and you may be one of ten lucky
            winners.
        </p>
        <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">
            <fieldset>
                <legend>Contest Entry Information</legend>
                <p>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </p>
                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </p>
                <p>
                    <label for="tel">Telephone Number</label>
                    <input type="tel" name="tel" id="tel">
                </p>
                <p>
                    <label for="reason">My shoes are SO old...</label>
                    <textarea name="reason" id="reason" placeholder="No more than 300 characters long" maxlength="300"></textarea>
                </p>
            </fieldset>
            <h2>Design Your Custom Forcefields</h2>
            <fieldset>
                <legend>Custom Shoe Design</legend>
                <fieldset>
                    <legend>Color (<em>Choose One</em>)</legend>
                    <p>
                        <input type="radio" name="color" value="Red" id="red"><label for="red">Red</label>
                    </p>
                    <p>
                        <input type="radio" name="color" value="Blue" id="blue"><label for="blue">Blue</label>
                    </p>
                    <p>
                        <input type="radio" name="color" value="Black" id="black"><label for="black">Black</label>
                    </p>
                    <p>
                        <input type="radio" name="color" value="Silver" id="silver"><label for="silver">Silver</label>
                    </p>
                </fieldset>
                <fieldset>
                    <legend>Features (<em>Choose as many as you want</em>)</legend>
                    <p>
                        <input type="checkbox" name="features[]" value="Sparkley Laces" id="feature1"><label for="feature1">Sparkley Laces</label>
                    </p>
                    <p>
                        <input type="checkbox" name="features[]" value="Metalic Logo" id="feature2"><label for="feature2">Metalic Logo</label>
                    </p>
                    <p>
                        <input type="checkbox" name="features[]" value="Light-up heels" id="feature3"><label for="feature3">Light-up heels</label>
                    </p>
                    <p>
                        <input type="checkbox" name="features[]" value="MP3-enabled" id="feature4"><label for="feature4">MP3-enabled</label>
                    </p>
                </fieldset>
                <fieldset>
                    <legend>Size</legend>
                    <p>
                        <label for="size">Sizes relfect standar men's sizes</label>
                        <select name="size" id="size">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </p>
                </fieldset>
            </fieldset>
            <p>
                <input type="submit" name="submit">
                <input type="reset">
            </p>
        </form>
    </div>

    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $reason = $_POST["reason"];
        $color = $_POST["color"];
        $features = $_POST["features"];
        $size = $_POST["size"];
    ?>
        <div class="container">
            <h2>Contact Entry Information</h2>
            <p>
                Name: <?php echo $name; ?>
            </p>
            <p>
                Email: <?php echo $email; ?>
            </p>
            <p>
                Telephone: <?php echo $tel; ?>
            </p>
            <p>
                My shoes are so old <em><?php echo $reason; ?></em>
            </p>

            <h2>Custom Shoe Design</h2>
            <p>
                Color: <?php echo $color; ?>
            </p>
            <p>
                Features: <?php echo implode(", ", $features); ?>
            </p>
            <p>
                Size: <?php echo $size; ?>
            </p>
        </div>
    <?php
    }
    ?>

</body>

</html>