<!DOCTYPE html>
<html>
<head>
    <title>Table Design Form</title>
    <style>
        /* Add your CSS styling here */
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        input{
            outline:none;
            border:none;
        }
    </style>
</head>
<body>

<h2>Table Design Form</h2>

<form method="post" action="process_form.php">
    <table>
        <tr>
            <th>Name:</th>
            <td><input type="text" name="name"></td>
            <td></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><input type="email" name="email"></td>
            <td></td>
        </tr>
        <tr>
            <th>Age:</th>
            <td><input type="number" name="age"></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><input type="submit" value="Submit"></td>
            <td></td>
        </tr>
    </table>
</form>

</body>
</html>
