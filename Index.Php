<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OrientaUPC</title>
    <link rel="icon" href="./Img/orienta.png">
    <link rel="stylesheet" href="Styles.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="Scripts.Js" defer></script>
</head>



<body class="font-poppins bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">

    <!-- Dark Mode  -->
    <button id="theme-toggle"
        class="fixed bottom-6 right-6 z-50 w-12 h-12 rounded-full shadow-lg bg-white dark:bg-gray-800 flex items-center justify-center text-gray-700 dark:text-yellow-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-300">

        <i id="theme-icon" class="fas fa-moon text-xl"></i>
    </button>

    <!-- Navigation -->
    <nav
        class="sticky top-0 z-40 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg border-b border-gray-200 dark:border-gray-700 shadow-sm">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex justify-between h-16">

                <div class="flex items-center">

                    <a href="#" class="flex-shrink-0 flex items-center">

                        <img class="h-8 w-auto" src="img/logo.png" alt="OrientaUPC Logo">

                        <span class="ml-2 text-xl font-bold text-upcBlue dark:text-upcGold">OrientaUPC</span>

                    </a>

                </div>

                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">

                    <a href="#home"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Accueil</a>

                    <a href="#programs"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Filières</a>

                    <a href="#lmd"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Système
                        LMD</a>

                    <a href="https://maps.app.goo.gl/GUVCT4xDAK7wCHfG6" target="_blank"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Plan
                        Académique</a>

                    <a href="#advice"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Conseils</a>

                    <a href="#about"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">À
                        propos</a>

                    <a href="#contact"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Contact</a>
                </div>

                <div class="-mr-2 flex items-center md:hidden">

                    <button id="mobile-menu-button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">

                        <span class="sr-only">Open main menu</span>

                        <i class="fas fa-bars text-xl"></i>
                    </button>

                </div>

            </div>

        </div>

        <!-- menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 shadow-lg">

            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">

                <a href="#home"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Accueil</a>

                <a href="#programs"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Filières</a>

                <a href="#lmd"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Système
                    LMD</a>

                <a href="#academic"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Plan
                    Académique</a>

                <a href="#advice"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Conseils</a>

                <a href="#about"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">À
                    propos</a>

                <a href="#contact"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Contact</a>
            </div>

        </div>
    </nav>


    
    <section id="home" class="hero-gradient text-white py-20 md:py-32">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col md:flex-row items-center">

                <div class="md:w-1/2 mb-10 md:mb-0">

                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Bienvenue à l'UPC</h1>

                    <p class="text-xl mb-8 opacity-90">Votre guide complet pour naviguer dans la vie académique à
                        l'Université Protestante au Congo.</p>

                    <div class="flex flex-col sm:flex-row gap-4">

                        <a href="#programs"
                            class="bg-white text-upcBlue font-semibold py-3 px-6 rounded-lg hover:bg-gray-100 transition-colors duration-300 text-center">

                            Explorer les Filières

                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>

                        <a href="#advice"
                            class="bg-transparent border-2 border-white text-white font-semibold py-3 px-6 rounded-lg hover:bg-white hover:text-upcBlue transition-colors duration-300 text-center">

                            Conseils Étudiants
                        </a>

                    </div>

                </div>

                <div class="md:w-1/2 flex justify-center">

                    <div class="relative w-full max-w-md">

                        <div class="absolute -top-6 -left-6 w-32 h-32 bg-upcGold rounded-full opacity-20"></div>

                        <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-upcGold rounded-full opacity-20"></div>

                        <div
                            class="relative bg-white/10 backdrop-blur-md rounded-2xl p-6 shadow-xl border border-white/20">

                            <h3 class="text-xl font-bold mb-4">Ressources Utiles</h3>

                            <ul class="space-y-3">

                                <li class="flex items-center">

                                    <i class="fas fa-calendar-alt text-upcGold mr-3"></i>

                                    <span><a href="https://upc.ac.cd/upload/calendrier.pdf" target="_blank">Calendrier
                                            académique 2024-2025</a></span>
                                </li>

                                <li class="flex items-center">

                                    <i class="fas fa-map-marked-alt text-upcGold mr-3"></i>

                                    <span><a href="https://maps.app.goo.gl/GUVCT4xDAK7wCHfG6" target="_blank">Plan du
                                            campus</a></span>
                                </li>

                                <li class="flex items-center">

                                    <i class="fas fa-book text-upcGold mr-3"></i>

                                    <span><a href="https://upc.ac.cd/admissions/admission-au-graduat/"
                                            target="_blank">Guide de l'étudiant</a></span>
                                </li>

                                <li class="flex items-center">

                                    <i class="fas fa-question-circle text-upcGold mr-3"></i>

                                    <span><a href="https://upc.ac.cd/admissions/" target="_blank">FAQ pour nouveaux
                                            étudiants</a></span>

                                </li>

                            </ul>

                            <button
                                class="mt-6 w-full bg-upcGold text-upcBlue font-semibold py-2 px-4 rounded-lg hover:bg-yellow-400 transition-colors duration-300">

                                <a href="./Ressources Utiles.zip" download="Télécharger toutes les ressources"
                                    target="_blank">Télécharger toutes les ressources</a>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Les Liens -->
    <section class="bg-gray-50 dark:bg-gray-800 py-12">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <a href="#programs"

                    class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col items-center text-center">

                    <div
                        class="w-14 h-14 bg-upcBlue/10 dark:bg-upcBlue/20 rounded-full flex items-center justify-center mb-4">

                        <i class="fas fa-graduation-cap text-upcBlue dark:text-upcGold text-2xl"></i>

                    </div>

                    <h3 class="font-semibold text-lg mb-2">Filières</h3>

                    <p class="text-gray-600 dark:text-gray-300 text-sm">Découvrez nos programmes académiques</p>

                </a>

                <a href="#lmd"

                    class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col items-center text-center">

                    <div
                        class="w-14 h-14 bg-upcBlue/10 dark:bg-upcBlue/20 rounded-full flex items-center justify-center mb-4">

                        <i class="fas fa-layer-group text-upcBlue dark:text-upcGold text-2xl"></i>

                    </div>

                    <h3 class="font-semibold text-lg mb-2">Système LMD</h3>

                    <p class="text-gray-600 dark:text-gray-300 text-sm">Comprendre Licence-Master-Doctorat</p>

                </a>

                <a href="#academic"

                    class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col items-center text-center">

                    <div

                        class="w-14 h-14 bg-upcBlue/10 dark:bg-upcBlue/20 rounded-full flex items-center justify-center mb-4">

                        <i class="fas fa-calendar-check text-upcBlue dark:text-upcGold text-2xl"></i>

                    </div>

                    <h3 class="font-semibold text-lg mb-2">Plan Académique</h3>

                    <p class="text-gray-600 dark:text-gray-300 text-sm">Organisez votre parcours universitaire</p>

                </a>

                <a href="#advice"

                    class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col items-center text-center">

                    <div

                        class="w-14 h-14 bg-upcBlue/10 dark:bg-upcBlue/20 rounded-full flex items-center justify-center mb-4">

                        <i class="fas fa-lightbulb text-upcBlue dark:text-upcGold text-2xl"></i>

                    </div>

                    <h3 class="font-semibold text-lg mb-2">Conseils</h3>

                    <p class="text-gray-600 dark:text-gray-300 text-sm">Astuces pour réussir vos études</p>

                </a>

            </div>

        </div>

    </section>



   
    <section id="programs" class="py-16 bg-gray-50 dark:bg-gray-800">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">

                <h2 class="text-3xl font-bold text-upcBlue dark:text-upcGold mb-4">Nos Filières Académiques</h2>

                <div class="w-24 h-1 bg-upcGold mx-auto mb-6"></div>

                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Découvrez les différentes filières offertes à l'UPC et trouvez celle qui correspond à vos
                    aspirations.
                </p>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

               
                <div
                    class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden transition-all duration-300 card-hover">

                    <div class="h-48 bg-upcBlue flex items-center justify-center">

                        <i class="fas fa-laptop-code text-white text-6xl"></i>

                    </div>

                    <div class="p-6">

                        <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-2">Faculté des Sciences
                            Informatiques (FASI)</h3>

                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Formation complète en développement logiciel, réseaux informatiques et systèmes
                            d'information.
                        </p>


                        <a href="https://upc.ac.cd/facultes/" target="_blank"
                            class="text-upcBlue dark:text-upcGold font-medium hover:underline flex items-center">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>

                    </div>

                </div>

              
                <div
                    class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden transition-all duration-300 card-hover">

                    <div class="h-48 bg-upcBlue flex items-center justify-center">

                        <i class="fas fa-balance-scale text-white text-6xl"></i>

                    </div>

                    <div class="p-6">

                        <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-2">Faculté de Droit</h3>

                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Programme complet couvrant le droit civil, pénal, des affaires et international.
                        </p>

                        <a href="https://upc.ac.cd/facultes/la-faculte-de-droit/" target="_blank"
                            class="text-upcBlue dark:text-upcGold font-medium hover:underline flex items-center">
                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>

                    </div>

                </div>

             
                <div
                    class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden transition-all duration-300 card-hover">

                    <div class="h-48 bg-upcBlue flex items-center justify-center">

                        <i class="fas fa-chart-line text-white text-6xl"></i>

                    </div>

                    <div class="p-6">

                        <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-2">Faculté d’Administration des
                            Affaires et Sciences Économiques (FASE)</h3>

                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Formation en management, comptabilité, marketing et entrepreneuriat.
                        </p>


                        <a href="https://upc.ac.cd/facultes/la-faculte-dadministration-des-affaires-et-sciences-economiques-fase/"
                            target="_blank"
                            class="text-upcBlue dark:text-upcGold font-medium hover:underline flex items-center">

                            En savoir plus <i class="fas fa-arrow-right ml-2"></i>
                        </a>

                    </div>

                </div>

            </div>

            <div class="text-center mt-12">

                <a href="https://upc.ac.cd/facultes/" target="_blank"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-upcBlue hover:bg-blue-700 transition-colors duration-300">
                    Voir toutes les filières <i class="fas fa-list-ul ml-2"></i>
                </a>

            </div>

        </div>

    </section>
  
    <section id="lmd" class="py-16 bg-white dark:bg-gray-900">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">

                <h2 class="text-3xl font-bold text-upcBlue dark:text-upcGold mb-4">Comprendre le Système LMD</h2>

                <div class="w-24 h-1 bg-upcGold mx-auto mb-6"></div>

                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Licence - Master - Doctorat : Le système d'enseignement supérieur harmonisé au niveau international.
                </p>

            </div>

            <div class="flex flex-col lg:flex-row gap-8">
              
                <div class="lg:w-2/3">

                    <div class="relative">

                        
                        <div class="timeline-item relative pl-8 pb-8">

                            <span class="absolute left-0 w-4 h-4 bg-upcGold rounded-full mt-1"></span>

                            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-sm">

                                <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-2">Licence (BAC+3)</h3>

                                <p class="text-gray-600 dark:text-gray-300 mb-3">
                                    Premier cycle universitaire de 6 semestres (180 crédits ECTS) permettant d'acquérir
                                    les connaissances de base dans un domaine.
                                </p>

                                <ul class="list-disc pl-5 text-gray-600 dark:text-gray-300 space-y-1">

                                    <li>Durée : 3 ans</li>

                                    <li>Accès : Baccalauréat ou équivalent</li>

                                    <li>Débouchés : Master ou insertion professionnelle</li>

                                </ul>

                            </div>

                        </div>

                       
                        <div class="timeline-item relative pl-8 pb-8">

                            <div class="absolute left-0 w-4 h-4 bg-upcGold rounded-full mt-1"></div>

                            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-sm">

                                <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-2">Master (BAC+5)</h3>

                                <p class="text-gray-600 dark:text-gray-300 mb-3">
                                    Deuxième cycle de 4 semestres (120 crédits ECTS) permettant une spécialisation ou
                                    une professionnalisation approfondie.
                                </p>

                                <ul class="list-disc pl-5 text-gray-600 dark:text-gray-300 space-y-1">

                                    <li>Durée : 2 ans</li>

                                    <li>Accès : Licence ou équivalent (180 ECTS)</li>

                                    <li>Débouchés : Doctorat ou insertion professionnelle</li>

                                </ul>

                            </div>

                        </div>

                       
                        <div class="timeline-item relative pl-8">

                            <div class="absolute left-0 w-4 h-4 bg-upcGold rounded-full mt-1"></div>


                            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-sm">

                                <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-2">Doctorat (BAC+8)</h3>

                                <p class="text-gray-600 dark:text-gray-300 mb-3">
                                    Troisième cycle consacré à la recherche originale, aboutissant à la soutenance d'une
                                    thèse.
                                </p>

                                <ul class="list-disc pl-5 text-gray-600 dark:text-gray-300 space-y-1">

                                    <li>Durée : 3 ans minimum</li>

                                    <li>Accès : Master ou équivalent (300 ECTS)</li>

                                    <li>Débouchés : Carrière académique ou recherche</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                
                <div class="lg:w-1/3">

                    <div class="bg-upcBlue text-white p-6 rounded-lg shadow-lg h-full">

                        <h3 class="text-xl font-bold mb-4">Système de Crédits ECTS</h3>
                        <br>

                        <p class="mb-4">
                            Le système européen de transfert et d'accumulation de crédits (ECTS) permet de mesurer et
                            comparer les résultats d'apprentissage.
                        </p>
                        <br>

                        <div class="space-y-4">

                            <div>

                                <h4 class="font-semibold mb-2">1 crédit ECTS =</h4>

                                <p>25 à 30 heures de travail étudiant (cours, TD, TP, travail personnel)</p>

                            </div>

                            <br>
                            <br>

                            <div>

                                <h4 class="font-semibold mb-2">Semestre standard =</h4>

                                <p>30 crédits ECTS (soit 750-900 heures de travail)</p>

                            </div>


                            <br>
                            <br>


                            <div>

                                <h4 class="font-semibold mb-2">Avantages :</h4>

                                <ul class="list-disc pl-5 space-y-1">

                                    <li>Mobilité internationale facilitée</li>

                                    <li>Parcours personnalisés</li>

                                    <li>Reconnaissance des acquis</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

    </section>

        
        <div class="flex justify-center px-4">

           
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden max-w-xl w-full">

                <div class="bg-upcBlue px-6 py-4">

                    <h3 class="text-xl font-bold text-white">Calendrier Académique 2024-2025</h3>

                </div>

                <div class="p-6">

                    <div class="space-y-4">
               
                <div class="flex items-start">

                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-upcBlue/10 dark:bg-upcBlue/20 flex items-center justify-center text-upcBlue dark:text-upcGold mr-4">

                        <i class="fas fa-calendar-day"></i>

                    </div>

                    <div>

                        <h4 class="font-medium text-gray-900 dark:text-white">Rentrée universitaire</h4>

                        <p class="text-sm text-gray-600 dark:text-gray-300">14 Octobre 2025</p>

                    </div>

                </div>

                
                <div class="flex items-start">

                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-upcBlue/10 dark:bg-upcBlue/20 flex items-center justify-center text-upcBlue dark:text-upcGold mr-4">

                        <i class="fas fa-book"></i>

                    </div>

                    <div>

                        <h4 class="font-medium text-gray-900 dark:text-white">Début des cours</h4>

                        <p class="text-sm text-gray-600 dark:text-gray-300">18 Octobre 2025</p>

                    </div>

                </div>

               
                <div class="flex items-start">

                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-upcBlue/10 dark:bg-upcBlue/20 flex items-center justify-center text-upcBlue dark:text-upcGold mr-4">

                        <i class="fas fa-pencil-alt"></i>

                    </div>

                    <div>

                        <h4 class="font-medium text-gray-900 dark:text-white">Session d'examens - Semestre 1</h4>

                        <p class="text-sm text-gray-600 dark:text-gray-300">15-30 janvier 2025</p>

                    </div>

                </div>

               
                <div class="flex items-start">

                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-upcBlue/10 dark:bg-upcBlue/20 flex items-center justify-center text-upcBlue dark:text-upcGold mr-4">

                        <i class="fas fa-sun"></i>

                    </div>

                    <div>

                        <h4 class="font-medium text-gray-900 dark:text-white">Vacances inter-semestres</h4>

                        <p class="text-sm text-gray-600 dark:text-gray-300">1-14 février 2025</p>

                    </div>

                </div>

                
                <div class="flex items-start">

                    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-upcBlue/10 dark:bg-upcBlue/20 flex items-center justify-center text-upcBlue dark:text-upcGold mr-4">

                        <i class="fas fa-graduation-cap"></i>

                    </div>

                    <div>

                        <h4 class="font-medium text-gray-900 dark:text-white">Fin de l'année académique</h4>

                        <p class="text-sm text-gray-600 dark:text-gray-300">30 juin 2025</p>

                    </div>

                </div>

            </div>

            <button class="mt-6 w-full bg-upcBlue text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-300">

                <a href="https://upc.ac.cd/upload/calendrier.pdf" target="_blank" download="Calendrier Académique UPC 2024-2025">
                    <span>Télécharger le calendrier complet</span>
                </a>

            </button>

        </div>

    </div>

