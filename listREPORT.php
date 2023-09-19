<?php
include_once("connection/su_conn.php");



$dbmysql->select("smartreportissb_db");


if ( $users = $dbmysql->get_results("SELECT * FROM information_schema.tables where table_name = ?") )

{

            // Loop through the resulting array on the index $users[n]

                        foreach ( $users as $user )

                        {

                                    // Access data using column names as associative array keys

                                    echo "$users";

                        }

}

else

{

            // If no users were found then if evaluates to false..

                        echo "No users found.";

}

$conn->close();

?>
?>