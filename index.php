<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <?php
      include('header.php');
     ?>

      <div class="contenedor">

          <div class="banner">
            <h2 id="titulo1">Cursos</h2>
            <h1 id="titulo1_desktop">Cursos, capacitaciones y más</h1>
            <h2 id="titulo2_desktop">Encontrá el tuyo aquí</h2>
            <div class="buscador">
              <div class="buscador_mobile">
                <input type="text" name="textoBuscar" value="" placeholder="Encontrá el curso que buscás">
                <img src="img/lupa.png" alt="lupa">
              </div>
              <div class="buscador_desktop">
                <div class="row1">
                  <select class="buscador_selects" name="categorias">
                    <option value="todas">Todas las categorías</option>
                    <option value="0">Administracion y contabilidad</option>
                    <option value="1">Administración de Proyectos</option>
                    <option value="2">Calidad, Logística y Distribución</option>
                    <option value="3">Ceremonial y Eventos</option>
                    <option value="4">Cocina y Gastronomía</option>
                    <option value="5">Computación y Sistemas</option>
                    <option value="6">Comercio Exterior y Relaciones Inter</option>
                    <option value="7">Comunicación, Publicidad y Periodismo</option>
                    <option value="8">Derecho y Legales</option>
                    <option value="9">Gestión y Management</option>
                    <option value="10">Gestoria</option>
                    <option value="11">Impuestos</option>
                    <option value="12">Idiomas</option>
                    <option value="13">Idiomas y negocios</option>
                    <option value="14">Inversiones y Finanzas</option>
                    <option value="15">Liderazgo / Coaching</option>
                    <option value="16">Marketing</option>
                    <option value="17">Marketing Online y Negocios en Internet</option>
                    <option value="18">Medicina y Salud</option>
                    <option value="19">Recursos Humanos RRHH</option>
                    <option value="20">Relaciones Públicas RRPP</option>
                    <option value="21">Tiempo Libre</option>
                  </select>
                  <select class="buscador_selects" name="modalidad">
                    <option value="todas">Todas las modalidades</option>
                    <option value="">Presencial</option>
                    <option value="">Virtual</option>
                    <option value="">Distancia</option>
                  </select>
                  <select class="buscador_selects" name="ubicacion">
                    <option value="todas">Todas las provincias</option>
                    <option value="">Capital Federal</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                    <option value="">Buenos Aires</option>
                  </select>
                </div>
                <div class="row2">
                  <select class="buscador_selects" name="modalidad">
                    <option value="todas">Precio desde</option>
                    <option value="">1000</option>
                    <option value="">2000</option>
                    <option value="">3000</option>
                  </select>
                  <select class="buscador_selects" name="modalidad">
                    <option value="todas">Precio hasta</option>
                    <option value="">1000</option>
                    <option value="">2000</option>
                    <option value="">3000</option>
                  </select>
                  <select class="buscador_selects" name="modalidad">
                    <option value="todas">Todas las empresas</option>
                    <option value="">qwertyuiopqwertyuiopqw</option>
                    <option value="">Digital House</option>
                    <option value="">qwertyuiop</option>
                  </select>
                  <select class="buscador_selects" name="modalidad">
                    <option value="todas">Todos los usuarios</option>
                    <option value="">qwertyuiopqwertyuiopqw</option>
                    <option value="">Martin Ackerman</option>
                    <option value="">Kevin Banchik</option>
                  </select>
                </div>
              </div>
              <div class="buscar">
                <a href="index.html">Buscar</a>
              </div>
            </div>
            <h1 id="titulo2">Categorías</h1>
          </div>

          <section class="categorias_logos">
            <article class="logos">
              <img src="img/logo_categoria_computacion.png" alt="logo1">
              <h3>Computación y Sistemas</h3>
            </article>
            <article class="logos">
              <img src="img/logo_categoria_inversiones.png" alt="logo2">
              <h3>Inversiones y Finanzas</h3>
            </article>
            <article class="logos">
              <img src="img/logo_categoria_marketing.png" alt="logo3">
              <h3>Marketing Online</h3>
            </article>
            <article class="logos">
              <img src="img/logo_categoria_cocina.png" alt="logo4">
              <h3>Cocina y Gastronomía</h3>
            </article>
            <article class="logos">
              <img src="img/logo_categoria_arte.png" alt="logo5">
              <h3>Arte y Pintura</h3>
            </article>
            <article class="logos">
              <img src="img/logo_categoria_fotografia.png" alt="logo6">
              <h3>Fotografía</h3>
            </article>

            <div class="logos_ipad">
              <article class="logos">
                <img src="img/logo_categoria_computacion.png" alt="logo1">
                <h3>Computación y Sistemas</h3>
              </article>
              <article class="logos">
                <img src="img/logo_categoria_inversiones.png" alt="logo2">
                <h3>Inversiones y Finanzas</h3>
              </article>
              <article class="logos">
                <img src="img/logo_categoria_marketing.png" alt="logo3">
                <h3>Marketing Online</h3>
              </article>
              <article class="logos">
                <img src="img/logo_categoria_cocina.png" alt="logo4">
                <h3>Cocina y Gastronomía</h3>
              </article>
            </div>
          </section>

          <div class="verTodas">
            <a href="index.html">Ver todas</a>
          </div>

          <h1 id="categorias_desktop">Categorias</h1>
          <div class="contenedor_categorias">
            <div class="columna_categorias">
              <ul>
                <li><a href="index.html"><div class="logos">
                  <img src="img/logo_categoria_computacion.png" alt="logo1">
                  <h3>Computación y Sistemas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_inversiones.png" alt="logo2">
                  <h3>Inversiones y Finanzas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_marketing.png" alt="logo3">
                  <h3>Marketing Online</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_cocina.png" alt="logo4">
                  <h3>Cocina y Gastronomía</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_arte.png" alt="logo5">
                  <h3>Arte y Pintura</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_fotografia.png" alt="logo6">
                  <h3>Fotografía</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_computacion.png" alt="logo1">
                  <h3>Computación y Sistemas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_inversiones.png" alt="logo2">
                  <h3>Inversiones y Finanzas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_marketing.png" alt="logo3">
                  <h3>Marketing Online</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_cocina.png" alt="logo4">
                  <h3>Cocina y Gastronomía</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_arte.png" alt="logo5">
                  <h3>Arte y Pintura</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_fotografia.png" alt="logo6">
                  <h3>Fotografía</h3>
                </div></a></li>
              </ul>
            </div>
            <div class="columna_categorias">
              <ul>
                <li><a href="index.html"><div class="logos">
                  <img src="img/logo_categoria_computacion.png" alt="logo1">
                  <h3>Computación y Sistemas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_inversiones.png" alt="logo2">
                  <h3>Inversiones y Finanzas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_marketing.png" alt="logo3">
                  <h3>Marketing Online</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_cocina.png" alt="logo4">
                  <h3>Cocina y Gastronomía</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_arte.png" alt="logo5">
                  <h3>Arte y Pintura</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_fotografia.png" alt="logo6">
                  <h3>Fotografía</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_computacion.png" alt="logo1">
                  <h3>Computación y Sistemas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_inversiones.png" alt="logo2">
                  <h3>Inversiones y Finanzas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_marketing.png" alt="logo3">
                  <h3>Marketing Online</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_cocina.png" alt="logo4">
                  <h3>Cocina y Gastronomía</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_arte.png" alt="logo5">
                  <h3>Arte y Pintura</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_fotografia.png" alt="logo6">
                  <h3>Fotografía</h3>
                </div></a></li>
              </ul>
            </div>
            <div class="columna_categorias">
              <ul>
                <li><a href="index.html"><div class="logos">
                  <img src="img/logo_categoria_computacion.png" alt="logo1">
                  <h3>Computación y Sistemas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_inversiones.png" alt="logo2">
                  <h3>Inversiones y Finanzas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_marketing.png" alt="logo3">
                  <h3>Marketing Online</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_cocina.png" alt="logo4">
                  <h3>Cocina y Gastronomía</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_arte.png" alt="logo5">
                  <h3>Arte y Pintura</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_fotografia.png" alt="logo6">
                  <h3>Fotografía</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_computacion.png" alt="logo1">
                  <h3>Computación y Sistemas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_inversiones.png" alt="logo2">
                  <h3>Inversiones y Finanzas</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_marketing.png" alt="logo3">
                  <h3>Marketing Online</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_cocina.png" alt="logo4">
                  <h3>Cocina y Gastronomía</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_arte.png" alt="logo5">
                  <h3>Arte y Pintura</h3>
                </div></a></li>
                <li><a href="#"><div class="logos">
                  <img src="img/logo_categoria_fotografia.png" alt="logo6">
                  <h3>Fotografía</h3>
                </div></a></li>
              </ul>
            </div>
          </div>

          <div class="contenedorDestacados_Virtuales">
            <div class="contenedorDestacados">
              <div class="destacados">
                <div class="logoDestacados">
                  <img src="img/destacados.png" alt="destacadosLogo">
                </div>
                <div class="titulosDestacados">
                  <h2>CURSOS</h2>
                  <h3>Destacados</h3>
                </div>
              </div>
              <section class="cursosDestacados">
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Excel - Programa Integral</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">CapacitarteUba</a></h2>
                  <h2>Valor: $2250</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
              </section>
              <div class="verTodas">
                <a href="index.html">Ver todos</a>
              </div>
            </div>
            <!-- separacion Destacados / Virtuales -->
            <div class="contenedorVirtuales">
              <div class="destacados">
                <div class="logoDestacados">
                  <img src="img/virtuales.png" alt="destacadosLogo">
                </div>
                <div class="titulosDestacados">
                  <h2>CURSOS</h2>
                  <h3>Virtuales</h3>
                </div>
              </div>
              <section class="cursosDestacados">
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Excel - Programa Integral</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">CapacitarteUba</a></h2>
                  <h2>Valor: $2250</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
                <article class="cursos">
                  <h1>Curso Desarrollo Web Full Stack</h1>
                  <h2>Categoría: <a href="index.html">Computación y Sistemas</a></h2>
                  <h2>Ofrecido por: <a href="index.html">Digital House</a></h2>
                  <h2>Valor: consultar!</h2>
                </article>
              </section>
              <div class="verTodas">
                <a href="index.html">Ver todos</a>
              </div>
            </div>
          </div>



      </div>

      <footer>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="preguntasFrecuentes.php">Ayuda</a></li>
          </ul>
        </nav>
      </footer>

  </body>
</html>
