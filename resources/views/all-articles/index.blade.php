<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>John Doe - Personal Website</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                    <header class="flex flex-col xs:flex-row items-center justify-between gap-4 xs:gap-0 whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-800 px-4 xs:px-6 sm:px-10 py-4">  
                        <div class="flex flex-1 justify-end items-center gap-4 xs:gap-6 sm:gap-8">
                            <nav class="flex items-center gap-4 xs:gap-6 sm:gap-9">
                                <a class="text-xs xs:text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Home</a>
                                <a class="text-xs xs:text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Articles</a>
                            </nav>
                        </div>
                    </header>

                    <main class="w-full">
                        <div class="grid grid-cols-1 xs:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5 md:gap-6 p-4">
                            <div class="flex flex-col gap-2 sm:gap-3 pb-2 sm:pb-3 group">
                                <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg overflow-hidden">
                                    <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300" data-alt="Abstract gradient of blue and purple hues representing web development concepts." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDR5Yhw9LT96Zjw9GSiLQpMdFgvrT2nUmDzgsTgczh2B3odBSjAzfBVD3nfVp3eLkzc1rzOBuN3b9NBIsU9zfPWqU-jgRVTZqsFtfTP7LfrkABEgcM0NJFtApFZ-4sbDxX2mhzvyJxAcmSLCQ5-nQCkaJuNPRDuz7tEFp_EvGtmkO8cONs3RzaeSB1R4CAhDYYJXtnSOAkrSblYVKK_FdSw9enBow7gaNeFQn8Fy9_7KAvAVdf0OfBnBJvWmXfakJszJBvE4Y0BCpU");'></div>
                                </div>
                                <div class="flex flex-col gap-1 sm:gap-1.5">
                                    <p class="text-gray-500 dark:text-gray-400 text-xs xs:text-sm font-medium">Web Development</p>
                                    <p class="text-gray-900 dark:text-white text-base xs:text-lg font-bold">The Future of Web Development</p>
                                    <p class="text-gray-600 dark:text-gray-300 text-xs xs:text-sm font-normal line-clamp-2">An exploration of emerging trends and technologies shaping the web.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 sm:gap-3 pb-2 sm:pb-3 group">
                                <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg overflow-hidden">
                                    <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300" data-alt="Code snippets on a dark screen, illustrating React hooks." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD-4eQI9yDsDZf94yMYNFbMwdGGatHBG_A7KqAdmlXSEzK4L1q1yiOVQ8HBlhZXStsTRzeQTc0wVBEHiJz79Cb14JXSBylMhs2vocKUihFQsl4nSaw57SqjvqWCeQTz3S6We0KU4N-zBODMoKIXyx-vSYN3WLbiYuHHiwhY89QQmueYeWGhHPv9Gc9sKf9fFLyHbVjeG2JwOOdYtIN04vKTiO1XrprYOrRX5u07euFuatqqDjtuwtakV3jEd2VPGu4bpux_pcWQvw0");'></div>
                                </div>
                                <div class="flex flex-col gap-1 sm:gap-1.5">
                                    <p class="text-gray-500 dark:text-gray-400 text-xs xs:text-sm font-medium">React</p>
                                    <p class="text-gray-900 dark:text-white text-base xs:text-lg font-bold">A Deep Dive into React Hooks</p>
                                    <p class="text-gray-600 dark:text-gray-300 text-xs xs:text-sm font-normal line-clamp-2">Understanding useState, useEffect, and custom hooks with practical examples.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 sm:gap-3 pb-2 sm:pb-3 group">
                                <div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg overflow-hidden">
                                    <div class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-300" data-alt="Wireframes and UI design sketches on a whiteboard." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDiJFs-zUoeO5zdhn9_EDXWdf8FQhIo6f_S25kgjM7fKRcnZyZ-ZvJ_SXVDp11yxBY1lAY1djW-ZfFnDUQIDtKKY07MG24jq6slrhsdaHZeIP8iK6f74Hm1v-Uap71LQmW5-7rnF7-aGmAjWjvC6xQVV_M2tGsaSXJ46lxQQCrd0D1In7DFbdEEhKk3IFbc1EgN0Wbca3WzD4jVEB-2YJg41-VS12oNDsJ_uYR_HYf_huA1AkXnV7c7NiLJ3iNXmc63oCG2VGGvULk");'></div>
                                </div>
                                <div class="flex flex-col gap-1 sm:gap-1.5">
                                    <p class="text-gray-500 dark:text-gray-400 text-xs xs:text-sm font-medium">UI/UX Design</p>
                                    <p class="text-gray-900 dark:text-white text-base xs:text-lg font-bold">Designing for Accessibility</p>
                                    <p class="text-gray-600 dark:text-gray-300 text-xs xs:text-sm font-normal line-clamp-2">Key principles and best practices for creating inclusive user experiences.</p>
                                </div>
                            </div>
                        </div>
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