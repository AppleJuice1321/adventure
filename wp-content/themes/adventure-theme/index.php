<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php blogInfo("description") ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>Adventure-Character-Sheet</title>
</head>
<body>
     <!-- race -navbar -->
     <div class="adv__nav__container">
            <?php
                the_custom_logo();
                wp_nav_menu();
            ?>
     </div>
    
    <div class="adv__container">
        <!-- hEADER ======================== -->
        <div class="adv__header">
            <h1>Adventure Character builder</h1>
            <h2>Hello and welcome. Enjoy the magic of creation!</h2>
            <p>Let your fantasies go wild and craft heroes... or villains!</p>
        </div>

         <?php
            // while(have_posts()) {
            //     the_posts();
            //     the_post_thumbnail("thumbnail");
            //     the_title("<h3 class='adv-heading'>", "</h3>");
            //     the_excerpt();
            // }
         ?>

        <!-- MAIN ========================== -->
        <div class="adv__main">
            <!-- Write a homebrew -->
            <form method="post" class="adv__form">
                <!-- Race -->
                <div class="adv__race">
                    <label for="race-title">Race Name
                    <textarea name="race-title" placeholder="Enter your homebrew race title"><?php  echo file_get_contents("content/race-title.txt"); ?></textarea>
                    </label>
                    <label for="race-title">Race Description
                    <textarea name="race-description" placeholder="Enter your race homebrew     description"><?php echo file_get_contents("content/race-description.txt"); ?></textarea>
                    </label>                    
                </div>

                <!-- Class -->
                <div class="adv__class">
                    <label for="class-title">Class Name</label>
                    <textarea name="class-title" placeholder="Enter your homebrew class description"><?php echo file_get_contents("content/race-description.txt"); ?></textarea>

                    <label for="class-description">Class Description</label>
                    <textarea name="class-description" placeholder="Enter your homebrew class description"><?php echo file_get_contents("content/race-description.txt"); ?></textarea>
                </div>

                <!-- Equipment -->
                <div>
                    <label for="primary-title">Primary Slot</label>
                    <textarea name="primary-title" placeholder="Primary Weapon"><?php echo  file_get_contents("content/race-description.txt"); ?></textarea>

                    <label for="secondary-title">Secondary Slot</label>
                    <textarea name="secondary-title" placeholder="Secondary Weapon"><?php echo  file_get_contents("content/race-description.txt"); ?></textarea>
                </div>
                <div>
                    <label for="armor-title">Armor slot</label>
                    <textarea name="armor-title" placeholder="Enter your homebrew description"><?php echo file_get_contents("content/race-description.txt"); ?></textarea>
                </div>
                <div>
                    <label for="potion-title">Potion slot</label>
                    <textarea name="potion-title" placeholder="Enter your homebrew description"><?php echo file_get_contents("content/race-description.txt"); ?></textarea>
                    
                    <label for="scroll-title">Scroll Slot</label>
                    <textarea name="scroll-title" placeholder="Enter your homebrew description"><?php echo file_get_contents("content/race-description.txt"); ?></textarea>
                </div>
                </form>
        </div>

        <!-- FOOTER ======================== -->
    </div>
    <footer class="adv__footer">
    <H2>Made by the legendary Rafa</H2>
    </footer>
</body>
</html>