<?php 
include "./connection.php";
$searchData= $_POST['inputText'];
$query="SELECT * FROM `userdetails` WHERE mobile LIKE '%$searchData' OR  mobile LIKE '$searchData%' OR mobile LIKE '%$searchData%' OR mobile='$searchData'";
$run = mysqli_query($conn,$query);
if(mysqli_num_rows($run)>0){
    $html='';
    while($data=mysqli_fetch_assoc($run)){
      echo $html.='<tr>
      <th scope="row">'.$data["id"].'</th>
      <td>'.$data['name'] .'</td>
      <td>'.$data['mobile'] .'</td>
      <td>'.$data['adhar_Number'] .'</td>
      <td>'.$data['Dr.exp'] .'</td>
      
      <td>'. $data['address'] .'</td>
      <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          View
        </button></td>
    </tr>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">'. $data['name'] .'</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<img src=includes/docs_Images/'.$data['adhar_front'].' alt="adhar front" class="img-fluid mt-1" style=width: 500px; height: 250px;">
<img src=includes/docs_Images/'.$data['adhar_back'].' class="img-fluid mt-1" style="width: 500px; height: 250px;">
<img src=includes/docs_Images/'.$data['driving_img'].'  alt="adhar front" class="img-fluid mt-1" style="width: 500px; height: 250px;">
  

</div>

</div>
</div>
</div>';


    }
    

    
}

?>