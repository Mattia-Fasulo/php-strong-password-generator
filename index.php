<?php

include __DIR__ . './partials/function.php';



if (isset($_GET['lenght'])) {

    $passwordLenght = $_GET['lenght'];
    $allowDuplicate = $_GET['allow-duplicate'];
    
    $response = generatePassword($passwordLenght, $allowDuplicate);

    
};


include __DIR__ .'./partials/header.php';
?>




    <div class="main">



        <div class="container d-flex flex-column align-items-center">
            <h1 class="text-center">Strong Password Generator</h1>
            <h2 class="text-center">Genera una password sicura</h2>

            <?php if (isset($response)) { ?>
                <div class="col-7">
                    <div class="alert alert-info text-center" role="alert">
                        <?php echo $response; ?>
                    </div>
                </div>

            <?php } ?>

            <form class="w-50" method="get" action="index.php">
                <div class="row mb-3">
                    <label for="passwordLenght" class="col-sm-8 col-form-label">Lunghezza Password :</label>
                    <div class="col-sm-4">
                        <input name="lenght" type="number" class="form-control" id="lenght">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-8 pt-0">Consenti ripetizioni di uno o più caratteri</legend>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="allow-duplicate" id="allow-duplicate" value="1" checked>
                            <label class="form-check-label" for="allow-duplicate">
                                Si
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="allow-duplicate" id="allow-duplicate" value="0">
                            <label class="form-check-label" for="allow-duplicate">
                                No
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <div class="col-sm-4 offset-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Lettere
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 offset-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Numeri
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 offset-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Simboli
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </form>
        </div>


    </div>
</body>

</html>