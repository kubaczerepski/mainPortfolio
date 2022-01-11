<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Kuba Czerepski - Portfolio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/mainStyles.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <ul class="nav nav-pills justify-content-center p-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/kubaczerepski" target="_blank">Github</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.linkedin.com/in/jakub-czerepski-a9090b212/" target="_blank">Linkedin</a>
            </li>
          </ul>
    </header>
    <section class="container-fluid d-flex justify-content-center flex-column align-items-center p-5" id="welcomeSection">
        <h1>Kuba Czerepski</h1>
        <h2>Front End Developer</h2>
    </section>
    <section class="container-fluid d-flex justify-content-center flex-column align-items-center p-2" id="projectSection">
        <h1>Latest Projects</h1>
        <div class="container-fluid content-row d-flex justify-content-center flex-row flex-fill col-lg-4 align-items-center p-2" id="cardCollector">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="./assets/todo.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">ToDo App</h5>
                        <p class="card-text">ToDo App for your daily task tracking</p>
                        <a href="https://kubaczerepski.github.io/To-Do---Kuba-Czerepski/" target="_blank" class="btn btn-primary">Visit</a>
                        <a href="https://github.com/kubaczerepski/To-Do---Kuba-Czerepski" target="_blank" class="btn btn-primary">Code</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="./assets/Cyber 52 Blog - Official Logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Cyber52 - Blog</h5>
                        <p class="card-text">Cyber 52 Blog Website built with Wordpress</p>
                        <a href="https://blog.cyber52.com/" class="btn btn-primary" target="_blank">Visit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="./assets/weatherlyapp_logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Weather App</h5>
                        <p class="card-text">Weather App with API Connection</p>
                        <a href="https://pogoda.kubaczerepski.pl/" class="btn btn-primary" target="_blank">Visit</a>
                        <a href="https://github.com/kubaczerepski/weatherapp_czerepski" target="_blank" class="btn btn-primary">Code</a>
                        </div>
                    </div>
                </div>
            </div>
                 
        </div>
        <section class="container-fluid d-flex justify-content-center" id="scrollButton">
            <i class="fas fa-angle-down" id="arrow_down"></i>
        </section>
    </section>
    <section class="container-fluid d-flex flex-column align-items-center p-2 h-100" id="aboutMeSection" >
        <h1>About me</h1>
        <h3>.info()</h3>
        <img src="./assets/Humaaans - Sitting.png" class="rounded mx-auto d-block" alt="..." id="aboutPhoto">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Who am I?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>I am a young web developer who will be happy to help you build your image !. One of my passions is Frontend and everything related to it, from concept creation to animation and the website creation process itself. While creating my projects, I try to follow the best practices and constantly improve my skills in every aspect by analyzing my code.</strong>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What I do?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>I specialize in website creation and design. I love to be creative and help people build their presence in the web.</strong>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What languages do i use?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-sass"></i>
                    <i class="fab fa-bootstrap"></i>
                    <i class="fab fa-js"></i>
                </div>
              </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                    Can we work together?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Sure. Let's Work together!. Contact me via email or contact form. Email: contact@kubaczerepski.pl</strong>
                  </div>
                </div>
              </div>
          </div>
          <section class="container-fluid d-flex justify-content-center" id="scrollButtonAbout">
            <i class="fas fa-angle-down" id="arrow_down_about"></i>
        </section>
    </section>
    <section id="contactForm" class="container-fluid d-flex justify-content-center flex-column align-items-center p-2">
      <form action="./php/sendEmail.php" method="POST" id="formBox">
            <h1>Contact Me</h1>
          <div class="form-floating mb-4">
            <input type="text" id="emailTitle" name="emailTitle" class="form-control" placeholder="Topic" />
            <label for="floatingTopic">Topic</label>
          </div>
          <div class="form-floating mb-4">
            <input type="email" id="emailContact" name="emailContact" class="form-control" placeholder="Email"/>
            <label for="floatingEmail">Email</label>
          </div>
          <div class="form-outline mb-4">
            <textarea class="form-control" id="emailText" name="emailText" rows="4" placeholder="Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
      </form>
    </section>
    <footer class="text-center" >
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <section class=" display-flex justify-content-center align-items-center mb-4">
          <a class="btn  btn-floating m-1" href="https://github.com/kubaczerepski" target="_blank" role="button"
          ><i class="fab fa-github"></i></a>
          <a class="btn  btn-floating m-1" href="https://www.freecodecamp.org/kubaczerepski" target="_blank" role="button"
            ><i class="fab fa-free-code-camp"></i></a>
          <a class="btn  btn-floating m-1" href="https://www.linkedin.com/in/jakub-czerepski-a9090b212/" target="_blank" role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>
      </section>
        © 2022 Copyright | 
        Kuba Czerepski
      </div>
      <div id="backToTop">
        <i class="fas fa-arrow-up" id="arrowBack"></i>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/ff12afe838.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        let arrow = document.querySelector("#scrollButton");
        arrow.addEventListener('click', () => {
          window.location = "#aboutMeSection";
        })
        let arrow_about = document.querySelector("#scrollButtonAbout");
        arrow_about.addEventListener('click', () => {
          window.location = "#contactForm";
        })
    </script>
    <script src="./js/topBack.js"></script>
</body>
</html>