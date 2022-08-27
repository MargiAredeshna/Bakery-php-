<?php
include "../dbcon.php";


// addmin Login
if (isset($_POST['adminlogin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin where email='$email' and password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION["adminlogin"] = true;
    $_SESSION["data"] = $row['email'];
    header("Location: index.php");
  } else {
    header("Location: login.php?login=fail");
  }
}


// addmin details update
if (isset($_POST['updateadmin'])) {
  $aid = $_POST['id'];
  $aname = $_POST['name'];
  $aemail = $_POST['email'];
  $aphone = $_POST['phone'];
  $faceb = $_POST['faceb'];
  $insta = $_POST['insta'];
  $address = $_POST['address'];

  $admin_updateimg = $_FILES['admin_updateimg']['name'];
  $admin_img_temp = $_FILES['admin_updateimg']['tmp_name'];
  $admin_img_folder = '../assest/img/cat_img/' . $admin_updateimg;


  if ($admin_updateimg == "") {
    $sql = "update admin set name='$aname',email='$aemail',phone='$aphone',facebook='$faceb',instagram='$insta',address='$address',updatedate=CURTIME() WHERE id= $aid";
  } else {
    $sql = "update admin set name='$aname',email='$aemail',phone='$aphone',facebook='$faceb',instagram='$insta',address='$address',img='$admin_img_folder',updatedate=CURTIME() WHERE id= $aid";
  }
  
  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($admin_img_temp, $admin_img_folder);
    header("Location: adminupdate.php?update=true");
  } else {
    header("Location: login.php?update=false");
  }
}



// Producat Category Add
if (isset($_POST['add_Category'])) {
  $cat_name = $_POST['cat_name'];

  $cat_img = $_FILES['cat_img']['name'];
  $cat_img_temp = $_FILES['cat_img']['tmp_name'];
  $cat_img_folder = '../assest/img/cat_img/' . $cat_img;

  $sql = "insert into productcategory(categoryname,img) values('$cat_name','$cat_img_folder')";

  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($cat_img_temp, $cat_img_folder);
    header("Location: ProducatCategoryall.php?add=true");
  } else {
    header("Location: ProducatCategoryall.php?add=false");
  }
}

// Producat Category Update
if (isset($_POST['add_update'])) {
  $id = $_POST['id'];
  $cat_name = $_POST['cat_name'];
  $isactive =$_POST['isactive'];
  $updateimg = $_FILES['updateimg']['name'];
  $cat_img_temp = $_FILES['updateimg']['tmp_name'];
  $cat_img_folder = '../assest/img/cat_img/' . $updateimg;


  if ($updateimg == "") {
    $sql = "update productcategory  set categoryname='$cat_name',isactive='$isactive',updatedate=CURTIME() WHERE id= $id";
  } else {
    $sql = "update productcategory set categoryname='$cat_name',isactive='$isactive',updatedate=CURTIME() ,img='$cat_img_folder' WHERE id= $id";
  }
  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($cat_img_temp, $cat_img_folder);
    header("Location: ProducatCategoryall.php?up=true");
  } else {
    header("Location: ProducatCategoryall.php?up=false");
  }
}

// // Producat Category Delete

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "update productcategory set isactive=0 where id=$id";
  if (mysqli_query($conn, $sql) === TRUE) {
    header("Location: ProducatCategoryall.php?del=true");
  } else {
    header("Location: ProducatCategoryall.php?del=false");
  }
  mysqli_close($conn);
}

// producat add

if (isset($_POST['add_producat'])) {
  $p_catname = $_POST['p_catname'];
  $p_name = $_POST['p_name'];
  $p_longdesc = $_POST['p_longdesc'];
  $p_orgiprice = $_POST['p_orgiprice'];
  $p_price = $_POST['p_price'];
  $p_verayti = $_POST['p_verayti'];

  $pro_img = $_FILES['pro_img']['name'];
  $pro_img_temp = $_FILES['pro_img']['tmp_name'];
  $pro_img_folder = '../assest/img/cat_img/' . $pro_img;

  $sql = "insert into producattype (c_id,p_name,p_long_desc,p_img,p_orignal_price,p_price,p_variety) values('$p_catname','$p_name','$p_longdesc','$pro_img_folder',$p_orgiprice,$p_price,'$p_verayti')";
  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($pro_img_temp, $pro_img_folder);
    header("Location: Producatdetailsall.php?add=true");
  } else {
    header("Location: Producatdetailsall.php?add=false");
  }
}


// producat update
if (isset($_POST['add_producatupdate'])) {
  $id = $_POST['id'];
  $p_catname = $_POST['p_catname'];
  $p_name = $_POST['p_name'];
  $p_longdesc = $_POST['p_longdesc'];
  $p_orgiprice = $_POST['p_orgiprice'];
  $p_price = $_POST['p_price'];
  $p_verayti = $_POST['p_verayti'];
  $offer = $_POST['offer'];
  $isactive = $_POST['isactive'];

  $pro_updateimg = $_FILES['pro_updateimg']['name'];
  $pro_img_temp = $_FILES['pro_updateimg']['tmp_name'];
  $pro_img_folder = '../assest/img/cat_img/' . $pro_updateimg;

  if ($pro_updateimg == "") {
    $sql = "update producattype set c_id='$p_catname',p_name='$p_name',p_long_desc='$p_longdesc',p_orignal_price='$p_orgiprice',p_price='$p_price', p_variety='$p_verayti',offer='$offer',p_isactive='$isactive', p_updatedate=CURTIME() WHERE id= $id";
    
  } else {
    $sql = "update producattype set c_id='$p_catname',p_name='$p_name',p_long_desc='$p_longdesc',p_img='$pro_img_folder',p_orignal_price='$p_orgiprice',p_price='$p_price', p_variety='$p_verayti',offer='$offer',p_isactive='$isactive', p_updatedate=CURTIME() WHERE id= $id";
  }
  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($pro_img_temp, $pro_img_folder);
    header("Location: Producatdetailsall.php?up=true");
  } else {
    header("Location: Producatdetailsall.php?up=false");
  }
}
// // Producat  Delete
if (isset($_GET['prodel'])) {
  $id = $_GET['prodel'];
  
  $sql = "update producattype set p_isactive = 0 where id=$id";
  if (mysqli_query($conn, $sql) === TRUE) {
    header("Location: Producatdetailsall.php?del=true");
  } else {
    header("Location: Producatdetailsall.php?del=false");
  }
  mysqli_close($conn);
}

if (isset($_POST['feedback_update'])) {
  $id = $_POST['feed_id'];
  $feedback = $_POST['feed'];

  $sql = "update feedback set feed_isactive=$feedback where id=$id";
  if ($conn->query($sql) === TRUE) {
    header("Location: FeedBack_site.php?up=true");
  } else {
    header("Location: FeedBack_site.php?up=false");
  }
}


// feedback  Delete
if (isset($_GET['feed'])) {
  $id = $_GET['feed'];
  $sql = "delete from feedback where id=$id ";
  if (mysqli_query($conn, $sql) === TRUE) {
    header("Location: FeedBack_site.php?del=true");
  } else {
    header("Location: FeedBack_site.php?del=false");
  }
  mysqli_close($conn);
}
?>