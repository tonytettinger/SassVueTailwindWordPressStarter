<?php get_header(); ?>

<div class="content bg-white">
  Hello!!!
</div>

<div id="app-5">
  <p>{{ message }}</p>
  <button v-on:click="reverseMessage">Reverse Message</button>
</div>

<?php get_footer(); ?>