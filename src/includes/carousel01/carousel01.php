<?php
        $carousel_id="carouselEp01";
        // Array of slide data
        $slides = [
            [
                // You should update the path for the image? 
                'image' => '',
                'caption' => '',
                'html_content'=>'../includes/carousel01/custom_content_first_slide.php',
            ],
            [
                'image' => '../src/assets/img/selected/tree-736885_1280.jpg',
                'caption' => '',
                'html_content'=>'',
            ],
            [
                'image' => '../src/assets/img/selected/digital_camera_photo-980x653.jpg', // Add image path for the third slide if needed
                'caption' => '',
                'html_content'=>'',
            ]
        ];
    ?>

<div id="<?=$carousel_id?>" class="carousel slide">
<!-- Carousel-indicators go up -->
    <?php
       // include '../includes/carousel01/carousel-indicators01.php';
    ?>
    <div class="carousel-inner">
        <?php foreach ($slides as $key => $slide) : ?>
            <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>"
                <?php if (!empty($slide['image'])) : ?>
                    style="background-image: url('<?= $slide['image'] ?>');"
                <?php endif; ?>           
            >
            <?php if (!empty($slide['caption'])) : ?>                
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $slide['caption'][0] ?></h5>
                    <p><?= $slide['caption'][1] ?></p>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($slide['html_content']) && file_exists($slide['html_content'])) : ?>                
                <?php
                    include $slide['html_content'];
                ?>
            <?php endif; ?>
            </div>
        <?php endforeach; ?>
  
    </div>
  <!-- Controls  -->
    <?php
        include 'carousel-controls01.php'
    ?>
</div>