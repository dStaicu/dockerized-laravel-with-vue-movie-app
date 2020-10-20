
    @include('header')

        @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
        @endif

        <div class="movies">
        </div>
    </body>

    <script type="text/javascript">
        $( document ).ready(function() {
            $.ajax({
                type: 'GET',
                url: '/list-movies'
            }).done( (data) => {
                data = JSON.parse(data);

                let html = '';

                if(!Object.keys(data).length){
                    html = 'Nu exista filme in bd, ruleaza migrarile sau adauga un film!'
                }

                $.each(data, function(key,el){
                    html += `

                        <div class="movie_wrapper">
                            <div class="image_cover">
                                <img src="${el.image}" />
                            </div>
                            <div class="info_w">
                                <div class="name">
                                    ${el.name}
                                </div>
                                <div class="rating">
                                    <div class="star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="rating_no">
                                        ${ el.rating }
                                    </div>
                                </div>

                                <div class="description_w">
                                    ${ el.description }
                                </div>

                                <div class="view_more">
                                    View More
                                </div>
                                <div class="delete" movie_id="${el.id}">
                                    Sterge
                                </div>
                            </div>
                        </div>
                    `;
                });

                $('.movies').html(html);

                $('.delete').on('click', function(){
                    const button = $(this);

                    $.ajax({
                        type: "GET",
                        url: '/delete/'+button.attr('movie_id')
                    }).done(function(data){
                        button.closest('.movie_wrapper').remove();
                    })

                });

            });

        });
    </script>
</html>
