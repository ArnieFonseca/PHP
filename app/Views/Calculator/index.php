<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="public/css/site.css">
    <link rel="icon" type="image/png" href="public/favicon.ico">
</head>
<body>

    <div id="container">

        <header>
            <h1>JavaScript Callbacks using AJAX with PHP</h1>
    
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
    
            <!-- Dropdown fill out from the Model-->
            <select id="cboOperation">
                <?php  foreach ($operations as $operation) { ?>
    
                       <option value="<?= $operation->oper?>"><?= $operation->description?></option> 
                    
                <?php } ?>     
            </select>
        
            <!-- Button and image for the asynchronized call -->
            <button id="btn">Calculate</button>
            <img id="imgLoader" src="public/images/giphy.gif">
    
        </main>
    
        <footer>
    
            <hr>
            <script src='public/js/callback-constant.js'></script>
            <script src='public/js/index.js'></script>
            <h6>JavaScript Calculator</h6>
            <h6>Powered by Apache2, PHP with CodeIgniter 4.x Framework in <strong><?= ENVIRONMENT  ?></strong> Environment</h6>
        </footer>

    </div>
 
</body>
</html>