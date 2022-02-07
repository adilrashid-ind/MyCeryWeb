<?php 
include_once('./DB/db.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include "./Components/header_links.php";
    ?>
    <title>MyCery || Home</title>
  </head>
  <body>
    <!-- Section1 -->
    <section class="section1">
      <!-- nav -->
      <?php include('./Components/navbar.php'); ?>
      <!-- .nav -->
      <div class="section1Content">
        <div class="row">
          <div class="col-md-4 S1C1">
            <h1>
              Welcome To <br />
              MyCery
            </h1>
            <p id="tagLine">Grocery Ki Home Delivery</p>
            <!-- <input type="button" value="Download"  /> -->
            <!-- <button class="downloadBtn">Download</button> -->
            <div class="row">
              <div class="col-md-6">
                <img src="./assets/images/playBadge.png" alt="" />
              </div>
              <div class="col">
                <button type="button" class="downloadBtn">Download</button>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player
              src="https://assets1.lottiefiles.com/packages/lf20_8vcvc00i.json"
              background="transparent"
              speed="1"
              loop
              autoplay
              class="lottiePlayer"
            ></lottie-player>
          </div>
        </div>
      </div>

      <!-- Section 2 -->

      <div class="section2">
        <div class="container section2Content">
          <div class="row">
            <div class="col-md-6">
              <div id="owl-demo" class="owl-carousel owl-theme">
                <!-- slider -->
                <?php 
                $sql = "SELECT * FROM home_slider";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                  echo '
                <div class="item">
                  <img src="./assets/images/'.$row['images'].'" alt="" />
                </div>';
                }
                ?>
                <!-- <div class="item">
                  <img src="./assets/images/bg1.png" alt="" />
                </div>
                <div class="item">
                  <img src="./assets/images/playBadge.png" alt="" />
                </div>
                <div class="item">
                  <img src="./assets/images/playBadge.png" alt="" />
                </div>
                <div class="item">
                  <img src="./assets/images/playBadge.png" alt="" />
                </div> -->
                <!-- end slider -->
              </div>
            </div>
            <div class="col-md-6">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Inventore delectus ex nesciunt accusamus dolor ad excepturi
                blanditiis voluptas necessitatibus atque autem illo rerum error
                dignissimos optio earum est, provident quis, tempora eveniet
                tenetur nulla sed cumque eum? Vero nostrum similique ex
                praesentium molestiae in quo sapiente temporibus provident
                aspernatur unde veniam autem porro quibusdam distinctio enim
                corporis vel, quisquam, nobis veritatis odit illo! Recusandae
                impedit eius beatae facilis veniam labore natus ex dignissimos
                vel nobis. Illo similique quasi atque qui.
              </p>
            </div>
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
