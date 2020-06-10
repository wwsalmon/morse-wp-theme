<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, target-densityDpi=device-dpi' name='viewport'/>
    <title><?php echo wp_get_document_title(); ?></title>
<?php
date_default_timezone_set("America/New_York");
wp_head();
?>
</head>
<body class="morse-font-body">
<?php
$navbar_bg = get_theme_mod("morse-wp-navbar-bg");
$navbar_class = "";
$navbar_logo = "";
if ($navbar_bg == "light"){
    $navbar_logo = "morse-wp-logo-light";
} else if ($navbar_bg == "dark"){
    $navbar_class = "morse-bg-primary";
    $navbar_logo = "morse-wp-logo-dark";
}
$navbar_line = get_theme_mod("morse-wp-navbar-line");
if ($navbar_line == "primary"){
    $line_class = "morse-bg-primary";
} else if ($navbar_line == "accent"){
    $line_class = "morse-bg-accent";
} else if ($navbar_line == "none"){
    $line_class = "morse-none";
}
?>
<div class="sz-navbar morse-wp-template-navbar <?php echo $navbar_class ?>">
    <div class="sz-navbar-inner sz-navbar-right container">
        <div class="navbar-logo"><a href="<?php echo get_home_url() ?>"><img src="<?php echo get_theme_mod($navbar_logo) ?>"></a></div>
        <div class="navbar-tagline"><span><?php echo get_theme_mod("morse-wp-navbar-tagline") ?></span></div>
        <input type="checkbox" id="sz-navbar-check">
        <label for="sz-navbar-check" class="sz-navbar-hamburger">☰</label>
        <div class="morse-wp-template-navbar-line <?php echo $line_class ?>"></div>
        <div class="sz-navbar-items">
            <?php
            foreach (get_menu_items_by_registered_slug("navbar") as $item){
                echo "<div class=\"sz-navbar-item\"><span><a href=\"" . $item->url . "\">" . $item->title . "</a></span></div>";
            }
            ?>
        </div>
    </div>
</div>
