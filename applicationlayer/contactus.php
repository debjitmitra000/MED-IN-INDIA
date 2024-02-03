<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/125372cbb9.js" crossorigin="anonymous"></script>
  <style>
    .heading {
      text-align: center;
      padding-bottom: 2rem;
      text-shadow: var(--text-shadow);
      text-transform: uppercase;
      color: var(--black);
      font-size: 5rem;
      letter-spacing: 0.4rem;
    }

    .login .box-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
      gap: 2rem;
      margin-bottom: 115px;
    }

    .login .box-container .box {
      background: #fff;
      border-radius: 0.5rem;
      box-shadow: var(--box-shadow);
      border: var(--border);
      padding: 2.5rem;
    }

    .login .box-container .box i {
      color: var(--green);
      font-size: 5rem;
    }

    .login .box-container .box h3 {
      color: var(--black);
      font-size: 2.5rem;
      padding: 1rem 0;
    }

    .login .box-container .box p {
      color: var(--light-color);
      font-size: 1.4rem;
      line-height: 2;
    }

    .login h1 {
      margin-top: 50px;
      margin-bottom: 60px;
    }

    .heading1 {
      text-align: center;
      padding-bottom: 2rem;
      text-shadow: var(--text-shadow);
      text-transform: uppercase;
      color: var(--black);
      font-size: 5rem;
      letter-spacing: 0.4rem;
      margin-top: -628px;
      margin-left: 320px;
    }

    .heading1 span {
      text-transform: uppercase;
      color: var(--green);
    }

    .container2 {
      position: relative;
      z-index: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      margin: 40px 0;
    }

    .container2 .card {
      position: relative;
      width: 271px;
      height: 400px;
      background: rgba(255, 255, 255, 0.05);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      border-radius: 15px;
      display: flex;
      justify-content: center;
      align-items: center;
      backdrop-filter: blur(10px);
      margin: 5px 20px 20px;
    }

    .container2 .card .content1 {
      position: relative;
      justify-content: center;
      display: flex;
      align-items: center;
      flex-direction: column;
      opacity: 0.5;
      transition: 0.5s;
    }

    .container2 .card:hover .content1 {
      opacity: 1;
      transform: translateY(-20px);
    }

    .container2 .card .content1 .imgbx {
      position: relative;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      border: 10px solid rgba(22, 160, 133, 0.9);
    }

    .container2 .card .content1 .imgbx img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .container2 .card .content1 .contentbx h3 {
      color: #16a085;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: 800;
      font-size: 20px;
      text-align: center;
      margin: 20px 0 10px;
      line-height: 1.1em;
      font-weight: bold;
    }

    .container2 .card .content1 .contentbx h3 span {
      font-size: 13px;
      font-weight: 300;
      text-transform: initial;
      font-weight: bold;

    }

    .container2 .card .sci {
      position: absolute;
      bottom: 20px;
      display: flex;
    }

    .container2 .card .sci li {
      list-style: none;
      margin: 0 10px;
      transform: translateY(10px);
      transition: 0.5s;
      opacity: 0;
      transition-delay: calc(0.1s * var(--i));
    }

    .container2 .card:hover .sci li {
      transform: translateY(0px);
      opacity: 1;
    }

    .container2 .card .sci li a {
      color: #16a085;
      font-size: 30px;
    }

    .team h1 {
      font-size: 50px;
      text-align: center;
      margin-top: 150px;
    }
  </style>
</head>

<body>
  <section class="team" id="team">
    <h1 class="heading" style="margin-top: 80px">Our Team</h1>
    <div class="container2">

      <div class="card">
        <div class="content1">
          <div class="imgbx"><img src="image/T2.png"></div>
          <div class="contentbx">
            <h3>Sugnik Tarafder<br><span>Cloud Database Developer<br>Hooghly Engineering & Technology College(HETC)</span></h3>
          </div>
        </div>
        <ul class="sci">
          <li style="--i:1">
            <a href="#"><i class="fa-brands fa-github"></i></a>
          </li>
          <li style="--i:2">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </li>
          <li style="--i:3">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </li>
        </ul>
      </div>
      <div class="card">
        <div class="content1">
          <div class="imgbx"><img src="image/T2.png"></div>
          <div class="contentbx">
            <h3>Sayar Paul<br><span>Frontend Developer<br>Hooghly Enginerring & Technology College(HETC)</span></h3>
          </div>
        </div>
        <ul class="sci">
          <li style="--i:1">
            <a href="#"><i class="fa-brands fa-github"></i></a>
          </li>
          <li style="--i:2">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </li>
          <li style="--i:3">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </li>
        </ul>
      </div>
      <div class="card">
        <div class="content1">
          <div class="imgbx"><img src="image/T2.png"></div>
          <div class="contentbx">
            <h3>Debjit Mitra<br><span>Full Stack Developer<br>Hooghly Enginerring & Technology College(HETC)</span></h3>
          </div>
        </div>
        <ul class="sci">
          <li style="--i:1">
            <a href="#"><i class="fa-brands fa-github"></i></a>
          </li>
          <li style="--i:2">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </li>
          <li style="--i:3">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </li>
        </ul>
      </div>
      <div class="card">
        <div class="content1">
          <div class="imgbx"><img src="image/T2.png"></div>
          <div class="contentbx">
            <h3>Sourodip Ghosh<br><span>Backend Developer<br>Hooghly Enginerring & Technology College(HETC)</span></h3>
          </div>
        </div>
        <ul class="sci">
          <li style="--i:1">
            <a href="#"><i class="fa-brands fa-github"></i></a>
          </li>
          <li style="--i:2">
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </li>
          <li style="--i:3">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!--Our Team section Ends-->

</body>

</html>