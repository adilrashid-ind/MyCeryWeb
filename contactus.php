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
      <div class="section1ContentContactUs">
        <div class="row">
          <div class="col-md-6" style="text-align: center; padding: 40px">
            <h2>Contact Us</h2>
            <p style="margin: 0px">
              <i class="fa fa-whatsapp" style="color: green"></i> &nbsp +91
              7008029658
            </p>
            <p style="margin: 0px">
              <i class="fa fa-envelope-open-o" style="color: green"></i>
              &nbsp support@mycery.com
            </p>
            <p style="margin: 0px">
              <i class="fa fa-phone" style="color: green"></i>
              &nbsp +91 7008029658
            </p>
          </div>
          <div class="col contactUsForm">
            <form id="contactUsForm" action="DB/contact.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <!-- <label for="name">Name</label> -->
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Enter Your Name" name="name"
                  required pattern="[a-zA-Z\s]{3,100}" title="Enter valid name"
                />
              </div>
              <div class="form-group">
                <!-- <label for="phone">Mobile No.</label> -->
                <input
                  type="text"
                  class="form-control"
                  id="phone"
                  placeholder="Mobile No." name="phone" pattern="^[6-9]{1}[0-9]{9}$|^[6-9]{1}[0-9]{11}$" title="must be 10 or 12digit"
                  required
                />
              </div>
              <div class="form-group">
                <!-- <label for="email">Email address</label> -->
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="email"
                  placeholder="Enter email" name="email"
                  required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please entervalid mail e.g: example@mail.com"
                />
                <small id="email" class="form-text text-muted"
                  >We'll never share your email with anyone else.</small
                >
              </div>
              <div class="form-group">
                <!-- <label for="message">Messege</label> -->
                <textarea
                  class="form-control"
                  id="message"
                  rows="3" name="message"
                  placeholder="Type Your Messege Here" minlength="10" required
                ></textarea>
              </div>
              <div class="form-group mt-3">
                <!-- <label for="docs"
                  >Attach Supporting File</label> -->

                <input
                  type="file"
                  class="form-control-file"
                  id="docs" name="docs"
                />
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-outline-success" id="contactBtn" name="contactBtn">
                  Send
                </button>
                <button type="reset" class="btn btn-outline-danger">
                  Cancel
                </button>
              </div>
            </form>
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

  <script>
    $(document).ready(function(){
      $("#contactUsForm")[0].reset();
    });
  </script>
</html>
