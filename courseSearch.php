<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>รายชื่อนักศึกษาลงทะเบียน - มหาวิทยาลัยเทคโนโลยีราชมงคลศรีวิชัย</title>

        <!--Bootstrap Incl.-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <!--My Css-->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/BST_style.css">

    </head>
    <body background="https://songkhla.sis.rmutsv.ac.th/advisor/images/bg.jpg">
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; ระบบสารสนเทศนักศึกษา</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>        
                
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <li class="nav-item">
            <a class="nav-link btn btn-outline-warning" href="index.html">เข้าสู่ระบบสารสนเทศ นศ.<span class="sr-only">(current)</span></a>
        </li>&nbsp;
      <li class="nav-item">
        <a class="nav-link btn btn-outline-warning" href="#">สำนักส่งเสริมวิชาการและงานทะเบียน<span class="sr-only">(current)</span></a>
      </li>&nbsp;
      <li class="nav-item">
        <a class="nav-link btn btn-outline-warning" href="courseSearch.php">รายชื่อ นศ. ลงทะเบียน</a>
      </li>&nbsp;
      <li class="nav-item">
        <a class="nav-link btn btn-outline-info" href="#">ช่วยเหลือ</a>
      </li>&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
      </li>
    </ul>
  </nav>
    
    <div class="container bg-light searchCourse">
        <h2><i class="fa fa-list" aria-hidden="true"></i>&nbsp; <b>รายชื่อนักศึกษา</b></h2><hr>
        <h6>ค้นหาตามรายวิชา</h6>
        <form action="">
        <div class="form-group row">
            <label for="exampleFormControlSelect1" class="col-sm-2">Example select</label>
            <select class="form-control col-sm-2" id="exampleFormControlSelect1">
                <option>--เทอม--</option>
                <option>เทอม 601</option>
                <option>เทอม 602</option>
                <option>4</option>
                <option>5</option>
    </select>
  </div>
        </form>

    </div>

    </body>
</html>