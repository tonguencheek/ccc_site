<?php


    // Show this section
    $show = get_theme_mod($panel_id . '_about_general_show');

    if(!$show)
        return;
    
    // Title
    $title = get_theme_mod($panel_id .'_about_general_title');
    $entry = get_theme_mod($panel_id .'_about_general_entry');

    // Background Image
    $backImage = get_theme_mod($panel_id . '_about_general_image');
    $back_x = get_theme_mod($panel_id.'_about_background_position_x');
    $back_y = get_theme_mod($panel_id.'_about_background_position_y');
    $back_size = get_theme_mod($panel_id . '_about_background_size');
    $back_repeat = get_theme_mod($panel_id . '_about_background_repeat');
    $back_opaque = get_theme_mod($panel_id . '_about_background_opaque');
    $back_attachment = get_theme_mod($panel_id . '_about_background_attachment');
    $background_color = get_theme_mod($panel_id . '_about_background_color');
    $background_use_gradient = get_theme_mod($panel_id . '_about_use_gradient');
    $background_color_gradient = get_theme_mod($panel_id . '_about_background_color_gradient');
    $title_color = get_theme_mod($panel_id . '_about_title_color');
    $desc_color = get_theme_mod($panel_id . '_about_descriptions_color');

    // error_log("sidebar builder for $panel_id");
    // error_log("sidebar builder show is ". $show);
    // Title
    // error_log("sidebar builder show is ". $title);
    // error_log("sidebar builder show is ". $entry);

    // Background Image
    // error_log("sidebar builder show is back image ". $backImage);
    // error_log("sidebar builder show is back x ". $back_x);
    // error_log("sidebar builder show is back y ". $back_y);
    // error_log("sidebar builder show is back size ". $back_size);
    // error_log("sidebar builder show is back repeat ". $back_repeat);
    // error_log("sidebar builder show is attachment ". $back_attachment);
    // error_log("sidebar builder show is back color ". $background_color);
    // error_log("sidebar builder show is use gradient ". $background_use_gradient);
    // error_log("sidebar builder show is back gradient ". $background_color_gradient);
    // error_log("sidebar builder show is title color ". $title_color);
    // error_log("sidebar builder show is desc color ". $desc_color);
    //background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
   	$background = "";
//  background-position: center;
  //background-repeat: no-repeat;
  //background-size: cover;


    if($background_use_gradient)
    {
            $background .= "background: linear-gradient(140deg, $background_color_gradient 0%, $background_color 51%, $background_color_gradient 100%); ";  

    }else     if(isset($backImage)){
        $background .= "background-image: url('$backImage'); ";

        if($back_opaque)
            $background .= "opacity: 0.65; ";

        if($back_repeat)
            $background .="background-repeat: repeat; ";
        else
            $background .="background-repeat: no-repeat; ";

        if($back_attachment)
            $background .="background-attachment: fixed;";

        $background .= "background-position: $back_x $back_y; ";

        $background .= "background-size: $back_size; ";

        $background .= "background-color: $background_color; ";

    }
    $background .= "color: $desc_color; ";
    
?>

<div class="partnersPage" style="<?php echo $background ?>"> 
    <div class="partnersTitle" style="color:<?php echo $title_color ?>">
        <?php echo $title ?>
    </div>
    <?php echo( $entry) ?>

<div class="partnerTable">

    <?php dynamic_sidebar( $sidebarName); ?>

</div>
</div>