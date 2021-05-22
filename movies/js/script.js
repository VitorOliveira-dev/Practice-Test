    $(document).ready(function() {

        $('#search').click(function(e){
        e.preventDefault();
        var query = $('#query').val();
        $.ajax({
            url: 'https://api.themoviedb.org/3/search/movie?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR&page=1&query='+query,
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
                url: 'https://api.themoviedb.org/3/discover/movie?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_genres='+genre,
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
    