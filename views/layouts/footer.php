<audio id="seikai" preload="auto">
<source src="../sound/seikai.mp3" type="audio/mp3">
</audio>
<audio id="bathu" preload="auto" >
<source src="../sound/bathu.mp3" type="audio/mp3">
</audio>

<div id="Sound"></div>
<div id="innerHTMLtxt"></div>

<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
});
</script>
</body>
</html>