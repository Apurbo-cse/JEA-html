@include('layouts.frontend.header')

<!--navber-->
@include('layouts.frontend.navber')
<!--navber-->

<div class="container" style="margin-top: 100px;">

<div class='col-lg-12 col-lg-offset-4'>

                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p> Please fill up this form.</p>
                    <h4> Are You Engineer / Engineering Students ? So you can join us.</h4>
                </div>
    <form method="POST" action="3" accept-charset="UTF-8">

        <div class="row form-group">
            <div class="col-md-1"><label for="course_id">Qualification<span style="color: red;">*</span></label>
            </div>
            <div class="col-md-3">
                <select name="course_id" id="" class="form-control">
                    <option value="1">Select</option>
                    <option value="1">MSc in Engineering / MBA</option>
                    <option value="1">BSc in Engineering</option>
                    <option value="1">BSc+Diploma in Engineering</option>
                    <option value="1">Diploma in Engineering</option>
                </select>
            </div>
            <div class="col-md-1"><label for="admission_date">Subject <span style="color: red;">*</span></label>
            </div>
            <div class="col-md-4"><input class="form-control" name="text" type="text" placeholder="Computer Science & Engineering"></div>
            <div class="col-md-1"><label for="admission_date">Course <span style="color: red;">*</span></label>
            </div>
            <div class="col-md-2">
                <select name="course_id" id="" class="form-control">
                    <option value="1">Select</option>
                    <option value="1">Complete</option>
                    <option value="1">Running</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-2"><label for="gender">Gender <span style="color: red;">*</span></label></div>
            <div class="col-md-4"> <select class="form-control" id="gender" name="gender">
                    <option selected="selected" value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select></div>
            <div class="col-md-2"><label for="date_of_birth">Date Of Birth <span
                        style="color: red;">*</span></label></div>
            <div class="col-md-4"><input class="form-control" name="date_of_birth" type="date" value=""
                    id="date_of_birth"></div>
        </div>

        <div class="row form-group">
            <div class="col-md-2"><label for="first_name">Name </span><span style="color: red;">*</span></label>
            </div>
            <div class="col-md-4"><input class="form-control" required name="first_name" type="text" value=""
                    id="first_name"></div>
            <div class="col-md-2"><label for="cell_phone">Cell Phone <span style="color: red;">*</span></label>
            </div>
            <div class="col-md-4"><input class="form-control" required name="cell_phone" type="text" value=""
                    id="cell_phone"></div>
        </div>

        <div class="row form-group">
            <div class="col-md-2"><label for="father_name">Father&#039;s Name </label></div>
            <div class="col-md-4"><input class="form-control" name="father_name" type="text" value=""
                    id="father_name"></div>
            <div class="col-md-2"><label for="mother_name">Mother&#039;s Name </label></div>
            <div class="col-md-4"><input class="form-control" name="mother_name" type="text" value=""
                    id="mother_name"></div>
        </div>

        <div class="row form-group">
            <div class="col-md-2"><label for="nid_no">NID No</span> </label></div>
            <div class="col-md-4"><input class="form-control" name="nid_no" type="text" value="" id="nid_no">
            </div>
            <div class="col-md-2"><label for="zip_code">Religion<span style="color: red;">*</span> </label></div>
            <div class="col-md-4">
                <select name="course_id" id="" class="form-control">
                    <option value="1"></option>
                    <option value="1">Islam</option>
                    <option value="1">Hindusim</option>
                    <option value="1">Christianity</option>
                    <option value="1">Buddhism</option>
                </select>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-2"><label for="present_address">Permanent Address<span
                style="color: red;">*</span> </label></div>
            <div class="col-md-4"> <input class="form-control" rows="2" cols="40" name="present_address"
                    type="text" value="" id="present_address"></div>
            <div class="col-md-2"><label for="permanent_address">Present Address<span
                        style="color: red;">*</span></label></div>
            <div class="col-md-4"> <input class="form-control" rows="2" cols="40" name="permanent_address"
                    type="text" value="" id="permanent_address"></div>
        </div>

        <div class="row form-group">
            <div class="col-md-2"><label for="nationality">Facbook Link <span
                        style="color: red;">*</span></label></div>
            <div class="col-md-4"><input class="form-control" name="nationality" type="text" value=""
                    id="nationality">
            </div>
            <div class="col-md-2"><label for="home_telephone">Linkedin Link</label></div>
            <div class="col-md-4"><input class="form-control" name="home_telephone" type="text" value=""
                    id="home_telephone"></div>


        </div>

        <div class="row form-group">
           

                    <div class="col-md-2"><label for="blood_group">Blood Group <span
                        style="color: red;">*</span></label></div>
            <div class="col-md-4"><select class="form-control" id="blood_group" name="blood_group">
                    <option value="A+"></option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            <div class="col-md-2"><label for="photo">Fromal Photo<span style="color: red;">*</span></label></div>
            <div class="col-md-4">
                <span class=" btn-default btn-file"><input class=" btn-default btn-file" name="photo"
                        type="file" id="photo" style="
                                                    font-size: 14px;
                                                    font-weight: 600;
                                                    letter-spacing: 1px;
                                                    color: #ffffff;
                                                    background: #EF233C;
                                                    border: 2px solid transparent;
                                                    border-radius: 0;
                                                    box-shadow: inset 0 0 0 50px #ef233c;
                                                    transition: ease-out 0.3s;
                                                    -webkit-transition: ease-out 0.3s;
                                                    -moz-transition: ease-out 0.3s;
                                                ">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2"><label for="course_id"> What job do you do?<span style="color: red;">*</span></label>
            </div>
            <div class="col-md-2">
                <select name="course_id" id="" class="form-control">
                    <option value="1">Select</option>
                    <option value="1">Govt</option>
                    <option value="1">Company</option>
                    <option value="1">Project Base</option>
                    <option value="1">Entrepreneur</option>
                    <option value="1">Not Yet</option>
                </select>
            </div>
            <div class="col-md-2"><label for="email">Digination</label></div>
            <div class="col-md-2"><input class="form-control" name="text" type="text" value="" id="email">
            </div>
                    <div class="col-md-2"><label for="email">
                        Workplace</label></div>
                    <div class="col-md-2"><input class="form-control" name="text" type="text" value="" id="email">
                    </div>
        </div>
        <div class="row form-group">
            <div class="col-md-2"><label for="note">Email<span style="color: red;">*</span></label></div>
            <div class="col-md-4"> <input class="form-control" rows="2" cols="40" name="email" type="email"
                    value="" id="note"></div>
            
                    <div class="col-md-2"><label for="email">password<span style="color: red;">*</span></label></div>
                    <div class="col-md-4"><input class="form-control" name="password" type="password" value="" id="email">
                    </div>
        </div>

        <div class="row form-group">
            <div class="col-md-2"><label for="education">Education <span style="color: red;">*</span> </label>
            </div>
            
            <style>
            table,th {
            border: 1px solid black;
            border-collapse: collapse;
            }
            th{
                text-align:center;
            }
            label{
                font-size:15px;
            }
            .btns {
    padding: 3px 16px;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #ffffff;
    border: 2px solid transparent;
    border-radius: 0;
    transition: ease-out 0.3s;
    -webkit-transition: ease-out 0.3s;
    -moz-transition: ease-out 0.3s;
}
.btnss {
    padding: 3px 16px;
    font-size: 14px;
    letter-spacing: 1px;
    color: #ffffff;
    border: 2px solid transparent;
    border-radius: 0;
    transition: ease-out 0.3s;
    -webkit-transition: ease-out 0.3s;
    -moz-transition: ease-out 0.3s;
}
            </style>
           <table>

            <tr>
                <th><label for="note">Education</label></th>
                <th><label for="note">Subject</label></th>
                <th><label for="note">Institute/University</label></th>
            </tr>

            <tr>
                <td style="
                border: 1px solid black;
                border-collapse: collapse;padding-left:3px;padding-right:3px;"><label for="">HSC/Diploma</label></td>
                <td><input class="form-control" name="text" type="text" value=""></td>
                <td><input class="form-control" name="text" type="text" value=""></td>
            </tr>

            <tr>
                <td style="
                border: 1px solid black;
                border-collapse: collapse;padding-left:3px;padding-right:3px;"><label for="">BSc</label></td>
                <td><input class="form-control" name="text" type="text" value=""></td>
                <td><input class="form-control" name="text" type="text" value=""></td>
            </tr>
           
            <tr>
                <td style="
                border: 1px solid black;
                border-collapse: collapse;padding-left:3px;padding-right:3px;"><label for="">MSc/MBA</label></td>
                <td><input class="form-control" name="text" type="text" value=""></td>
                <td><input class="form-control" name="text" type="text" value=""></td>
            </tr>

           </table>
        </div>

        <div class="row form-group">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <input class="btns btn-warning" type="reset" value="Clear">
                <input class="btnss btn-success" type="submit" value="Save">
            </div>
        </div>

    </form>

</div>

</div>


<!--footer-->
@include('layouts.frontend.footer')
    <!--footer-->
 
   <!--script-->
   @include('layouts.frontend.script')
