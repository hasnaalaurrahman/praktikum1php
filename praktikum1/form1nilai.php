<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
  </head>

  <body>
  <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form1nilai.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="">Lesson</label>
                <select name="matkul" class="form-select form-control" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="Web Programming">Web Programming</option>
                    <option value="Database">Database</option>
                    <option value="Statiska">Statiska</option>
                    <option value="PKN">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="nilai_UTS" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="nilai_UAS" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="nilai_tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">
            </form>
            <?php
            if ($_GET) 
            {
                $name = $_GET['nama'];
                $nim = $_GET['nim'];
                $lesson = $_GET['matkul'];
                $UTS_value = $_GET['nilai_UTS'];
                $UAS_value = $_GET['nilai_UAS'];
                $Assign_value = $_GET['nilai_tugas'];
                $total_value = $UTS_value + $UAS_value + $Assign_value;
                $rata_value = $total_value / 3;

                if ($rata_value >= 85){
                    $alpha_value = "A";
                }elseif ($rata_value >= 70){
                    $alpha_value = "B";
                }elseif ($rata_value >= 60){
                    $alpha_value = "C";
                }elseif ($rata_value >= 40){
                    $alpha_value = "D";
                }else {
                    $alpha_value = "E";
                }
            }
            ?>

            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?= @$name ?></li>
                    <li class="list-group-item">Nim : <?= @$nim ?></li>
                    <li class="list-group-item">Lesson: <?= @$lesson ?></li>
                    <li class="list-group-item">UTS Value : <?= @$UTS_value ?></li>
                    <li class="list-group-item">UAS Value : <?= @$UAS_value ?></li>
                    <li class="list-group-item">Assignment Value : <?= @$Assign_value ?></li>
                    <li class="list-group-item">Value Total : <?= @$total_value ?></li>
                    <li class="list-group-item">Value in Alphabet : <?= @$alpha_value ?></li>
                    
                    
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Less than 40 </li>
                    
                    
                </ul>
                </div>
        </div>
        
    </div>

    <?php

    ?>
    
  </body>
</html>