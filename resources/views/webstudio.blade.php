<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webstudio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-layout>
        <x-navbar></x-navbar>
        <x-header></x-header>
        <x-content></x-content>
        <x-contact></x-contact>
        <x-footer></x-footer>
    </x-layout>
</body>

</html>
