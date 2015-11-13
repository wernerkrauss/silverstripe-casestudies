<!-- Content -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <% with $Item %>
                    <h1>$Title</h1>

                    <p>$Date</p>

                    <p>$Summary</p>

                    <p>$Content</p>

                    <p>$Customer</p>

                <% end_with %>

                <p>
                    <a href="$Link"><%t CaseStudyHolder_Show.BackToOverview 'Back to overview' %></a>
                </p>
				
            </div>
        </div>
    </div>
</section>
<!-- Content END-->
