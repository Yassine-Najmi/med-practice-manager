<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }
    </style>

</head>

<body>
    <div class="container">
        <!-- Utilisez les données de votre consultation ici -->
        <h1>Consultation</h1>
        <p><strong>consultation ID:</strong> {{ $consultation['id'] }}</p>
        <p><strong>nom du Patient:</strong> {{ $consultation['patient_name'] }}</p>
        <p><strong>Patient ID:</strong> {{ $consultation['patient_id'] }}</p>
        <p><strong>Situation:</strong> {{ $consultation['situation'] }}</p>
        <p><strong>Antécédents:</strong> {!! nl2br(e($consultation['antécédents'])) !!}</p>
        <p><strong>Motif:</strong> {{ $consultation['motif'] }}</p>
        <p><strong>Examen Clinique:</strong> {!! nl2br(e($consultation['examen_clinick'])) !!}</p>
        <p><strong>Examen Biologique:</strong> {{ $consultation['examen_biologique'] }}</p>
        <p><strong>Examen Radiologique:</strong> {!! nl2br(e($consultation['examen_radiologique'])) !!}</p>
        <p><strong>Diagnostic:</strong> {{ $consultation['diagnostique'] }}</p>
        <p><strong>Traitement:</strong> {{ $consultation['traitment'] }}</p>
        <p><strong>Date de création:</strong> {{ $consultation['created_at'] }}</p>
        <p><strong>Date de mise à jour:</strong> {{ $consultation['updated_at'] }}</p>
    </div>
</body>

</html>
