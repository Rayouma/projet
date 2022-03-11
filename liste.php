<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Liste utilisateurs</title>
<style>
body{width:50%;
margin:auto;}
table{
    border-collapse:collapse;
    margin:25px 0;
    padding:5px;
    font-size:0.9em;
    font-family:sans-serif;
    box-shadow:0 0 20px rgba(0,0,0,0.15);
       
}
th,td{
    padding :10px;
    text-align:center;

}
thead{padding:30px;
}
tbody tr{border-bottom:1px solid #dddddd;}
thead tr  , tfoot tr{background-color:#009879;
color: #ffffff;
text-align: center;}
tbody tr.active-row{ font-weight:bold;
color:#009879;}
tbody tr:nth-of-type(even)
{ background-color:#f3f3f3;}
input[type="submit"]
{background-color:#4caf50;
border:none;
border-radius:3px;
color:white;
padding:6px;
text-align:center;
font-weight:bold;
margin:1.9;}

</style>
</head>
<body>
<h1>Liste des utilisateurs</h1>
<table>
    <thead>
<tr>
    <th>Identifiant</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Téléphone</th>
    <th>Email</th>
    <th>Sexe</th>
    <th>Action</th>
</tr>
</thead>
<?php
include "cnx.php";
$req=mysqli_query($link,"SELECT * FROM user");
while($res=mysqli_fetch_array($req))
{
?>
<tbody>
<tr>
    <td><?php  echo $res["id"] ; ?></td>
    <td><?php  echo $res["nom"] ; ?></td>
    <td><?php  echo $res["prénom"] ; ?></td>
    <td><?php  echo $res["tel"] ; ?></td>
    <td><?php  echo $res["emial"] ; ?></td>
    <td><?php  echo $res["sexe"] ; ?></td>
    <td><form action="detail.php" method="POST">
        <input type ="hidden" value="<?php echo $res["id"] ?>"/>
        <input type="submit" value="Détail"/>
  </form>   </td>
</tr>
</tbody>
<?php }?>
<tfoot>
    <tr><td colspan="7">
        Liste des utilisateurs inscfrits
    </td></tr>
</tfoot>
</table>

</body>




</html>
