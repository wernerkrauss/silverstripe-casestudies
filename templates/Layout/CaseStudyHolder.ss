<!-- Content -->
<section class="references">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>$Title</h1>
                $Content
                </div>

                <% if $PaginatedItems %>

                   <% loop $PaginatedItems %>
                       <div class="col-md-3">
                            <article>
                                <a href="$Link" class="boxlink nobg reference-item">
                                    <h3>$Title</h3>
                                    <p>$Summary</p>
                                </a>
                            </article>
                        </div>
                    <% end_loop %>


                    <% with $PaginatedItems %>
                        <% include Pagination %>
                    <% end_with %>
                <% end_if %>

            
        </div>
    </div>
</section>
<!-- Content END-->