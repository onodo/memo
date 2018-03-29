    <div class="footer">
        <div class="footer_inner">
            <nav class="footerNav">
                <h3 class="footerNav_ttl">カテゴリー</h3>
                <a href="<?php echo category_url('html') ?>" class="footerNav_link">html</a>
                <a href="<?php echo category_url('css') ?>" class="footerNav_link">css</a>
                <a href="<?php echo category_url('jQuery/JavaScript') ?>" class="footerNav_link">jQuery/JavaScript</a>
                <a href="<?php echo category_url('その他') ?>" class="footerNav_link">その他</a>
            </nav>
            <footer class="copy">@42195mm</footer>
        </div>
    </div>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/common.js"></script>
    <script>selectHide();</script>
    <?php if (is_single()): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
    <script>selectHide(); hljs.initHighlightingOnLoad();</script>
    <?php endif; ?>
</body>
</html>