<!DOCTYPE html>
<html lang="en">

<head> @include('partials.head') </head>


<body>

    <header> @include('partials.header') </header>
    
    <div class="container mt-5">
        <ul class="d-flex"> @forelse ($prints as $print)

            <li class="list-group"> 
                <h4>{{ $print }}</h4> 
            </li>

            @empty

            <li class="list-group">Non c'è niente da stampare</li>

            @endforelse

        </ul>

    </div>

</body>

</html>