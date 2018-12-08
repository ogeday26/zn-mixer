<div id="app">
    @view
</div>

<script src="{{(getenv('PRODUCTION') == 'development') ? 'http://localhost:8080/js/main.js': '#'}}"></script>