<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultation</title>
    <style>
        .page-break {
            page-break-after: always;
        }

        .color {
            background-color: red;
        }

        .center {
            text-align: center;
            margin-top: 100px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0;
            right: 0;
            height: 2.4cm;
            color: rgb(0, 0, 0);
            text-align: center;
        }
    </style>
</head>

<body>
    <table style="width:100%">
        <tr>
            <td width="20%" style="text-align:center">
                <p>DR BERRADA Ali</p>
                <p>Médecin Généraliste</p>
            </td>
            <td width="40%">
            </td>
            <td width="30%" style="text-align:center"><br />
                <p>Médecin Généraliste</p><br />
                <p>adresse : 332, bd Brahim Roudani, Casablanca</p>
                <p>الدكتور علي برادة طبيب عام</p>
            </td>
        </tr>
    </table>
    <h2 style="text-align: center">Ordonnance</h2>
    <!-- consultation.blade.php -->
    <p style="text-align: center">Fait à : {{ $consultation->patient_name }} Le :
        {{ $consultation['created_at']->format('d-m-Y') }}
    </p>

    <br />

    <div>
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
    <footer>
        <span> Adresse : 332, bd Brahim Roudani, Casablanca - Tel : 052-225-0907 </span><br></b>
    </footer>
</body>

</html>
