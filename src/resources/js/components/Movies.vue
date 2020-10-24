<template>
    <div class="movies">
    	<div class="movie_wrapper" v-for="movie in movies">
	        <div class="image_cover">
	            <img :src="movie.image" />
	        </div>
	        <div class="info_w">
	            <div class="name">
	                {{ movie.name }}
	            </div>
	            <div class="rating">
	                <div class="star">
	                    <i class="fa fa-star" aria-hidden="true"></i>
	                </div>
	                <div class="rating_no">
	                    {{ movie.rating }}
	                </div>
	            </div>

	            <div class="description_w">
	                {{ movie.description }}
	            </div>

	            <div class="view_more">
	                View More
	            </div>
	            <div v-on:click="deleteMovie" class="delete" :movie_id="movie.id">
	                Sterge
	            </div>
	        </div>
	     </div>
    </div>
</template>

<script>
	export default {
		data: function() {
			return{
				movies: [],
			}
		},

		mounted() {
			this.loadMovies();
		},

		methods: {
			loadMovies: function(){
				axios.get('/list-movies')
				.then((response) => {
					console.log(response);
					this.movies = response.data.data
				})
				.catch();
			},

			deleteMovie: function(e) {

				const this_btn = $(e.currentTarget);

				this_btn.closest('.movie_wrapper').remove();
				
				axios.get(`/delete-movie/${this_btn.attr('movie_id')}`)
				.then((response) => {
				})
				.catch();
			}
		}
	}
</script>