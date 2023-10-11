<!DOCTYPE html> 

<html lang="en"> 

    <head> @include('partials.head') </head>

    <body>

        <header> @include('partials.header') </header>

        <div class="container mt-5">
            <h1>{{ $title }}</h1>

            <ul>
                @forelse($list_students as $student)

                <li>{{ $student }}</li>

                @empty

                <li>Non ci sono studenti</li>

                @endforelse
            </ul>

        </div>
    </body>

    </html>