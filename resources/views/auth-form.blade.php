<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    @livewireStyles
    <style>
        .custom-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); 
        }
        .btn:hover{
            background-color: rgba(0, 91, 134, 0.88);
        }
        
        .custom-input {
            border: 2px solid rgba(24, 88, 120, 1);
        }
        .custom-input:focus {
            border-color: rgba(24, 88, 120, 1); 
            box-shadow: none; 
        }
        .custom-button {
            background-color: white;
            color: black;
            align-items: center; 
        }

        .custom-bg-primary{
            background-color:rgba(0, 91, 134, 0.88)
        }
        .custom-button:hover {
            background-color: rgba(0, 91, 134, 0.88); 
            color: white; 
        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body>
    @livewire('auth-form')

    @livewireScripts
    <script>
        function changeUrl(url) {
            history.pushState(null, '', url);
        }
    </script>
    
    
</body>
</html>