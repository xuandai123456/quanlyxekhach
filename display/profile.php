<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<?php include "header_2.php" ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlyvexe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<style>
  @import url(https://fonts.googleapis.com/css?family=Oswald:300);

  body {
    margin: 0;
    overflow: hidden;
    background: url('http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/crossword.png');
  }

  canvas {
    -webkit-filter: blur(0.6px);
    -moz-filter: blur(0.6px);
    -o-filter: blur(0.6px);
    -ms-filter: blur(0.6px);
    filter: blur(0.6px);
  }

  #Profile {
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    width: 120px;
    height: 120px;
    border-radius: 120px;
    text-align: center;
    cursor: pointer;
  }

  #Profile img {
    -webkit-filter: grayscale(0.7);
    -moz-filter: grayscale(0.7);
    -ms-filter: grayscale(0.7);
    filter: grayscale(0.7);
    opacity: 0.9;
    border-radius: 200rem;
  }

  #Profile:before {
    content: '';
    position: absolute;
    top: -6px;
    left: -6px;
    width: 130px;
    height: 130px;
    border-radius: 162px;
    border: 1px solid #BCBCBC;
  }

  #Profile:after {
    content: '';
    position: absolute;
    top: -11px;
    left: -11px;
    width: 140px;
    height: 140px;
    border-radius: 172px;
    border: 1px dashed #81BDA4;
  }

  #Profile span {
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    width: 120px;
    height: 120px;
    border-radius: 120px;
    line-height: 120px;
    font-family: 'Oswald';
    font-size: 20px;
    visibility: hidden;
  }

  #Profile:hover img {
    -webkit-filter: blur(2px);
    -moz-filter: blur(2px);
    -o-filter: blur(2px);
    -ms-filter: blur(2px);
    filter: blur(2px);
    opacity: 0.8;
  }

  #Profile:hover span {
    background: rgba(217, 217, 217, 0.52);
    visibility: visible;
    color: #494E52;
  }

  .img {
    border-radius: 10rem;
    overflow: hidden;
  }
</style>

<body>
  <canvas></canvas>
  <div id="Profile">
    <div class="img">
      <img src="./images/avata.jpg" />
    </div>
    <span>
      <?php
      if (isset($_COOKIE["account_ibus"])) {
        $id_client = explode(",", $_COOKIE["account_ibus"])[0];
        $name_client = $conn->query("SELECT tenkh from khachhang where id=$id_client")->fetch_all();
        echo $name_client[0][0];
      }
      ?>
    </span>
    <a href="./display/logout.php?logout" style="margin-top:40px;" class="logout">Đăng xuất</a>
  </div>
  <?php include "footer.php" ?>
</body>
<script>
  var canvas = $('canvas')[0];
  var context = canvas.getContext('2d');

  var Dots = [];
  var ID = 0;
  var colors = ['#FF9900', '#424242', '#BCBCBC', '#3299BB', '#B9D3B0', '#81BDA4', '#F88F79', '#F6AA93'];
  var maximum = 100;

  function Dot() {
    this.active = true;
    this.id = ID; ID++;

    this.diameter = 2 + Math.random() * 7;

    this.x = Math.round(Math.random() * canvas.width);
    this.y = Math.round(Math.random() * canvas.height);

    this.velocity = {
      x: (Math.random() < 0.5 ? -1 : 1) * Math.random() * 0.4,
      y: (Math.random() < 0.5 ? -1 : 1) * Math.random() * 0.4
    };

    this.alpha = 0.1;
    this.maxAlpha = this.diameter < 5 ? 0.3 : 0.8;
    this.hex = colors[Math.round(Math.random() * 7)];
    this.color = HexToRGBA(this.hex, this.alpha);
  }

  Dot.prototype = {
    Update: function () {
      if (this.alpha <= this.maxAlpha) {
        this.alpha += 0.005;
        this.color = HexToRGBA(this.hex, this.alpha);
      }

      this.x += this.velocity.x;
      this.y += this.velocity.y;

      if (this.x > canvas.width + 5 || this.x < 0 - 5 || this.y > canvas.height + 5 || this.y < 0 - 5) {
        this.active = false;
      }
    },

    Draw: function () {
      context.strokeStyle = this.color;
      context.fillStyle = this.color;
      context.save();
      context.beginPath();
      context.translate(this.x, this.y);
      context.moveTo(0, -this.diameter);

      for (var i = 0; i < 7; i++) {
        context.rotate(Math.PI / 7);
        context.lineTo(0, -(this.diameter / 2));
        context.rotate(Math.PI / 7);
        context.lineTo(0, -this.diameter);
      }

      if (this.id % 2 == 0) {
        context.stroke();
      } else {
        context.fill();
      }

      context.closePath();
      context.restore();
    }
  }

  function Update() {
    GenerateDots();

    Dots.forEach(function (Dot) {
      Dot.Update();
    });

    Dots = Dots.filter(function (Dot) {
      return Dot.active;
    });

    Render();
    requestAnimationFrame(Update);
  }

  function Render() {
    context.clearRect(0, 0, canvas.width, canvas.height);
    Dots.forEach(function (Dot) {
      Dot.Draw();
    });
  }

  function GenerateDots() {
    if (Dots.length < maximum) {
      for (var i = Dots.length; i < maximum; i++) {
        Dots.push(new Dot());
      }
    }

    return false;
  }

  function HexToRGBA(hex, alpha) {
    var red = parseInt((TrimHex(hex)).substring(0, 2), 16);
    var green = parseInt((TrimHex(hex)).substring(2, 4), 16);
    var blue = parseInt((TrimHex(hex)).substring(4, 6), 16);

    return 'rgba(' + red + ', ' + green + ', ' + blue + ', ' + alpha + ')';
  }

  function TrimHex(hex) {
    return (hex.charAt(0) == "#") ? hex.substring(1, 7) : hex;
  }

  function WindowSize(width, height) {
    if (width != null) { canvas.width = width; } else { canvas.width = window.innerWidth; }
    if (height != null) { canvas.height = height; } else { canvas.height = window.innerHeight; }

  }

  $(window).resize(function () {
    Dots = [];
    WindowSize();
  });

  WindowSize();
  GenerateDots();
  Update();
</script>

</html>