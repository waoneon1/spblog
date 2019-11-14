 <form action="<?php echo home_url( '/' ); ?>" class="sb-form">
    <input type="text" class="sb-search__input" name="s" placeholder="Cari Artikel" value="<?php the_search_query(); ?>">
    <input type="reset" class="sb-search__reset" value="">
    <input type="submit" class="sb-search__submit" value="">
</form>