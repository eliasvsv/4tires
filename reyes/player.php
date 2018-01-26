<?php
$url="";
if(isset(  $_POST["url"])){
$url=$_POST["url"];
}
?>
<div data-live="true" data-ratio="0.5625" data-share="false" class="flowplayer">
         <video id="reproductor" data-title="Live stream">
            <source type="application/x-mpegurl"
               src="<?php echo $url;?>">
         </video>
 
</div>
   <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

   <!-- include flowplayer -->
<!-- Flowplayer library -->
<script src="//releases.flowplayer.org/7.1.2/flowplayer.min.js"></script>
<!-- Flowplayer hlsjs engine (light) -->
<script src="//releases.flowplayer.org/hlsjs/flowplayer.hlsjs.light.min.js"></script>