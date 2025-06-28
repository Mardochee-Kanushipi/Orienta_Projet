<!DOCTYPE html>

<html lang="fr" class="scroll-smooth">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact</title>
    <link rel="icon" href="./Img/orienta.png">

    <link rel="stylesheet" href="Styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="Scripts.Js" defer></script>

</head>



<body class="font-poppins bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">

    <!-- Mode Sombre  -->
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

                    <a target="_blank" href="Acceuil.Html"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Accueil</a>

                    <a target="_blank" href="Filières.Html"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Filières</a>

                    <a target="_blank" href="Système-LMD.Html"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Système
                        LMD</a>

                    <a href="https://maps.app.goo.gl/GUVCT4xDAK7wCHfG6" target="_blank"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Explorer le campus</a>

                    <a target="_blank" href="Conseils.Html"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">Conseils</a>

                    <a target="_blank" href="à-propos.Html"
                        class="px-3 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-upcBlue dark:hover:text-upcGold transition-colors">À
                        propos</a>

                    <a target="_blank" href="Contact.Php"
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

                <a target="_blank" href="Acceuil.Html"

                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Accueil</a>

                <a target="_blank" href="Filières.Html"

                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Filières</a>

                <a target="_blank" href="Système-LMD.Html"

                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Système
                    LMD</a>

                <a target="_blank" href="Explorer-Le-Campus.html"

                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Explorer le Campus</a>

                <a target="_blank" href="Conseils.Html"

                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Conseils</a>

                <a target="_blank" href="à-propos.Html"

                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">À
                    propos</a>

                <a target="_blank" href="Contact.Php"

                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:text-upcBlue dark:hover:text-upcGold hover:bg-gray-50 dark:hover:bg-gray-700">Contact</a>
            </div>

        </div>
    </nav>


    

    
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

                    <form class="space-y-6" action="traitement.php" method="POST" onsubmit="return validateForm();">


                        <div>

                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nom
                                complet</label>

                            <input type="text" id="name" name="name"

                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-upcBlue focus:border-upcBlue bg-white dark:bg-gray-700"
                                placeholder="Nom complet">
                        </div>

                        <div>

                            <label for="email"

                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Adresse
                                email</label>

                            <input type="email" id="email" name="email"

                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-upcBlue focus:border-upcBlue bg-white dark:bg-gray-700"
                                placeholder="Adresse email">
                        </div>

                       
                        <div>

                            <label for="message"

                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Message</label>

                            <textarea id="message" name="message" rows="5"

                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-upcBlue focus:border-upcBlue bg-white dark:bg-gray-700"
                                placeholder="Votre message"></textarea>
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

                                        <a href="https://maps.app.goo.gl/LZV9B4diiWWL8EfK8" target="_blank"
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

  <script>
      
function validateForm() {
    var valid = true;
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var message = document.getElementById('message');

    // Réinitialiser les styles et placeholders
    name.classList.remove('border-red-500');
    email.classList.remove('border-red-500');
    message.classList.remove('border-red-500');
    name.placeholder = 'Nom complet';
    email.placeholder = 'Adresse email';
    message.placeholder = 'Votre message';

    if (!name.value.trim()) {
        name.classList.add('border-red-500');
        name.placeholder = 'Veuillez remplir ce champ';
        valid = false;
    }
    if (!email.value.trim()) {
        email.classList.add('border-red-500');
        email.placeholder = 'Veuillez remplir ce champ';
        valid = false;
    }
    if (!message.value.trim()) {
        message.classList.add('border-red-500');
        message.placeholder = 'Veuillez remplir ce champ';
        valid = false;
    }
    return valid;
}
  </script>

</body>

</html>
