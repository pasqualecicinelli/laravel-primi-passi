<!DOCTYPE html> <html lang="en"> <head> @include('partials.head') </head>

<header> @include('partials.header') </header>

    <body>
        <div class="container">
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