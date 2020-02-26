<?php



if(isset($_POST['submit']))
{
    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $broj = $_POST['broj'];
    $image = $_FILES['image']['name'];
   


    echo $ime;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $broj;
   echo '<br>';
   echo $image;
   

    
}

// // provjeera da li mail sadrzi @ i .com
$Email = $_POST['email'];
$provjera = '@';


$search = strpos($Email, $provjera);

if ($search == FALSE)
            {
                echo "Your e-mail is not valid.";
            }

$Email = $_POST['email'];
$provjera1 = '.com';

$search1 = strpos($Email, $provjera1);

if ($search1 == FALSE)
            {
                echo "Your e-mail is not valid.";
            }
            else{
                echo '<br>';
                echo 'Valid e-mail';
            }

// //uslov za ispitivanje imena i prezime i njihove duzine
if(preg_match("/^([a-zA-Z' ]+)$/",$ime) && strlen($ime)<50){ 
    echo '<br>';
    echo 'Valid name.';
}else{
    echo '<br>';
    echo 'Invalid name';
}


// provjeravamo broj
if(preg_match("/^[\/+0-9\-\(\)\s]*$/", $broj)) {
    echo'<br>';
    echo 'Valide number';
  }else{
      echo 'Invalid enumber';
  }





//provjeravmao da li ima slike i da li slika sadrzi .jpg .png i .svg
$permited = array('svg', 'jpg', 'png');
if (empty($image)) {
    echo 'Please Select any Image !';
   }
   $allowed_extensions = array( "image/svg", "image/jpg", "image/png" );

   if ( in_array( $_FILES[ "image" ][ "type" ], $allowed_extensions ) ){
     echo "You may only upload png, jpg or gif.<br>";
     $ok = 0;
   }
   




// //provjeravamo da li je null i da li je prazan string
      if(empty($_POST['ime'])){
        echo 'Tekst je prazan <br>';
    }else{
        echo '<br>';
        echo 'Nije prazan string' . '<br>';
    }

  $var_name = $ime;
if (is_null($var_name))
{
echo 'Variable is  NULL';
}
else
{
echo 'Variable is not NULL';
}


//provjeravamo da li radi upload fajla
if(move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . time() . "_" . $_FILES['image']['name'])){
    echo '<br>';
    echo 'Upload uspjesan <br>';
}else{
    echo 'Greska pri upload-u <br>';
}

?>