<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        @php
            header("Location: " . URL::to('/'), true, 302);
            exit();
        @endphp

        @include('footer')
    </body>
</html>
