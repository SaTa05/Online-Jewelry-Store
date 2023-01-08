<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CP Jewellery | Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link href="./css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>

  <!-- Alert -->
  <?php
    if (isset($_GET['message'])) {
      $type = $_GET['type'];
    ?>
  <div class="alert alert-<?php echo $type; ?> alert-dismissible fade show" role="alert">
    <strong>
      <?php
      echo $_GET['message'];
        ?>
    </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php
    }
    ?>
  <!-- End of Alert -->

  <!-- Conatct Us Title -->
  <div class="container-fluid p-0 m-0 bg-bprop pb-3">
    <div class="container pt-3">
      <h3 class="display-6 text-center">
        CONTACT US - CP JEWELLERY
      </h3>
      <p class="px-3 mx-3 text-center">
        Shoubhit Realtor is one of the most professional Real Estate
        Consultancy Services Provider in Kolkata West Bengal, India. Please
        let us know your requirement. We are assuring you the best property
        marketing services in Kolkata, India.
      </p>
    </div>
  </div>

  <!-- End of Conatct Us Title -->
  <!-- Conatct Us Title 2 -->
  <div class="container-fluid p-0 m-0 pb-3">
    <div class="container pt-3">
      <h4>CP Jewellery - Online Jewellery Store in Kolkata</h4>
      <!-- <p class="">
        Contact Us to buy, sell, rent or lease a property in Kolkata, Salt
        Lake, Sector-1, Sector-2, Sector-3, Sector-5, New Town and Nearby
        locations.
      </p> -->
    </div>
  </div>

  <!-- End of Conatct Us Title 2 -->
  <!-- Row - Column -->

  <div class="container text-center">
    <div class="row align-items-start">
      <div class="col-4">
        <h3 style="margin-bottom: 10px; padding-bottom: 10px">WRITE TO US</h3>
        <div class="container-fluid">
          <form method="post" action="./post_contact.php">
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name"
                aria-describedby="emailHelp" name="name" required />
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                aria-describedby="emailHelp" name="email" required />
            </div>
            <div class="mb-3">
              <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Phone number"
                aria-describedby="emailHelp" name="phone" required />
            </div>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px" name="description" required></textarea>
              <label for="floatingTextarea2">Description</label>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Send</button>
          </form>
        </div>
      </div>
      <div class="col-6 bg-bprop">
        <p class="p-3 text-start">
          Shoubhit realtor is a Kolkata based Real Estate Agency. We provide the best service and the credit goes to our
          founder Mr. Shoubhit. Our partners always ready to help you to buy, sell or rent properties if you have any
          query regarding this, our experts are eagerly waiting to give you the best solution to your queries.
          Feel free to contact us.

        </p>
        <h6 class="pb-1">Contact Shoubhit Realtor, Kolkata</h6>
        <ul class="list-group list-group-flush pb-2">
          <li class="list-group-item text-start bg-bprop">
            Email: &nbsp;<a href="mailto:shoubhitrealtor@gmail.com">cpjeweller@gmail.com</a>
          </li>
          <li class="list-group-item text-start bg-bprop">
            Mobile No.: &nbsp;<a href="tel:123-045-6789">+91 1230456789</a>
          </li>
          <li class="list-group-item text-start bg-bprop">
            Whatsapp No.: &nbsp;<a href="https://wa.me/911230456789">+91 1230456789</a>
          </li>
          <li class="list-group-item text-start bg-bprop">
            Address: &nbsp;<span style="color: blue; text-decoration: underline">R.R. Plot, Kolkata, West Bengal
              700107</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- End of Row - Column -->
  <div class="container">
    <div class="container text-center m-3 p-3">
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="992" height="610" id="gmap_canvas"
            src="https://maps.google.com/maps?q=rrplot,%20kolkata&t=k&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0"
            scrolling="no" marginheight="0" marginwidth="0"></iframe><a
            href="https://putlocker-is.org">putlocker</a><br />
          <style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 610px;
              width: 992px;
            }
          </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
          <style>
            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 500px;
              width: 800px;
            }
          </style>
        </div>
      </div>
    </div>
  </div>

  <script src="./js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>