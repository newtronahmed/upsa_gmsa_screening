<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            margin: 0;
        }

        .patient-info {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 30px;
            display: table;

        }

        .patient-info h2 {
            font-size: 18px;
        }

        .result-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .result-table th,
        .result-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .result-table th {
            background-color: #f2f2f2;
        }

        /* .path_date {
            display: flex;
            justify-content: space-between;
        } */

        .footer {
            text-align: center;
            font-size: 14px;
        }

        .underline {
            text-decoration: underline;
        }

        .padding-4 {
            padding-top: 5px;
            padding-bottom: 10px;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header" style="margin-bottom: 15px">
            <h1 class="heading-1">GHANA MUSLIM STUDENTS ASSOCIATION</h1>
            <h2 class="heading-2">UNIVERSITY OF PROFESSIONAL STUDIES</h2>
            <h4 class="heading-3 underline">GMSA UPSA MEDICAL SCREENING RESULTS SHEET</h4>
        </div>
        <div class="path_date " style="margin: 20px 0;">
            <div style="text-align: left; float: left">Path No: {{$patient->path_no}}</div>
            <div style="text-align: right; float: right;">Date: {{ now() }}</div>
        </div>
        <table class="result-table">
            {{-- <thead>
                <tr>
                    <th>Test</th>
                    <th>Result</th>
                </tr>
            </thead> --}}
            <h3 style="margin-bottom: 10px;">Personal Information</h3>
            <tbody>
                <tr>
                    <td>
                        <p><strong>Name:</strong> {{ $patient->name }}</p>
                        </p>
                    </td>
                    <td>
                        <p><strong>Level:</strong> {{ $patient->level }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Student ID:</strong> {{ $patient->student_id }}</p>
                    </td>
                    <td>
                        <p><strong>Contact:</strong> {{ $patient->contact ?? 'N/A' }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Department:</strong> {{ $patient->department }}</p>
                    </td>
                    <td>
                        <p><strong>Sex:</strong> {{ $patient->sex }}</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3 class="underline"> Clinical Vitals</h3>
        <div class="patient-info">
            <p><strong>Blood Pressure:</strong> {{ $patient->bp ?? "N/A" }}</p>
            <div class="padding-4">
                It measures the force of blood against artery walls, with two values: systolic (pressure when the heart
                beats) and diastolic (pressure when the heart rests).
            </div>
            <p><strong>Weight:</strong> {{ $patient->weight ?? "N/A" }}</p>
            <div class="padding-4">
                Records an individual's body weight in kilograms, a key parameter for assessing overall health and
                nutritional status.
            </div>
            <p><strong>Height:</strong> {{ $patient->height ?? "N/A" }}</p>
            <div class="padding-4">
                Measures an individual's height in feets or meters, used to calculate the Body Mass Index (BMI).
            </div>
            <p><strong>BMI (Body Mass Index):</strong> {{ $patient->bmi ?? "N/A" }}</p>
            <div class="padding-4">
                BMI is a calculation based on weight and height that helps assess whether an individual is underweight,
                normal weight, overweight, or obese
            </div>
        </div>

        <h3 class="underline"> Serological Tests</h3>
        <div class="patient-info">
            <p><strong>HBsAg (Hepatitis B Surface Antigen):</strong> {{ $patient->hepatitis_b ?? "N/A" }}</p>
            <div class="padding-4">
                This test checks for the presence of a viral protein in the blood, indicating a current infection or
                carrier state of hepatitis B
            </div>
            <p><strong>H. Pylori (Helicobacter pylori):</strong> {{ $patient->h_pylori ?? "N/A" }}</p>
            <div class="padding-4">
                This test detects the presence of H. pylori bacteria in the stomach, which can be associated with
                gastric ulcers and other digestive conditions. A positive result may suggest infection.
            </div>
            <p><strong>VDRL (Venereal Disease Research Laboratory):</strong> {{ $patient->vdrl ?? "N/A"}}</p>
            <div class="padding-4">
                Screens for syphilis by detecting antibodies in the blood.
            </div>
        </div>

        <h3 class="underline">Blood Groupings</h3>
        <div class="patient-info">
            <p><strong>Blood Group:</strong> {{ $patient->blood_group ?? "N/A" }}</p>
            <div class="padding-4">
                It identifies an individual's blood type (A, B, AB, or O) and Rh factor (positive or negative), which is
                important for blood transfusions and organ transplants.
            </div>
            <p><strong>Rh typing</strong> {{ $patient->rh_typing ?? "N/A" }}</p>
            <div class="padding-4">
                Rhesus (Rh) typing determines if you have a certain protein called Rh factor (positive) or not (negative).
            </div>
        </div>
        <div>
            <strong class="underline">Notice:</strong>
            <div style="padding: 5px 0px;">
                We encourage you to discuss your health screening results with a healthcare professional for a more
                comprehensive understanding. Remember, taking proactive steps towards your well-being is an essential
                part of a healthy life.
                <br/>
                <br />

                May Allah, the Most Merciful and Compassionate, bless you with good health, well-being, and protection
                from all harm.
                <br/><br />

                Ameen.
            </div>
        </div>

        <!-- Other test results and information can be added similarly -->

        {{-- <div class="footer">
            <p>Generated on {{ now() }}</p>
        </div> --}}
    </div>
</body>

</html>