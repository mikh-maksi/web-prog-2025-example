<?php get_header("math"); ?>

<div id="content">
    <div class="feature-header">
      <div class="feature-post-thumbnail">
         <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            else:
              ?>
              <div class="slider-alternate">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/header-banner.png'; ?>">
              </div>
              <?php
            endif;
          ?>
        <h1 class="post-title feature-header-title"><?php the_title(); ?></h1>
        <?php if ( get_theme_mod('project_management_breadcrumb_enable',true) ) : ?>
          <div class="bread_crumb text-center">
            <?php project_management_breadcrumb();  ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <div class="container">

    <?php $project_management_theme_layout = get_theme_mod( 'project_management_page_layout','Right Sidebar');
            if($project_management_theme_layout == 'One Column'){ ?>
                <?php while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content-page');
                    wp_link_pages(
                            array(
                              'before' => '<div class="project-management-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template(); 
                endwhile; ?>
                <?php echo esc_html (project_management_edit_link()); ?>
        <?php }else if($project_management_theme_layout == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-9 col-md-8 mt-5">
             <div>



                 <h3>Калькулятор для обрахунку n-того члену арифметичної прогресії</h3>
    <p>Введіть дані:</p>
    <p>n = <input type="text" id="inpt1" ></p>
    <p>значення коефіцієнтів і відповідні їм значення членів прогресії</p>
    <p>i = <input type="text" id="inpt2" ></p>
    <p>ai = <input type="text" id="inpt3" ></p>
    <p>крок прогресії</p>
    <p>d = <input type="text" id="inpt4"></p>    
    <button style="background-color: rgb(179, 221, 179);border-radius: 5px;" id = "btn">Знайти значення an</button>
    <div id="formula"></div>
    <div id="result"></div>

           
           
            </div>

                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="project-management-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                        echo esc_html (project_management_edit_link());
                      ?>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php }else if($project_management_theme_layout == 'Left Sidebar'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-lg-9 col-md-8 mt-5">
           
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="project-management-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                        echo esc_html (project_management_edit_link());
                      ?>
                </div>
            </div>
        <?php }else {?>
            <div class="row">
               <div class="col-lg-9 col-md-8 mt-5">
                            <div>
    before main text
</div>
                   <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="project-management-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                        echo esc_html (project_management_edit_link());
                      ?>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php } ?>
  </div>
</div>
<script>
        let var_p2 = document.getElementById("p2");
        let var_btn = document.getElementById("btn");

        let var_inpt1 = document.getElementById("inpt1");
        let var_inpt2 = document.getElementById("inpt2");
        let var_inpt3 = document.getElementById("inpt3");
        let var_inpt4 = document.getElementById("inpt4");
        let resultDiv = document.getElementById("result");
        let formulaDiv = document.getElementById("formula");
        var_btn.addEventListener("click",fnc);


        function fnc (){
            let n = parseInt(var_inpt1.value);
            let i = parseInt(var_inpt2.value);
            let ai = parseInt(var_inpt3.value);
            let d = parseInt(var_inpt4.value);
            let an = ai + (n - i) * d;
            formulaDiv.innerHTML = "an = ai + (n - i)d";
            resultDiv.innerHTML = "a"+n+"=" + an;
            
            console.log(an);
        }


</script>
<?php get_footer(); ?>