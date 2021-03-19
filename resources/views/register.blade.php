@extends("theme")

@section("contents")

<div class="container">
            <div class="row">
                <div class="col col-12 col-sm-6 col-lg-6">
                    <img height="500px" src="https://www.25karats.com/articles/wp-content/uploads/2015/07/wedding-rings1.jpg"></img>
                </div>
                <div class="col col-12 col-sm-3 col-sm-6 col-lg-6">
                    <table class="table">
                      <h2><center>REGISTER NOW</center></h2>
                        <tr>
                            <td>Bride/Groom Name</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Email Id</td>
                            <td><input type="email" name="email" id="email"></td>
                        </tr>
                        
                        <tr>
                            <td>Gender</td>
                            <td><input type="checkbox" name="Male" id="Male">Male</td>
                            <td><input type="checkbox" name="Female" id="Female">Female</td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Mobile No</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Religion</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>Caste</td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-danger">SUBMIT</button></td>
                        </tr>
                    </table>
                </div>

            
        </div>

        @endsection