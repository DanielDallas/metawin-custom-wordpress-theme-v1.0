<?php
/*
 * The main template file
 * Template Name: Custom Metawin Page Template
 */

get_header(); ?>


<!-- Hero Section -->
<section id="hero" class="hero-section">

 <div class="hero-container">
   
  <?php
  // Retrieve and display Hero section ACF fields
  $hero_image = get_field("hero_image");
  $hero_text_title = get_field("hero_text_title");
  $hero_description = get_field("hero_description");
  $hero_button_text = get_field("hero_button_text");
  $hero_button_text_link = get_field("hero_button_text_link");
  ?>

  <!-- Displays the site identity custom logo here -->
  <?php
  // Display the custom logo from the site identity
  $custom_logo_id = get_theme_mod("custom_logo");
  $custom_logo = wp_get_attachment_image_src($custom_logo_id, "full");
  if ($custom_logo) {
   echo '<a href="' .
    esc_url(home_url("/")) .
    '"><img class="logo-site-identity" src="' .
    esc_url($custom_logo[0]) .
    '" alt="' .
    get_bloginfo("name") .
    '"></a>';
  } else {
   echo "<h1>" . get_bloginfo("name") . "</h1>";
  }
  ?>

  <!-- Other elements in the Hero Section -->
  <h1 class="hero-text-title"><?php echo $hero_text_title; ?></h1>
  <p class="hero-description"><?php echo $hero_description; ?></p>
  <a href="<?php echo $hero_button_text_link; ?>" class="hero-scroll-button"><?php echo $hero_button_text; ?> <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM281 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L136 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l182.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L393 239c9.4 9.4 9.4 24.6 0 33.9L281 385z"/></svg></a>
 </div>
</section>

<!-- About Us Section -->
<section id="about">
 <div class="about-section">
  <?php
  // Retrieve and display the About Us section ACF fields
  $about_us_title = get_field("about_us_title");
  $about_us_sub_title = get_field("about_us_sub_title");
  $about_us_description = get_field("about_us_description");
  $about_us_button_text = get_field("about_us_button_text");
  $about_us_image = get_field("about_us_image");
  ?>

  <div class="about-container">
   <h4 class="about-us-sub-title"><?php echo $about_us_sub_title; ?></h4>
   <h2 class="about-us-title"><?php echo $about_us_title; ?></h2>
   <p class="about-us-descriptions"><?php echo $about_us_description; ?></p>
   <a class="about-us-button-text" href="#"><?php echo $about_us_button_text; ?> <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#f7f7f7}</style><path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM281 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L136 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l182.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L393 239c9.4 9.4 9.4 24.6 0 33.9L281 385z"/></svg></a>
  </div>

  <div class="about-container-image">
<?php
$image = get_field("about_us_image");
$image_size = "full"; // Specify the desired image size

if ($image) {
 $image_url = wp_get_attachment_image_src($image, $image_size);
 $image_width = $image_url[1]; // Get the original image width
 $image_height = $image_url[2]; // Get the original image height

 $desired_width = 470; // Set your desired width
 $desired_height = 596; // Set your desired height

 // Calculate the new dimensions while preserving the aspect ratio
 $resized_dimensions = image_resize_dimensions(
  $image_width,
  $image_height,
  $desired_width,
  $desired_height,
  true
 );

 if ($resized_dimensions) {
  $resized_width = $resized_dimensions[4];
  $resized_height = $resized_dimensions[5];

  // Output the resized image
  echo '<img class="mobile-vers" src="' .
   esc_url($image_url[0]) .
   '" width="' .
   esc_attr($resized_width) .
   '" height="' .
   esc_attr($resized_height) .
   '" alt="About Us Image">';
 } else {
  // Output the original image if resizing fails
  echo '<img src="' .
   esc_url($image_url[0]) .
   '" width="' .
   esc_attr($image_width) .
   '" height="' .
   esc_attr($image_height) .
   '" alt="About Us Image">';
 }
}
?>

  </div>

 </div>
</section>

