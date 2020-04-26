<?php
global $complete;  
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg"); 

for($i=1; $i<=10; $i++){
	if(!empty($complete['slide_image'.$i])){
		$imgArr[] = $i;
	}
}
require get_template_directory() . '/frontpage/slider.php';
?>

<section id="home_slider">
  <div class="slider-main">
    <?php if(!empty($imgArr)){ ?>
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
        <?php
			   foreach($imgArr as $val){
				?>
        <img src="<?php echo $complete['slide_image'.$val]; ?>" data-thumb="<?php echo $complete['slide_image'.$val]; ?>" alt="<?php echo strip_tags($complete['slide_title'.$val]); ?>" title="<?php echo esc_attr('#htmlcaption'.$val) ; ?>" />
        <?php } ?>
      </div>
      <?php foreach($imgArr as $val)	{ ?>
      <div id="htmlcaption<?php echo esc_attr($val); ?>" class="nivo-html-caption">
      	<div class="nivo-caption-content">
			<?php if(!empty($complete['slide_title'.$val])){ ?>
            <div class="title"><?php echo $complete['slide_title'.$val]; ?></div>
            <?php } ?>
            <?php if(!empty($complete['slide_desc'.$val])){ ?>
            <div class="slidedesc"><?php echo $complete['slide_desc'.$val]; ?></div>
            <?php } ?>
            <?php if(!empty($complete['slide_btn'.$val])){ ?>
            <div class="slidebtn"><a class="slidelink" href="<?php echo $complete['slide_link'.$val]; ?>"><?php echo $complete['slide_btn'.$val]; ?></a></div>
            <?php } ?>
            <?php if(!empty($complete['slide_btn'.$val.'_2'])){ ?>
            <div class="slidebtn slidebtn2"><a class="slidelink slidelink2" href="<?php echo $complete['slide_link'.$val.'_2']; ?>"><?php echo $complete['slide_btn'.$val.'_2']; ?></a></div>
            <?php } ?>
      	</div>
      </div>
      <?php } ?>
    </div>
    <?php }
	else { ?>
    <div class="slider-wrapper slide-temp theme-default">
      <div id="slider" class="nivoSlider">
        <?php foreach($ImageUrl as $val) { ?>
        <img src="<?php echo $val; ?>" data-thumb="<?php echo $val; ?>" alt="" title="#htmlcaption" />
        <?php } ?>
      </div>
      <?php for($i=1; $i<=3; $i++)	{ ?>
      <div id="htmlcaption" class="nivo-html-caption">
        <div class="title"><?php echo 'SKT Actor Lite<small>Portfolio</small>Theme'; ?></div>
        <div class="slidedesc">&nbsp;</div>
        <div class="slidebtn">&nbsp;</div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
    
    <div class="skt-slider-wave">
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="1402.000000pt" height="195.000000pt" viewBox="0 0 1402.000000 195.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,195.000000) scale(0.100000,-0.100000)"
fill="#00d1ba" stroke="none">
<path class="skt-builder-wave-color" d="M9050 994 c-2709 -524 -4938 -954 -4955 -955 -16 -1 -940 260 -2052
580 -1112 320 -2027 581 -2032 581 -8 0 -11 -187 -11 -600 l0 -600 7010 0
7010 0 0 975 0 975 -22 -1 c-13 0 -2239 -430 -4948 -955z"/>
</g>
</svg>
    </div>
    
  </div>
</section>