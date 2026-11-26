<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini billetterie</title>
</head>
<body>
    <h1>Mini billetterie</h1>

    <ul>
        @foreach ($shows as $show)
            <li>
                <h2>{{ $show->title }}</h2>
                <p>Salle : {{ $show->venue }}</p>
                <p>Date : {{ $show->date->format('d/m/Y H:i') }}</p>
                <p>Taux de remplissage : {{ $show->fillRate() }}%</p>
            </li>
        @endforeach
    </ul>
</body>
</html>