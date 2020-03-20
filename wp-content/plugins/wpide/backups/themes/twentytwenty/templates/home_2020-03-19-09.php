<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "56ca54279b6b283a5c8d29a4ab05c3a869d5b6b192"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\careplus/wp-content/themes/twentytwenty/templates/home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\careplus\wp-content\plugins\wpide/backups/themes/twentytwenty/templates/home_2020-03-19-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>