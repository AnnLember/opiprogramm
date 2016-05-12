<?php
echo '<button class="accordion">Sõrmendtähestik</button>
    <div class="panel">
 <form action="mang1.php" method="GET">
  <input type="submit" name="tase" value="A-H"> <br>
  <input type="submit" name="tase" value="A-P"> <br>
  <input type="submit" name="tase" value="A-U"> <br>
  <input type="submit" name="tase" value="A-Y"> <br>
 </form>
    </div>

<button class="accordion">Sõrmendid ja viiped</button>
    <div class="panel">
<form action="mang2.php" method="GET">
  <input type="submit" name="teema" value="tutvumine"> <br>
  <input type="submit" name="teema" value="emotsioonid"> <br>
  <input type="submit" name="teema" value="komplimendid">  <br>
  <input type="submit" name="teema" value="viisakus"> <br>
  <input type="submit" name="teema" value="perekond">  <br>
  <input type="submit" name="teema" value="omadus"> <br>
  <input type="submit" name="teema" value="riietus"><br>
  <input type="submit" name="teema" value="kodu"><br>
  <input type="submit" name="teema" value="toit"><br>
  <input type="submit" name="teema" value="ametid"><br>
 </form>
    </div>

<button class="accordion">Kas tunned viipeid?</button>
    <div class="panel">
<form action="mang3.php" method="GET">
  <input type="submit" name="teema" value="tutvumine"> <br>
  <input type="submit" name="teema" value="emotsioonid"> <br>
  <input type="submit" name="teema" value="komplimendid"> <br>
  <input type="submit" name="teema" value="viisakus"><br>
  <input type="submit" name="teema" value="perekond"> <br>
  <input type="submit" name="teema" value="omadus"><br>
  <input type="submit" name="teema" value="riietus"><br>
  <input type="submit" name="teema" value="kodu"><br>
  <input type="submit" name="teema" value="toit"><br>
  <input type="submit" name="teema" value="ametid"> <br>
 </form>

   </div>';
 
 ?>
 <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
  

