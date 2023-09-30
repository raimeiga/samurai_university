<!-- 「ニュース」カテゴリーの一覧、「イベント」カテゴリーの一覧、「卒業生の声」カテゴリーの一覧-->
<?php get_header(); ?>

<!-- Home -->
    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
          <?php
               $cat = get_the_category();
               $catslug = $cat[0]->slug;
               $catname = $cat[0]->cat_name;
             ?>
             <div><?php echo $catslug; ?></div>
             <div><?php echo $catname; ?></div>
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
              <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <!-- news loop from here-->
                    <!-- ↓ のif文とwhile文の処理内容は、かなり下に記述してある<?php echo wp_trim_words( get_the_content() , 100, '...'); ?>という文字列をトリミングする関数 -->
                    <?php if (have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                       <div class="news_posts_small">
                       <div class="row">
                         <div class="col-lg-2 col-md-2 col-sx-12">
                           <div class="calendar_news_border">
                             <div class="calendar_news_border_1">
                               <div class="calendar_month">
                               <?php 
                                   if( is_category('event') ) :
                                     echo post_custom('month');
                                   else:
                                     echo get_post_time('F');
                                   endif;
                                 ?>
                               </div>
                               <div class="calendar_day">
                                 <span>
                                 <?php 
                                   if( is_category('event') ) :
                                     echo post_custom('day');
                                   else:
                                     echo get_the_date('d');
                                   endif;
                                   ?>
                                 </span>
                               </div>
                             </div>
                           </div>
                           <div class="calendar_hour"></div>
                         </div>
                         <div class="col-lg-10 col-md-10 col-sx-12">
                           <div class="news_post_small_title">
                             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                           </div>
                           <div class="news_post_meta">
                             <ul>
                               <li> 
                                  <!-- 36行目あたりの<?php if (have_posts()) : ?>と
                                       <?php while(have_posts()) : the_post(); ?>の
                                       処理内容が↓ wp_trim_words（文字列トリミングの関数） -->
                                 <?php echo wp_trim_words( get_the_content() , 100, '...'); ?>
                               </li>
                             </ul>
                           </div>
                           <div class="read_continue">
                           <button><a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a></button>
                           </div>
                         </div>
                       </div>
                       <hr />
                     </div>
                     <?php endwhile; ?> <!-- 37行目あたりのwhile文を閉じる記述-->
                     <?php endif; ?>    <!-- 36行目あたりのif文を閉じる記述-->
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

    <?php get_footer( ); ?>