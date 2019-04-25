<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c99c5dfcc7f5"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/pricing-temp.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/pricing-temp_2018-02-26-06.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Pricing Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<script>
$(function() {
  $(".expand").on( "click", function() {
    $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});
</script>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="inner-head">
    <img src="<?php the_field('header_image'); ?>">
    <div class="header-inner">
        <?php the_field('header_content'); ?>
    </div>
</div>

<div id="primary" class="content-area common-inner2">
<div class="row-1100">

 <main id="main" class="site-main" role="main">
 <div id="integration-list">
    <ul>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <div>
                    <h2>C.I.Agent Solutions</h2>
                    <span>Meets SPCC Regulation 40CFR112, Oil spill solutions, Oil Solidifier - just pick it up and send it to a land fill, Spill kits, Sub-station containment</span>
                </div>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.ciagent.com/ciagent/cialogo4.png" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>DCD Design</h2>
                <span>Cable installation tools, Line swivels, Duct pullers, Cable pulling eyes, Wire mesh grips, Line blowing, Lubricants, Manhole products, Duct rodders and a new cable puller, Cable Lashers</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.dcddesign.com/images/dcd-logo.jpg" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>Huskie Tools</h2>
                <span>Huskie Tools battery powered compression tools and cutters, hydraulic compression and cutting tools and dies</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.huskietools.info/ht_wp//wp-content/uploads/2012/06/logo.gif" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>Line Hardware</h2>
                <span>Pole, cable, pipe, coil pipe, flatbed, low-boy and equipment trailers.</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.linehardware.com/graphics/logo2.gif" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>Lonestar Prestress</h2>
                <span>Concrete poles up to 75’, square tapered, smooth or pebble finish, easi-set transportable pre-cast concrete buildings</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.lonestarprestress.com/images/main_logo.jpg" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>Mid Central Electric</h2>
                <span>½ to 5 KVA transformers and capacitor isolators, low loss copper wound</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.midcentralelectric.com/intro.jpg" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>Quality FiberGlass</h2>
                <span>Ground sleeves, switch gear and transformer box pads, cable trays, battery racks, fuse cabinets and trench covers.</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.qualityfiberglassproducts.com/uploads/3/3/9/7/3397275/1394822038.png" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>RMC Plastics</h2>
                <span>Wildlife protectors, Secondary twist wire separators and Spreader tools.</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://rmcplastics.com/wp-content/themes/rmcplastics/images/RMC-logo200.fw.png" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>ROHN Products</h2>
                <span>Tapered Steel poles for power line, substations and lighting.</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.twrlighting.com/images/rohn.jpg" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>Speed Systems</h2>
                <span>Cable preparation tools, secondary and primary cable strippers; elbow puller: Oklahoma and North Texas</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.spdsystems.com/Content/Images/SpdSysLogo.gif" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>Tiiger</h2>
                <span>Pole Pulling Equipment</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://www.tiiger.com/images/Tiiger_logo.jpg" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="expand">
                <div class="right-arrow">+</div>
                <h2>Trayer Engineering</h2>
                <span>Submersible and Padmount Switchgear, Auto-Transfer & SCADA</span>
            </a>

            <div class="detail">
                <div id="left" style="width:15%;float:left;height:100%;">
                    <div id="sup">
                        <img src="http://trayer.com/wp-content/uploads/2013/11/trayer-logo.jpg" width="100%" />
                    </div>
                </div>
                <div id="right" style="width:85%;float:right;height:100%;padding-left:20px;">
                    <div id="sup">
                        <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
                            <br />
                            <br /><a href="#">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>

    </ul>
</div>

 </main><!-- .site-main -->

</div>



</div><!-- .content-area -->

<?php get_footer(); ?>



