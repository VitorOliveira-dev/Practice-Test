    $(document).ready(function() {

        $('#search').click(function(e){
        e.preventDefault();
        var query = $('#query').val();
        $.ajax({
            url: 'filter.php?filterBy=name&query='+query,
            method: 'GET',
            dataType: 'json'
        }).done(function(resposta) {
            $('.row').empty();
            for( var result in resposta.results){
            var html = '<div class="card"><div class="title">'+resposta.results[result].title+'</div><div class="poster"><img src="https://image.tmdb.org/t/p/original/'+resposta.results[result].poster_path+'"></div><div class="overview">'+resposta.results[result].overview+'</div><div class="release"><h5>Lançamento:</h5>'+resposta.results[result].release_date+' </div><div class="detailsBtn"><a href="movie.php?id='+resposta.results[result].id+'"><input type="button" value="Detalhes"></a></div></div>';
                $('.row').append(html);
            }
        });


        });

        $('#genre').click(function(){
            var genre = $('#genres').val();
            $.ajax({
                url: 'filter.php?filterBy=genre&genreId='+genre,
                method: 'GET',
                dataType: 'json'
            }).done(function(resposta) {
                $('.row').empty();
                for( var result in resposta.results){
                var html = '<div class="card"><div class="title">'+resposta.results[result].title+'</div><div class="poster"><img src="https://image.tmdb.org/t/p/original/'+resposta.results[result].poster_path+'"></div><div class="overview">'+resposta.results[result].overview+'</div><div class="release"><h5>Lançamento:</h5>'+resposta.results[result].release_date+' </div><div class="detailsBtn"><a href="movie.php?id='+resposta.results[result].id+'"><input type="button" value="Detalhes"></a></div></div>';
                    $('.row').append(html);
                }
            });
        });
    });
    
