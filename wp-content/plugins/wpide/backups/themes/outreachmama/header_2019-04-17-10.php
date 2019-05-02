<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "019b5584d3a946cfa1e2353d1286ff1c75ba6a2b23"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/header_2019-04-17-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>