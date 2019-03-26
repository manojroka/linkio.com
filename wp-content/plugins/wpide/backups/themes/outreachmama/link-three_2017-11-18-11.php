<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "40e1c3a3c58d01e2586aae14625c4a21dafa93ab99"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/link-three.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/link-three_2017-11-18-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>