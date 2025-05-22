<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img.s/icon3.png">
    <title>Jawhara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css.s/contact.css">
  <link rel="stylesheet" href="./css.s/home.css">
  <link rel="stylesheet" href="./css.s/page.css">
  <link rel="stylesheet" href="./css.s/btn.css">
  <link rel="stylesheet" href="./css.s/fixcard.css">
  <link rel="stylesheet" href="./css.s/stylek.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .card-overlay {
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }
        .card-title {
            margin-bottom: 10px;
            font-size: 24px;
        }
        .card-text {
            font-size: 16px;
        }





    .card-overlay {
        border-radius: 10px;
        padding: 20px;
        text-align: center;
      }
      .card-title {
        margin-bottom: 10px;
        font-size: 24px;
      }
      .card-text {
        font-size: 16px;
      }
      .circle-btn {
        background-color: #007bff;
        border-radius: 50%;
        border: none;
        color: white;
        width: 40px;
        height: 40px;
        cursor: pointer;
      }
      .arrow-icon {
        font-size: 20px;
      }
      .card-img-left img,
      .card-img-right img {
        max-width: 100%; /* Ensure the image takes up the entire space */
        height: auto; /* Maintain aspect ratio */
      }
      
      @media (max-width: 768px) {
        .container-fluid.text-center.mb-5 {
            margin-top: 2em;
        }
  
        .container.mb-5 {
            margin-top: 3em;
        }
  
        /* Adjust padding and margin for smaller screens */
        .p-5 {
            padding: 2rem !important;
        }
        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }
      }
  
      *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-size: 14px;
    }
  li{
    list-style: none;
  }
    </style>
</head>
<body>

<br><br>
<div>
  <div class="container mb-5" id="second-section">
    <div class="row p-3">
        <div class="col-md-8" data-aos="fade-right">
            <p class="lead fs-1 font-weight-bold">
           
Je me suis lancé un défi : Dépoussiérer l'image que l'on peut donner aux sportif. Après 15 ans d'expérience dans le domaine de formation et accompagnement des individus et organisations,
            </p>
            <p class="text-secondary w-75 fs-6">
            j'ai décidé de me lancer dans le domaine sportif qui me tient à cœur. Voir le grand puzzle tout entier.</p>
        </div>
        <div class="col-md-4">
            <img src="https://prod-ne-cdn-media.puregym.com/media/819394/gym-workout-plan-for-gaining-muscle_header.jpg?quality=80"
                class="rounded img-fluid" alt="...">
        </div>
    </div>
</div>

<!-- third section -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-5 p-5" style="background-color: aliceblue;">
            <h1 class="w-100" style="font-size: 3em;">Mindset gagnant : sportifs engagés !</h1>
            <p class="text-secondary fs-5 my-3">Jawhara met toutes les chances de votre côté avec un mindset axé sur l'espoir pour exceller.</p>
            <a href="./contact.php"
                class="btn btn-outline-dark fs-5 fw-3 px-5 py-3 rounded-pill">Contact us <i
                    class="fa-solid fa-envelope"></i></a>
        </div>

        <div class="col-md-7 p-5 bg-dark d-flex flex-column align-items-center">
            <div class="card text-white mb-3 p-5" style="backdrop-filter: blur(6px); background-color: rgba(64, 64, 64, 0.5) ;max-width: 480px; box-shadow: 0px -2px 0px gray;border-radius:6px;">
                <div class="card-titel"><img src="https://t4.ftcdn.net/jpg/04/14/83/07/360_F_414830738_8D0XSvkNnTyoQD1KqiboRwYMhzqAaxmY.jpg"
                        loading="lazy" class="" alt width="20%" style=" border-radius: 50%;"></div>
                <div class="card-body"  data-aos="fade-right">
                    <h2 class="card-title" style="font-style: italic;">Clarté </h2>
                    <p class="card-text fs-5">Les bonnes choses dans le bon ordre au bon moment.</p>
                </div>
            </div>
            <!-- card section -->
            <div class="card text-white mb-3 p-5" style="backdrop-filter: blur(6px); background-color: rgba(64, 64, 64, 0.5) ;max-width: 480px; box-shadow: 0px -2px 0px gray;border-radius:6px;">
                <div class="card-titel"><img src="https://static.vecteezy.com/system/resources/previews/021/842/242/original/location-address-position-icon-in-trendy-style-vector.jpg"
                        loading="lazy" class="" alt width="20%" style=" border-radius: 50%;"></div>
                <div class="card-body" data-aos="fade-right">
                    <h2 class="card-title" style="font-style: italic;">Simplification </h2>
                    <p class="card-text fs-5"> fini les chemins les plus longs, Un schéma simple à votre disposition pour inspirer.</p>
                </div>
            </div>

            <div class="card text-white mb-3 p-5"
                style="backdrop-filter: blur(6px); background-color: rgba(64, 64, 64, 0.5) ;max-width: 480px; box-shadow: 0px -2px 0px gray; border-radius:6px;">
                <div class="card-titel"><img src="https://static.vecteezy.com/system/resources/previews/018/772/817/original/advice-icon-design-free-vector.jpg"
                        loading="lazy" class="" alt width="20%" style=" border-radius: 50%;"></div>
                <div class="card-body" data-aos="fade-right">
                    <h2 class="card-title" style="font-style: italic;">Proximité</h2>
                    <p class="card-text fs-5">En cas de doute et confusion, jawhara à votre côté pour vous soutenir.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
  <div class="row border border-2 py-5 mx-2 mx-md-0 p-md-5 my-5 " style="border-radius: 25px;">
      <div class="col-12 col-md-5 ">
          <div class="card p-4 text-center rounded-pill" style="background-color: rgba(152, 27, 56, .05); border: solid 2px purple; color: purple;">
              <h2>Meilleur équipe 🤝</h2>
          </div>

          <div class="card p-2 text-center rounded-pill text-danger my-3 border-2">
              <h2>+</h2>
          </div>   
          
          <div class="card p-4 text-center rounded-pill text-danger" style="background-color: rgba(254, 100, 67, .05); border: solid 2px tomato;">
              <h2>Mindset gagnant 🛠️</h2>
          </div>

          <div class="card p-2 text-center rounded-pill text-danger my-3 border-2">
              <h2>=</h2>
          </div>  

          <div class="card p-4 text-center rounded-pill text-white bg-primary">
              <h2>🥳 Histoire de succés 🥳</h2>
          </div>
      </div>
      <div class="col-12 col-md-1"></div>
      <!-- ----------content text--------- -->
      <div class="col-12 col-md-6 px-2 mt-4 mt-md-0" >
          <h2 class="text-justify mb-3 mx-2 mx-md-0" data-aos="fade-up">Dans le domaine sportif, il n'y a pas de secrets. Jawhara met à votre disposition une feuille de route simple.</h2>
          <ul>
          <li>Avantages feuille de route:</li>
          <li>Gain de temps</li>
          <li>+ Stratégie claire</li>
          
          <li>+ Responsabilisation</li>
          <li>+ Clarté</li>
          <li>= YOU WIN</li>
          </ul>
          <a href="./contact.php" class="btn btn-outline-dark fs-5 fw-3 px-4 py-2 rounded-pill">Contact us <i class="fa-solid fa-envelope"></i></a>
      </div>
  </div>
</div>

<?php include 'footer.php'; ?>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>
</html>
