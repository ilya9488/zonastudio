<section class="breadcrumbs-content">
  <div class="container-fluid p-0">
    <div class="row text-center mx-0 px-0">
      <div class="col-12 mx-0 px-0">

        <div class="breadcrumbs-wrap" style="background-image: url(<?php echo wp_get_attachment_image_src(get_sub_field('img'), 'breadcrumbs')[0]; ?>);">
        
            <h1> <?php 
              if( is_single() ){ // posts
                  the_title();
                } 
                if ( is_page() ){ // pages WordPress 
                  the_title();
                } 
                if ( is_category() ) {
                  single_cat_title();
                }
                if ( is_tag() ) {
                  single_tag_title();
                } 
              ?> </h1>

          <div class="breadcrumbs">
            <?php true_breadcrumbs(); ?>
          </div>
          <!-- /.breadcrumbs -->
        </div>
        <!-- /.breadcrumbs-wrap -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.breadcrumbs-content -->