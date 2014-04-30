<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
       <table width=80% align=center border=5>
            <thead>
                <tr>
                    <th>OJ</th>
                    <th>Name</th>
                    <th>Start Time</th>
                    <th>Week</th>
                    <th>Access</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $json = file_get_contents('http://contests.acmicpc.info/contests.json');
                $rows = json_decode($json, true);
                foreach ($rows as $row) {
                    ?>
                    <tr>
                        <td><?php echo$row['oj'] ?></td>
                        <td><a <?php echo$row['id'] ?>" href="<?php echo$row['link'] ?>" target="_blank"><?php echo$row['name'] ?></a></td>
                        <td><?php echo$row['start_time'] ?></td>
                        <td><?php echo$row['week'] ?></td>
                        <td><?php echo$row['access'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
