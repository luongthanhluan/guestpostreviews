<?php
/**
 * The Template for displaying all single posts.
 *
 * @package GeneratePress
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<div class=" smt-breadcrumbs">
    <?php
    if (!is_front_page()) {
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
    }
    ?>
</div>

<div id="js-sticky-container" class="l-full">
    <div class="l-two-thirds-less-right-margin bg--white">

        <article class="feature feature--hero feature--hero--shorter" style="background-image: url('<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); echo esc_url($featured_img_url) ?>')" title="<?php the_title() ?>">
            <ul class="feature__tags">
                <li class="tag" ><?php the_category() ?></li>
            </ul>
        </article>
        <section class="wysiwyg wysiwyg--larger-text">
            <div class="l-content-col l-last">
                <h1><?php the_title() ?></h1>
                <div class="time">
                    <time><?php echo esc_attr(get_the_date()) ?></time>
                </div>
                <?php the_content() ?>
            </div><!-- l-content-col -->
            <div class="author"><div class="l-content-col-mini">
                    <figure class="author l-hide-on-tablet">
                        <div class="rounded-image">
                            <?php echo get_avatar(get_the_author_meta('user_email'), $size = '100'); ?>
                        </div>
                        <figcaption><?php echo get_the_author(); ?></figcaption>
                    </figure>
                    <div class="sharing addthis_inline_share_toolbox">
                        <?php echo do_shortcode('[TheChamp-Sharing]'); ?>
                    </div> 
                </div><!-- l-content-col-mini -->
                <footer class="footnote">
                    <div class="footnote__content">
                        <h2><?php __('About the author…','guest-post-reviews') ?></h2>
                        <p class="author-description"><?php echo esc_textarea(the_author_meta('description')); ?></p>
                    </div><!-- l-content-col -->
                    <div class="footnote__extra">
                        <figure class="author">
                            <div class="rounded-image">
                                <?php echo get_avatar(get_the_author_meta('user_email'), $size = '100'); ?>
                            </div>
                            <figcaption><?php echo get_the_author(); ?></figcaption>
                        </figure>
                    </div><!-- l-content-col-mini -->

                </footer>
            </div>
        </section>

    </div><!-- l-two-thirds -->

    <div class="l-one-third l-last">
        <article class="box js-sticky-sidebar" style="">

            <h2 class="section-heading section-heading--colour-three section-heading--outset-triangle"><span>Free white paper</span></h2>

            <div class="box__content">

                <div class="text-and-image">
                    <div class="text-and-image__image">
                        <img src="https://guestpostreviews.com/wp-content/uploads/2019/11/crmrequirements-thumbnail200.jpg" alt="crm requirements - thumbnail 200">
                    </div>

                    <div class="text-and-image__content">
                        <h3 class="text-and-image__heading">CRM software requirements template</h3>

                        <p>120 popular CRM software modules and features to kickstart your requirements</p>

                        <?php echo do_shortcode('[wpforms id="125"]') ?>

                    </div>
                </div>


            </div><!-- box__content -->

        </article>


        <!-- ensure config set for thank-you-modal -->
        <a style="display: none;" href="#thank-you-modal" class="js-fancybox"></a>

    </div>
</div>
<div class="l-full">
    <h2 class="section-heading section-heading--software section-heading--bottom-border l-no-bottom-margin">
        <span><i class="far fa-file-alt"></i><?php echo __('Featured white papers', 'guest-post-reviews') ?></span>
    </h2>

    <div class="cut-corner l-full l-items bg--white">
        <ul class="l-thirds-list">
            <?php
// The Query
            query_posts(array(
                'cat' => 22,
                'posts_per_page' => 3,
                //            'tag' => 'features',
                'offset' => 0,
            ));

// The Loop
            while (have_posts()):
                the_post();
                ?>

                <div id="featured_whitepaper" class="featured_whitepaper">
                    <li class="featured-whitepaper">
                        <article class="text-and-image text-and-image--image-left">
                            <div class="text-and-image__image">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <div class="text-and-image__content">
                                <h3 class="text-and-image__heading"><?php the_title() ?></h3>
                                <?php the_excerpt() ?>
                                <a href="<?php the_field('custom_link') ?>" target="blank" class="icon-link icon-link--has-icon-left"><i class="far fa-arrow-alt-circle-down"></i>Download</a>
                            </div>
                        </article>
                        <div style="display:none">

                        </div>
                    </li>

                </div>


                <?php
            endwhile;

// Reset Query
            wp_reset_query();
            ?>


        </ul>
    </div>

    <article class="signup l-full bg--colour-five smt_signup_form">
        <div id="newsletterForm">
            <label class="smt-label" for="subscribe"> <i class="fas fa-paper-plane"></i> Sign up to our newsletter</label>
            <div class="signup__fields">
                <?php echo do_shortcode('[wpforms id="105" title="false" description="false"]'); ?>
            </div>

        </div>
    </article>

    <div id="subscribe-thank-you-modal" class="modal">

        <div class="modal__content">
            <div class="modal__message">
                <div class="modal__message__content">
                    <h2 class="modal__heading heading-type-4">Thank You!</h2>
                    <p class="modal__sub-heading">Your first CRM newsletter should arrive in your inbox soon.</p>
                </div>
            </div>
        </div><!-- modal__content -->
    </div><!-- modal -->

    <!-- ensure config set for thank-you-modal -->
    <a style="display: none;" href="#subscribe-thank-you-modal" class="js-fancybox"></a>
    <h2 class="section-heading section-heading--bottom-border"><span><i class="fas fa-broadcast-tower" aria-hidden="true"></i> Related articles</span></h2>
    <ul class="l-thirds-list">
        <?php
        $orig_post = $post;
        global $post;
        $categories = get_the_category($post->ID);
        if ($categories) {
            $category_ids = array();
            foreach ($categories as $individual_category)
                $category_ids[] = $individual_category->term_id;
            $args = array(
                'category__in' => $category_ids,
                'post__not_in' => array(
                    $post->ID
                ),
                'posts_per_page' => 3, // Number of related posts that will be shown.
                'caller_get_posts' => 1
            );

            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {

                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>          
                    <li>
                        <article class="card cut-corner">
                            <a href="<?php the_permalink() ?>">
                                <span class="card__image">
                                    <img src="<?php
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    echo esc_url($featured_img_url)
                                    ?>" alt="<?php the_title() ?>" title="<?php the_title() ?>">
                                </span>

                                <div class="card__content" style="height: 147px;">
                                    <h3 class="card__content__heading"><?php the_title() ?></h3>
                                    <p><?php the_excerpt() ?></p>
                                </div>
                            </a>
                            <ul class="card__tags">
                                <li class="tag"><?php the_category() ?></li>
                            </ul>
                        </article>

                    </li>    
                    <?php
                }
            }
        }
        $post = $orig_post;
        wp_reset_query();
        ?>

    </ul>

</div>
<?php
get_footer();

