<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .w-5 {
            display: none;
        }

        .center {
            display: flex;
            justify-content: center;
        }

    </style>
</head>

<body>
    @include('header')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Companies</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Web</th>
                    <th scope="col">Address</th>
                    <th scope="col">Code</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Category id</th>
                    <th scope="col">trainers</th>
                </tr>
            </thead>
            @foreach ($companies as $company)
                <tbody>
                    <tr>
                        <th scope="row">{!! $company->companies_id !!}</th>
                        <td>{!! $company->company_name !!}</td>
                        <td>{!! $company->company_web !!}</td>
                        <td>{!! $company->company_address !!}</td>
                        <td>{!! $company->company_code !!}</td>
                        <td>{!! $company->company_phone !!}</td>
                        <td>{!! $company->category_id !!}</td>
                        <td>{!! $company->trainers['trainers_name'] !!}</td>
                    </tr>
                </tbody>
            @endforeach

        </table>
        <div class="center">
            {{ $companies->links() }}
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        const searchFocus = document.getElementById('search-focus');
        const keys = [{
                keyCode: 'AltLeft',
                isTriggered: false
            },
            {
                keyCode: 'ControlLeft',
                isTriggered: false
            },
        ];

        window.addEventListener('keydown', (e) => {
            keys.forEach((obj) => {
                if (obj.keyCode === e.code) {
                    obj.isTriggered = true;
                }
            });

            const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

            if (shortcutTriggered) {
                searchFocus.focus();
            }
        });

        window.addEventListener('keyup', (e) => {
            keys.forEach((obj) => {
                if (obj.keyCode === e.code) {
                    obj.isTriggered = false;
                }
            });
        });

    </script>
</body>

</html>
