<?php

    $heading = get_field('heading');
    if(empty($heading)){
        $heading = '';
    }

    $title = get_field('title');
    if(empty($title)){
        $title = '';
    }

?>

<section class="common__title__heading">
    <div class="container">
        <div class="common__title__heading__head">
            <h3 class="common__title__heading__text"><?php echo $heading; ?></h3>
            <h2 class="common__title__heading__title"><?php echo $title ?></h2>
        </div>
    </div>
</section>