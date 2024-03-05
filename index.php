<?php

include "globalVar.php"

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <?php include "globalStyle.php"; ?>
</head>

<body>
    <header>
        <nav>
            <img src="asset/icon/hamburger.svg" alt="" width="50" class="hover-animation" />
            <ul>
                <?php include "components/navbar.php" ?>
                <input id="toggle" class="toggle rotate-in-2-cw" type="checkbox" checked />
            </ul>
        </nav>
        <nav>
            <ul>
                <?php include "components/navbar.php" ?>
                <input id="toggle-btn" class="toggle rotate-in-2-cw" type="checkbox" checked />
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero-section" id="home">
            <div class="cta">
                <h1>Hello I'm</h1>
                <h1 class="name"><?= $name ?></h1>
                <p>Informatic student at UPN Vetrean Jawa Timur.<br />Let me introduce my self from this portofolio</p>
                <div>
                    <button class="contact hover-animation shadow"><a href="mailto:iqbal.is415@gmail.com">Contact Me</a></button>
                    <a href="cv.php">Detail CV</a>
                </div>
                <div class="social-media">
                    <a href="https://www.linkedin.com/in/iqbal-alayyubi-3127b6234" target="_blank" class="hover-animation"><img src="asset/icon/linkedin.svg" alt="" /></a>

                    <a href="https://github.com/iqbalalayubbi/" target="_blank" class="hover-animation">
                        <img src="asset/icon/github.svg" alt="" />
                    </a>
                </div>
            </div>
            <div class="picture">
                <img src="asset/foto-iqbal.png" alt="" />
            </div>
            <div class="bg-hero"></div>
        </section>
        <section class="skill-section main-content" id="skill">
            <h1 class="title-section hover-animation hover-animation">Skill</h1>
            <nav class="hide-menu">
                <ul>
                    <?php include "components/navbar.php" ?>
                </ul>
            </nav>
            <div class="container">
                <?php foreach ($allSkill as $skill) : ?>
                    <div class="main-card">
                        <h1><?= $skill["title"] ?></h1>
                        <div class="cards">
                            <?php foreach ($skill["skills"] as $skill) : ?>
                                <div class="card hover-animation shadow">
                                    <img src="asset/icon/<?= $skill['image'] ?>" alt="" />
                                    <span><?= $skill["name"] ?></span>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="bg-hero"></div>
        </section>
        <section class="academic-section main-content" id="academic">
            <h1 class="title-section hover-animation">Academic</h1>
            <nav class="hide-menu" style="top: 10%;">
                <ul>
                    <?php include "components/navbar.php" ?>
                </ul>
            </nav>
            <div class="training">
                <h1>Training</h1>
                <div class="cards">
                    <?php foreach ($trainings as $training) : ?>
                        <div class="card hover-animation shadow">
                            <h1><?= $training["title"] ?></h1>
                            <div>
                                <img src="asset/icon/dicoding.jpg" alt="" />
                                <a href="<?= $training['link'] ?>" target="_blank">View</a>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="study">
                <h1>Study</h1>
                <div class="option-view">
                    <input type="checkbox" id="switch-table" checked /><label for="switch-table">Toggle</label>
                </div>
                <div class="timeline">
                    <table cellspacing="0" align="center">
                        <thead>
                            <tr>
                                <th>School</th>
                                <th>Major</th>
                                <th>Year</th>
                                <th>Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($schools as $school) : ?>
                                <tr data-link="<?= $school['link'] ?>">
                                    <td><?= $school["name"] ?></td>
                                    <td><?= $school["major"] ?></td>
                                    <td><?= $school["year"] ?></td>
                                    <td><?= $school["location"] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <?php foreach ($schools as $school) : ?>
                        <div class="school">
                            <a href="<?= $school['link'] ?>" target="_blank" class="hover-animation">
                                <div class="circle"></div>
                            </a>
                            <div class="school-info">
                                <h1><?= $school["name"] ?></h1>
                                <h3><?= $school["major"] ?></h3>
                                <h5><?= $school["year"] ?></h5>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="bg-hero"></div>
        </section>
        <section class="project-section main-content" id="project">
            <h1 class="title-section hover-animation">Project</h1>
            <nav class="hide-menu">
                <ul>
                    <?php include "components/navbar.php" ?>
                </ul>
            </nav>
            <div class="cards">
                <?php foreach ($projects as $project) : ?>
                    <div class="card hover-animation shadow">
                        <img src="asset/<?= $project['image'] ?>" alt="" />
                        <div class="content">
                            <h1><?= $project["title"] ?></h1>
                            <h3>Description</h3>
                            <p><?= $project["desc"] ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="bg-hero"></div>
        </section>
        <section class="competition-section main-content">
            <h1 class="title-section hover-animation">Competition</h1>
            <div class="cards">
                <?php foreach ($competitions as $competition) : ?>
                    <div class="card hover-animation shadow">
                        <img src="asset/icon/<?= $competition['icon'] ?>" alt="" />
                        <h1><?= $competition["title"] ?>
                        </h1>
                        <p><?= $competition["desc"] ?></p>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="bg-hero"></div>
        </section>
        <footer>
            <h1>Iqbal Al-Ayyubi</h1>
            <div class="menu">
                <h3>Resources</h3>
                <div class="sub-menu">
                    <span><a class="hover-animation" href="https://www.flaticon.com/" target="_blank">Flaticon</a></span>
                    <span><a class="hover-animation" href="https://icon-sets.iconify.design/" target="_blank">Iconify</a></span>
                </div>
            </div>
            <div class="menu">
                <h3>Menu</h3>
                <div class="sub-menu">
                    <?php foreach ($menus as $menu) : ?>
                        <span><a class="hover-animation" href="#<?= strtolower($menu) ?>"><?= $menu ?></a></span>
                    <?php endforeach ?>
                </div>
            </div>
        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>