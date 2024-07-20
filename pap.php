<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodolfo Rojas - Ingeniero en Computación</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 2rem 0;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 3px solid #ecf0f1;
        }
        nav {
            background-color: #34495e;
            padding: 1rem;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: #ecf0f1;
            text-decoration: none;
        }
        main {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 2rem;
        }
        section {
            background-color: #fff;
            margin-bottom: 2rem;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #2c3e50;
        }
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }
        .skill-item {
            background-color: #ecf0f1;
            padding: 1rem;
            border-radius: 5px;
            text-align: center;
        }
        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 1rem 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <img src="123.png" alt="Rodolfo Rojas" class="profile-image">
       <p>Rodolfo Rojas Soto</p>
        <p>Ingeniero en Computación</p>
		 <p>CPIC #11693</p>
    </header>
    <nav>
        <ul>
            <li><a href="#sobre-mi">Sobre Mí</a></li>
            <li><a href="#experiencia">Experiencia</a></li>
            <li><a href="#habilidades">Habilidades</a></li>
            <li><a href="#proyectos">Proyectos</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>
    <main>
        <section id="sobre-mi">
            <h2>Sobre Mí</h2>
            <p>Soy un ingeniero en computación altamente capacitado y apasionado por la tecnología. Mi experiencia abarca desde el diseño y desarrollo de software hasta la implementación de soluciones de hardware. Me especializo en crear sistemas eficientes y seguros que resuelven problemas complejos en diversas industrias.</p>
        </section>
        <section id="experiencia">
            <h2>Experiencia Profesional</h2>
            <ul>
                <li>Diseño y desarrollo de software para sistemas embebidos y aplicaciones de tiempo real.</li>
                <li>Implementación de soluciones de red y seguridad informática para empresas de diversos tamaños.</li>
                <li>Desarrollo de algoritmos de inteligencia artificial y aprendizaje automático para optimización de procesos.</li>
                <li>Gestión de proyectos tecnológicos, liderando equipos multidisciplinarios.</li>
                <li>Consultoría en arquitectura de sistemas y mejores prácticas de desarrollo.</li>
            </ul>
        </section>
        <section id="habilidades">
            <h2>Habilidades Técnicas</h2>
            <div class="skills-grid">
                <div class="skill-item">Programación (C++, Java, Python)</div>
                <div class="skill-item">Desarrollo Web Full-Stack</div>
                <div class="skill-item">Bases de Datos SQL y NoSQL</div>
                <div class="skill-item">Machine Learning y Data Science</div>
                <div class="skill-item">Redes y Seguridad Informática</div>
                <div class="skill-item">Sistemas Operativos</div>
                <div class="skill-item">Cloud Computing</div>
                <div class="skill-item">IoT y Sistemas Embebidos</div>
            </div>
        </section>
        <section id="proyectos">
            <h2>Proyectos Destacados</h2>
            <ul>
                <li>Sistema de monitoreo en tiempo real para plantas industriales utilizando IoT.</li>
                <li>Plataforma de e-learning con componentes de IA para personalización de contenidos.</li>
                <li>Implementación de seguridad biométrica en sistemas de acceso empresariales.</li>
                <li>Desarrollo de un compilador optimizado para un lenguaje de programación especializado.</li>
            </ul>
        </section>
        <section id="contacto">
            <h2>Contacto</h2>
            <p>Email:rodolfo.27@hotmail.es</p>
            <p>LinkedIn: linkedin.com/in/rodolfors27</p>
            <p>GitHub: github.com/rrojass27</p>
            <p>Teléfono: +506 8590-8678</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Rodolfo Rojas. Todos los derechos reservados.</p>
    </footer>
</body>
</html>