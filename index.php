<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <script src="script/scrollAnimation.js"></script>
    <script src="https://kit.fontawesome.com/e7df220bd7.js" crossorigin="anonymous"></script>
    <script src="./script/analystics.js"></script>
    <title>ballot</title>
  </head>
  <body>
    <div id="parallax">

      <div id="header">

        <div id="navbar">
          <ul id="navUl">
            <li><a href="#contact">Contact</a></li>
            <li><a href="pages/login.html">Login</a></li>
            <li><a href="#social">Social Media</a></li>
            <li><a href="#analystics">Analystics</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#about">About</a></li>
          </ul>
        </div>
        <h1><a href="index.html">Welcome</a></h1>
        <h3>Ballot. Create and use</h3>
      </div>

    </div>
    <div id="content">

      <div id="about">
        <h2>What is ballot?</h2>
        <div id="aboutText">
          <p>
            ballot is a website where you can see already polled polls and vote for yourself. You can also create ballots yourself by registering on the website and then uploading them or installing them in your own website. You can color the ballots the way you want and choose between two layouts
          </p>
        </div>

        <div id="aboutPicture">
          <img src="images/aboutPicture.jpg" alt="" height="300vh">
        </div>

      </div>

      <div id="news">
        <h2>News</h2>
        <div id="newsPicture">
          <img src="images/analystics_2.jpg" alt="" height="300vh">
        </div>

        <div id="newsText">
          <p>
            Here you will find news about the votes you have made or where you have voted. You will be able to see how many have voted with you and what
          </p>
        </div>

      </div>

      <div id="analystics">
        <h2>Analystics</h2>
        <div id="analysticsText">

          <p>
            On this page you will find statistics on several polls. Here you see how many people have voted, how many polls have been made and, of course, the average poll data. It also shows how many visited the site     (daily, weekly, ...)
          </p>

          <div id="readFromCSVAnalystics">

            <table>
              <?php
              $i = 1;
              $handle = fopen('php/analystics.csv', 'r');

              while($data = fgetcsv($handle, 500, ';')) {
                if($i != "10" && $i != "13"){
                  echo "<tr>";
                  echo "<td>".$data[0]."</td>";
                  echo "<td>".$data[1]."</td>";
                  echo "</tr>";
                }
                $i++;
              }
              fclose($handle);
              ?>
            </table>

          </div>

        </div>

        <div id="analysticsPicture">
          <img src="images/analystics_3.png" alt="" height="300vh">
        </div>

      </div>

      <div id="social">
        <h2>Social Media</h2>
        <div id="socialText">
          <p>
            You can find more about the Page and me on the social media platforms.
          </p>

          <div id="readFromCSVSocial">

            <table>
              <?php
              $i = 1;
              $handle = fopen('php/social.csv', 'r');

              while($data = fgetcsv($handle, 500, ';')) {
                if($i != "10" && $i != "13"){
                  echo "<tr>";
                  echo "<td>".$data[0]."</td>";
                  echo "<td>".$data[1]."</td>";
                  echo "</tr>";
                }
                $i++;
              }
              fclose($handle);
              ?>
            </table>

          </div>

        </div>

        <div id="socialIcons">
          <i class="fab fa-instagram"></i>
          <i class="fab fa-facebook-square"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-youtube"></i>
        </div>

      </div>

      <div id="contact">
        <h2>Contact me</h2>
        <form>
          <input name="name" type="text" class="feedback-input" placeholder="Name" />
          <input name="email" type="text" class="feedback-input" placeholder="Email" />
          <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
          <input type="submit" value="SUBMIT"/>
        </form>

      </div>

    </div>

  </body>
</html>
