<?php
        $carousel_id="carouselExampleCaptions";
        // Array of slide data
        $slides = [
            [
                // You should update the path for the image? 
                'image' => './carousel01/digital_camera_photo-980x653.jpg',
                'caption' => ['First slide label', 'Some representative placeholder content for the first slide.']
            ],
            [
                'image' => './carousel01/tree-736885_1280.jpg',
                'caption' => ['Second slide label', 'Some representative placeholder content for the second slide.']
            ],
            [
                'image' => '', // Add image path for the third slide if needed
                'caption' => ['Third slide label', 'Some representative placeholder content for the third slide.']
            ]
        ];
    ?>

<div id="<?=$carousel_id?>" class="carousel slide">
<!-- Carousel-indicators go up -->
    <?php
        include './carousel01/carousel-indicators01.php';
    ?>
    <div class="carousel-inner">
        <?php foreach ($slides as $key => $slide) : ?>
            <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>"
                <?php if (!empty($slide['image'])) : ?>
                    style="background-image: url('<?= $slide['image'] ?>');"
                <?php endif; ?>
            
            >
               
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $slide['caption'][0] ?></h5>
                    <p><?= $slide['caption'][1] ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  <!-- Controls  -->
    <?php
        include 'carousel-controls01.php'
    ?>
</div>