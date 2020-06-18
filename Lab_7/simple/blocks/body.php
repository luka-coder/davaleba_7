<div class="body">
    <nav>
        <ul>
            <?php
                $query = "SELECT * FROM users";
                $result = mysqli_query($connection,$query);
                if(!$result){
                    die ("Error!");
                }
                while($row = mysqli_fetch_assoc($result)){
                    echo "<li><a href = '?cat=".$row["Name"]."'>".$row["Name"]."</a></li>";
                }
            ?>
        </ul>
    </nav>
</div>