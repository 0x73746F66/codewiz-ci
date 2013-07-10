<footer class="footer">
</footer>
<? foreach ( $remoteJsFooter as $script ) : ?>
        <script type="text/javascript" charset="utf-8">
            <?= $script; ?>
        </script>
<? endforeach; ?>
<? foreach ( $jsFooter as $script ) : ?>
        <script type="text/javascript" charset="utf-8">
            <?= $script; ?>
        </script>
<? endforeach; ?>
</html>