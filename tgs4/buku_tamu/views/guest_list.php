<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Komentar</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #eaeaea;
        }

        td {
            border-bottom: 1px solid #ddd;
        }

        td:first-child {
            width: 25%;
        }

        td:last-child {
            width: 20%;
        }

        table th, table td {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <h3>Daftar Komentar</h3>
    <table>
        <tr>
            <th>Nama</th>
            <th>Komentar</th>
            <th>Waktu</th>
        </tr>
        <?php while ($row = $guests->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['comment']); ?></td>
            <td><?php echo $row['created_at']; ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
