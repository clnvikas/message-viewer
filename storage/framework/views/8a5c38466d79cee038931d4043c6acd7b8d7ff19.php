<html>
<head>
<title>
        registration details
    </title>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
 }
</style>
</head>
<body>
    <h2>registration details</h2>
    <table>
        <tr><th>id</th>
            <th>firstname</th><br>
            <th>lastname</th>
            <th>email</th>
            <th>password</th>
            <th>actions</th>
        </tr>
        <?php if(count($data)>0)
        {
            foreach($data as $values)
            {
               ?>
               <tr> 
                <td> <?php echo $values->id;?> </td>
               <td> <?php echo $values->firstname;?> </td>
               <td> <?php echo $values->lastname;?> </td>
               <td> <?php echo $values->email;?> </td>
               <td> <?php echo $values->password;?> </td>
               <td><a href="/edit/<?php echo $values->id; ?>" ><button type="submit" class="button">edit</a><br></br>
                <?php echo e(csrf_field()); ?>

                    <a href="/delete-data/<?php echo $values->id;?>"  ><button type="submit" class="button">delete the entry</a></td>
                    <?php echo e(csrf_field()); ?>

           </tr>

        <?php    }
        
        }
        ?>
    </table>
    </body>
    </html>