<!-- Table Section -->
<section id="casino-hotel">
 <div class="container-casino-table">
   

   
  <?php
  // Query and display custom post-type entries for "Casino Hotels"
  $args = [
   "post_type" => "casino_hotels",
   "orderby" => "meta_value_num",
   "meta_key" => "casino_score",
   "order" => "DESC",
   "posts_per_page" => -1,
  ];
  $query = new WP_Query($args);

  if ($query->have_posts()):
   echo '<h2 class="casino-table-heading">' .
    get_field("table_section_heading") .
    "</h2>";

   // Retrieve and display the dynamic date
   $current_date = date("F j, Y");
   echo '<p class="date-table-section"> <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fc115c}</style><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/></svg> ' .
    $current_date .
    "</p>";
    
   echo '<div><p class="top-rated-hotel">Top Rated Hotel</p></div>';
   echo '<div class="casino-table">';
   echo '<table class="mob-order">';
   echo "<tbody>";

   $serial_number = 1; // Initialize the serial number

   while ($query->have_posts()):
    $query->the_post();
    $logo = wp_get_attachment_image(get_field("casino_logo"), "full");
    $address = get_field("casino_address");
    $star_rating = get_field("casino_star_rating");
    $score = get_field("casino_score");
    $casino_url = get_field("casino-url");
    $review_link = get_permalink();

    echo '<tr class="casino-table-row">';
    echo '<td class="casino-table-serial-number">' .
     $serial_number .
     "</td>";

    $casino_image = get_field("casino_logo");
    $casino_image_size = "full"; // Specify the desired image size

    if ($casino_image) {
     $casino_image_url = wp_get_attachment_image_src(
      $casino_image,
      $casino_image_size
     );
     $casino_image_width = $casino_image_url[1]; // Get the original image width
     $casino_image_height = $casino_image_url[2]; // Get the original image height

     $casino_desired_width = 130; // Set your desired width
     $casino_desired_height = 50; // Set your desired height

     // Calculate the new dimensions while preserving the aspect ratio
     $casino_resized_dimensions = image_resize_dimensions(
      $casino_image_width,
      $casino_image_height,
      $casino_desired_width,
      $casino_desired_height,
      true
     );

     if ($casino_resized_dimensions) {
      $casino_resized_width = $casino_resized_dimensions[4];
      $casino_resized_height = $casino_resized_dimensions[5];

      // Output the resized image
      $casino_image_due =
       '<img src="' .
       esc_url($casino_image_url[0]) .
       '" width="' .
       esc_attr($casino_resized_width) .
       '" height="' .
       esc_attr($casino_resized_height) .
       '" alt="Custom Section Image">';
     } else {
      // Output the original image if resizing fails
      echo "not resized!";
     }
    }

    echo '<td class="casino-table-logo">' . $casino_image_due . "</td>";
    echo '<td class="casino-table-address">' . $address . "</td>";

    echo "</td>";
    echo '<td class="casino-meter"> 
      <div class="score-progress"; style="align:center;">
        <span class="progress-value">' .
     $score .
     '</span>;
      </div>
      
      
  <div class="star-rating">';
    for ($i = 1; $i <= 5; $i++) {
     $star_class = $i <= $star_rating ? "fa-star" : "fa-star-o";
     echo '<i class="fas ' . $star_class . '"></i>';
    }
    '</div>

</td>';

    echo '<td><p> <a class="visit-hotel-link" href="' .
     $casino_url .
     '">Visit Hotel</a></p> <a class="read-review-link" href="' .
     $review_link .
     '">Read Review</a></td>';
    echo "</tr>";

    $serial_number++; // Increment the serial number for the next iteration
   endwhile;

   echo "</tbody>";
   echo "</table>";

   echo "</div>";

   wp_reset_postdata();
  else:
   echo "<p>No casino hotels found.</p>";
  endif;
  ?>
 </div>
</section>




<!-- Custom Section -->
<section id="about" class="custom-section">
  
  
  <div class="custom-section-image">
<?php
$image = get_field("custom_section_image");
$image_size = "full"; // Specify the desired image size

if ($image) {
 $image_url = wp_get_attachment_image_src($image, $image_size);
 $image_width = $image_url[1]; // Get the original image width
 $image_height = $image_url[2]; // Get the original image height

 $desired_width = 463; // Set your desired width
 $desired_height = 625; // Set your desired height

 // Calculate the new dimensions while preserving the aspect ratio
 $resized_dimensions = image_resize_dimensions(
  $image_width,
  $image_height,
  $desired_width,
  $desired_height,
  true
 );

 if ($resized_dimensions) {
  $resized_width = $resized_dimensions[4];
  $resized_height = $resized_dimensions[5];

  // Output the resized image
  echo '<img src="' .
   esc_url($image_url[0]) .
   '" width="' .
   esc_attr($resized_width) .
   '" height="' .
   esc_attr($resized_height) .
   '" alt="Custom Image">';
 } else {
  // Output the original image if resizing fails
  echo '<img src="' .
   esc_url($image_url[0]) .
   '" width="' .
   esc_attr($image_width) .
   '" height="' .
   esc_attr($image_height) .
   '" alt="Custom Image">';
 }
}
?>

  </div>
  
  
 <div class="custom-section-content">
  <?php
  // Retrieve and display Custom section ACF fields
  $custom_section_image = get_field("custom_section_image");
  $custom_section_title = get_field("custom_section_title");
  $custom_section_sub_title = get_field("custom_section_sub_title");
  $custom_list_title = get_sub_field("custom_list_title");
  $custom_list_description = get_sub_field("custom_list_description");
  ?>

  <div class="custom-section-content-container">
   <h4 class="custom-sub-title"><?php echo $custom_section_sub_title; ?></h4>
   <h2 class="custom-title"><?php echo $custom_section_title; ?></h2>

   <?php // Check if custom rows exist.
// Check if custom rows exist.
if (have_rows("custom_section_content_list")):
    $custom_list_serial_number = 1; // Initialize the serial number

    // Loop through rows.
    while (have_rows("custom_section_content_list")):
     the_row();

     // Load sub field value.
     $custom_title = get_sub_field("custom_list_title");
     $custom_description = get_sub_field("custom_list_description");

     echo "<div>";

     echo '<p class="custom-list-numbering">' .
      $custom_list_serial_number .
      "</p>";
     echo '<h3 class="custom-list-title">' . $custom_title . "</h3>";
     echo '<p class="custom-list-description">' .
      $custom_description .
      "</p>";

     echo "</div>";

     $custom_list_serial_number++;

     // End loop.
    endwhile;

    // No value.
   else:
    echo "No Custom List found. Add some!";
   endif; ?>
  </div>


 </div>
</section>


<!-- More Sections could go in here -->


<?php get_footer(); ?>
