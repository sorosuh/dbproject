<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width: 100%; height: 100px; background-color: aquamarine; ">
        <span style="text-align: center; font-size: 25px; margin-top: 20px; float:left; margin-left:700px; color:rgb(125,33,79);"><strong>داشبورد</strong></span>

        <span style="text-align: center; font-size: 25px; margin-top: 20px; float:right;margin-top:-10px;"><a href="index.php">خروج</a></span>
        <span>نام :<?php echo $_SESSION["name"]  ?> </span>
    </div>

    <?php echo $_SESSION["role"]; ?>

    <?php 
                
                if($_SESSION["role"] == 2){
                    echo '<p style="margin-left:1300px;">حساب رستوران</p>';
                

                echo '<form action="" method="" style="float:right;">
                        <input type="submit" value="ثبت"/>
                        <input type="text">
                        <lable>ثبت خیریه</lable>
                    </form>';

                echo '<br/>';echo '<br/>';

                echo'<form action="" method="" style="float:right;">
                    <input type="submit" value="ثبت"/>
                    <input type="text">
                    <lable>تعداد غذای باقیمانده</lable>
                     </form>';

                }


               // if($_SESSION["role"] == 3){
                    echo '<p style="margin-left:1300px;">حساب راننده</p>';
                
                  //  echo 'وضعیت راننده :'.$_SESSION['status'];
                    echo 'تغییر وضعیت :
                    <form action="" method="post">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">اماده به خدمت</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">درحال خدمت</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">عدم دسترسی</label>
                  </div>
                  <input type="submit" value="ثبت">
                  
                  </form>';
               // }
    ?>



</body>
</html>