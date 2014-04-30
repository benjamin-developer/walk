<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include './share/header.php'?>
    </head>
    <body>
        <div id="wrapper">
            <?php include './share/head.php';?>
            <?php include './content/index.php';?>
            <?php include './share/quickLink.php';?>
            <?php include './share/footer.php';?>
        </div>
        <script type="text/javascript">
            $('#small').hide();

            $('#big').click(function() {
                $('#big').hide();
                $('#small').show();
            });
            $('#small').click(function() {
                $('#small').hide();
                $('#big').show();
            });

            /*$('div.menu-1').mouseover(function() {
             $(this).find('img').attr('src', 'public/images/com-btn-1.gif');
             });
             $('div.menu-1').mouseout(function() {
             $(this).find('img').attr('src', 'public/images/com-btn-1-off.gif');
             });
             $('div.menu-2').mouseover(function() {
             $(this).find('img').attr('src', 'public/images/com-btn-1.gif');
             });
             $('div.menu-2').mouseout(function() {
             $(this).find('img').attr('src', 'public/images/com-btn-2-off.gif');
             });*/

            $('title').text(function() {
                if ($(this).contents("首頁")) {
                    $('div.menu-1').find('img').attr('src', 'public/images/com-btn-1.gif');
                }
            });
        </script>
    </body>
</html>
