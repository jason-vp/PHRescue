</div>

<footer>
    <nav>
        <a href='#hPrinc'><img src="/images/a_back_to_top.png"></a>
    </nav>
</footer>
@yield('autoScripts')
@include ('master._variables')
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script src="/js/all.js" ></script>
<script src="/js/app.js" ></script>

</body>
</html>