<?php
    include_once 'php/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Can Collection | Add a can</title>

    <!-- link for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <!-- css files -->
    <link rel="stylesheet" href="css/addCan.css">
    <link rel="stylesheet" href="css/generalLayout.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>

<body>
<?php include_once 'header.php' ?>
    <div class="main_container">
        <h1 class="title">Add a Can</h1>
            <form class="form" action="php/submitAddCan.php" method="post">
                <div class="form_container">
                    <div class="left_column">
                        <!-- Can name -->
                        <input class="input" type="text" id="name" name="name" placeholder="Name..." />

                        <!-- Can brand -->
                         <div class="input">
                            <label for="brand">Brand:</label>
                            <select name="brand" id="brand">
                                <option value="Monster">Monster</option>
                                <option value="Heineken">Heineken</option>
                                <option value="Coca">Coca Cola</option>
                                <option value="Fanta">Fanta</option>
                            </select>
                        </div>

                        <!-- Can type -->
                        <div class="input">
                            <label for="type">Type:</label>
                            <select name="type" id="type">
                                <option value="cola">Cola</option>
                                <option value="energy">Energy</option>
                                <option value="water">water</option>
                                <option value="sinas">Sinas</option>
                            </select>
                        </div>

                        <!-- Size -->
                        <div class="input">
                            <label for="size">Size (mL):</label>
                            <input type="number" id="size" name="size" min="" max="">
                        </div>

                        <!-- Limited? -->
                        <div class="input">
                            <input type="radio" id="limited" name="limited" value="T">
                            <label for="limited">Url</label>
                        </div>

                        <!-- Location -->
                        <div class="input">
                            <div>
                                <label for="country">Country:</label>
                                <select name="country" id="country">
                                    <option value="Nederland">Nederland</option>
                                    <option value="Duitsland">Duitsland</option>
                                    <option value="Engeland">Engeland</option>
                                    <option value="Belgie">Belgie</option>
                                </select>

                                <input type="text" id="city" name="city" placeholder="City..." />
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="input">
                            <label for="date">Year & Month:</label>
                            <input type="month" id="date" name="date">
                        </div>
                    </div>

                    <div class="right_column">
                        <div class="input" id="image">
                            <img src="" alt="">
                        </div>
                        
                        <div class="input">
                            <div class="image_type">
                                <div>
                                    <input type="radio" id="url" name="imgType" value="URL">
                                    <label for="url">Url</label>
                                </div>
                                <div>
                                    <input type="radio" id="file" name="imgType" value="FILE">
                                    <label for="file">File</label>
                                </div>
                            </div>
                        </div>

                        <div id="appear_container">
                            <input type="text" id="imageUrl" name="url" placeholder="Url...">

                            <input type="file" id="imageFile" name="file">
                        </div>
                        
                        <div class="input">
                            <label for="color">Main color:</label>
                            <select name="color" id="color">
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue">Blue</option>
                                <option value="audi">Yellow</option>
                            </select>
                        </div>

                        <div class="input">
                            <textarea name="note" rows="10" cols="30">Example text for note about can</textarea>
                        </div>
                    </div>
                </div>
                <input class="submit_button" type="submit" value="Submit">
            </form>
            
    </div>

</body>

<!-- js files -->
<script src="js/headerscript.js"></script>

</html>