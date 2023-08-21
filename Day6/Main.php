<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>


    <div class="container mt-4">
        <div class="row justify-content-center mt-1">
            <div class="col-sm-6 mt-3">
                <div class="card mt-5">
                <div class="card-body">
                <h1 class="text-center">Crud Operations</h1>
                    <form action="Oparetion" method="POST">
                        <div class="form-group mt-3">
                              <!-- <label for="exampleFormControlInput1" class="form-label">Student_ID</label> -->
                              <input type="text" class="form-control" id="" name="Student_ID" placeholder="Enter student id" >

                        </div>

                        <div class="form-group mt-3">
                              <!-- <label for="exampleFormControlInput1" class="form-label">Student_Class</label> -->
                              <input type="text" class="form-control" id="" name="Student_Class" placeholder="Enter student class" >
                        </div>
                        
                        <div class="form-group mt-3">
                              <!-- <label for="exampleFormControlInput1" class="form-label">Student_Name</label> -->
                              <input type="text" class="form-control" id="" name="Student_Name" placeholder="Enter student name" >
                        </div>
                      
                     
                        <button  class="btn btn-success btn-white mt-3 px-3 py-2  text-center " type="submit" name="insert">Submit</button>
                        <button  class="btn btn-warning text-white mt-3 px-3 py-2  text-center " type="submit" name="update">Update</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>