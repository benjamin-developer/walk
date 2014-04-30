<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include 'share/header.php' ?>
    </head>
    <body>
        <div id="wrapper">
            <?php include './share/head.php'; ?>
            <?php include './content/product.php'; ?>
            <?php include './share/quickLink.php'; ?>
            <?php include './share/footer.php'; ?>
        </div>
        <div class="darkBack">
        </div>
        <div class="showProduct">
            <div style="float: right; margin-top: 20px; margin-right: 20px;">
                 <img src="./images/x.gif" border="0" />
            </div>
            <div style="text-align: center; margin: 50px;">
                <img src="./images/11.gif" border="0" />
            </div>
            <div class="showProductText">
                <article>
                    <span>產品名稱：</span>
                    <br>這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾
                    這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾
                    這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾
                    這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾
                    這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾這是一雙狠厲害鞋塾
                </article>
            </div>
        </div>
        <script type="text/javascript">
            var docHight = $(document).height();
            var docWidth = $(document).width();
            function addDark() {
                $('.darkBack').css('height', docHight);
                $('.darkBack').css('width', docWidth);
                $('.darkBack').css('position', 'absolute');
                $('.darkBack').css('top', '0');
                $('.darkBack').css('background-color', '#000');
                $('.darkBack').css('opacity', '0.8');
                $('.darkBack').css('z-index', '9');
            }

            function removeProduct() {
                $('.darkBack').removeAttr('style');
                $('.showProduct').css('display', 'none');
            }

            $('.pro-pic img').click(function() {
                addDark();
                $('.showProduct').css('display', 'block');
            });

            $('.pro-title a').click(function() {
                addDark();
                $('.showProduct').css('display', 'block');
            });

            $('.showProduct > div > img').click(function() {
                removeProduct();
            });
        </script>
    </body>
</html>