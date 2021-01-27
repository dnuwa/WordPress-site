<form role="search" method="get" action="<?php echo esc_url(home_url('/')) ?>" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" name="s" placeholder="Search" value="<?php echo esc_attr(get_search_query())?>">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>    
</form>