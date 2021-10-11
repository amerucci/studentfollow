<?php
//$title="Détail de l'article".$post['title']."";
ob_start();



?>

<div class="col-12 col-md-8 m-0 flex-wrap">






  <p>Tapez quelque chose dans le champ de saisie pour rechercher dans le tableau les prénoms, noms de famille ou e-mails : </p>  
  <input class="form-control" id="myInput" type="text" placeholder="Rechercher...">
  <br>
  <div class="table-responsive">
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>Pseudo</th>
        <th>Mot de passe</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>E-mail</th>
        <th>Actions</th>
        
      </tr>
    </thead>
    <tbody id="myTable">

    <?php foreach($alluser as $user)
        {
            echo "
            <tr>
            <td>".$user['login']."</td>
            <td></td>
            <td></td>
            <td>".$user['rule_profil']."</td>
            <td>".$user['email_profil']."</td>
            <td> <a href='update/".$user['id_profil']."'>Modifier</a> <a href='delete/".$user['id_profil']."'>Supprimer</a></td>
            
            </tr>
            
            
            ";
        }
        ?>
    </tbody>
  </table>

  
 
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


</div>


<?php
//$metaDesc = $post['title'].' : '.$post['content'];
$userList =  ob_get_clean();


?>