<?php
require_once ('../../Views/header.php'); 
?>
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <div style="max-width: 800px; width: 100%;">
        <h2 style="color: rgb(80, 57, 57); text-shadow: 3px 3px 6px black; font-size: 30px; text-align: center;">
            Peta Wuthering Waves
        </h2>
        <iframe src="https://wuthering-waves-map.appsample.com/" 
            style="background-color: #f8f9fa; border: none; height: 600px; width: 100%; min-height: 400px;">
        </iframe>
        <p style="text-align: center;">
            Berdasarkan data peta dari <a href="">map wuwa</a>.
        </p>
    </div>
</div>
<?php
require_once ('../../Views/footer.php'); 
?>