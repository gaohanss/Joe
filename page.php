<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <?php $this->need('public/include.php'); ?>
    <!-- 独立页面需要用到CSS及JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism-tomorrow.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.4/dist/plyr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.6/dist/clipboard.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/HaoOuBa/Joe@master/plugin/prism/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/plyr@3.6.4/dist/plyr.min.js"></script>
    <script src="<?php $this->options->themeUrl('assets/js/joe.post&page.js?update=20210301'); ?>"></script>
</head>

<body>
    <div id="Joe">
        <?php $this->need('public/header.php'); ?>
        <div class="joe_container">
            <div class="joe_main">
                <div class="joe_detail" data-cid="<?php echo $this->cid ?>">
                    <?php $this->need('public/article.php'); ?>
                    <?php $this->need('public/handle.php'); ?>
                    <?php $this->need('public/copyright.php'); ?>
                </div>
                <?php $this->need('public/comment.php'); ?>
            </div>
            <?php $this->need('public/aside.php'); ?>
        </div>
        <?php $this->need('public/footer.php'); ?>
    </div>
</body>

</html>