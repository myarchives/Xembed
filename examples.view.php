<?php
    set_time_limit(0);
    require 'Lib/Utils.php';
    require 'Xembed.php';
?>
<style>
    .xembed.video iframe, .xembed.video object{
        width:700px;
        height:400px;
        border:1px solid #c0c0c0;
    }
    
    .xembed.item{
        width:600px;
        height:90px;
        list-style:none;
        font:12px tahoma;
    }
        .xembed.item dt{
            width:80px;
            float:left;
        }
            .xembed.item dt img{
                width:80px;
            }
        .xembed.item dd{
            margin-left:90px
        }
</style>
<body>
<?php

echo '<div class="xembed video">',
        Xembed::embed($_GET['v']),
    '</div>';