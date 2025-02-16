

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="StudentRegCss.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form id="registrationForm" method="post" action="studentReg.php">
            <label for="regName">Name:</label>
            <input type="text" id="regName" name="regName" required>

            <label for="regPhone">Admission No.:</label>
            <input type="text" id="regPhone" name="regAdd" required>

            <label for="regEmail">Email:</label>
            <input type="email" id="regEmail" name="regEmail" required>

            <label for="regPhone">Phone No.:</label>
            <input type="number" id="regPhone" name="regPhone" required>

            <label for="regEmail">SSC Percentage:</label>
            <input type="number" id="regEmail" name="regSsc" required>

            <label for="reg12thmarks">HSC Percentage:</label>
            <input type="number" id="regEmail" name="regHsc" required>

            <label for="regSemsPointer">Pointers for each semester (6 compulsory):</label>
            <input type="number" step="0.01" id="regSem1" name="regSem1" placeholder="Sem 1" required>
            <input type="number" step="0.01" id="regSem2" name="regSem2" placeholder="Sem 2" required>
            <input type="number" step="0.01" id="regSem3" name="regSem3" placeholder="Sem 3" required>
            <input type="number" step="0.01" id="regSem4" name="regSem4" placeholder="Sem 4" required>
            <input type="number" step="0.01" id="regSem5" name="regSem5" placeholder="Sem 5" required>
            <input type="number" step="0.01" id="regSem6" name="regSem6" placeholder="Sem 6" required>
            <div class="kt-options">
                <label>KTs:</label>
                <div class="radio-options">
                    <label><input type="radio" name="kts" value="0" required>No</label>
                    <label><input type="radio" name="kts" value="1" required>1</label>
                    <label><input type="radio" name="kts" value="2" required>2</label>
                    <label><input type="radio" name="kts" value="3" required>3</label>
                    <label><input type="radio" name="kts" value="4" required>4</label>
                    <label><input type="radio" name="kts" value="5" required>5</label>
                </div>
            </div>
            <label for="regCertifications">Certification Details:</label>
            <textarea id="regCertifications" name="regCertifications"></textarea>
            <div class="upload-btn">
                <label for="regCertFiles">Upload Certificates:</label>
                <input type="file" id="regCertFiles" name="regCertFiles" multiple>

                <button type="submit" name="clkbtn" href="../index.html">Register</button>
                <a class="cancel-link" name="clkbtn" href="../index.html">Cancel</a>
        </form>
    </div>
</body>

</html>