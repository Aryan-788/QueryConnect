<select name="category" class="form-control" id="category">
        <option value="">Select Category</option>
        <?php
        include("./common/db.php");
        $query = "SELECT * FROM category";
        $result = $conn->query($query);

        foreach($result as $row){
            $name = ucfirst($row['name']);
            $id = $row['id'];
            echo "<option value=$id>$name</option>";
        }


        ?>







        <!-- <option value="Coding">Coding</option>
        <option value="General">General</option>
        <option value="Technology">Technology</option>
        <option value="Biology">Biology</option>
        <option value="Space">Space</option> -->
    </select>