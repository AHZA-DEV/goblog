<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Fatz Dev - Personal Website</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link rel="icon" type="image/png" href="{{ asset('storage/logo.jpg') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
        
        /* Better responsive font sizing */
        @media (max-width: 640px) {
            html {
                font-size: 14px;
            }
        }
        
        @media (max-width: 480px) {
            html {
                font-size: 13px;
            }
        }
        
        /* Smooth transitions for theme toggle */
        * {
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#1A1A1A",
                        "background-light": "#f7f7f7",
                        "background-dark": "#191919"
                    },
                    fontFamily: {
                        display: "Inter"
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
                    },
                    screens: {
                        'xs': '480px',
                        '3xl': '1600px',
                    }
                }
            }
        };
    </script>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <!-- Theme Toggle Button -->
        <button id="theme-toggle" class="fixed top-4 right-4 z-50 p-2 rounded-full bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transition-shadow">
            <span id="theme-icon" class="material-symbols-outlined text-gray-800 dark:text-white">
                dark_mode
            </span>
        </button>
        
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1 justify-center py-5 px-2 sm:px-4 md:px-6">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1 w-full">
                    <!-- header -->
                     @include('layout.header')

                    <main class="w-full">
                        @yield('content')
                    </main>

                    <!-- footer -->
                    @include('layout.footer')
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Theme toggle functionality
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        const htmlElement = document.documentElement;
        
        themeToggle.addEventListener('click', () => {
            if (htmlElement.classList.contains('dark')) {
                htmlElement.classList.remove('dark');
                htmlElement.classList.add('light');
                themeIcon.textContent = 'dark_mode';
                localStorage.setItem('theme', 'light');
            } else {
                htmlElement.classList.remove('light');
                htmlElement.classList.add('dark');
                themeIcon.textContent = 'light_mode';
                localStorage.setItem('theme', 'dark');
            }
        });
        
        // Check for saved theme preference or respect OS preference
        const savedTheme = localStorage.getItem('theme');
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
            htmlElement.classList.remove('light');
            htmlElement.classList.add('dark');
            themeIcon.textContent = 'light_mode';
        } else {
            htmlElement.classList.remove('dark');
            htmlElement.classList.add('light');
            themeIcon.textContent = 'dark_mode';
        }
        
        // Responsive adjustments
        function adjustLayout() {
            const screenWidth = window.innerWidth;
            
            // Optional: Add more JavaScript-based responsive adjustments here
            if (screenWidth < 480) {
                // Extra small screen adjustments
                console.log('Extra small screen detected');
            }
        }
        
        // Initial call
        adjustLayout();
        
        // Listen for resize events
        window.addEventListener('resize', adjustLayout);
    </script>
</body>
</html>