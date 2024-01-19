<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facility Entry</title>
    <style>
        body {
            background-color: #4CAF50; /* Green background color */
            color: #fff; /* White text color */
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        h1 {
            margin-bottom: 20px;
        }

        input[type="file"] {
            display: none;
        }

        label {
            display: inline-block;
            background-color: #fff;
            color: #333;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        button {
            background-color: #fff;
            color: #333;
            padding: 10px 15px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        #approvalStatus {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<h1>Welcome to Gillet Wellness</h1>
<p>Scan Using your school ID:</p>

<label for="idCardInput">Choose File</label>
<input type="file" id="idCardInput" accept="image/*">
<button onclick="scanIdCard()">Scan</button>

<div id="approvalStatus"></div>

<script>
    function scanIdCard() {
        // Simulate scanning process (you would need a proper scanning solution)
        // For simplicity, assume the identity card is valid if a file is selected
        const idCardInput = document.getElementById('idCardInput');
        const approvalStatusDiv = document.getElementById('approvalStatus');

        if (idCardInput.files.length > 0) {
            approvalStatusDiv.innerHTML = '<p style="color: #4CAF50;">Approved! You can enter the facility.</p>';
        } else {
            approvalStatusDiv.innerHTML = '<p style="color: #FF5722;">Invalid identity card. Please try again.</p>';
        }
    }
</script>

</body>
</html>
