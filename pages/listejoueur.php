


<div class="card text-white bg-dark mb-3" style="max-width: 100;">
  <div class="card-header"><h2 class="text-center text-white">Liste des Joueurs</h2></div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody id="tbody">
    
  </tbody>
</table>
    
  </div>
</div>

<script>
    $(document).ready(function(){

        
        let offset = 0;
        const tbody = $('#tbody');
        $.ajax({
                type: "GET",
                url: "http://localhost/LIVE_AJAX/data/getUsers.php",
                data: {limit:7,offset:offset,date:date},
                dataType: "JSON",
                success: function (data) {
                    tbody.html('')
                    printData(data,tbody);
                    offset +=7
                }
            });

      /*      //  Scroll
        const scrollZone = $('#scrollZone')
        scrollZone.scroll(function(){
        //console.log(scrollZone[0].clientHeight)
        const st = scrollZone[0].scrollTop;
        const sh = scrollZone[0].scrollHeight;
        const ch = scrollZone[0].clientHeight;

        console.log(st,sh, ch);
        
        if(sh-st <= ch){
            $.ajax({
                type: "POST",
                url: "http://localhost/LIVE_AJAX/data/getVentes.php",
                data: {limit:7,offset:offset,date:date},
                dataType: "JSON",
                success: function (data) {
                    
                    printData(data,tbody);
                    offset +=7;
                }
            });
        }
           
        })
        */
    });

    function printData(data,tbody){
        $.each(data, function(indice,vente){
            tbody.append(`
            <tr class="text-center">
                <td>${users.nom}</td>
                <td>${users.prenom}</td>
                <td>${users.profile}</td>
            </tr>
        `);
    });
}
</script>
