<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include "./Components/header_links.php";
    ?>
    <title>MyCery || About Us</title>
  </head>
  <body>
    <section class="section1">
      <!-- nav -->
      <?php include('./Components/navbar.php'); ?>
      <!-- .nav -->
      <div class="section1Content">
        <h1>About Us</h1>
        <div class="row" style="margin-top: 40px">
          <div class="col-md-7 aboutUsCol1">
            <h4>This Is Heading</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
              necessitatibus explicabo ipsum iusto a maxime!
            </p>
          </div>
          <div class="col-md-1"><p></p></div>
          <div class="col-md-4 aboutUsCol2">
            <h4>This Is Heading</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
            </p>
          </div>
        </div>

        <div class="row" style="margin-top: 40px">
          <div class="col-md-3 aboutUsCol3">
            <h3 style="color: green">We Deliver Safely</h3>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player
              src="https://assets4.lottiefiles.com/packages/lf20_txatrk7c.json"
              background="transparent"
              speed="1"
              style="width: 230px; height: 230px"
              loop
              autoplay
            ></lottie-player>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-8">
            <div class="row">
              <div class="col">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player
                  src="https://assets4.lottiefiles.com/packages/lf20_txatrk7c.json"
                  background="transparent"
                  speed="1"
                  style="width: 130px; height: 130px"
                  loop
                  autoplay
                ></lottie-player>
              </div>
              <div class="col">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player
                  src="https://assets1.lottiefiles.com/packages/lf20_yqhwn4pd.json"
                  background="transparent"
                  speed="1"
                  style="width: 130px; height: 130px"
                  loop
                  autoplay
                ></lottie-player>
              </div>
              <div class="col">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player
                  src="https://assets2.lottiefiles.com/packages/lf20_iawwfiag.json"
                  background="transparent"
                  speed=".5"
                  style="width: 130px; height: 130px"
                  loop
                  autoplay
                ></lottie-player>
              </div>
              <div class="col">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player
                  src="https://assets6.lottiefiles.com/packages/lf20_juaw2cbl.json"
                  background="transparent"
                  speed=".3"
                  style="width: 130px; height: 130"
                  loop
                  autoplay
                ></lottie-player>
              </div>
            </div>
            <div class="row">
              <div class="col aboutUsCol6">
                <h4>This Is Heading</h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo
                  maxime repellendus repudiandae, voluptas quo ipsum.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Section 2 -->

      <h1 style="text-align: center">Some Of US</h1>

      <div class="section2AboutUs">
        <div class="row">
          <div class="col teamCol">
            <img src="./assets/images/team1.jpg" alt="" />
            <h5>Adil Rashid</h5>
            <!-- <p>Founder & CEO</p> -->
            <p>
              <i class="fa fa-linkedin" id="socialIcon1"></i>
              <i class="fa fa-twitter" id="socialIcon2"></i>
            </p>
          </div>
          <div class="col teamCol">
            <img src="./assets/images/team1.jpg" alt="" />
            <h5>Adil Rashid</h5>
            <!-- <p>Founder & CEO</p> -->
            <p>
              <i class="fa fa-linkedin" id="socialIcon1"></i>
              <i class="fa fa-twitter" id="socialIcon2"></i>
            </p>
          </div>
          <div class="col teamCol">
            <img src="./assets/images/team1.jpg" alt="" />
            <h5>Adil Rashid</h5>
            <!-- <p>Founder & CEO</p> -->
            <p>
              <i class="fa fa-linkedin" id="socialIcon1"></i>
              <i class="fa fa-twitter" id="socialIcon2"></i>
            </p>
          </div>
        </div>
      </div>
    </section>

    <?php
      include "./Components/footer.php";
    ?>
  </body>

  <?php
      include "./Components/footer_links.php";
  ?>
</html>
