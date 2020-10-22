
    @include('header')

        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
        @endif

        <div id="app">
            <movies>
            </movies>
        </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
