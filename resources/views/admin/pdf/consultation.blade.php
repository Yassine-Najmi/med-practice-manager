{{-- <!DOCTYPE html>
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
               Dr. EL MANSOURI Amine
                <p>Médecin Généraliste</p>
                <p>adresse : 116, bd Brahim Roudani, Casablanca</p>
            </td>
            <td width="40%">
            </td>
            <td width="30%" style="text-align:center">
                <p>الدكتورة</p>
                <p>طبيب عام</p>
                <p>116، شارع إبراهيم الروداني، الدار البيضاء</p>
            </td>
        </tr>
    </table>
    <h2 style="text-align: center;">Ordonnance</h2>

    <!-- consultation.blade.php -->
    <p style="text-align: center">Nom : <strong>{{ $consultation->patient_name }}</strong>
    </p>
    <p style="text-align: center">Casablanca, le : <strong>{{ $consultation['created_at']->format('d/m/Y') }}</strong>
    </p>
    <br> <br> <br> <br>

    <div style="text-align: center">
        <p><strong>consultation ID:</strong> {{ $consultation['id'] }}</p>
        <p><strong>nom du Patient:</strong> {{ $consultation['patient_name'] }}</p>
        <p><strong>Patient ID:</strong> {{ $consultation['patient_id'] }}</p>
        <p><strong>Situation:</strong> {{ $consultation['situation'] }}</p>
        <p><strong>Antécédents:</strong> {!! nl2br(e($consultation['antécédents'])) !!}</p>
        <p><strong>Tarif:</strong> {{ $consultation['motif'] }}</p>
        <p><strong>Examen Clinique:</strong> {!! nl2br(e($consultation['examen_clinick'])) !!}</p>
        <p><strong>Examen Biologique:</strong> {{ $consultation['examen_biologique'] }}</p>
        <p><strong>Examen Radiologique:</strong> {!! nl2br(e($consultation['examen_radiologique'])) !!}</p>
        <p><strong>Diagnostic:</strong> {{ $consultation['diagnostique'] }}</p>
        <p><strong>Traitement:</strong> {{ $consultation['traitment'] }}</p>
        <p><strong>Date de création:</strong> {{ $consultation['created_at']->format('d/m/Y H:i') }}</p>
        <p><strong>Date de mise à jour:</strong> {{ $consultation['updated_at']->format('d/m/Y H:i') }}</p>
    </div>
    <footer>
        <span> Adresse : 116, bd Brahim Roudani, Casablanca - Tel : 052-225-6789 </span><br></b>
    </footer>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultation</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            color: #02006c;

        }

        hr {
            width: 90%;
            margin: 0 auto;
            /* Centers the <hr> horizontally */
        }

        .dr-name {
            font-size: 17px;
            font-weight: bold;
        }

        .created-at,
        .patient-name {
            font-size: 18px;
            font-style: italic;
            color: #333;
        }

        .page-body {
            padding: 20px;
            line-height: 1.5;
            text-align: justify;
            color: #333;
            margin: 0 24px;
        }

        .color {
            background-color: red;
        }

        .center {
            text-align: center;
            margin-top: 100px;
        }

        footer {
            position: absolute;
            /* bottom: -32px; */
            bottom: 5px;
            left: 60px;
            right: 60px;
            height: 2.4cm;
            color: #02006c;
            text-align: center;
        }
    </style>
</head>

<body>
    <table style="width:100%">
        <tr>
            <td width="30%" style="text-align:center">
                <p class="dr-name">Dr. EL MANSOURI Amine</p>
                <p>Médecin Généraliste</p>
                <p>adresse : 116, bd Brahim Roudani, Casablanca</p>
            </td>
            <td width="40%">
            </td>
            <td width="30%" style="text-align:center">
                <p class="dr-name">الدكتور أمين المنصوري</p>
                <p>طبيب عام</p>
                <p>116, شارع إبراهيم الروداني، الدار البيضاء</p>
            </td>
        </tr>
    </table>
    <h2 style="text-align: center; margin-top: 50px; margin-bottom: 50px;">Ordonnance</h2>

    <!-- consultation.blade.php -->
    <p style="text-align: center">Casablanca, le ......<strong
            class="created-at">{{ $consultation['created_at']->format('d/m/Y') }}</strong>......
        الدار
        البيضاء في

    </p>
    <p style="text-align: center">Nom complet......<strong
            class="patient-name">{{ $consultation->patient->name }}</strong>......الإسم الكامل
    </p>

    <br><br><br>
    {!! html_entity_decode($consultation->tretement) !!}


    {{-- <div class="page-body">
        <p style="margin-bottom: 80px;"> {{ $consultation['tretement'] }}</p>
        <p style="margin-bottom: 80px;"> <strong>Notes:</strong> {!! nl2br(e($consultation['notes'])) !!}</p>
        <p> <strong>Tarif:</strong> {!! nl2br(e($consultation['motif'])) !!} <strong>MD</strong></p>
    </div> --}}
    <footer>
        <hr>
        <span> شارع إبراهيم الروداني رقم 116 ، الدار البيضاء - الهاتف : 6789-225-052</span><br></b>
        <span> Adresse : 116, bd Brahim Roudani, Casablanca - Tel : 052-225-6789 </span><br></b>
    </footer>

</body>

</html>
