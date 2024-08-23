<?php

require "layout/header.php";

?>
<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
        <h1>
          Laboratory Activity #2<br />Hidden Input
        </h1>
        <h2>
          Integrative Programming and Technologies
        </h2>
      </div>
      <div class="p-section--shallow">
        <p>
            This simple web application demonstrates handling of data passed through multiple PHP files, data is shared via the hidden form input
        </p>
        <p>
          Please register your data by clicking the button.
        </p>
      </div>
      <div class="p-cta-block">
        <a href="step-1.php" class="p-button--positive">Register</a>

        <p>
            <small>
                Design System: <a href="https://vanillaframework.io/docs">Vanilla Framework</a>
            </small>
        </p>
      </div>
    </div>

    <div class="col">
      <div class="p-image-container--3-2 is-cover">
        <img class="p-image-container__image" src="https://www.auf.edu.ph/home/images/ittc.jpg" alt="">
      </div>
    </div>

  </div>
</section>

<?php require "layout/footer.php"; ?>