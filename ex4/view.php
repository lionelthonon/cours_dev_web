<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
	<meta name="Author" content=""/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

    <h1>Jouons avec les tables de multiplications</h1>
    
    <form class="form-horizontal" action="" method="POST">
        <div class="control-group">
            <label class="control-label" for="ch1">Entrez le chiffre 1</label>
            <div class="controls">
                <input type="number" name="ch1" placeholder="Premier chiffre" class="input-small" id="ch1">
            </div>
            
            <label class="control-label" for="ch2">Entrez le chiffre 1</label>
            <div class="controls">
                <input type="number" name="ch2" placeholder="Deuxième chiffre" class="input-small" id="ch2">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </form>

    <p>Votre premier chiffre est le : <span style="font-weight: bold;"><?php echo $ch1; ?></span></p>
    <p>Votre deuxième chiffre est le : <span style="font-weight: bold;"><?php echo $ch2; ?></span></p>
    
    <!-- Ver. 1 -->
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <?php for($k=1; $k<=$ch1; $k++): ?>
                    <th><?php echo $k; ?></th>
                <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php for($j=1; $j<=$ch2; $j++): ?>
                <tr>
                    <th><?php echo ($j); ?></th>
                    <?php for($i=1; $i<=$ch1; $i++): ?>
                            <td><?php echo ($j*$i); ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>
