<?php

if(isset($_FILES['image'])){

  try {
  
    $file_name = date("dmYhis").$_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
  
    move_uploaded_file($file_tmp,"uploads/".$file_name);

    $conn = new PDO("mysql:host=localhost:3306;charset=utf8mb4;dbname=dinoshow", "root" , "root" );
    $query = $conn->prepare("INSERT INTO showphotos (url) VALUES (:imgUrl)");      
    $query->bindValue(":imgUrl", "uploads/".$file_name);
    $query->execute();

    $success = "Image was uploaded!";
  } catch (Exception $e) {
    $error = "Something went wrong, try again later.";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DINO UPLOAD</title>

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <h1>DROP YOUR STYLE!</h1>
    
    <?php if (isset($success)): ?>
      <h2 class="success"><?php echo($success); ?></h2>
    <?php endif; ?>

    <?php if (isset($errors)): ?>
      <h2 class="error"><?php echo($error); ?></h2>
    <?php endif; ?>

    <section>
      <button class="upload-wrapper">
          <form action="" method="POST" enctype="multipart/form-data" onsubmit="submitForm(event)">
              <label id="imageLabel" for="image">
                <img id="imageSelect" src="./assets/uploadImage.png" for="image">
              </label>
              
              <input type="file" id="image" name="image" accept="image/x-png,image/jpeg" />

              <button class="btn-submit" type="submit">SEND IT</button>
          </form>
      </button>
    </section>

    <nav>
      <div class="pollWrapper disabled-nav">
        <a href="./../poll" class="pollNav"></a>
        <a href="./../poll" class="textNav">The poll</a>
      </div>

      <div class="imgWrapper">
        <a href="./../photo" class="imgNav"></a>
        <a href="./../photo" class="textNav">The photowall</a>
      </div>
    </nav>

    <script src="./js/index.js"></script>
</body>
</html>