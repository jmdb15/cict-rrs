<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
    tailwind.config = {
        theme: {
            extend: {
            },
        },
        darkMode: 'class',
        variants: {},
        plugins: [],
    }
  </script>

</head>
<body class="bg-white text-black dark:bg-gray-800 dark:text-white">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold">Dark Mode Example</h1>
        <button id="toggleButton" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Toggle Dark Mode
        </button>
    </div>

    <script>
        const toggleButton = document.getElementById('toggleButton');
        const htmlTag = document.documentElement;

        toggleButton.addEventListener('click', function () {
            htmlTag.classList.toggle('dark');
            console.log('clicked')
        });
    </script>
</body>
</html>
