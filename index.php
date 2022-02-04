<?php

  require("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Kia Sambrook</title>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />
    <link rel="icon" href="images/favicon.ico" />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.0/examples/cover/"
    />

    <link href="https://languages.abranhe.com/logos.css" rel="stylesheet" />

    <!-- Favicons -->
    <link
      rel="icon"
      type="image/png"
      href="images/favicon 2/favicon-16x16.png"
      sizes="16x16"
    />
    <link
      rel="icon"
      type="image/png"
      href="images/favicon 2/favicon-32x32.png"
      sizes="32x32"
    />
    <link
      rel="icon"
      type="image/png"
      href="images/favicon 2/favicon-96x96.png"
      sizes="96x96"
    />
    
    <style>
      .bg-lightb {
        background-color: #a0d2ee;
      }

      .bg-peach {
        background-color: #f7eae0;
      }

      .bg-grey {
        background-color: #ecebeb;
      }

      .hover-zoom:hover {
        transform: scale(1.05);
      }
    </style>
  </head>
  <body class="p-0 m-0">
    <header class="shadow-lg rounded">
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-lightb">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Kia Sambrook</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#project">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Hero banner -->
      <div class="px-4 pt-5 text-center bg-lightb">
        <h2>Hello, I'm...</h2>
        <h1 class="display-4 fw-bold">Kia Sambrook</h1>
        <h4>Business Information Technology Student</h4>
        <h5>at Aberystwyth University</h5>
        <div class="col-lg-6 mx-auto">
          <br />
          <p class="lead mb-4">
            I am an aspiring web developer with a interest in UX design. I am
            graduating July 2022 and open to UK based graduate/junior
            opportunities in the tech industry. If you want to learn more, do
            not hesitate to contact me below!
          </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <a href="#contact"
              ><button
                type="button"
                class="btn bg-peach shadow rounded btn-lg px-4 me-sm-3"
              >
                Contact Me
              </button></a
            >
          </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh">
          <div class="container px-5">
            <img
              src="images/hero-banner-min.jpeg"
              class="img-fluid border rounded-3 shadow-lg mb-4"
              alt="Example image"
              width="700"
              height="500"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </header>

    <!-- about page -->
    <section class="content-section bg-light py-5" id="about">
      <div class="container px-4 px-lg-5 text-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-10">
            <h2>About me</h2>

            <p class="lead mb-5">
              I am Welsh student based in Neath and currently studying my final
              year of BSc Business Information Technology at Aberystwyth
              University. I am really interested in backend web development and
              have spend my freetime developing these skills. My other interests
              include UX design, computer building, and photo editing.
            </p>

            <!-- Skills -->
            <section id="skills" class="mb-5">
              <h4 class="pb-2">My Skills</h4>
              <p class="lead mb-5">
                Listed below are some of my practical skills in web development
                and programming:
              </p>

              <div class="container">
                <div class="row pb-4">
                  <div class="col-sm">
                    <img src="images/HTML.png" alt="HTML5 Logo" class="pb-2" />
                    <p>HTML5</p>
                  </div>
                  <div class="col-sm">
                    <img src="images/css.png" alt="CSS 3 Logo" class="pb-2" />
                    <p>CSS</p>
                  </div>
                  <div class="col-sm">
                    <img
                      src="images/js.png"
                      alt="JavaScript Logo"
                      class="pb-2"
                    />
                    <p>JavaScript</p>
                  </div>
                  <div class="col-sm">
                    <img src="images/php.png" alt="PHP Logo" class="pb-2" />
                    <p>PHP</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm">
                    <img src="images/mysql.png" alt="MySQL Logo" class="pb-2" />
                    <p>MySQL</p>
                  </div>
                  <div class="col">
                    <img
                      src="images/postgres.png"
                      alt="PostgreSQL Logo"
                      class="pb-2"
                      width="128"
                    />
                    <p>PostgreSQL</p>
                  </div>
                  <div class="col">
                    <img src="images/java.png" alt="Java Logo" class="pb-2" />
                    <p>Java</p>
                  </div>
                </div>
              </div>
            </section>

            <!-- Experience -->
            <section id="experiece" class="mb-5">
              <h4 class="pb-2">Work Experience</h4>

              <div class="container">
                <div class="row">
                  <div class="col-sm mx-2 mb-2 p-3 shadow rounded bg-white">
                    <h5>Marketing and Web Development Work Experience</h5>
                    <h5>Admiral Group</h5>
                    <p>August 2021</p>
                    <p>
                      Spent time working with the Optimisation Team within
                      Admiral’s Marketing department, this involved:
                    </p>

                    <ul class="text-left" style="list-style: circle">
                      <li>
                        Creating AB website tests using the web application
                        Optimizely
                      </li>
                      <li>
                        Conducting customer research on Userzoom and analysing
                        the results
                      </li>
                      <li>Writing and analysing design briefs</li>
                      <li>Completing competitor research</li>
                      <li>
                        Meeting with and learning from employees from other
                        departments including web development, data analysis,
                        user experience, and graphic design
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm mx-2 mb-2 p-3 shadow rounded bg-white">
                    <h5>Computer Science Undergraduate Demonstrator</h5>
                    <h5>Aberystwyth University</h5>
                    <p>September 2020 - January 2021</p>
                    <p>
                      Attended undergraduate workshops and practical sessions to
                      assist students with their work and review completed work.
                      The responsibilities included:
                    </p>

                    <ul class="text-left" style="list-style: circle">
                      <li>Reviewing student code in Arduino C</li>
                      <li>
                        Communicating effectively with students to ensure they
                        understood the task
                      </li>
                      <li>
                        Preparing for workshops by reviewing additional lecture
                        material
                      </li>
                      <li>Troubleshooting issues in student's code</li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>

            <!-- Education -->
            <section id="education">
              <h4 class="pb-2">Education</h4>

              <div class="container">
                <div class="row">
                  <div class="col-sm mx-2 mb-2 p-3 shadow rounded bg-white">
                    <h5>BSc Business Information Technology</h5>
                    <h5>Aberystwyth University</h5>
                    <h6>Current Grade: 1st Class</h6>
                    <p>September 2019 - July 2022</p>
                    <p>
                      Business Information Technology is a course with the
                      university's Department of Computer Science which has a
                      focus of business systems and web development. Some
                      notable modules include:
                    </p>

                    <ul class="text-left" style="list-style: circle">
                      <li>Programming with an Object-Orientated Language</li>
                      <li>Information Security</li>
                      <li>Programming for the Web</li>
                      <li>Software Engineering for the Web</li>
                      <li>Modelling Persistent Data</li>
                      <li>Management Information Systems</li>
                    </ul>
                  </div>
                  <div class="col-sm mx-2 mb-2 p-3 shadow rounded bg-white">
                    <h5>Level 3 Information Technology</h5>
                    <h5>NPTC Group, Neath College</h5>
                    <h6>Grade Achieved: Triple Distinction*</h6>
                    <p>September 2017 - July 2019</p>
                    <p>
                      The course gives an introduction to using computers
                      practically and the theory behind of popular technologies.
                      Furthermore, it teaches skills in C#, HTML, CSS, Unity,
                      and the Adobe Creative Suite. Some notable modules
                      include:
                    </p>

                    <ul class="text-left" style="list-style: circle">
                      <li>Event Driven Programming</li>
                      <li>Systems Analysis</li>
                      <li>Website Production</li>
                      <li>Computer Networking</li>
                      <li>Organisational System Security</li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>

    <!-- project page -->
    <section class="content-section bg-white py-5" id="project">
      <div class="container px-4 px-lg-5 text-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-10">
            <h2>My Projects</h2>
            <p class="lead mb-5"></p>

            <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php
                  $projects = $pdo->query('SELECT * FROM projects ORDER BY id DESC')->fetchAll();
                  foreach($projects as $project){

                    if($project['completed'] == 1){
                      $status = "Completed";
                    }
                    else{
                      $status = "In progress";
                    }

                    echo "<div class=\"col\">
                      <div class=\"card h-100 bg-light shadow hover-zoom\">
                        <img
                        src=\"".$project['image_path']." \"
                        class=\"card-img-top border\"
                        alt=\"project homepage\"
                      />

                        <div class=\"card-body\">
                            <h5 class=\"card-title\">".$project['name']."</h5>
                            <h6>Status: ".$status."</h6>
                            <p class=\"card-text\">".$project['short_desc']."
                            </p>

                                <a
                                  href=\"project?project=".$project['file_name']."\"
                                  class=\"btn bg-lightb mb-3\"
                                  >Read More
                                </a>

                                <br>

                                <a
                                  href=\"".$project['url']."\"
                                  target=\"_blank\"
                                  class=\"btn bg-lightb\"
                                  >Visit Website
                                </a>
                                <a
                                  href=\"".$project['git_url']."\"
                                  target=\"_blank\"
                                  class=\"btn bg-lightb\"
                                  >Visit Git Code
                                </a>
                         </div>
                  </div>
                </div>";
                  }
              ?>
          </div>
        </div>
      </div>
    </section>

    <!-- contact page -->
    <section class="content-section bg-light py-5" id="contact">
      <div class="container px-4 px-lg-5 text-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-10">
            <h2>Get in Touch</h2>
            <p class="lead mb-5">
              Feel free to get in touch with any enquiries or further
              information using the form below:
            </p>

            <form class="text-left" method="POST" action="mail.php">
              <div class="mb-3">
                <label for="contact-name" class="form-label">Full name:</label>
                <input
                  type="text"
                  class="form-control"
                  id="contact-name"
                  name="contact-name"
                  placeholder="Your name..."
                  required
                />
              </div>
              <div class="mb-3">
                <label for="contact-email" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="contact-email"
                  name="contact-email"
                  placeholder="Your email..."
                  required
                />
              </div>
              <div class="mb-3">
                <label for="contact-message" class="form-label"
                  >Your message:</label
                >
                <textarea
                  class="form-control"
                  id="contact-message"
                  name="contact-message"
                  placeholder="Enter your message..."
                  rows="3"
                  required
                ></textarea>
              </div>

              <button
                type="submit"
                class="btn btn-secondary btn-lg px-4 me-sm-3"
              >
                Sumbit
              </button>
            </form>

            <p class="lead mb-3 pt-5 pb-0 mb-0">Or find me on social media:</p>

            <!-- Instagram -->
            <a
              href="https://www.instagram.com/kiasambrook/"
              target="_blank"
              style="color: #000"
              ><i class="fab fa-instagram fa-3x px-2"></i
            ></a>

            <a
              href="https://twitter.com/kiasambrookk"
              target="_blank"
              style="color: #000"
              ><i class="fab fa-twitter fa-3x px-2"></i
            ></a>

            <!-- Linkedin -->
            <a
              href="https://www.linkedin.com/in/kia-sambrook-70ab24153/"
              target="_blank"
              style="color: #000"
              ><i class="fab fa-linkedin-in fa-3x px-2"></i
            ></a>

            <!-- Github -->
            <a
              href="https://github.com/kiasambrook"
              target="_blank"
              style="color: #000"
              ><i class="fab fa-github fa-3x px-2"></i
            ></a>
          </div>
        </div>
      </div>
    </section>

      <!-- Copyright -->
      <footer class="text-center text-lg-start bg-light text-muted">
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright: Kia Sambrook
  </div>
              </footer>

    <!-- Bootstrap Javascript tag -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
