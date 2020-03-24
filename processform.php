<?php



    // Fetching user name
    $user_name = $_POST['user_name'];

    // Creating filename, using the username
    $filename =  $user_name.'.php';
    
    // $filename = ${"$user_name".".txt"};
    
    //Opening the file with the username and .txt extension
    $fp = fopen($filename, 'w');
    
    // Creating content to write into the opened file
    $content = "<h1>Users Contact Details:</h1><br />
    <p>First Name  : $_POST[first_name] <p/>
    <p>Last Name   : $_POST[last_name] <p/>
    <p>Username    : $_POST[user_name] <p/>
    "; 
    
    // Writing the contents in to the file
    fwrite($fp, $content);
    // Closing the file
    fclose($fp);
    // Display the user's filename and it's location
    echo "User's file: ", $filename , " created in the current directory." ;

?>