<?php
include "header.php";
?>

<h1>CS5v5</h1>

<div class="box">

		<div class="tilmeld">
			<h4>Join turnament</h4>
			<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Home</a>
  </div>
</div>
			<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

			<input type="submit" value="Join with team">
		</div>

		<div class="b1">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName'><br>
		Team Name: <input type='text' name='TeamName'>
	</div>
<br>
		<div class="b2">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b3">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b4">Quarterfinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b5">Semifinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b6">Semifinal<br>
		Team Name: <input type='text' name='TeamName'><br>
	Team Name: <input type='text' name='TeamName'>
</div>
<br>
		<div class="b7">Final<br>
			Team Name: <input type='text' name='TeamName'><br>
		Team Name: <input type='text' name='TeamName'>
	</div>

</div>

<?php
include "footer.php";
?>