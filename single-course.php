<?php get_header(); ?>
<!-- Home -->
    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div>Courses</div>
            <div>コース</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->
    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
              <div class="tab_panel_title"><?php the_title(); ?></div>
                <div class="tab_panel_header">
                </div>
                <div class="tab_panel_content">
                <div class="course_image">
                     <?php the_post_thumbnail('large') ;?>
                   </div>
                  <div class="tab_panel_text">
                    <p>
                    <?php the_content(); ?>
                    </p>
                  </div>
                  <div class="campus_footer_content d-flex flex-row align-items-center justify-content-start">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/clock.png"><span><?php the_time('Y年n月j日'); ?></span>
                   </div> <!--the_time()関数 = 記事の作成年月日を出力  フォーマット文字列としてY年n月j日を渡せば、
                              アルファベット部分をそれぞれ以下のように置き換えて出力。
                              『Y』：4桁の西暦を表示　『n』：先頭に0をつけない月を表示　『j』：先頭に0をつけない日を表示 -->
                  <hr>
                  <div class="social_share">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt="">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

   <?php get_footer(); ?>