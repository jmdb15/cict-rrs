<?php
    // sendEmail(['lee04373@gmail.com', 'jamesmarvic.marasigan.s@bulsu.edu.ph'],"Hello Subject","This is body");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="send_token.php"> -->
        <input type="text" name="email" id="email">
        <div id="status"></div>
        <input id="send-btn" type="submit" name="send_token" value="Send Email">
    <!-- </form> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('#send-btn').click(function(e){
            const email = document.querySelector('#email').value;
            var requestData = {
                email : email
            };
            $.ajax({
                url: '../src/ajax/send_token.php',
                method: 'POST',
                dataType: 'html',
                data: requestData, 
                success: function(response) {
                    $('#status').html(`Email sent to ${response}!`)
                }
            });
        })
        
    </script>
</body>
</html>