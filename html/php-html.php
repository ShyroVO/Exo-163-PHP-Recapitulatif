<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          // TODO Display the students here, each student inside a new <li> element
            foreach ($students as $truc){
                echo $truc . ", ";
            }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           // TODO list of day
           $day = [1,2,3,4,5,6,7];
           $mois = [1,2,3,4,5,6,7];
           $year = [1,2,3,4,5,6,7];
           foreach ($day as $val){
               echo '<option value='.$val .'>'. $val . '</option>';
           }
           ?>
       </select>
       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           // TODO list of month
           foreach ($mois as $val){
               echo '<option value='.$val .'>'. $val . '</option>';
           }
           ?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           // TODO list of year
           foreach ($year as $val){
               echo '<option value='.$val .'>'. $val . '</option>';
           }
           ?>
       </select>
     </form>
     <hr>
  </body>
</html>
