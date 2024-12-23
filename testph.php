
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            /* border: 1px solid red !important; */
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .sercle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin: auto;
        }
        .sercle i {
            position: relative;
            font-size: 15px;
            padding: 1px;
            border-radius: 50%;
        }
        .crclstp2 {
            width: 15px;
            height: 15px;
            margin: auto;
            border-radius: 50%;
        }
        h2 {
            font-size: 25px;
        }
        @media (max-width:600px) {
            h2 {
                font-size: 22px;
            }
       
        }        
        @keyframes progess {
            0% {   rotate: 0deg;   }
            16% {   rotate: 72deg;   }
            32% {   rotate: 144deg;   }
            48% {   rotate: 216deg;   }
            64% {   rotate: 288deg;   }
            100% {   rotate: 360deg;   }
            /* 80% {   rotate: 72deg;   } */
        }
        .serclAnim {
            animation: progess 5s normal infinite ease;
        }
        .inscrBtn {
            background: rgb(0,0,0);
            background: linear-gradient(90deg, rgba(0,0,0,0.9360994397759104) 38%, rgb(63, 62, 62) 90%);
        }
        .PersonHr {
            height: 5px;
            z-index: -2;
        } 
        .OptionInputForm:focus {
            outline: 0;
            border: 0;
        }
        input {
            outline: 0;
            border-radius: 0px !important; 
        }
        .confirmDiv {
            /* width: 100%; */
            /* margin: auto 0!important;     */
            /* width: 400px; */
            width: 95%;
        }
        
</style>
</head>
<body>
<!-- <div class="bg-white  row  "> -->
    <div class=" col-md-6 p-md-3 py-1 container d-flex align-items-center justify-content-around ">
        <div class="PersonHr bg-dark vw-100 position-absolute mb-4 z-n1"></div>

        <div class="text-center  z-3">
            <!-- <div class="p-1 crclstp2 rounded-circle d-flex align-items-center justify-content-center bg-danger"> -->
                <p class="sercle  bg-dark fw-bold rounded-circle text-white  d-flex align-items-center justify-content-center p-0 text-align-center ">
                    <i class="fa-solid fa-spinner bg-primary d-flex serclAnim text-center  text-align-center "></i>
                    </p>
            <!-- </div> -->
            <p class="m-0" >en cours</p>
        </div>

        <div class="text-center">
                <p class="sercle bg-dark  text-white rounded-circle fw-bold d-flex align-items-center justify-content-center p-0 text-align-center">
                    <i class="fa-solid fa-check bg-success d-flex text-center "></i>
                </p>
            <p class="m-0" >vérification</p>
        </div>
    </div>
<!-- </div> -->

<div class="container  d-flex align-items-center justify-content-center p-0 m-0">
                    <div class="confirmDiv row bg-dark text-white p-3 d-flex align-items-center justify-content-center  ">
                        <h3 class="text-center"> Verification de donnes </h3>
                        <div class="row nom">
                            <p class="nomVal">Tets</p>
                        </div>
                        <div class="row nom">
                            <p class="nomVal">Tets</p>
                        </div>
                        <div class="row nom">
                            <p class="nomVal">Tets</p>
                        </div>
                        <div class="row nom">
                            <p class="nomVal">Tets</p>
                        </div>
                        <div class="row">
                            <button class="col-6 fw-bold text-white bg-transparent border-0">retour</button>
                            <button class="col-6 fw-bold btn-success py-1">confirme</button>
                        </div>
                    </div>
                </div>

<div class="container d-flex align-items-center justify-content-center ">
    <div class="col-md-12 d-flex align-items-center justify-content-center ">
        <div class="row p-3 bg-primary d-flex align-items-center justify-content-center">
                <h2 class="text-center my-3 mb-5">Remplissez le formulaire suivant</h2>
            <form action="welcomephp.php" method="GET" class=" row col-md-7">
                <label for="" class="text-align-start pb-2 p-0  text-white fw-bold">Nom complet</label>
                <input  type="text" name="nom_complet" id="input1" class="border-0 p-2 mb-4 mb-md-4 inputsForm" placeholder="Entrez votre nom complet" required>

                <label for="" class="pb-2 p-0 text-capitalize  text-white fw-bold">numéro de telephone</label>
                <input  type="number" name="ntelephone" id="" class="border-0 p-2 mb-3 inputsForm" placeholder="Entrez votre Numéro de téléphone" required>

                <label for="" class="pb-2 p-0   text-white fw-bold">Ville de résidence</label>
                <input type="text" name="ville" id="" class="border-0 p-2 mb-4 inputsForm" placeholder="Entrez votre ville de résidence" required>

                    <label for="selectTypeForm" class="pb-2 p-0 text-white fw-bold">Formation souhaitée <span class="text-dark">choisis votre formation souhaitée</span>
                    <!-- <input type="number" name="" id="" class="border-0 p-2 mb-3" placeholder="choisis votre formation souhaitée"> -->
                    <div class=" m-0 p-2  bg-white d-flex align-items-center row container">
                        <select name="option_formation" id="selectTypeForm"  class="OptionInputForm   p-0 m-0 border-0 bg-transparent " required>
                            <option value="" selected class="11">choisis</option>
                            <option value="op1" class="11">Opt1</option>
                            <option value="op2"  class="21">Opt 2</option>
                            <option value="opt3" class="31">Opt 3</option>
                            <option value="oP4" class="41">Opt 5</option>
                            <option value="op5" class="51">Opt1</option>
                        </select>
                    </div>
                    </label>
                <button class="inscrBtn border-0 py-3 mt-4 text-white my-3 fw-bold fs-5" type="submit"  >Inscrire maintenant</button>
            </form>
        </div>
    </div>
</div>  


<!-- onclick="chekinaWehdakhwya()" -->
<!-- oninput="functionChekInpuVal()"  -->


<script src="registreJsFile.js"></script>
</body>
</html>