
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>API-TI // TP07</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <?php
//    require 'Database.php';
    include 'Database.php';
    // config.ini
    $config = parse_ini_file('../../conf/config.ini', true);
    // connection database
    $testdatadase = new DataForm();
    ?>


    <div>
      <header id="header">
        <img alt="HEIA-FR" src="../img/logo-HEIA-FR.svg">
      </header>
    </div>

    <div id="content">
      <main>
        <nav>
          <ul>
            <li><span>></span><a href="../index.html" class="homebutton"><b>Retour à l'accueil</b></a></li>
          </ul>
        </nav>
        <h1>Année passerelle ingénierie HEIA-FR</h1>
        <section id="introduction">
          <h2><b>Admission</b></h2>
          <p >
            <b>L'informatique ou la chimie vous passionne? L'Internet et ses applications vous fascinent?
              Vous souhaitez travailler dans le domaine de la chimie,
              de l'électronique ou de l'énergie? Les métiers de l'ingénierie sont faits pour vous!<br>
              <br>
              Vous souhaitez étudier à la Haute école d'ingénierie et d'architecture de Fribourg (HEIA-FR),
              cependant, selon les conditions d'admission, il vous manque la pratique professionnelle dans le domaine d'études
              choisi pour être admis-e... Nous avons la solution. Faites donc une année passerelle chez nous!<br>
              <br>
              L'accès aux études HES est facilité après le gymnase, l'ECG ou après toute autre formation requérant une
              année de pratique professionnelle. L'année passerelle HEIA-FR vous offre un accès aux formations Bachelor en chimie,
              en génie électrique, en informatique ou en télécommunications. En une année, vous acquérez les bases techniques et
              professionnelles dans le cadre de cours et de laboratoires à l'école, puis d'un travail pratique en entreprise.<br>
              <br>
              Les formations d'ingénieur-e en chimie, en génie électrique, en informatique et en télécommunications ouvrent
              de nombreuses perspectives professionnelles.<br>
              <br>
              Les titulaires d'un Bachelor de la Haute école d'ingénierie et d'architecture de Fribourg (HEIA-FR) sont r
              econnus pour leurs compétences avérées et accèdent à des emplois passionnants dans leur domaine.<br>
              <br>
              Pour plus de renseignements, le service académique se tient à disposition.<br>
            </b>
          </p>
        </section>

        <section id="main">
            <h1>Formulaire d'inscription</h1>
            <form action="../duchuy.nguyen/form-ctrl.php" method="post" class="columns">

              <label for="first-name" class="labels">Nom</label>
              <input title="Nom" type="text" placeholder="George" id="first-name" name="registration-form[last-name]" class="inputsize" required>
              <label for="last-name">Prénom</label>
              <input title="Prenom" type="text" placeholder="Johnny" id="last-name" name="registration-form[first-name]" class="inputsize" required>
              <label for="email" class="labels">Email</label>
              <input title="Email" type="email" placeholder="johnnygeorge@gmail.com" id="email" name="registration-form[email]" class="inputsize" required>
              <label for="date">Date de naissance</label>
              <input title="Date de naissance" placeholder="jj/mm/aaaa" type="date" id="date" name="registration-form[birth-date]" class="inputsize" required>
              <label id ="sexe_radio" class="labels">Sexe</label>
              <div class="radio_sexe">
                <!-- retrieve information from sex table -->
                  <?php

                  $data = $testdatadase->getSex();

                  // generate inputs and labels
                  foreach ($data as $row) {
                      echo "<input id=\"gender-" . $row['id'] . "\" name=\"registration-form[sex]\"
                  required type=\"radio\" value=\"" . $row['id'] . "\">
                  <label for=\"gender-" . $row['id'] . "\">" .$row['sex']  . "</label>
                  <br>";
                  }

                  ?>

<!--                <div >-->
<!--                  <input type="radio" id="gender" name="registration-form[sex]" value="m" required >-->
<!--                  <label for="gender" class="sexecolor">Homme</label><br>-->
<!--                  <input type="radio" id="sexe" name="registration-form[sex]" value="w">-->
<!--                  <label for="sexe" class="sexecolor">Femme</label>-->
<!--                </div>-->
              </div>

              <label for="etatcivil" class="labels" >Etat civil</label>
              <select type="pointer" id="etatcivil" class="inputsize"  name="registration-form[civil-status]" required >
                <option disabled value=""  selected>Sélectionnez...</option>
