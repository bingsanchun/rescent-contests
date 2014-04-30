<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            #customers
            {
                font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse:collapse;
            }
            #customers th 
            {
                font-size:1.1em;
                text-align:center;
                /*padding-top:8px;表头高度*/
                padding-bottom:4px;
                background-color:#A7C942;
            }
        </style>
    </head>
    <body bgcolor="#FFF8DC">
        <h1 style="text-align: center;"><strong><span style="color: #000000;">各大OJ近期赛事</span></strong></h1>
        <p align="center"><span style="color: green;"><strong>数据来源：<span style="color: #00FF00;"><a href="http://contests.acmicpc.info/contests.json" target="blank"><span style="color: #000000;">http://contests.acmicpc.info/contests.json</span></a></span></strong></span></p>
        <table width=85% align=center id="customers" border=5 cellspacing=0 cellpadding=4>
            <thead>
                <tr>
                    <th <span style="color: #ff0000;"><strong>OJ</strong></th>
                    <th <span style="color: #ff0000;"><strong>Name</strong></th>
                    <th <span style="color: #ff0000;"><strong>Start Time</strong></th>
                    <th <span style="color: #ff0000;"><strong>Weekday</strong></th>
                    <th <span style="color: #ff0000;"><strong>Access</strong></th> 
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
