<?php 
	$namepagina = "inicio";
	include 'php/header.php';
?>
		<section id="banner">
            <div class="banner-img">
                <img src="img/banner.jpg">
            </div>
            <div class="contenedor">
                <h2>LONDON BURGER &amp; CHICKEN</h2>
                <p>Hamburguesas gourmet estilo casero, pensadas para vos.</p>
                <a class="cotenedor-boton" href="<?php echo $url?>/about/carta.php">Ver nuestra carta</a>
            </div>
		</section>
        <section id="meta">
			<div class="contenedor">
				<h2>NUESTRA META</h2>
				<div class="contenedor-linea"></div>
				<p>Ser la empresa seria y responsable en el rubro gastronómico conformada por emprendedores con más de 20 años de experiencia. Tenemos una propuesta inovadora de Pop-up Stores montados en contenedores reciclandos totalmente equipados, que prometen al visitante una experiencia única, garantizando la calidad y la originalidad de nuestros productos.</p>
				<img src="img/hm/x.png">
				<a class="cotenedor-boton" href="<?php echo $url?>/about/nosotros.php">Conocenos un poco más</a>
			</div>
		</section>
		<section id="carta">
            <h2>NUESTRA CARTA</h2>
            <div class="contenedor-linea"></div>
            <div class="carta-iten">
				<img src="img/alitas/acevichada.jpg">
				<img src="img/combos/pollo.jpg">
				<img src="img/hamburguesa/chiswik.jpg">
				<img src="img/piqueos/tower.jpg">
				<img src="img/alitas/habanero.jpg">
				<img src="img/combos/chancho.jpg">
				<img src="img/hamburguesa/london.jpg">
				<img src="img/piqueos/totopos.jpg">
			</div>
			<a class="cotenedor-boton" href="<?php echo $url?>/about/carta.php">Ver nuestra carta</a>
		</section>
        <section id="staff">
			<div class="contenedor">
				<h2>NUESTRO ESTAFF</h2>
				<div class="contenedor-linea"></div>
				<img src="img/staff.jpg">
				<p>
					Nos especializamos en creación de productos gourmet, donde la prioridad esta puesta en la calidad como en la elección de los mejores productos frescos y naturales, sin agregado de conservantes ni colorantes. Nuestro chef desarrolló una receta de hamburguesas gourmet de estilo casero, llenas de sabor, pan de elaboración propia y salsas especiales.
					En <strong>LONDON BURGER &amp; CHIQUEN</strong> estamos en esos pequeños detalles, brindándote una cálida experiencia para que te sientas comiendo en casa.
				</p>
			</div>
		</section>
	</main>
	<?php include 'php/footer.php' ?>