<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <title>Evzone - Francis de Faccio, artiste peintre</title>
    <meta name="description" content="D�couvrez les  et la d�marche artistique de Francis de Faccio, artiste peintre passionn� par la nature." />
    <meta name="keywords" content="peinture, artiste, Limoges, nature, art �cologique" />
    <meta name="COPYRIGHT" content="Francis de Faccio" />
    <link rel="SHORTCUT ICON" href="http://evzone.free.fr/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="styles-site.css" />
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />

    <!-- Biblioth�que jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Styles personnalis�s -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(315deg, #dedfff, #000005);
            background-size: 400% 400%;
            animation: gradientBackground 15s ease infinite;
            background-attachment: fixed;
            color: #fff;
        }

        @keyframes gradientBackground {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .content {
            text-align: center;
            position: relative;
            padding: 4em 1em;
            z-index: 1;
        }

        .wave-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            height: 30em;
            z-index: 2;
        }

        .wave {
            background: rgba(125, 128, 153, 0.4); 
            border-radius: 1000% 1000% 0 0;
            position: absolute;
            width: 200%;
            height: 30em;
            animation: wave 10s linear infinite;
            transform: translate3d(0, 0, 0);
        }

        .wave:nth-of-type(2) {
            bottom: -1.25em;
            background: rgba(125, 128, 153, 0.3); 
            animation: wave 18s linear reverse infinite;
        }

        .wave:nth-of-type(3) {
            bottom: -2.5em;
            background: rgba(125, 128, 153, 0.2); 
            animation: wave 20s -1s reverse infinite;
        }

        @keyframes wave {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(-25%); }
        }

        .text {
            padding: 2em 1em;
            border-radius: 10px;
            margin: 2em auto;
            max-width: 800px;
            z-index: 1;
        }

        h1 {
            font-size: 3.5em; /* Augment� */
            margin: 0;
            text-align: left;
        }

        h2 {
            font-size: 2em; /* Augment� */
            font-weight: normal;
            margin: 0.5em 0 0;
            text-align: left;
            color:#565761;
        }

        .text p {
            font-size: 1.5em; /* Augment� */
            line-height: 1.8em; /* Augment� */
            margin: 0.5em 0;
            text-align: justify;
        }

        .text img {
            max-width: 100%;
            height: auto;
            margin: 2em 0;
            border-radius: 8px;
        }

        /* Styles pour les liens de contact */
        .contact-links {
            margin-top: 3em;
            text-align: center;
        }

        .contact-links h3 {
            font-size: 2em; /* Augment� */
            color: #fff;
            margin-bottom: 1em; /* Ajoute un espace entre le titre et les liens */
        }

        .contact-links .links-wrapper {
            display: flex;
            justify-content: center; /* Centre les liens horizontalement */
            gap: 2em; /* Ajoute un espacement uniforme entre les liens */
        }

        .contact-links a {
            font-size: 1.5em; /* Augment� */
            text-decoration: none;
            color: #fff;
            padding: 0.5em;
            border: 2px solid transparent;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .contact-links a:hover {
            color: #c2c3ed;
            border-color: #c2c3ed;
            background-color: #25262b;
            transform: scale(1.05);
        }
		
		
		
		
		
        .image-container {
            text-align: center;
            margin: 20px 0;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            transition: filter 0.3s ease;
        }
        .image-container a {
            display: block;
            margin-top: 10px;
            font-size: 1.2em;
            text-decoration: none;
            color: #c2c3ed;
            border: 2px solid #c2c3ed;
            padding: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .image-container a:hover {
            background-color: #25262b;
            color: #fff;
            transform: scale(1.05);
        }
        .image-container img:hover {
            filter: brightness(80%);
        }
        .sold {
            background-color: grey !important;
            border-color: grey !important;
            cursor: default !important;
        }
		
		
		
		
    </style>
</head>

<body>

    <section class="content">
        <div class="text">
            <p>Bienvenue dans</p>
            <h1>Evzone</h1>
            <h2>Le site de Francis de Faccio</h2>
            
            <p>Artiste peintre, il traduit nos liens profonds avec la nature � travers ses peintures.</p>
            <p>Peindre, c�est pour lui capturer l��me d�un paysage, saisir ses �motions, ses mouvements, et la puissance des �l�ments.</p>
            <p>Chaque tableau refl�te ce dialogue intime entre l�homme et la nature, invitant � un voyage sensoriel, entre �vasion et introspection.</p>
            <p>Sa d�marche repose sur une exploration, o� les couleurs primaires servent de point de d�part � chaque composition.</p>
            <p>Il s'engage dans une approche naturelle en fabriquant ses cadres � partir de mat�riaux recycl�s et en transformant des tissus de r�cup�ration pour cr�er ses supports de toiles.</p>
            <p>Cette fusion de cr�ativit�, d�originalit� et de respect de l�environnement donne naissance � des �uvres uniques et durables.</p>

			
			  <!-- Image avec lien actif -->
            <div class="image-container">
                <img src="http://evzone.free.fr/image/index/pourteplaire.jpg" alt="Tableau Pour te plaire" />
                <a href="https://www.artmajeur.com/fr/artist/francisdefaccio" target="_blank">Voir sur Artmajeur</a>
            </div>

            <!-- Image avec lien actif -->
            <div class="image-container">
                <img src="http://evzone.free.fr/image/index/aucoeurdutumulte01.jpg" alt="Cr�ation Au c�ur du tumulte" />
                <a href="https://www.artmajeur.com/fr/artist/francisdefaccio" target="_blank">Voir sur Artmajeur</a>
            </div>
			
			
			
			
			
			
			
            <!-- Ajout de l'image -->
            <img src="http://evzone.free.fr/image/index/pourteplaire.jpg" alt="tableau Pour te plaire de Francis de faccio" />

            <!-- Ajout de l'image -->			
            <img src="http://evzone.free.fr/image/index/pourteplaire02.jpg" alt="oeuvre Pour te plaire de Francis de faccio" />

			<!-- Ajout de l'image -->
			<img src="http://evzone.free.fr/image/index/aucoeurdutumulte01.jpg" alt="cr�ation au coeur du tumulte de Francis de faccio" />

			
			<!-- Ajout de l'image -->
			<img src="http://evzone.free.fr/image/index/aucoeurdutumulte02.jpg" alt="cr�ation au coeur du tumulte de Francis de faccio" />

			<!-- Ajout de l'image -->
			<img src="http://evzone.free.fr/image/index/vertige02.jpg" alt="vertige de Francis de faccio" />
			
            <!-- Ajout de l'image -->
			<img src="http://evzone.free.fr/image/index/vertige.jpg" alt="vertige de Francis de faccio" />

			
            <!-- Ajout de la vid�o 'vertige.mp4' -->
<video controls style="width: 100%;">
    <source src="http://evzone.free.fr/image/index/vertige.mp4" type="video/mp4" />
    Votre navigateur ne supporte pas l'�l�ment vid�o.
</video>

             <!-- Ajout de la vid�o 'nuancesorageuses.mp4' -->
<video controls style="width: 100%;">
    <source src="http://evzone.free.fr/image/index/nuancesorageuses.mp4" type="video/mp4" />
    Votre navigateur ne supporte pas l'�l�ment vid�o.
</video>			


            <!-- Ajout de l'image 'carrelet.jpg' -->
            <img src="http://evzone.free.fr/image/index/carrelet.jpg" alt="Coquelicots" />

            <!-- Ajout de l'image 'carrelet02.jpg' -->
            <img src="http://evzone.free.fr/image/index/carrelet02.jpg" alt="Coquelicots" />






            <!-- Ajout de l'image 'coquelicots.JPG' -->
            <img src="http://evzone.free.fr/image/index/coquelicots.JPG" alt="Coquelicots" />

            <!-- Ajout de l'image 'coquelicots01.jpg' -->
            <img src="http://evzone.free.fr/image/index/coquelicots01.jpg" alt="Coquelicots" />





			
			
			<!-- Ajout de l'image 'signature.png' -->
			<img src="http://evzone.free.fr/image/index/signature.png" alt="signature des tableaux de Francis De Faccio" />
			
			
            
            <!-- Section Contact avec liens cliquables -->
            <div class="contact-links">
                <h3>Contact</h3>
                <a href="https://www.tiktok.com/@francisdefaccio?_t=8sOjZiNknN0&_r=1" target="_blank">TikTok</a>
                <a href="https://www.instagram.com/evzone87/profilecard/?igsh=MXJjMGlycXZ2cTR5Yg==" target="_blank">Instagram</a>
                <a href="https://www.facebook.com/profile.php?id=100088404424087" target="_blank">Facebook</a>
            </div>
        </div>
    </section>

</body>

</html>