</div>
   
    <section id="advice" class="py-16 bg-white dark:bg-gray-900">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">

                <h2 class="text-3xl font-bold text-upcBlue dark:text-upcGold mb-4">Conseils pour Réussir</h2>

                <div class="w-24 h-1 bg-upcGold mx-auto mb-6"></div>

                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Astuces et stratégies partagées par des étudiants et professeurs pour exceller dans vos études.
                </p>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
               
                <div
                    class="bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-all duration-300 card-hover">

                    <div class="h-48 bg-gradient-to-r from-upcBlue to-blue-600 flex items-center justify-center">

                        <i class="fas fa-clock text-white text-6xl"></i>

                    </div>

                    <div class="p-6">

                        <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-3">Gestion du Temps</h3>

                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Apprenez à organiser votre emploi du temps efficacement pour concilier études, loisirs et
                            repos.
                        </p>

                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">

                            <li class="flex items-start">

                                <i class="fas fa-check-circle text-upcGold mr-2 mt-1"></i>

                                <span>Utilisez un agenda ou des applications de planification</span>

                            </li>

                            <li class="flex items-start">

                                <i class="fas fa-check-circle text-upcGold mr-2 mt-1"></i>

                                <span>Priorisez les tâches importantes et urgentes</span>

                            </li>

                            <li class="flex items-start">

                                <i class="fas fa-check-circle text-upcGold mr-2 mt-1"></i>

                                <span>Évitez la procrastination avec la technique Pomodoro</span>

                            </li>

                        </ul>

                    </div>

                </div>

                
                <div
                    class="bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-all duration-300 card-hover">

                    <div class="h-48 bg-gradient-to-r from-upcBlue to-blue-600 flex items-center justify-center">

                        <i class="fas fa-book-reader text-white text-6xl"></i>

                    </div>

                    <div class="p-6">

                        <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-3">Méthodes d'Étude</h3>

                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Découvrez des techniques d'apprentissage efficaces adaptées à différents types de cours.
                        </p>

                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">

                            <li class="flex items-start">

                                <i class="fas fa-check-circle text-upcGold mr-2 mt-1"></i>

                                <span>La prise de notes active (méthode Cornell)</span>

                            </li>

                            <li class="flex items-start">

                                <i class="fas fa-check-circle text-upcGold mr-2 mt-1"></i>

                                <span>Les cartes mentales pour visualiser les concepts</span>

                            </li>

                            <li class="flex items-start">

                                <i class="fas fa-check-circle text-upcGold mr-2 mt-1"></i>

                                <span>L'étude par intervalles espacés</span>

                            </li>

                        </ul>

                    </div>

                </div>

                
                <div
                    class="bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md overflow-hidden transition-all duration-300 card-hover">

                    <div class="h-48 bg-gradient-to-r from-upcBlue to-blue-600 flex items-center justify-center">

                        <i class="fas fa-brain text-white text-6xl"></i>

                    </div>

                    <div class="p-6">

                        <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-3">Préparation aux Examens</h3>

                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Stratégies pour aborder sereinement les périodes d'examens et maximiser vos résultats.
                        </p>

                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">

                            <li class="flex items-start">

                                <i class="fas fa-check-circle text-upcGold mr-2 mt-1"></i>

                                <span>Créez un planning de révision réaliste</span>

                            </li>

                            <li class="flex items-start">

                                <i class="fas fa-check-circle text-upcGold mr-2 mt-1"></i>

                                <span>Pratiquez avec des annales d'examens</span>

                            </li>

                            <li class="flex items-start">

                                <i class="fas fa-check-circle text-upcGold mr-2 mt-1"></i>

                                <span>Gérez le stress avec des techniques de relaxation</span>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

    </section>

   
    <section id="about" class="py-16 bg-white dark:bg-gray-900">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">

                <h2 class="text-3xl font-bold text-upcBlue dark:text-upcGold mb-4">À Propos d'OrientaUPC</h2>

                <div class="w-24 h-1 bg-upcGold mx-auto mb-6"></div>

                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">

                    Une plateforme créée par l'étudiant <strong>Mardochée Kanushipi</strong>, pour les Nouveaux
                    étudiants de l'Université Protestante au Congo, afin de faciliter l'intégration et la réussite
                    académique à l'UPC.
                </p>

            </div>

            <div class="flex flex-col md:flex-row gap-12 items-center">

                <div class="md:w-1/2">

                    <img src="./Img/IMG_2286~2.jpg" alt="Étudiants UPC" class="rounded-lg shadow-lg w-full">

                </div>

                <div class="md:w-1/2">

                    <div class="mb-8">

                        <h3 class="text-xl font-semibold text-upcBlue dark:text-upcGold mb-3">Notre Mission</h3>

                        <p class="text-gray-600 dark:text-gray-300">
                            OrientaUPC a pour mission d'accompagner les nouveaux étudiants dans leur parcours
                            universitaire en fournissant des informations claires, des ressources utiles et des conseils
                            pratiques pour naviguer dans le système académique de l'UPC.
                        </p>

                    </div>

                    <div class="mb-8">

                        <h3 class="text-xl font-semibold text-upcBlue dark:text-upcGold mb-3">Notre Vision</h3>

                        <p class="text-gray-600 dark:text-gray-300">
                            Nous aspirons à créer une communauté étudiante solidaire où chaque membre peut partager son
                            expérience et ses connaissances pour aider les autres à réussir leurs études universitaires.
                        </p>

                    </div>

                    <div>

                        <h3 class="text-xl font-semibold text-upcBlue dark:text-upcGold mb-3">Rejoignez-nous</h3>

                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            OrientaUPC est un projet collaboratif. Si vous souhaitez contribuer en partageant vos
                            connaissances ou vos expériences, n'hésitez pas à nous contacter.
                        </p>

                        <a href="#contact"

                            class="inline-flex items-center px-6 py-3 bg-upcBlue text-white font-medium rounded-lg hover:bg-blue-700 transition-colors duration-300">

                            Contribuer <i class="fas fa-hands-helping ml-2"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    
    <section id="contact" class="py-16 bg-gray-50 dark:bg-gray-800">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">

                <h2 class="text-3xl font-bold text-upcBlue dark:text-upcGold mb-4">Contactez-moi</h2>

                <div class="w-24 h-1 bg-upcGold mx-auto mb-6"></div>

                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Vous avez des questions ou souhaitez contribuer au projet? N'hésitez pas à nous contacter.
                </p>

            </div>

            <div class="flex flex-col lg:flex-row gap-12">

                <div class="lg:w-1/2">

                    <form class="space-y-6">

                        <div>

                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nom
                                complet</label>

                            <input type="text" id="name" name="name"

                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-upcBlue focus:border-upcBlue bg-white dark:bg-gray-700">
                        </div>

                        <div>

                            <label for="email"

                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Adresse
                                email</label>

                            <input type="email" id="email" name="email"

                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-upcBlue focus:border-upcBlue bg-white dark:bg-gray-700">
                        </div>

                        <div>

                            <label for="subject"

                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Sujet</label>

                            <select id="subject" name="subject"

                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-upcBlue focus:border-upcBlue bg-white dark:bg-gray-700">

                                <option value="">-- Sélectionnez un sujet --</option>

                                <option value="question">Question générale</option>

                                <option value="contribution">Proposition de contribution</option>

                                <option value="bug">Signaler un problème</option>

                            </select>

                        </div>

                        <div>

                            <label for="message"

                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Message</label>

                            <textarea id="message" name="message" rows="5"

                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-upcBlue focus:border-upcBlue bg-white dark:bg-gray-700"></textarea>
                        </div>

                        <div>

                            <button type="submit"

                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-upcBlue hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-upcBlue transition-colors duration-300">

                                Envoyer le message <i class="fas fa-paper-plane ml-2"></i>

                            </button>

                        </div>

                    </form>

                </div>

                <div class="lg:w-1/2">

                    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-6 h-full">

                        <h3 class="text-xl font-bold text-upcBlue dark:text-upcGold mb-6">Autres moyens de contact</h3>

                        <div class="space-y-6">

                            <div class="flex items-start">

                                <div
                                    class="flex-shrink-0 h-10 w-10 rounded-full bg-upcBlue/10 dark:bg-upcBlue/20 flex items-center justify-center text-upcBlue dark:text-upcGold mr-4">

                                    <i class="fas fa-envelope"></i>

                                </div>

                                <div>

                                    <h4 class="font-medium text-gray-900 dark:text-white mb-1">Email</h4>

                                    <p class="text-gray-600 dark:text-gray-300">

                                        <a href="mailto:mardocheekanushipi@gmail.com" class="contact-link"
                                            target="_blank">mardocheekanushipi@gmail.com</a>
                                    </p>

                                </div>

                            </div>

                            <div class="flex items-start">

                                <div

                                    class="flex-shrink-0 h-10 w-10 rounded-full bg-upcBlue/10 dark:bg-upcBlue/20 flex items-center justify-center text-upcBlue dark:text-upcGold mr-4">

                                    <i class="fas fa-map-marker-alt"></i>

                                </div>

                                <div>

                                    <h4 class="font-medium text-gray-900 dark:text-white mb-1">Adresse</h4>

                                    <p class="text-gray-600 dark:text-gray-300">

                                        <a href="https://goo.gl/maps/es1RiuWtGV2dreeKA" target="_blank"
                                            class="contact-link">

                                            Limete 17ème poids lourds<br>Kinshasa, République démocratique du Congo

                                        </a>

                                    </p>

                                </div>

                            </div>

                            <div class="flex items-start">

                                <div

                                    class="flex-shrink-0 h-10 w-10 rounded-full bg-upcBlue/10 dark:bg-upcBlue/20 flex items-center justify-center text-upcBlue dark:text-upcGold mr-4">

                                    <i class="fas fa-phone-alt"></i>

                                </div>

                                <div>

                                    <h4 class="font-medium text-gray-900 dark:text-white mb-1">Téléphone</h4>

                                    <p class="text-gray-600 dark:text-gray-300">

                                        <a href="tel:+243893630482" class="contact-link" target="_blank">+243
                                            893630482</a>
                                    </p>

                                </div>

                            </div>

                            <div class="flex items-start">

                                <div
                                    class="flex-shrink-0 h-10 w-10 rounded-full bg-upcBlue/10 dark:bg-upcBlue/20 flex items-center justify-center text-upcBlue dark:text-upcGold mr-4">

                                    <i class="fas fa-users"></i>

                                </div>

                                <div>

                                    <h4 class="font-medium text-gray-900 dark:text-white mb-1">Mes Plateformes Réseaux
                                        sociaux</h4>

                                    <div class="flex space-x-4 mt-2">

                                        <!-- YouTube -->
                                        <a href="https://youtube.com/@mardochee_kanushipi?si=6owDNp8KoF2lkdHy"
                                            class="btn-social btn-youtube" target="_blank">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>

                                        <!-- Facebook -->
                                        <a href="https://www.facebook.com/share/16R5tDuedw/"
                                            class="btn-social btn-facebook" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>

                                        <!-- Instagram -->
                                        <a href="https://www.instagram.com/mardochee_kanushipi?igsh=MWxxMm9rdHkwZ2JrYQ=="
                                            class="btn-social btn-instagram" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>

                                        <!-- Threads -->
                                        <a href="https://www.threads.net/@mardochee_kanushipi"
                                            class="btn-social btn-threads" target="_blank" title="Threads">
                                            <i class="fa-brands fa-threads"></i>
                                        </a>


                                        <!-- X -->
                                        <a href="https://x.com/mardochee_X" class="btn-social btn-x-twitter"
                                            target="_blank">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>


                                        <!-- TikTok -->
                                        <a href="https://www.tiktok.com/@mardochee_kanushipi?_t=ZM-8wxAGwIvtKv&_r=1"
                                            class="btn-social btn-tiktok" target="_blank">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>


                                        <!-- WhatsApp -->
                                        <a href="https://wa.me/243893630482" class="btn-social btn-whatsapp"
                                            target="_blank">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>

                                        <!-- Telegram -->
                                        <a href="http://t.me/mardochee_kanushipi" class="btn-social btn-telegram"
                                            target="_blank">
                                            <i class="fa-brands fa-telegram"></i>
                                        </a>

                                        <!-- Snapchat -->
                                        <a href="https://www.snapchat.com/add/snap_mardochee?share_id=iI3MtwQLcnU&locale=fr-FR"
                                            class="btn-social btn-snapchat" target="_blank">
                                            <i class="fa-brands fa-snapchat-ghost"></i>
                                        </a>


                                        <!-- Pinterest -->
                                        <a href="https://pin.it/78lXgiuQl" class="btn-social btn-pinterest"
                                            target="_blank" title="Pinterest">
                                            <i class="fa-brands fa-pinterest-p"></i>
                                        </a>


                                        <!-- Linktree -->
                                        <a href="https://linktr.ee/mardocheekanushipi" class="btn-social btn-linktree"
                                            target="_blank" title="Linktree">
                                            <img src="./Fonts/linktree.svg" alt="Linktree" />
                                        </a>

                                        <!-- LinkedIn -->
                                        <a href="https://www.linkedin.com/in/mardoch%C3%A9e-kanushipi-54a9b6235?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                            class="btn-social btn-linkedin" target="_blank">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>

                                        <!-- GitHub -->
                                        <a href="https://github.com/Mardochee-Kanushipi" class="btn-social btn-github"
                                            target="_blank">
                                            <i class="fa-brands fa-github"></i>
                                        </a>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer>
        <p>© 2025 OrientaUPC. Tous droits réservés.</p>
    </footer>

   
</body>

</html>
