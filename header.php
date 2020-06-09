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
<body>
<div class="sz-navbar morse-wp-template-navbar">
    <div class="sz-navbar-inner sz-navbar-right">
        <div class="navbar-logo"><a href="<?php echo get_home_url() ?>"><?php echo get_bloginfo("name") ?></a></div>
        <input type="checkbox" id="sz-navbar-check">
        <label for="sz-navbar-check" class="sz-navbar-hamburger">☰</label>
        <div class="sz-navbar-items">
            <?php
            foreach (get_menu_items_by_registered_slug("primary") as $item){
                echo "<div class=\"sz-navbar-item\"><span><a href=\"" . $item->url . "\">" . $item->title . "</a></span></div>";
            }
            ?>
        </div>
    </div>
</div>
