<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<!--Navigacija -->
<div class="col-md-10">
<div class="row carousel-holder">
<p><ol class="breadcrumb">
<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u: </text><li class="active"><a href="onama2.php">O nama</a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> O nama </b></h1></div> 
<hr>
		
<div class="col-md-3">
<div class="pozicija">
<p id="skoči">Skoči na:</p>
<table id="meni" >
<tr>  <td id="dugme" align="center"><a href="#misija" class="button button-ghost "id="link"  style="text-decoration:none "><div class="page-scroll"> Misija </div></a> </td> </tr>
<tr>  <td id="dugme" align="center"><a href="#vizija" class="button button-ghost" id="link" style="text-decoration:none "><div class="page-scroll"> Vizija </div></a> </td> </tr>
<tr>  <td id="dugme" align="center"><a href="#cilj" class="button button-ghost" id="link" style="text-decoration:none "><div class="page-scroll"> Cilj</div></a> </td> </tr>
<tr>  <td id="dugme" align="center"><a href="#strategija" class="button button-ghost" id="link" style="text-decoration:none "><div class="page-scroll"> Strategija </div></a> </td> </tr>
<tr>  <td id="dugme" align="center"><a href="#jamstvokvalitete" class="button button-ghost"id="link"  style="text-decoration:none "><div class="page-scroll"> Jamstvo kvalitete </div></a> </td> </tr>
<tr>  <td id="dugme" align="center"><a href="#povijest" class="button button-ghost" id="link" style="text-decoration:none "><div class="page-scroll"> Povijest </div></a> </td> </tr>
</table>
</div>
</div>
		
		<div class="col-md-9">
			<div class="scroll">
				<section id="misija" class="cd-section"> 
				
				<h3 align="center"> Misija </h3>
					<p>
						Odgovornim radom i brigom za ljude stvaramo ugodno iskustvo kupovine kroz raznoliku ponudu i kvalitetnu uslugu.
					</p>
					</br>
					</br>
				</section>
				
				<section id="vizija" class="cd-section"> 
				<h3 align="center"> Vizija </h3>
					<p>
						Naša vizija je rast i napredovanje, širenje potencijalnog tržišta, povećanje ponude usluga, ulaganje u kadrove kako bi bili još bolji i spremniji na sve veće izazove koje pred nas postavljaju naši kupci već danas, a i sutra.
						Posebnu važnost pridajemo timskom radu i  stručnom usavršavanju mladih,obrazovanih  ljudi, za koje smatramo da su naša budućnost i naš najveći potencijal.
					</p>
					</br>
					</br>
				</section>
				
				<section id="cilj" class="cd-section"> 
				<h3 align="center"> Cilj </h3>
					<p align="center">
						Svakim danom biti što bolji.
					</p>
					</br>
					</br>
				</section>
				
				<section id="strategija" class="cd-section"> 
				<h3 align="center"> Strategija </h3>
					<p align=" center">
						Stručnost </br>
						Rad </br>
						Timski duh </br>
						Briga za kupce</br>
						Pouzdanost</br>
						Odgovornost</br>
						Otvoreno i prijateljsko komuniciranje </br>
						Pobjednički duh</br>
						
					</p>
					</br>
					</br>
				</section>
				
				<section id="jamstvokvalitete" class="cd-section"> 
				<h3 align="center"> Jamstvo kvalitete</h3>
					<p>
						Jednostavna kupnja, transparentne i točne informacije o cijenama, dostavi i mogućnostima reklamacije svakodnevni su nam zadatak.
						Potpuna zaštita potrošača istaknuti je dio <a href="">Općih uvjeta poslovanja </a>, 
						jednako kao i zaštita osobnih podataka i sigurnost plaćanja. 
.
					</p>
					</br>
					</br>
				</section>
				
				<section id="povijest" class="cd-section"> 
				<h3 align="center"> Povijest </h3>
					<p>
						Tvrtka je osnovana 2000g. u Ugljari pored Orašje. Gdje se i danas nalazi sjediste kompanije. 
						Svih ovih godina držali smo se temeljnih načela koje su ovu tvrtku dovele do lidera u ovom dijelu zemlje.  
					</br>

<!--Razvoj tvrtke https://bootsnipp.com/snippets/yX01 -->					
<div class="page-header">
	<h4 id="timeline">Razvoj tvrtke</h4>
</div>
<ul class="timeline">

		<li>
		  <div class="timeline-badge"><i><small> 2000</small> </i></div>
		  <div class="timeline-panel">
			<div class="timeline-heading">
			  <h4 class="timeline-title">Osnovana tvrtka</h4>
			</div>
			<div class="timeline-body">
			  <p> </p>
			</div>
		  </div>
		</li>
	
		<li class="timeline-inverted">
		  <div class="timeline-badge warning"><i><small> 2002 </small></i></div>
		  <div class="timeline-panel">
			<div class="timeline-heading">
			  <h4 class="timeline-title"> Postaje najveća trgovina s mješovitom robom u Posavini</h4>
			</div>
			<div class="timeline-body">
			  <p> </p>
			  <p> </p>
			</div>
		  </div>
		</li>
	
		<li>
		<div class="timeline-badge danger"><i><small>2005</small></i></div>
		  <div class="timeline-panel">
			<div class="timeline-heading">
				<h4 class="timeline-title"> Počela s radom veleprodaja</h4>
            </div>
            <div class="timeline-body">
              <p> </p>
            </div>
          </div>
        </li>
		
		<li class="timeline-inverted">
        <div class="timeline-badge"><i><small> 2008 </small> </i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Otvoreno novo skladiste</h4>
            </div>
            <div class="timeline-body">
              <p> </p>
            </div>
          </div>
        </li>
		
        <li>
          <div class="timeline-badge info"><i><small> 2012 </small></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Otvorili jos dvije trgovine</h4>
            </div>
            <div class="timeline-body">
              <p> </p>
              <div class="btn-group">
              </div>
            </div>
          </div>
        </li>
		
        <li class="timeline-inverted">
		<div class="timeline-badge"><i><small> 2013 </small> </i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"> Dobili nagradu za najbolju trgovinu u BiH </h4>
            </div>
            <div class="timeline-body">
              <p> </p>
            </div>
          </div>
        </li>
		
        <li >
          <div class="timeline-badge success"><i><small> 2017 </small></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"> Pokrenili web aplikaciju i proširili se na Internet tržište </h4>
            </div>
            <div class="timeline-body">
              <p> </p>
            </div>
          </div>
        </li>
    </ul>

</br>

</section>

</div>
</div>   					
</div>
</div>
</br>
</br>

<?php include ("podnozije2.php"); ?>