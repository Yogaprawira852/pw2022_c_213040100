<!DOCTYPE html>
<html lang="en"> 
    <head>
    <meta charset="utf-8 ">
    <title>latihan 1b</title>
    </head>
    <body>

    <table border="1" cellpadding="10" celsspacing="0">
        <?php for( $i = 1; $i <= 3; $i++ ) : ?>
            <tr>
                <?php for( $j = 1; $j <= 5; $i++ ) : ?>
                    <td><?php echo  "$i, $j;" ?></td>
                  <?php endfor; ?>  
            </tr>
            <?php endfor; ?>  
    </table>

    </body>
</html>
