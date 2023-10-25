<!--On appelle jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!--On définit le type du script-->
<script type="text/javascript">
    //On crée la fonction submitData que l'on peut voir dans l'index
    function submitData(action) {
    //La fonction se jouera lorsque le document sera prêt
        $(document).ready(function() {
            //On définit l'action ainsi que le contenu de notre message
            const data = {
                action: action,
                Messages: $("#Messages").val(),
            };
    //On passe à l'ajax
            $.ajax({
                //On lui dit d'aller chercher function.php
                url: 'function.php',
                //On dit à l'Ajax de se jouer en POST
                type: 'POST',
                //On lui indique que les données qu'il doit récupérer sont la const data juste au dessus
                data: data,
                //En cas de succès, on envoie une alerte
                success: function(response) {
                    alert(response);
                }
            });
        });
    }
</script>
