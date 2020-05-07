
 <?php

         if(isset($_POST['submit']))
         {
            date_default_timezone_set('Asia/Calcutta');
            $odate=date("F d, Y ");
            $otime=date("h:i:s a");
            $scname=$_POST['scname'];
            $oclass=$_POST['oclass'];
            $ob=$_POST['obooks'];
            $obooks=implode(',',$ob);
            $oname=$_POST['oname'];
            $omobile=$_POST['omobile'];
            $oadrs=$_POST['oadrs'];


            $con=mysqli_connect('localhost','root','','qamar','3308');
            $qry="INSERT INTO corder(scname,oclass,obooks,oname,omobile,oadrs,otime,odate) VALUES ('$scname','$oclass','$obooks','$oname','$omobile','$oadrs','$otime','$odate')";
            $res=mysqli_query($con,$qry);
            if($res)
            {
              header("location:order.php");
            }
            else {
              die("failed");
            }

         }



  ?>


    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Qamar Book Store</title>

          <link rel="stylesheet" href="css/styles.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      </head>
      <body>


        <div class="jumbotron jumbotron-fluid">
       <div class="container-sm">



         <h1 class="display-4">Qamar Book Store</h1>
         <h3 >Online Booking your Orders!</h3>
         <p class="lead">School,College Books , copies., Etc.</p>


          <!-- form for submission -->
         <div class="container-sm border border-dark col">

           <form class="field" method="post" action="">
             <fieldset >
                 <legend>Enter your book information Here!</legend>

                    <div class="form-group">
                         <label for="">School Name</label>
                         <input type="text" class="form-control col-md-4" name="scname" value="" required>
                    </div>
                    <div class="form-group">
                      <label for="inputClass">Class</label>
                                <select id="inputClass" class="form-control col-md-4" name="oclass" required>
                                <option selected disabled>Choose Your Class</option>
                                <option value="pre_nursery">Pre-Nursery</option>
                                <option value="nursery">Nursery</option>
                                <option value="L.K.G" >L.K.G</option>
                                <option value="U.K.G">U.K.G</option>
                                <option value="ONE">ONE</option>
                                <option value="TWO">TWO</option>
                                <option value="THREE">THREE</option>
                                <option value="FOUR">FOUR</option>
                                <option value="FIVE">FIVE</option>
                                <option value="SIX">SIX</option>
                                <option value="SEVEN">SEVEN</option>
                                <option value="EIGH">EIGHT</option>
                            </select>
                    <!-- Subject -->
                    </div>
                    <div class="form-group ">
                      <input class="form-control col-md-4" id="disabledInput" type="text" placeholder="Select Subject Here" disabled>
                    </div>
                     <div class="form-group">
                       <label for=""><strong>Want All Books click here!</strong>
                       </label><br>
                       <input type="checkbox" class="" name="obooks[]" value="All Books">
                       <label for="">All Books</label><br>
                       <label for=""><strong>Want custom books just click</strong>
                       </label><br>
                       <input type="checkbox" class="" name="obooks[]" value="Khushkhat">
                       <label for="">Khushkhat</label>
                       <input type="checkbox" class="" name="obooks[]" value="English">
                       <label for="">English</label>
                       <input type="checkbox" class="" name="obooks[]" value="Hindi">
                       <label for="">Hindi</label>
                       <input type="checkbox" class="" name="obooks[]" value="Urdu">
                       <label for="">Urdu</label>
                       <input type="checkbox" class="" name="obooks[]" value="Math">
                       <label for="">Math</label>
                       <input type="checkbox" class="" name="obooks[]" value="Grammer">
                       <label for="">Grammer</label>
                       <input type="checkbox" class="" name="obooks[]" value="Viyakran">
                       <label for="">Viyakran</label>
                       <input type="checkbox" class="" name="obooks[]" value="G.K">
                       <label for="">G.K</label>
                       <input type="checkbox" class="" name="obooks[]" value="Computer">
                       <label for="">Computer</label>
                       <input type="checkbox" class="" name="obooks[]" value="S.S.T">
                       <label for="">S.S.T</label>
                       <input type="checkbox" class="" name="obooks[]" value="Science">
                       <label for="">Science</label><br>
                       <label for=""><strong>Want Extra click here</strong>
                       </label><br>
                       <input type="checkbox" class="" name="obooks[]" value="Copies">
                       <label for="">Copies</label>
                       <input type="checkbox" class="" name="obooks[]" value="Stationary Items">
                       <label for="">Stationary Items</label>
                       <input type="checkbox" class="" name="obooks[]" value="Covers">
                       <label for="">Covers</label>
                     </div>

                    <div class="form-group ">
                      <input class="form-control col-md-4" id="disabledInput" type="text" placeholder="Enter Your Deatils." disabled>
                    </div>

                    <div class="form-group">
                         <label for="customer Name">Your Name</label>
                         <input type="text" class="form-control col-md-4" name="oname" value="" required>
                    </div>
                    <div class="form-group">
                         <label for="">Mobile Number</label>
                         <input type="text" class="form-control col-md-4" name="omobile" value="" required>
                    </div>
                    <div class="form-group">
                         <label for="">Your Addres</label>
                         <textarea name="oadrs" rows="4" cols="40"></textarea required>
                    </div>

             </fieldset>
              <button type="submit" class="btn btn-success" name="submit">Done!</button>
           </form>

         </div>
       </div>
     </div>



        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      </body>
    </html>
