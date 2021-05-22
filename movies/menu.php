<?php 
$genres = $movies->getGenres();
?>

<div class="menu">
<div class="menu_third">&nbsp;</div>

<div class="menu_third">
    <label>Filtrar filmes por gênero</label>
        <select name="genres" id="genres">
            <?php foreach($genres['genres'] as $index=>$genre){ ?>
            <option value="<?=$genre['id']?>"><?=$genre['name']?></option>
                <?php } ?>
        </select>
        <input type="button" id="genre" value="Filtrar">
</div>
<div class="menu_third">
    <label>Buscar Filme</label><br>
    <input type="text" id="query">
    <input type="submit" id="search" value="Buscar">
</div>
</div>