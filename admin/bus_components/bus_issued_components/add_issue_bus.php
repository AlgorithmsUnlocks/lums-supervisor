<?php

if(isset($_POST['add_issued'])){

    $bus_name = $_POST['bus_name'];
    $route_number = $_POST['route_number'];
    $start_location = $_POST['start_location'];
    $start_time = $_POST['start_time'];
    $category_status = $_POST['category_status'];

    if(!empty($bus_name) && !empty($route_number) && !empty($start_location) && !empty($start_time)&& !empty($category_status)){

        $query = "INSERT INTO `buses_issued`(`bus_name`, `route_number`, `start_location`, `start_time`, `category_status`) VALUES ('$bus_name','$route_number','$start_location','$start_time','$category_status')";

        $query_run = mysqli_query($connection, $query);


        if($query_run){

            $_SESSION['message'] = "Bus Issued Added Successfully";
            header('Location: issue_bus.php?source=manage_issue_bus');

        }
        else{
            $_SESSION['message_error'] = "Bus Issued is not added";
            header('Location: issue_bus.php?source=manage_issue_bus');
        }

    }else{
        $_SESSION['message_error'] = "Empty Data is not Accepted";
        header('Location: issue_bus.php?source=manage_issue_bus');
    }

}

?>
<?php



?>
<div class="container addBox">
    <div class="row">
        <div class="col-md-8 m-auto">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="add_category_group">
                    <div class="form-group">
                        <label for="loc"> Bus Licence</label>
                        <select name="bus_name" class="form-control">
                            <?php
                                $query = "SELECT * FROM `buses_listed`";
                                $query_run = mysqli_query($connection,$query);
                                while($row = mysqli_fetch_assoc($query_run)){
                                    $bus_licence = $row['bus_licence'];

                                    echo "<option value='{$bus_licence}'>{$bus_licence}</option>";
                                }
                            ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="loc"> Route Number</label>
                        <select name="route_number" class="form-control">
                            <?php
                            $query = "SELECT * FROM `bus_route`";
                            $query_run = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($query_run)){
                                $route_number = $row['route_number'];

                                echo "<option value='{$route_number}'>{$route_number}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="loc"> Start Location</label>
                        <select name="start_location" class="form-control">
                            <option value="campus">Campus</option>
                            <option value="Tilaghor">Tilaghor</option>
                            <option value="Surma Tower">Surma Tower</option>
                            <option value="Lakkatura">Lakkatura</option>
                            <option value="Uposohor">Uposohor</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="loc"> Start Time</label>
                        <input type="datetime-local" name="start_time" class="form-control" placeholder="Start Time">
                    </div>

                    <div class="form-group">
                        <select name="category_status" class="form-control">
                            <option value="active"> Select category Status </option>
                            <option value="active"> Active </option>
                            <option value="deactive"> Deactive </option>
                        </select>
                    </div>


                </div>
                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-primary " name='add_issued'>
                        <span> <i class="fa-solid fa-bookmark"> Add Issues </i></span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>