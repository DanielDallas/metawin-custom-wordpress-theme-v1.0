<?php
/**
 * The header template for Metawin theme
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>
  >

  <head>
    <meta charset="
    <?php bloginfo("charset"); ?>
    ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo wp_get_document_title(); ?></title>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <?php $hero_image_url = wp_get_attachment_image_src(get_field("hero_image"), "full")[0]; ?>

    <style>
      body {
        font-family: "Poppins", sans-serif;
        position: relative;
        background: #ffffff;
        left: 0;
        top: 0;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
      }

      .logo-site-identity {
        width: 148px;
        height: 148px;
      }

      .hero-container {
        background-image: linear-gradient(
            89.79deg,
            #000000 0.18%,
            rgba(0, 0, 0, 0) 99.82%
          ),
          url("<?php echo $hero_image_url; ?>");
        padding: 90px 52px;
        height: auto;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }

      .hero-text-title {
        margin: 27px 0 0 0;
        width: 762px;
        height: 138px;
        font-style: normal;
        font-weight: 700;
        font-size: 55px;
        line-height: 121%;
        /* or 67px */
        color: #ffffff;
      }

      .hero-description {
        margin: 27px 0 0 0;
        width: 274px;
        height: 27px;
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 121%;
        /* or 19px */
        color: #ffffff;
      }

      .hero-scroll-button {
        background: #fc115c;
        border-radius: 100px;
        display: inline-block;
        padding: 13px 25px;
        color: #ffffff;
        text-decoration: none;
      }

      .hero-scroll-button:hover {
        background: #000;
      }

      .hero-scroll-button:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(244, 67, 54, 0.3);
      }

      .about-container {
        padding: 84px 52px;
        width: 43%;
        height: auto;
      }

      .about-us-sub-title {
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 121%;
        /* or 19px */
        color: #fc115c;
      }

      .about-us-title {
        width: 60%;
      }

      .about-description {
        height: auto;
        font-family: "Poppins";
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 28px;
        /* or 175% */
        color: #555555;
      }

      .about-section {
        display: flex;
      }

      .about-container {
        flex: 1;
      }

      .about-container-image {
        flex: 1;
        margin: 3% 0 0 0;
      }

      .about-us-button-text {
        background: #fc115c;
        border-radius: 100px;
        display: inline-block;
        padding: 13px 25px;
        color: #000000;
        text-decoration: none;
      }

      .about-us-button-text:hover {
        color: #fff;
        background: #000;
      }

      .about-us-button-text:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(244, 67, 54, 0.3);
      }

      .container-casino-table {
        background: #f1f1f1;
      }

      .casino-table-heading {
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 121%;
        /* or 39px */
        text-align: center;
        color: #000000;
        padding-top: 2%;
      }

      .date-table-section {
        margin-top: -23px;
        font-family: "Jost";
        font-style: italic;
        font-weight: 600;
        font-size: 12px;
        line-height: 126.5%;
        /* or 15px */
        text-align: center;
        color: #000000;
      }

      .casino-table {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .casino-table-row {
        background: #ffffff;
        margin-top: 15px;
        border-radius: 5px;
      }

      .casino-table-serial-number {
        padding: 0 4px;
        background: #fc115c;
        color: #ffffff;
        font-weight: bold;
        border-radius: 5px;
      }

      .casino-table-logo {
        padding: 25px;
      }

      .casino-table-address {
        padding: 0 20px;
      }

      .star-rating {
        display: flex;
        justify-content: center;
        align-items: center;

        color: #ffc107; /* Set the default star color to yellow */
      }

      .star-rating .fa-star {
        display: inline-block;
        width: 12px;
        height: 12px;
        margin-right: 5px;
        color: #ffc107; /* Set the active star color to yellow */
      }

      .star-rating .fa-star-o {
        color: #ccc; /* Set the inactive star color to light gray */
      }

      .star-rating .fa-star.half-filled:before {
        content: "\f089"; /* Use the half-filled star icon from Font Awesome */
        position: relative;
        left: -8px; /* Adjust the position to align the half star */
        color: #ffc107; /* Set the color for the half-filled star to yellow */
      }

      .visit-hotel-link {
        margin: 2px 15px;
        background-color: #27D04C;
        padding: 10px 25px;
        border-radius: 15px;
        text-decoration: none;
        color: #ffffff;
      }

      .read-review-link {
        margin: 2px 15px;
        padding: 10px 25px;
      }

      .casino-meter {
        display: block;
        justify-content: center;
        align-items: center;
        padding: 25px;
      }

      .custom-section {
        display: flex;
      }

      .custom-section-image {
        flex: 1;
        margin: 70px 0 -50px 70px;
      }

      .custom-section-content {
        flex: 1;
        margin: 3% 0 0 0;
        padding-right: 5%;
      }

      .custom-sub-title {
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 121%;
        /* or 19px */
        color: #fc115c;
      }

      .custom-title {
        margin-top: -3%;
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 121%;
        /* or 39px */
        color: #000000;
      }

      .custom-list-numbering {
        width: 10px;
        padding: 5px 25px;
        font-weight: bold;
        color: #ffffff;
        background: #fc115c;
        text-align: center;
        border-radius: 100px;
      }

      .custom-list-title {
        margin-top: -2%;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 121%;
        /* or 29px */
        color: #000000;
      }

      .custom-list-description {
        margin-top: -3%;
        font-style: normal;
        font-weight: 500;
        font-size: 15px;
        line-height: 28px;
        /* or 175% */
        color: #000000;
      }

      .footer-section {
        padding: 15px;
        background: #101010;
      }

      .footer-logo {
        padding: 2% 0;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .footer-image-18 {
        padding: 2% 0;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .footer-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
      }

      .footer-nav li {
        align-items: center;
        display: inline-block;
        margin-right: 27px;
        text-decoration: none;
        color: #ffffff;
      }

      .footer-nav li a {
        margin-left: auto;
        margin-right: auto;
        text-decoration: none;
        color: #ffffff;
      }

      .footer-nav li a:hover {
      }

      .footer-copyright {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
      }


      .top-rated-hotel{
        text-align: center;
        color:#ffffff;
        margin:20px 45% 0 45%;
        padding:5px 15px;
        border-radius:10px 10px 0 0;
        background: #5C33FF;
        }

      

      /* Adjustments for mobile devices */
      @media screen and (max-width: 768px) {
        .logo-site-identity {
          /* Update the size of the logo for mobile devices */
          width: 100px;
          height: 100px;
        }

        .hero-container {
          /* Adjust the padding for mobile devices */
          padding: 50px;
        }

        .hero-text-title {
          /* Adjust the font size and width for mobile devices */
          font-size: 32px;
          width: 100%;
        }

        .hero-description {
          /* Adjust the font size for mobile devices */
          font-size: 13px;
        }

        .about-section {
          padding: 0px;
          flex-direction: column;
        }

        .about-container {
          /* Adjust the padding, width, and height for mobile devices */
          width: 80%;
          padding: 30px 20px;
          height: auto;
        }

        .about-container-image {
          display: flex;
          justify-content: center;
          align-items: center;
          margin-bottom: 45px;
        }

        .about-container-image img {
          max-width: 96%;
          max-height: 60%;
        }

        .about-us-title {
          /* Adjust the width for mobile devices */
          width: 100%;
        }

        .about-us-description {
          /* Adjust the font size and width for mobile devices */
          font-size: 14px;
          width: 100%;
        }

        .casino-table {
          width: 100%;
          justify-content: center;
          align-items: center;
        }
        
        .top-rated-hotel{
            text-align: center;
            color:#ffffff;
            margin:10% 25% 0 25%;
            padding:5px 15px;
            border-radius:10px 10px 0 0;
            background: #5C33FF;
        }

        .container-casino-table {
          /* Adjust the padding and margin for mobile devices */
          padding: 30px;
          margin-bottom: 105px;
        }

        .casino-table-heading {
          /* Adjust the font size for mobile devices */
          font-size: 28px;
        }

        .date-table-section {
          /* Adjust the font size for mobile devices */
          font-size: 12px;
        }

        .casino-meter {
          justify-content: center;
          align-items: center;
        }

        .mob-order th:nth-child(1),
        .mob-order td:nth-child(1) {
          display: none;
        }

        .mob-order td {
          margin: 0 10px;
          justify-content: center;
          align-items: center;
          padding: 20px;
          display: grid;
        }

        .visit-hotel-link {
          /*margin:2px 15px;*/
          background-color: #27D04C;
          padding: 10px 25px;
          border-radius: 15px;
          text-decoration: none;
          color: #ffffff;
        }

        .read-review-link {
          /*margin:2px 15px;*/
          /*padding:10px 25px;*/
        }

        .custom-section {
          /* Update the margin and flex-direction for mobile devices */
          margin: 70px 0;
          flex-direction: column-reverse;
        }

        .custom-section-image {
          /* Update the margin for mobile devices */
          margin: 0;
          display: flex;
          flex-basis: 100%;
          justify-content: center;
          align-items: center;
          margin-bottom: 45px;
        }

        .about-container-image img {
          max-width: 92%;
          max-height: 50%;
        }

        .custom-section-image img {
          max-width: 90%;
          max-height: 50%;
        }

        .custom-section-content {
          /* Update the margin and width for mobile devices */
          width: 84%;
          padding: 30px 20px;
          height: auto;
          flex-basis: 100%;
        }

        .custom-sub-title {
          /* Adjust the font size for mobile devices */
          font-size: 14px;
        }

        .custom-title {
          /* Adjust the font size for mobile devices */
          font-size: 24px;
        }

        .custom-list-numbering {
          /* Adjust the padding for mobile devices */
          width: 10px;
          padding: 5px 25px;
          font-weight: bold;
          color: #ffffff;
          background: #fc115c;
          text-align: center;
          border-radius: 100px;
        }

        .custom-list-title {
          /* Adjust the font size for mobile devices */
          font-size: 20px;
        }

        .custom-list-description {
          /* Adjust the font size and height for mobile devices */
          height: auto;
          font-family: "Poppins";
          font-style: normal;
          font-size: 17px;
          line-height: 28px;
          /* or 175% */
          color: #000000;
        }

        .footer-section {
          /* Adjust the height and padding for mobile devices */
          height: auto;
          padding: 30px;
        }

        .footer-nav li {
          /* Adjust the margin for mobile devices */
          margin-right: 15px;
          font-size: 12px;
        }

        .footer-copyright {
          font-size: 13px;
        }
      }

      .score-progress {
        margin: 10px 0;
        position: relative;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        background: conic-gradient(#FC115C 284deg, #ededed 0deg);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .score-progress::before {
        display: flex;
        align-items: center;
        justify-content: center;
        content: "";
        position: absolute;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        background-color: #fff;
      }
      .progress-value {
        position: relative;
        font-size: 16px;
        font-weight: 600;
        color: #000000;
      }
    </style>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>
    >
    <!--<header class="header">-->
    <!--    <div class="site-logo">-->
    <!--        METAWIN-->
    <!--    </div>-->

    <!--    <nav class="site-navigation">-->
    <?php
// // Display the menu from Primary Menu location
// wp_nav_menu(array(
//   'theme_location' =>
    'primary_menu' // )); // ?>
    <!--    </nav>-->
    <!--</header>-->
  </body>
</html>