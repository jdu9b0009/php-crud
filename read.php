<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Read</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <h1>All users</h1>
    <?php
    $users = json_decode(file_get_contents("data.json"), true);
    ?>
    <a href="create.php">Add new user</a><br><br>
    <table id="customers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($users as $user) {
                    echo "
                        <tr>
                            <td>{$user['id']}</td>
                            <td>{$user['firstname']}</td>
                            <td>{$user['lastname']}</td>
                            <td>Edit Delete</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>

</body>

</html>