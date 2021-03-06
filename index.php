<!DOCTYPE html>
<html>

<head>

    <title>Callback Demo</title>

    <link rel="stylesheet" href="static/css/site.css">

</head>

<body>

    <header>
        <h1>JavaScript Callbacks</h1>

        <h3>Calculation Asynchronized.</h3>
    </header>

    <main>
        <p id="result">Press button to calculate the addition</p>

        <table>
            <tr>
                <td class="literals"><label> First:</label></td>
                <td><input id="first" type="text" maxlength="5" placeholder="Enter a number" /></td>
            </tr>
            <tr>
                <td class="literals"><label>Second:</label></td>
                <td><input id="second" type="text" maxlength="5" placeholder="Enter a number" /></td>
            </tr>
        </table>

        <!-- Dropdown option for the calculation -->
        <select id="cboOperation"></select>
    
        <!-- Button and image for the asynchronized call -->
        <button id="btn">Calculate</button>
        <img id="imgLoader" src="static/images/circles-menu-1.gif">

    </main>

    <footer>

        <hr>
        <h6>JavaScript Calculator</h6>
        <script src='static/js/callback-constant.js'></script>
        <script src='static/js/callback.js'></script>

    </footer>

</body>

</html>