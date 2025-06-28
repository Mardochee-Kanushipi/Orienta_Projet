



tailwind.config = {

            darkMode: 'class',

            theme: {

                extend: {

                    colors: {

                        upcBlue: '#003366',

                        upcGold: '#FFD700',

                        upcLight: '#F5F7FA',

                        upcDark: '#1A202C',

                    },

                    fontFamily: {

                        poppins: ['Poppins', 'sans-serif'],

                    },
                }
            }
        }

  
         
        
         // Dark mode toggle
    const themeToggle = document.getElementById('theme-toggle');

    const themeIcon = document.getElementById('theme-icon');

    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)){

        document.documentElement.classList.add('dark');

        themeIcon.classList.replace('fa-moon', 'fa-sun');

    }
    else{

        document.documentElement.classList.remove('dark');

        themeIcon.classList.replace('fa-sun', 'fa-moon');
    }

    themeToggle.addEventListener('click', function(){

        if (localStorage.getItem('color-theme')){

            if (localStorage.getItem('color-theme') === 'light'){

                document.documentElement.classList.add('dark');

                localStorage.setItem('color-theme', 'dark');

                themeIcon.classList.replace('fa-moon', 'fa-sun');
            } 
            
            else{

                document.documentElement.classList.remove('dark');

                localStorage.setItem('color-theme', 'light');

                themeIcon.classList.replace('fa-sun', 'fa-moon');
            }

        } 
        else {

            if (document.documentElement.classList.contains('dark'))

            {

                document.documentElement.classList.remove('dark');

                localStorage.setItem('color-theme', 'light');

                themeIcon.classList.replace('fa-sun', 'fa-moon');
            } 

            else {

                document.documentElement.classList.add('dark');

                localStorage.setItem('color-theme', 'dark');

                themeIcon.classList.replace('fa-moon', 'fa-sun');
            }
        }
    });

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');

    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function() {

        mobileMenu.classList.toggle('hidden');

    });

    // Program select
    const programSelect = document.getElementById('program-select');

    const programInfo = document.getElementById('program-info');

    const noProgramSelected = document.getElementById('no-program-selected');

    programSelect.addEventListener('change', function() {

        if (this.value) {

            programInfo.classList.remove('hidden');

            noProgramSelected.classList.add('hidden');

            document.getElementById('program-name').textContent = this.options[this.selectedIndex].text;
        }

         else {

            programInfo.classList.add('hidden');

            noProgramSelected.classList.remove('hidden');
        }

    });



    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {

        anchor.addEventListener('click', function(e) {

            e.preventDefault();

            const targetId = this.getAttribute('href');

            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);

            if (targetElement) {

                targetElement.scrollIntoView({

                    behavior: 'smooth'

                });

                // Close mobile menu if open
                if (!mobileMenu.classList.contains('hidden')) {

                    mobileMenu.classList.add('hidden');
                }
            }
        });
    });


    