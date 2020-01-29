<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div style="width: 100%; height: 100px; background-color: aquamarine; text-align: center; font-size: 25px;">
        <p>سیستم توزیع غذا</p>
        <span><a href="login-page.php">ورود</a></span>
    </div>
    <div class="card-deck mb-3 text-center"  style="margin-top: 50px;">
        <form action="" method="" class=" card mb-4 shadow-sm">
            <form action="" method="" class="card mb-4 shadow-sm">
                <h3>ثبت  رستوران</h3>
                <div class="form-group">
                  <label for="exampleInputEmail1">نام</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">رمز عبور</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">ادرس</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">ثبت</button>
              </form>
    
          <form action="../backend/charitySignUp.php" method="POST" class="card mb-4 shadow-sm">
            <h3>ثبت  خیریه</h3>

            <div class="form-group">
              <label for="exampleInputEmail1">نام</label>
              <input type="text" class="form-control" name="user" aria-describedby="emailHelp">
            </div>

            
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                شهر
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">تهران</a>
                <a class="dropdown-item" href="#">مشهد</a>
                <a class="dropdown-item" href="#">کاشمر</a>
                <a class="dropdown-item" href="#">کرج</a>
                <a class="dropdown-item" href="#">سبزوار</a>
                <a class="dropdown-item" href="#">چناران</a>
              </div>

            </div>



              <div class="form-group">
                <label for="exampleInputEmail1"> منطقه</label>
                <input type="text" class="form-control" name="regionID" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">خیابان</label>
                <input type="text" class="form-control" name="street" aria-describedby="emailHelp">
              </div>
              
              
              <div class="form-group">
                <label for="exampleInputEmail1">پلاک</label>
                <input type="text" class="form-control" name="number
                " aria-describedby="emailHelp">
              </div>
              

            <div class="form-group">
                <label for="exampleInputEmail1">رمز عبور</label>
                <input type="password" class="form-control" name="pass" aria-describedby="emailHelp">
              </div>

            <div class="form-group">
                <label for="exampleInputEmail1">مختصات x</label>
                <input type="text" class="form-control" name="Xcoordinates" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">مختصات y</label>
                <input type="text" class="form-control" name="Ycoordinates" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">جواب</label>
                <input type="text" class="form-control" name="answer" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">تعداد افراد تحت پوشش</label>
                <input type="text" class="form-control" name="personNumber" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">سال تاسیس</label>
                <input type="text" class="form-control" name="beginYear" aria-describedby="emailHelp">
              </div>
   

            <button type="submit" class="btn btn-primary">ثبت</button>
          </form>
    
          <form action="" method="" class="card mb-4 shadow-sm">
            <h3>ثبت  راننده</h3>
            <div class="form-group">
              <label for="exampleInputEmail1">نام و نام خانوادگی</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">رمز عبور</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

            <div class="form-group">
                <label for="exampleInputEmail1">شماره ملی</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">منطقه تحت پوشش</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">مختصات جغرافیایی</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">تاریخ تولد</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">پلاک</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">رنگ ماشین</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

            <button type="submit" class="btn btn-primary">ثبت</button>
          </form>
    </div>
</body>
</html>
