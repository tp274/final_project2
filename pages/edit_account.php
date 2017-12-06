<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<form action="index.php?page=accounts&action=store" method="post">
    First Name: <input type="text" name="name" value = "<?php echo $data->fname; ?>"><br>
    Last Name: <input type="text" name="name"  value = "<?php echo $data->lname; ?>"><br>
    Phone: <input type="text" name="name" value = "<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="name" value = "<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="name" value = "<?php echo $data->gender; ?>"><br>
    E-mail: <input type="text" name="email" value = "<?php echo $data->email; ?>"><br>
    <input type="hidden" name="id" value="value = "<?php echo $data->id; ?>" ><br>
    <input type="submit">
</form>


<?php
//this is how you print something




?>


<script src="js/scripts.js"></script>
</body>
</html>