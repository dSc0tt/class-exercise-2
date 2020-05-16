<!DOCTYPE html>
<html lang="en">
<head>

  <title>Darius' Bootstrap 4 Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body style="background-color: WhiteSmoke;">

<div class="jumbotron text-center bg-light" style="margin-bottom:0;">
  <h1>My First Bootstrap 4 Page</h1>
  <p><strong>Step 1: Change the background color of this jumbotron</strong></p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">About Me</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Things I Want to Do</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Things I Want to Be</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Things I Want to Have</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:30px bg-color: MediumPurple;" >
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="thumbnail"><img src="https://media-exp1.licdn.com/dms/image/C4E03AQH5Io60dDBMkw/profile-displayphoto-shrink_200_200/0?e=1594857600&v=beta&t=xS0BmV3RApZk-KQzZmzVjs_oVyuaBhzr6eo7VYGFLeY" size=50%></img></div>
      <p>I do cool things like make art and skateboard and code.</p>
      <h3>My Favorite Sites</h3>
      <p>Here are a few of my favorite sites.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="https://www.w3schools.com/">W3Schools.com</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/dSc0tt/">Github.com</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.hackerrank.com/">Hackerrank.com</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Instagram</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Most Favorite Class</h2>

      <div class="thumbnail"><img style="width:30%;" src="https://pbs.twimg.com/profile_images/700543281269092352/Qu2ttYPV_400x400.png"></div>
      <p>BDPA HSCC Training</p>
      <p>Of all the classes I take, this one is my favorite. I get to learn to code web applications which can function in the real world.</p>
      <br>
      <h2>Least Favorite Class</h2>
      <div class="thumbnail"><img style="width:50%;" src="https://p3cdn4static.sharpschool.com/UserFiles/Servers/Server_770743/Image/Technology/Other%20Pictures/math.jpg"></div>
      <p>Ughh... Math</p>
      <p>I do well in math, its just boring & there's no real reward. There's no real difference to me in getting the answer right or wrong, its just a number.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center bg-secondary" style="margin-bottom:0">
  <p><strong>Change the background color of this footer<//p>
</div>

</body>
</html>
