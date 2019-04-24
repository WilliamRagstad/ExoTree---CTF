<footer>
    <div class="footer-container">
        <p class="creditsText"><?php echo $settings_project['name']; ?> is based on the template platform - <a href="https://github.com/WilliamRagstad/ExoTree-CTF" target="_blank">ExoTree CTF</a></p>
    </div>
</footer>
<script>
    let webHeight = window.innerHeight;
    let pageHeight = document.body.clientHeight;
    let footerElm = document.getElementsByTagName("footer")[0];
    let footerHeight = footerElm.clientHeight;
    let footerMargin = 50;
    if (pageHeight > webHeight) {
        footerElm.style.bottom = "-" + (pageHeight - webHeight + footerMargin) + "px";
    }
    else {
        footerElm.style.bottom = "0px";
    }
</script>
