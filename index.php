<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
        <script src="maxLengthBox.js"></script>
        <title>teste</title>
    </head>
    <body>
        <script type="text/javascript">
            $('input').maxLengthBox({'fontColor': '#00ff00'});
            $('textarea').maxLengthBox();
        </script>


        <input type="text" maxlength="20">
        <input type="text" maxlength="40">
        <input type="text" maxlength="10">
        <textarea maxlength="5">
        </textarea>


    </body>
</html>
