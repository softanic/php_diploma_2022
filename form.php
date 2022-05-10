<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <form action="save.php" method="get">
            <label>First Name</label>
            <input type="text" placeholder="Enter first name" name="fname"><!-- comment --><br>
            <label>Last Name</label>
            <input type="text" placeholder="Enter last name" name="lname" ><!-- comment --><br>
            <label>Mobile No</label>
            <input type="number"  name="mobile" ><!-- comment --><br>
            <label>Address</label>
            <textarea name="addr" rows="2" cols="10" >jalgaon</textarea><br>
            <label>Gender</label>
            <input type="radio" name="gender" value="m"  checked>Male
            <input type="radio" name="gender" value="f"  checked>Female
            <br>
            <label>Lang</label>
            <input type="checkbox" name="lang[]" value="c"  >C prog.
            <input type="checkbox" name="lang[]" value="cpp"  >C++
            <input type="checkbox" name="lang[]" value="html"  >html
            <input type="checkbox" name="lang[]" value="java"  >java
            
            <br><!-- comment -->
            <select name="city[]" multiple>
                <option value="JL">Jalgaon</option>
                <option value="BSL">bhusawal</option>
                <option value="PN">pune</option>
                <option value="CSTM ">mumbai</option>
            </select>
            
            
            
            <input type="submit" value="save">
            <input type="submit" value="save & next">
            <input type="reset">
        </form>
        
    </body>
</html>
