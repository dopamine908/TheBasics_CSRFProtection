<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="{{ asset('/') }}js/ajax_csrf.js"></script>
</head>

<div>
    <input type="text" id="input_value" name="input_value" required>
    <button onclick="ajax_csrf()">submit</button>
</div>

</html>