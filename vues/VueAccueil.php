<head>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <title>VéloConcept - Gestion des commandes</title>
</head>

<body>
    
    <?php
        $json = file_get_contents("./cdes.json");
        $tabCommandes = json_decode($json, true);
        $tabDetaillants = $tabCommandes["cde"]["detaillant"];
    ?>
    
    </br>
        <div class="center border">
            <h1>Commandes</h1>
            <label for="detaillants">Détaillant :</label>  
            <select id="detaillants" onchange="afficherProduits()">
                <?php    
                    for ($i = 0; $i < count($tabDetaillants); $i++) 
                    {
                        echo '<option value="' . $i . '">' . $tabDetaillants[$i]["-numero"] . '</option>';
                    }
                ?>    
            </select>
            </br></br>
            <div id="divTableau">
            </div>
            </br>
            <button type="button">Commandes à préparer</button> 
            <button type="button">Commande en attente</button> 
            </br></br>
        </div>
        <div id="divTableauPrepa">
        </div>
        <div id="divTableauAtt">
        </div>
    
    <script>    
        var tabDetaillants = <?= json_encode($tabDetaillants) ?>;
    </script>    

</body>