<!--                <option value="single">Célibataire</option>-->
<!--                <option value="maried">Marié(e)</option>-->
<!--                <option value="divorced">Divorcé(e)</option>-->
<!--                <option value="separated">Séparé(e)</option>-->
<!--                <option value="widowed">Veuf(ve)</option>-->
                <!-- retrieve information from civil table -->
                  <?php

                  $data = $testdatadase->getCivilStatus();

                  foreach ($data as $row) {
                      echo "<option value=\"" . $row['id'] . "\">". $row['etat_civil_id'] . "</option>";
                  }

                  ?>

              </select>

              <label for="address" class="labels">Adresse (en Suisse)</label>
              <div class="test">
                <input title="Adresse" type="text" placeholder="Avenue de la victoire" id="address" name="registration-form[address][street-address]" class="adresseinput" required>
                <input title="Code postal" type="number" placeholder="1007" id="code_postale" class="codepostale" name="registration-form[address][postal-code]]" required min="1000" max="9999">
                <input title="Ville" type="text" placeholder="Fribourg" id="city" name="registration-form[address][locality]" class="ville" required>
              </div>
              <label for="avsnumber" class="labels">Numéro AVS</label>
              <input title="AVS number" type="text" placeholder="756.XXXX.XXXX.XX" id="avsnumber"
                     name="registration-form[avs-number]" class="inputsize" required pattern="756.[0-9][0-9][0-9][0-9].[0-9][0-9][0-9][0-9].[0-9][0-9]">

              <label for="checkbox" class="labels">Connaissance en informatique</label>
              <div id="checkbox">
<!--                <div>-->
<!--                  <input type="checkbox" id="programmation" name="registration-form[it-knowledge][0]" value="programming">-->
<!--                  <label for="programmation" class="sexecolor">Programmation</label>-->
<!--                </div>-->
<!--                <div>-->
<!--                  <input type="checkbox" id="reseau" name="registration-form[it-knowledge][1]" value="network">-->
<!--                  <label for="reseau" class="sexecolor">Réseau</label>-->
<!--                </div>-->
<!--                <div>-->
<!--                  <input type="checkbox" id="syteme" name="registration-form[it-knowledge][2]" value="system">-->
<!--                  <label for="syteme" class="sexecolor">Système</label>-->
<!--                </div>-->
<!--                <div>-->
<!--                  <input type="checkbox" id="support" name="registration-form[it-knowledge][3]" value="support">-->
<!--                  <label for="support" class="sexecolor">Support</label>-->
<!--                </div>-->
                <!-- retrieve information from it_knowledge table -->
                  <?php

                  $data = $testdatadase->getItKnowledge();

                  foreach ($data as $row) {
                      echo "<input id=\"" . $row['id'] . "\" name=\"registration-form[it-knowledge][]\"
             type=\"checkbox\"
             value=\"" . $row['id'] . "\">
             <label for=\"" . $row['id'] . "\">" . $row['it_knowledge'] . "</label>
             <br>";
                  }

                  ?>

              </div>

              <label for="filiere" class="labels" >Filière envisagée</label>
              <div id="filiere">
<!--                <input type="radio" id="chimie" name="registration-form[study]" value="chemistry" required>-->
<!--                <label for="chimie" class="sexecolor" >Chimie</label><br>-->
<!--                <input type="radio" id="genieelectrique" name="registration-form[study]" value="electrical-engineering">-->
<!--                <label for="genieelectrique" class="sexecolor">Génie électrique</label><br>-->
<!--                <input type="radio" id="informatique" name="registration-form[study]" value="computer-science">-->
<!--                <label for="informatique" class="sexecolor">Informatique</label><br>-->
<!--                <input type="radio" id="telecommunication" name="registration-form[study]" value="telecommunications">-->
<!--                <label for="telecommunication" class="sexecolor">Télécommunications</label>-->
                <!-- retrieve information from study table -->
                  <?php

                  $data = $testdatadase->getStudy();

                  foreach ($data as $row) {
                      echo "<input id=\"" . $row['id'] . "\" name=\"registration-form[study]\" required
                  type=\"radio\" value=\"" . $row['id'] . "\">
                  <label for=\"" . $row['id'] . "\">" .$row['study']  . "</label>
                  <br>";
                  }

                  ?>

              </div>
              <label for="remarque">Remarque</label>
              <textarea id="remarque" placeholder="Écrire quelque chose..." class="remarque" name="registration-form[comment]"></textarea>
              <button type="submit" value="submit">Envoyer</button>
            </form>
        </section>
      </main>
    </div>

    <div id="footer">
      <footer>
        <strong>&lt;&nbsp;/&nbsp;&gt;</strong>
        <span>Année passerelle ingénierie HEIA‑FR</span>
      </footer>
    </div>

  </body>
</html>
