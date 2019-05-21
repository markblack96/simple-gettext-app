<?php include 'i18n_setup.php'; ?>




<head>
<title>
    <?php echo $lang;?>
</title>
</head>
<body>
<h3>
<?php echo _('Welcome! This is a test application.'); ?>
</h3>

<p>
<?php echo gettext('This text should eventually be translated.'); ?>
</p>
<p>
<a href="apage.php">Click here</a>
</p>
<div id="sellang">
<select id="select_language">
    <option value="en_US">English</option>
    <option value="es_ES">Spanish</option>
</select>
<button onclick="reload_page()">Reload</button>
</div>

<script>

function reload_page() {
    var url = window.location.href;
    var elt = document.getElementById('select_language');
    var param = elt.options[elt.selectedIndex].value;
    url += '?lang=' + param;
    
    window.location.href = url;
    console.log(url);
}

</script>


</body>
