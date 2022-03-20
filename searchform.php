<form action="<?php echo esc_url(home_url()); ?>" class="search-form" method="get">
     <div class="form-group">
        
         <input
             type="text"
             class="form-control"
             name="s"
             value="<?php the_search_query() ?>"
             placeholder="Type a keyword and hit enter">
             <button> <span class="icon fa fa-search"></span></button>
     </div>
 </form>