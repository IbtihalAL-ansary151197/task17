

<div class="container">
        <h2>Register</h2>
        <form action="<?php echo url('/save'); ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_token" value=<?php echo csrf_token();?>> 


            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby=""
                    placeholder="Enter Name">
            </div>


           <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div> 

            <div class="form-group">
                <label for="exampleInputPassword1">New Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>



            <div class="form-group">
                <label for="exampleInputPassword1">Linked In</label>
                <input type="text" name="linkedin" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Gender</label>
                <br>
                <input type="radio" name="gender" value="male">
                <label for="exampleInputPassword1">Male</label>
                <br>
                <input type="radio" name="gender" value="female">
                <label for="exampleInputPassword1">Female</label>

            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\laravelProbect\resources\views/form.blade.php ENDPATH**/ ?>