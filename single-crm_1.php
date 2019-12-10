<?php
/** 
*Template Name: CRM Type Template 
*Template Post Type: post, product
 * ------------------------------------
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

     <div class="grid-container smt-breadcrumbs">
        <?php
        if (!is_front_page()) {
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
        }
        ?>
        </div>
<div class="l-grid">
        <div id="js-sticky-utility" class="utility sticky" style="">

            <div class="utility__inner">

                <div class="utility__logo">
                      <a href="/base-crm-vendor-profile.html">
                          <?php the_post_thumbnail(array(200,90)) ?>
		 </a>
                </div>

                <div class="utility__text">
                    <h1><?php the_title()?></h1>
                </div>

                <div class="utility__links">

                    <ul>
                            <li>
                                <a href="#price-modal" class="btn btn--colour-four btn--chunky js-match-height-btn js-fancybox" style="height: 72px;"><span>Price</span></a>
                            </li>
                            <li>
                                <a href="#demo-modal" class="btn btn--colour-four btn--chunky js-match-height-btn js-fancybox" style="height: 72px;"><span>Demo</span></a>
                            </li>
                        <li>
                            <a href="#js-modal-quick-compare" class="btn btn--colour-four btn--chunky js-match-height-btn js-fancybox" style="height: 72px;"><span>Compare<br> Similar</span></a>
                        </li>
                    </ul>

                </div>

            </div><!-- utility__inner -->

        </div>
</div>
    
<div class="l-grid">
    <div class="l-span-9 bg--white">

     <?php the_content()?>

      </div>
    
    <!--l-two-thirds-->
    <div class="l-span-3 l-last">

                
        <article class="box box--colour-three">

            <h2 class="section-heading section-heading--colour-three section-heading--outset-triangle"><span>Quick spec</span></h2>

            <div class="box__content box__content--has-padding">
<?php the_field('product_details'); ?>
              
            </div><!-- box__content -->

        </article>



            

            <article class="box box--colour-one">

                <h2 class="section-heading section-heading--colour-one section-heading--outset-triangle"><span>Download more information</span></h2>

                <div class="box__content">
                    <div class="text-and-image text-and-image--image-float-left">
                        <div class="text-and-image__image">
                                <img src="/images/temp/pdf-icon.jpg" alt="whitepaper image">
                        </div>



                        <div class="text-and-image__content">
                            <h3 class="text-and-image__heading">Zendesk Sell (Formerly Base CRM)</h3>

                            <p>Download your extended software profile for Zendesk Sell (Formerly Base CRM). Get more information about features and pricing.</p>
                            <a href="#pdf-modal" class="icon-link icon-link--has-icon-left js-fancybox"><i class="i-chevron-circle-down"></i> Download</a>
                        </div>
                    </div>

                </div>
            </article>

        </div>
    <!--l-one-third-->
</div>


        <div id="price-modal" class="modal modal--doc">

            <div class="modal__content">

                <div class="modal__content__left">

                    <div class="modal__content__title">
                        <h2 class="modal__heading">Creatio</h2>
                        <p class="modal__sub-heading">Pricing Guide</p>
                    </div>

                    <div class="modal__content__image">
                            <img alt="creatio" src="/pictures/948/show/200x200/Creatio+orange.png?sh=2bfa18136a295178" />

                    </div>
                </div><!-- modal__content__left -->

                <div class="modal__content__right">
                    <h2 class="modal__heading">Creatio</h2>
                    <p class="modal__sub-heading">Download your pricing guide by completing the form below.</p>
                    <form>
    <ol>
        <li>
            <label for="name" class="visuallyhidden">Name</label>
            <input type="text" name="info_request[name]" value="" id="name" placeholder="Name" class="alt-color" required>
        </li>
        <li>
            <label for="company" class="visuallyhidden">Company</label>
            <input type="text" name="info_request[company]" value="" id="company" placeholder="Company" class="alt-color" required>
        </li>
        <li>
            <label for="email" class="visuallyhidden">Email</label>
            <input type="email" name="info_request[email]" value="" id="email" placeholder="Email" class="alt-color" required>
        </li>
        <li>
            <label for="phone" class="visuallyhidden">Phone</label>
            <input type="text" name="info_request[phone]" value="" id="phone" placeholder="Phone" class="alt-color" required>
        </li>
        <li class="no_margin">
          <input class="visuallyhidden" type="checkbox" name="resource_download[consent_check]" id="yes_consent" value="I would like to receive free CRM resources via email" />
          <label for="yes_consent" class="radioClick"><strong>I would like to receive free CRM resources via email</strong></label>
        </li>
        <input type="text" class="visuallyhidden" name="info_request[request_type]" value="price">
        <input type="text" class="visuallyhidden" name="info_request[product_name]" value="Creatio">
        <input type="text" class="visuallyhidden" name="info_request[resource_id]" value="356">
        <input type="hidden" name="info_request[session_id]" hidden>
        <input type="hidden" name="info_request[tracking_id]" hidden>
        <input type="hidden" name="info_request[page_id]" hidden>
    </ol>
    <p class="l-text-left">
        <button class="btn btn--has-icon-right">Download Now <i class="i-chevron-circle-right"></i></button>
    </p>
    <div id="terms_privacy_config_15" class="terms_privacy_config">        <span class="terms_privacy">By clicking the button above, I confirm that I have read and agree to the <a href="/terms-conditions">Terms of Use</a> and <a href="/privacy-policy">Privacy Policy</a>.</span>
</div>
</form>

                </div><!-- modal__content__right -->


                            <div id="price_modal_config_11" class="price_modal_config"></div>



            </div><!-- modal__content -->

        </div><!-- modal -->

        <div id="price-thank-you-modal" class="modal modal--doc">

            <div class="modal__content">
                <div class="modal__content__left">

                    <div class="modal__content__title">
                        <h2 class="modal__heading">Creatio</h2>
                        <p class="modal__sub-heading">Price Quote</p>
                    </div>

                    <div class="modal__content__image">
                            <img alt="creatio" src="/pictures/948/show/200x200/Creatio+orange.png?sh=2bfa18136a295178" />

                    </div>
                </div>

                <div class="modal__content__right">
                    <div class="modal__message">
                        <div class="modal__message__content">
                                <h2 class="modal__heading heading-type-4"></h2>
                                <p class="modal__sub-heading">Your pricing guide is ready to download.</p>
                                <p>Please click <a class="download-link" href="/attachment/3/download/crm-pricing-guide.pdf">here </a> if your download does not start automatically.</p>
                        </div>
                    </div>
                </div>

            </div><!-- modal__content__right -->
        </div><!-- modal__content -->

        </div><!-- modal -->

        <!-- ensure config set for demo-thank-you-modal -->
        <a style="display: none;" href="#price-thank-you-modal" class="js-fancybox"></a>


    
    

        <div id="demo-modal" class="modal">

            <div class="modal__content">

                <div class="modal__content__left">
                    <div class="modal__screenshot-holder">
                        <img src="/pictures/949/show/bpm+online+screenshot+1.jpg?sh=69cbe6c3902df2c0" />

                    </div>
                </div><!-- modal__content__left -->

                <div class="modal__content__right">
                    <h2 class="modal__heading">Creatio</h2>
                    <p class="modal__sub-heading">Complete the form below to access a video demo of this software.</p>

                    <form>
    <ol>
        <li>
            <label for="name" class="visuallyhidden">Name</label>
            <input type="text" name="info_request[name]" value="" id="name" placeholder="Name" class="alt-color" required>
        </li>
        <li>
            <label for="company" class="visuallyhidden">Company</label>
            <input type="text" name="info_request[company]" value="" id="company" placeholder="Company" class="alt-color" required>
        </li>
        <li>
            <label for="email" class="visuallyhidden">Email</label>
            <input type="email" name="info_request[email]" value="" id="email" placeholder="Email" class="alt-color" required>
        </li>
        <li>
            <label for="phone" class="visuallyhidden">Phone</label>
            <input type="text" name="info_request[phone]" value="" id="phone" placeholder="Phone" class="alt-color" required>
        </li>
        <li class="no_margin">
          <input class="visuallyhidden" type="checkbox" name="resource_download[consent_check]" id="yes_consent" value="I would like to receive free CRM resources via email" />
          <label for="yes_consent" class="radioClick"><strong>I would like to receive free CRM resources via email</strong></label>
        </li>
        <input type="text" class="visuallyhidden" name="info_request[request_type]" value="demo">
        <input type="text" class="visuallyhidden" name="info_request[product_name]" value="Creatio">
        <input type="text" class="visuallyhidden" name="info_request[resource_id]" value="356">
        <input type="hidden" name="info_request[session_id]" hidden>
        <input type="hidden" name="info_request[tracking_id]" hidden>
        <input type="hidden" name="info_request[page_id]" hidden>
    </ol>
    <p class="l-text-left">
        <button class="btn btn--has-icon-right">Watch Video <i class="i-chevron-circle-right"></i></button>
    </p>
    <div id="terms_privacy_config_15" class="terms_privacy_config">        <span class="terms_privacy">By clicking the button above, I confirm that I have read and agree to the <a href="/terms-conditions">Terms of Use</a> and <a href="/privacy-policy">Privacy Policy</a>.</span>
</div>
</form>

                </div><!-- modal__content__right -->


                        <div id="demo_modal_config_10" class="demo_modal_config"></div>


            </div><!-- modal__content -->

        </div><!-- modal -->


        <div id="demo-thank-you-modal" class="modal">

            <div class="modal__content">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nNd9d0uFjR8?list=PLnolcTT5TeE1l7SvjBzpNusOhah2td3Rz" frameborder="0" allowfullscreen></iframe>
                </div>
                </div><!-- modal__content__right -->
            </div><!-- modal__content -->

        </div><!-- modal -->

        <!-- ensure config set for demo-thank-you-modal -->
        <a style="display: none;" href="#demo-thank-you-modal" class="js-fancybox"></a>





    
    

        <div id="js-modal-quick-compare" class="modal">

        <div class="modal__content">

            <h2 class="modal__heading">Quickly Compare with Similar CRM Systems</h2>
            <p class="modal__sub-heading">Other Users often Compare these Four Solutions</p>

            <ul class="l-quarters-list">

                                                    <li data-software-id="356">
                                <div class="text-and-image">
                                    <div class="text-and-image__image">
                                            <img alt="creatio" src="/pictures/948/show/200x200/Creatio+orange.png?sh=2bfa18136a295178" />

                                    </div>

                                    <div class="text-and-image__content">
                                        <h3 class="text-and-image__heading">Creatio</h3>
                                    </div>
                                </div>
                            </li>


                                                    <li data-software-id="810">
                                <div class="text-and-image">
                                    <div class="text-and-image__image">
                                            <img src="/pictures/522/show/200x200/DebtPayPro+CRM+Vendor+Logo.png?sh=e0eec3855ce508e6" />

                                    </div>

                                    <div class="text-and-image__content">
                                        <h3 class="text-and-image__heading">DebtPayPro</h3>
                                    </div>
                                </div>
                            </li>


                                                    <li data-software-id="190">
                                <div class="text-and-image">
                                    <div class="text-and-image__image">
                                            <img src="/pictures/74/show/200x200/8867+Microsoft+5F00+Logo+2D00+for+2D00+screen.png?sh=25c8d5e0ea35ca7d" />

                                    </div>

                                    <div class="text-and-image__content">
                                        <h3 class="text-and-image__heading">Microsoft Dynamics 365 for Sales</h3>
                                    </div>
                                </div>
                            </li>


                                                    <li data-software-id="46">
                                <div class="text-and-image">
                                    <div class="text-and-image__image">
                                            <img src="/pictures/639/show/200x200/SUPER+OFFICE+250.png?sh=23cf475008a99801" />

                                    </div>

                                    <div class="text-and-image__content">
                                        <h3 class="text-and-image__heading">SuperOffice CRM</h3>
                                    </div>
                                </div>
                            </li>

            </ul>

            <div class="modal__cta">
                <ul>
                    <li>
                        <a id="compareNowButton" href="#js-modal-compare" class="btn js-fancybox">Compare now</a>
                    </li>
                        <li>
                            <a href="/crm-software-comparison.html" class="btn btn--colour-one">Create your own</a>
                        </li>

                </ul>
            </div>



        </div><!-- modal__content -->

        </div><!-- modal -->

        <div id="js-modal-compare" class="modal modal--compare">

            <div class="modal__content">

                <div class="modal__content__left">

                    <ul class="l-quarters-list">
                                                                <li>
                                            <img alt="creatio" src="/pictures/948/show/200x200/Creatio+orange.png?sh=2bfa18136a295178" />

                                    </li>
                                                                <li>
                                            <img src="/pictures/522/show/200x200/DebtPayPro+CRM+Vendor+Logo.png?sh=e0eec3855ce508e6" />

                                    </li>
                                                                <li>
                                            <img src="/pictures/74/show/200x200/8867+Microsoft+5F00+Logo+2D00+for+2D00+screen.png?sh=25c8d5e0ea35ca7d" />

                                    </li>
                                                                <li>
                                            <img src="/pictures/639/show/200x200/SUPER+OFFICE+250.png?sh=23cf475008a99801" />

                                    </li>
                    </ul>
                    <div class="modal__content__matrix">
                        <div class="modal__content__title">
                            <h2 class="modal__heading"></h2>
                        </div>
                        <div class="modal__content__image">
                                
                                    <img src="/pictures/118/show/comparison.jpg?sh=2f2148f696132302" />

                        </div>
                    </div>
                </div><!-- modal__content__left -->

                <div class="modal__content__right">

                    <h2 class="modal__heading">Get Your CRM Software Comparison</h2>
                    <p class="modal__sub-heading">Download your bespoke report in a single pdf.</p>

                    
<form id="compareDownloadForm" action="/admin/compare_downloads" method="post" onsubmit="ga('send', 'event', 'Conversion', 'Quick Compare', 'Submit');">
    <ol>
        <li>
            <label for="name" class="visuallyhidden">Name</label>
            <input type="text" name="compare_download[name]" value="" id="name" placeholder="Name" class="alt-color" required>
        </li>
        <li>
            <label for="company" class="visuallyhidden">Company</label>
            <input type="text" name="compare_download[company]" value="" id="company" placeholder="Company" class="alt-color" required>
        </li>
        <li>
            <label for="email" class="visuallyhidden">Email</label>
            <input type="email" name="compare_download[email]" value="" id="email" placeholder="Email" class="alt-color" required>
        </li>
        <li>
            <label for="phone" class="visuallyhidden">Phone</label>
            <input type="text" name="compare_download[phone]" value="" id="phone" placeholder="Phone" class="alt-color" required>
        </li>
        <li class="no_margin">
          <input class="visuallyhidden" type="checkbox" name="resource_download[consent_check]" id="yes_consent" value="I would like to receive free CRM resources via email" />
          <label for="yes_consent" class="radioClick"><strong>I would like to receive free CRM resources via email</strong></label>
        </li>
        <input type="hidden" name="compare_download[session_id]" hidden>
        <input type="hidden" name="compare_download[tracking_id]" hidden>
        <input type="hidden" name="compare_download[page_id]" hidden>
    </ol>
    <p class="l-text-left">
        <button class="btn btn--has-icon-right">Download Now <i class="i-chevron-circle-right"></i></button>
    </p>
      <div id="terms_privacy_config_15" class="terms_privacy_config">        <span class="terms_privacy">By clicking the button above, I confirm that I have read and agree to the <a href="/terms-conditions">Terms of Use</a> and <a href="/privacy-policy">Privacy Policy</a>.</span>
</div>

      <input type="text" name="compare_download[quick_compare]" value="true" hidden>
    <input type="submit" hidden>

            <input type="number" name="compare_download[software_element_ids][]" value="356" hidden>
            <input type="number" name="compare_download[software_element_ids][]" value="810" hidden>
            <input type="number" name="compare_download[software_element_ids][]" value="190" hidden>
            <input type="number" name="compare_download[software_element_ids][]" value="46" hidden>
</form>


                </div><!-- modal__content__right -->

            </div><!-- modal__content -->

        </div><!-- modal -->





          <div id="pdf-modal" class="modal modal--doc">

      <div class="modal__content">

        <div class="modal__content__left">

          <div class="modal__content__title">
            <h2 class="modal__heading">Creatio</h2>
            <p class="modal__sub-heading">Extended Software Profile</p>
          </div>

          <div class="modal__content__image">
              <img alt="creatio" src="/pictures/948/show/200x200/Creatio+orange.png?sh=2bfa18136a295178" />

          </div>
        </div><!-- modal__content__left -->

        <div class="modal__content__right">
          <h2 class="modal__heading">Creatio</h2>
          <p class="modal__sub-heading">Get your extended software profile by completing the form below.</p>
          <form>
    <ol>
        <li>
            <label for="name" class="visuallyhidden">Name</label>
            <input type="text" name="info_request[name]" value="" id="name" placeholder="Name" class="alt-color" required>
        </li>
        <li>
            <label for="company" class="visuallyhidden">Company</label>
            <input type="text" name="info_request[company]" value="" id="company" placeholder="Company" class="alt-color" required>
        </li>
        <li>
            <label for="email" class="visuallyhidden">Email</label>
            <input type="email" name="info_request[email]" value="" id="email" placeholder="Email" class="alt-color" required>
        </li>
        <li>
            <label for="phone" class="visuallyhidden">Phone</label>
            <input type="text" name="info_request[phone]" value="" id="phone" placeholder="Phone" class="alt-color" required>
        </li>
        <li class="no_margin">
          <input class="visuallyhidden" type="checkbox" name="resource_download[consent_check]" id="yes_consent" value="I would like to receive free CRM resources via email" />
          <label for="yes_consent" class="radioClick"><strong>I would like to receive free CRM resources via email</strong></label>
        </li>
        <input type="text" class="visuallyhidden" name="info_request[request_type]" value="pdf_download">
        <input type="text" class="visuallyhidden" name="info_request[product_name]" value="Creatio">
        <input type="text" class="visuallyhidden" name="info_request[resource_id]" value="356">
        <input type="hidden" name="info_request[session_id]" hidden>
        <input type="hidden" name="info_request[tracking_id]" hidden>
        <input type="hidden" name="info_request[page_id]" hidden>
    </ol>
    <p class="l-text-left">
        <button class="btn btn--has-icon-right">Download Now <i class="i-chevron-circle-right"></i></button>
    </p>
    <div id="terms_privacy_config_15" class="terms_privacy_config">        <span class="terms_privacy">By clicking the button above, I confirm that I have read and agree to the <a href="/terms-conditions">Terms of Use</a> and <a href="/privacy-policy">Privacy Policy</a>.</span>
</div>
</form>

        </div><!-- modal__content__right -->


            <div id="software_pdf_modal_config_17" class="software_pdf_modal_config"></div>



      </div><!-- modal__content -->

    </div><!-- modal -->

    <div id="pdf-thank-you-modal" class="modal modal--doc">

      <div class="modal__content">
        <div class="modal__content__left">

          <div class="modal__content__title">
            <h2 class="modal__heading">Creatio</h2>
            <p class="modal__sub-heading">Extended Software Profile</p>
          </div>

          <div class="modal__content__image">
              <img alt="creatio" src="/pictures/948/show/200x200/Creatio+orange.png?sh=2bfa18136a295178" />

          </div>
        </div> <!-- modal__content__left -->

        <div class="modal__content__right">
          <div class="modal__message">
            <div class="modal__message__content">
                <h2 class="modal__heading heading-type-4">Download Ready</h2>
                <p class="modal__sub-heading">Your extended software profile PDF is ready to download.</p>
                <p>Please click <a class="download-link" href="/internal/software/download/356.pdf">here </a> if your download does not start automatically.</p>
            </div>
          </div>

        </div><!-- modal__content__right -->
      </div><!-- modal__content -->

    </div><!-- modal -->

    <!-- ensure config set for demo-thank-you-modal -->
    <a style="display: none;" href="#pdf-thank-you-modal" class="js-fancybox"></a>

	<?php


get_footer();

