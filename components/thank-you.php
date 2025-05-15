<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Thank You Page
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&amp;family=Roboto&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .font-montserrat {
            font-family: 'Montserrat', sans-serif;
        }

        /* Grid background lines */
        .grid-background {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            background-image:
                linear-gradient(rgba(255 255 255 / 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255 255 255 / 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* Brush purple top-left */
        .brush-purple {
            position: absolute;
            top: 0;
            left: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle at top left, #7f3fbf88, transparent 70%);
            pointer-events: none;
            z-index: 0;
            mix-blend-mode: screen;
        }

        /* Brush blue bottom-right */
        .brush-blue {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle at bottom right, #3b82f688, transparent 70%);
            pointer-events: none;
            z-index: 0;
            mix-blend-mode: screen;
        }

        /* Spread out icons container */
        .icons-grid {
            position: absolute;
            inset: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(40px, 1fr));
            grid-template-rows: repeat(3, 1fr);
            gap: 40px 60px;
            opacity: 0.1;
            pointer-events: none;
            z-index: 0;
            padding: 3rem 6rem;
            max-width: 100vw;
            box-sizing: border-box;
            align-content: center;
            justify-items: center;
        }
    </style>
</head>

<body class="bg-black text-white min-h-screen flex flex-col relative overflow-hidden">
    <div aria-hidden="true" class="grid-background">
    </div>
    <div aria-hidden="true" class="brush-purple">
    </div>
    <div aria-hidden="true" class="brush-blue">
    </div>
    <main class="flex-grow flex flex-col justify-center items-center px-4 text-center relative z-10 max-w-xl mx-auto">
        <!-- Spread out background icons grid -->
        <div aria-hidden="true" class="icons-grid">
            <img alt="HTML5 icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/82c8049e-8d97-4d62-b708-e18220eb341d.jpg" width="24" />
            <img alt="JavaScript icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/99af3525-667b-475a-0bff-6012bb0ee8c8.jpg" width="24" />
            <img alt="CSS3 icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/e9206eee-438f-4a13-90a4-58fc00185147.jpg" width="24" />
            <img alt="React icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/718647a9-ab06-48e2-f033-bacdebd71f4a.jpg" width="24" />
            <img alt="SVG icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/8e216942-35c1-455d-6553-c063091d3289.jpg" width="24" />
            <img alt="Axios icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/91db8dbe-bf62-4987-aeec-02c6ddc05348.jpg" width="24" />
            <img alt="CSS/SASS icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/45432ff5-8418-4483-8998-b6b0fcae86e5.jpg" width="24" />
            <img alt="Anime.js icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/fd3e1db3-0aa9-4121-1629-14ca4aea2db8.jpg" width="24" />
            <img alt="Velocity.js icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/7470a199-f538-47c4-d97c-40c76c19ebbe.jpg" width="24" />
            <img alt="HTML Canvas icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/ee353118-5a74-4925-e8b4-08b659b2f18e.jpg" width="24" />
            <img alt="CSS Animation icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/929dbbd2-cfd4-4845-4ca7-1823cc9f0adb.jpg" width="24" />
            <img alt="Greensock Animation icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/430b0e24-8d46-433b-288e-7edc055908fb.jpg" width="24" />
            <img alt="Front-end Dev icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/81dd4d4b-7e28-4282-4dee-c6ad85bc796c.jpg" width="24" />
            <img alt="Ho.js icon" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/45715d81-e76a-4a21-27fa-9306909641f6.jpg" width="24" />
        </div>
        <h1 class="font-montserrat text-white text-5xl sm:text-6xl md:text-7xl font-extrabold drop-shadow-[3px_3px_0_rgba(255,255,255,0.9)] leading-none mb-4 select-none">
            Thank you
            <span class="text-white">
                .
            </span>
        </h1>
        <p class="text-white text-base sm:text-lg mb-8 max-w-xl">
            An email has been sent — please review your inbox shortly.
        </p>
        <div class="text-gray-300 text-sm max-w-xs space-y-2 mb-8">
            <p>
                Please wait for a moment for the reply. If the response takes too long, feel free to reach out via:
            </p>
            <p>
                Gmail:
                <a class="underline hover:text-white" href="https://mail.google.com/mail/?view=cm&to=yvoshfrontend@gmail.com" target="_blank">
                    yvoshfrontend@gmail.com
                </a>
            </p>
        </div>
        <a href="../index.php">
            <button class="px-8 py-3 rounded-md font-semibold text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:from-blue-600 hover:via-blue-700 hover:to-blue-800 transition-colors shadow-lg">
                Back to Dashboard
            </button>
        </a>

    </main>
    <footer class="flex justify-center py-6 text-gray-500 text-[10px] select-none z-10">
        @2025 Yvosh Martin All rights reserved
    </footer>
</body>

</html>