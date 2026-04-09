<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        table {
            margin-top: 2rem;
            width: 100%;
            border-collapse: collapse;
            background-color: #0a0a0a;

            color: #ffcc00;

            font-family: 'Courier New', Courier, monospace;

            border: 4px solid #333;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            text-transform: uppercase;

            .negative {
                color: red;
            }
        }


        thead {
            background-color: #1a1a1a;
            border-bottom: 2px solid #444;
        }

        th {
            padding: 15px 10px;
            text-align: left;
            color: #ffffff;

            font-size: 0.9rem;
            letter-spacing: 1px;
            border-right: 1px solid #333;
        }


        td {
            padding: 12px 10px;
            border-bottom: 1px solid #222;
            border-right: 1px solid #222;
            font-weight: bold;
            font-size: 1.1rem;
            text-shadow: 0 0 5px rgba(255, 204, 0, 0.5);

        }


        tbody tr:nth-child(even) {
            background-color: #111;
        }


        tbody tr:hover {
            background-color: #1e1e1e;
            color: #fff;
        }


        td:nth-child(7) {
            color: #ff4444;

        }

        @font-face {}

        tbody tr {
            animation: flicker 0.1s infinite secondary;
        }

        @keyframes flicker {
            0% {
                opacity: 0.99;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.99;
            }
        }
    </style>
</head>

<body>
    <header></header>
    <main>

        <table>
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Codice treno</th>
                    <th>Stazione partenza</th>
                    <th>Stazione arrivo</th>
                    <th>Orario partenza</th>
                    <th>Orario arrivo</th>
                    <th>Ritardo</th>
                    <th>Totale carrozze</th>
                    <th>Stato treno</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->Company }}</td>
                        <td>{{ $train->Code }}</td>
                        <td>{{ $train->Departure_station }}</td>
                        <td>{{ $train->Arrival_station }}</td>
                        <td>{{ $train->Departure_time }}</td>
                        <td>{{ $train->Arrival_time }}</td>
                        <td>{{ $train->Delay }}"</td>
                        <td>{{ $train->Total_coaches }}</td>
                        <td class="{{ $train->Status != 0 ? 'negative' : null }}">
                            {{ $train->Status == 0 ? 'ATTIVO' : 'SOPPRESSO' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </main>
    <footer></footer>

</body>

</html>
