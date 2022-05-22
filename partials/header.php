<header>
    <div class="d-flex justify-content-between align-items-center px-4 h-100">
        <img src="./assets/img/spotify-logo.png" alt="logo Spotify" class="img-fluid h-75">

        <div>
             <select name="" id="" v-model="selectedGenre" @change="selectGenre()" style="width: 240px; outline: none; border: none; padding-left: 15px;" >
                <option value="">All Genres</option>
                <option v-for="(genre, index) in genres" :key="index" :value="genre">{{ genre }}</option>
            </select>
        </div>

    </div>
</header>