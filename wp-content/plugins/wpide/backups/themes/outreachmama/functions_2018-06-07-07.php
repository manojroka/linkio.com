<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c9b18d35c330"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/functions.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/functions_2018-06-07-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>