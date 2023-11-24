<?php
/*
 * Template Name: Home Page
*/
get_header();
?>
<section class="hero-section home-top-section text-left padding-t-120 padding-b-120">
<video class="row-lg vd-lazy" id="background-video" preload="yes"  loop autoplay loop muted playsinline>
    <source data-src="<?php bloginfo('template_url'); ?>/assets/home-video.mp4" type="video/mp4" type="video/mp4">
</video>
<div class="container">
  <div class="outer-logo-part">
    <div class="for-home-client-logo">
    <i class="vlazy"></i>
    <i class="vlazy"></i>
    <i class="vlazy"></i>
    <i class="vlazy"></i>
    <i class="vlazy"></i>
    </div>
   </div>
    <div class="heading text-left">
        <h1><?php the_field('heading-top');?></h1>
        <!-- 
        <div class="text-center btn-container margin-t-60">
        <a href="<?php //echo site_url('/contact-us'); ?>" class="white-btn">Request A Free Consultation</a>
        </div> 
        -->
    </div>
</div>
</section>
    <?php require_once get_template_directory() .'/common/awards.php'; ?>
    <?php  
    $our_outsourcing_services = get_field('our_outsourcing_services');
    if( $our_outsourcing_services ) :
    $Enable = $our_outsourcing_services['is_enabled'];
    if( $Enable == "yes" ) {?>
    <section class="our-outsource-services <?php echo $our_outsourcing_services['sc_background']; ?> padding-t-120 padding-b-120">
        <div class="container">
            <div class="heading text-center">
                <?php echo $our_outsourcing_services['content'];?>
            </div>

            <div id="tabs1" class="dis-flex tab-contents no-js margin-t-100">
                <div class="left-tabs">
                    <div class="tab-nav">

                        <?php 
                        $topics = $our_outsourcing_services['topics'];
                        $tn = 1;
                        foreach( $topics as $topicNav ){       
                        $isActive = "";
                        if( $tn == 1 ){
                            $isActive = "is-active";
                        }?>
                        <h3 class="tab-link <?php echo $isActive;?>"><?php echo $topicNav['title']; ?></h3>
                        <?php $tn++; }?>
                    </div>
                </div>
                <div class="right-tabs list-two">
                    <?php 
                    $tn = 1;
                    foreach( $topics as $topicText ){
                    
                    $isActive = "";
                    if( $tn == 1 ){
                        $isActive = "is-active";
                    }
                    ?>
                    <div class="tab-content <?php echo $isActive;?>">
                        <span class="title"><?php echo $topicText['title']; ?></span>
                        <?php echo $topicText['text']; ?>
                        <a href="<?php echo $topicText['link']; ?>" class="learn-more">Learn More <i class="round-arrow-icon"></i></a>
                    </div>
                    <?php $tn++; }?>
                </div>
            </div>
        </div>
    </section>
    <?php } endif;?>
    <?php  
    $techstack = get_field('tech-stack');
    if( $techstack ) :
    $techstackEnable = $techstack['is_enabled'];
    if( $techstackEnable == "yes" ) {?>
    <?php $flexclass =   $techstack['grid_flex']; ?>
<?php  $single_box_grid =   $techstack['single_box_grid'];  ?>
    <section class="tools-developer tech-stack-list padding-t-120 padding-b-120 <?php echo $techstack['sc_background']; ?> <?php if($flexclass == 'flex-1'){ echo "fullwidth";} ?>">
        <div class="container">
            <div class="heading text-center">
                <?php echo $techstack['content'];?>
            </div>
            <div class="dis-flex margin-t-80 row <?php if($single_box_grid == 'singleboxgrid'){ echo "hideborder";}?>">
                
                <?php 
                if($single_box_grid == 'doubleboxgrid' && $flexclass == 'flex-3'){
                if( $techstack['cards'] ) : 
                $i = 0;   
                foreach( $techstack['cards'] as $row ) : 
                $content    = $row['content'];
                $title      = $row['title'];      

                if ($i % 2 == 0 ) { 
                echo '<div class="flex-2"><div class="card">';
                }
                ?>
                <div class="box-3">
                <?php 
                if( isset( $row['link'] ) && !empty($row['link']) ){
                    echo '<h3><a href="'.$row['link'].'">'.$title.'</a></h3>';
                }else{
                    echo '<h3>'.$title.'</h3>';
                }
                ?>
                <?php echo $content; ?>
                </div>
                <?php                 
                if ($i % 2 ) { 
                    echo '</div></div>';
                }
                $i++; 
                endforeach; 
                endif;
                ?>
                 <?php 
                }elseif($single_box_grid == 'doubleboxgrid'){
                if( $techstack['cards'] ) : 
                $i = 0;   
                foreach( $techstack['cards'] as $row ) : 
                $content    = $row['content'];
                $title      = $row['title'];      

                if ($i % 2 == 0 ) { 
                echo '<div class="'.$flexclass.'"><div class="card">';
                }
                ?>
                <div class="box-3">
                <?php 
                if( isset( $row['link'] ) && !empty($row['link']) ){
                    echo '<h3><a href="'.$row['link'].'">'.$title.'</a></h3>';
                }else{
                    echo '<h3>'.$title.'</h3>';
                }
                ?>
                <?php echo $content; ?>
                </div>
                <?php                 
                if ($i % 2 ) { 
                    echo '</div></div>';
                }
                $i++; 
                endforeach; 
                endif;
                ?>
                <?php }elseif($single_box_grid == 'singleboxgrid'){?>
                <?php if( $techstack['cards'] ) : 
                   
                foreach( $techstack['cards'] as $row ) : 
                $content    = $row['content'];
                $title      = $row['title'];      

                
                echo '<div class="'.$flexclass.'"><div class="card">';
                
                ?>
                <div class="box-3">
                <?php 
                if( isset( $row['link'] ) && !empty($row['link']) ){
                    echo '<h3><a href="'.$row['link'].'">'.$title.'</a></h3>';
                }else{
                    echo '<h3>'.$title.'</h3>';
                }
                ?>
                <?php echo $content; ?>
                </div>
                <?php                 
                 
                    echo '</div></div>';
                
                 
                endforeach; 
                endif;?>
                <?php } ?>
            </div>
            <div class="text-center btn-container margin-t-60">
				<a href="<?php echo site_url('/contact-us'); ?>" target="_blank" class="white-btn blue">Request A Free Consultation</a>
                </div>
        </div>
    </section>
     <?php } endif;?>
    <!-- Covering All Major Industries section  -->
    
        
    
    <?php  
    $outsource_custom_services = get_field('outsource_custom_services');
    if( $outsource_custom_services ) :
    $Enable = $outsource_custom_services['is_enabled'];
    if( $Enable == "yes" ) {?>
    <section class="outsourcing-company-section padding-t-120 padding-b-120 <?php echo $outsource_custom_services['sc_background']; ?>">
        <div class="container">
            <div class="outsourcing-container">
                <div class="heading text-center">
                    <?php echo $outsource_custom_services['content'];?>
                </div>
                <div class="dis-flex margin-t-100">
                    <div class="flex-2 list-item">
                        <div class="dis-flex">
                             <?php 
                         if( $outsource_custom_services['options'] ) :    
                         foreach( $outsource_custom_services['options'] as $row ) : 
                         $content   = $row['content'];
                         ?>          
                            <div class="flex-2">
                               <?php echo $content; ?>
                            </div>  
                             <?php endforeach; endif;?>
                        </div>
                        <div class="list-box">
                                    <div class="dis-flex">
                                   <?php echo $outsource_custom_services['side_content'];?>   
                                    </div>
                                </div>
                    </div>
                    <div class="flex-2 list-img">
                       <?php $image =  $outsource_custom_services['image'];?>
                       <?php  echo pxlGetPtag($image);?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } endif;?>
    <?php require_once get_template_directory() .'/inc/cmn-testimonials.php'; ?>
    <?php  
    $case_studies_group = get_field('case_studies_group');
    if( $case_studies_group ) :
    $case_studies_groupEnable = $case_studies_group['is_enabled'];
    if( $case_studies_groupEnable == "yes" ) {?>
    <section class="full-width-two-column  padding-t-120 padding-b-120 casesd <?php echo $case_studies_group['sc_background']; ?>">
        <div class="container">
            <div class="heading text-center">
                <?php echo $case_studies_group['content']; ?>
            </div>
            <div class="dis-flex margin-t-100">
                <?php 
                 if( $case_studies_group['case_study_list'] ) : 
                 $count= 1;   
                 foreach( $case_studies_group['case_study_list'] as $row ) : 
                 $title   = $row['case_title']; 
                 $content   = $row['casetext'];      
                ?>
                <div class="flex-2 col-box">
                    <div class="dis-flex img-box-outer">
                        <div class="flex-2">
                            <div class="img-box img<?php echo $count; ?>">
                            </div>
                        </div>
                        <div class="flex-2 content-box">
                            <span class="title">CASE STUDY</span>
                            <h3><?php echo $title;?></h3>
                            <?php echo $content;?>
                        </div>
                    </div>
                </div>
                 <?php $count++;  endforeach; endif;?>
            </div>
            <div class="text-center margin-t-100 home-case-study-btn">
                <?php pixel_cta(); ?>
            </div>
        </div>
    </section>
    <?php } endif;?>
    <!-- blog section  -->
    <?php require_once get_template_directory() .'/common/blog.php'; ?>

    <!-- blog section  -->
    <?php //require_once get_template_directory() .'/assets/include/blog.php'; ?>

    <!-- guide section -->
    <?php require_once get_template_directory() .'/common/guide-topic.php'; ?>
    <?php require_once get_template_directory() .'/common/all-industries.php'; ?>
    <!-- faq section -->
    <?php require_once get_template_directory() .'/common/faq.php'; ?>

 <?php get_footer(); ?>