<html>
    <head>
        <title>Example Application Landing Page</title>
    </head>
    <body>
        <h1>Example Application Landing Page</h1>
<?php
    $token = $_POST['token'];
    require '/var/php_include/api_key.php';


    if (isset($_POST['token'])) {
    $token = $_POST['token'];

    if(!empty($token)) {
    $sentence = $token.' : the user's token.'; 
    }
    else {
    echo 'token variable is empty.'; 
    }


    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://rpxnow.com/api/v2/auth_info');
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, 
        array('token' =>  $token, 
              'apiKey' => 5643033b651bee53a385a43cdf3bd49d8d71b0e7));
    curl_setopt($curl, CURLOPT_FAILONERROR, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $profileString = curl_exec($curl);
    if (!$profileString){
        echo '<p>Curl error: ' . curl_error($curl);
        echo '<p>HTTP code: ' . curl_errno($curl);
    } else {
        $profile = json_decode($profileString);
        if (property_exists($profile, 'err')) {
            echo '<p>Engage error: ' . $profile->err->msg;
        } else {
            session_start();
            if (property_exists($profile->profile, 'displayName')) {
                $_SESSION['userName'] = $profile->profile->displayName;
            } else {
                $_SESSION['userName'] = '(Anonymous Coward)';
            }
            echo '<p>Hi there ' . $_SESSION['userName'] . '!';
        }

    }
    curl_close($curl);
?>
    </body>
</html>