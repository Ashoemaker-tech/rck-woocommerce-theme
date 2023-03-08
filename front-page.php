<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rck
 */

get_header();
?>

<main id="primary">
  <section class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/hero-bg.webp'); width:100%;">
    <div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/25"></div>

    <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
      <div class="max-w-xl text-center sm:text-left">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
          Precision is the key to

          <strong class="block font-extrabold text-rose-700">
            our success.
          </strong>
        </h1>

        <p class="mt-4 max-w-lg sm:text-xl sm:leading-relaxed">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
          tenetur fuga ducimus numquam ea!
        </p>

        <div class="mt-8 flex flex-wrap gap-4 text-center">
          <a href="/shop" class="block shop-btn w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow text-black hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto">
            Shop Now
          </a>

        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto mt-24">
    <header class="text-center">
      <h1 class=" font-bold text-gray-900">Popular Products</h1>
      <p class="max-w-md mx-auto mt-4 text-gray-500">People can't get enough of these items.</p>
    </header>
    <div class="my-8">
      <?= do_shortcode('[products colums=4 limit=4]'); ?>
    </div>
  </section>

  <section class="max-w-7xl mx-auto mt-24">
    <div class="max-w-screen-2xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
      <header class="text-center">
        <h1 class="font-bold text-gray-900">Categories</h1>
        <p class="max-w-md mx-auto mt-4 text-gray-500">Our most popular categories.</p>
      </header>
      <ul class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-3">
        <li>
          <a href="/home-decor" class="relative block group">
            <img src="<?= get_template_directory_uri(); ?>/img/home-decor.jpg" alt="" loading="lazy" class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90" />
            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
              <h3 class="text-xl font-medium text-white">Home Decor</h3>
              <span class="mt-1.5 inline-block bg-rose-600 rounded px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                Shop Now
              </span>
            </div>
          </a>
        </li>
        <li>
          <a href="/kitchen" class="relative block group">
            <img src="<?= get_template_directory_uri(); ?>/img/kitchen.jpg" alt="" loading="lazy" class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90" />
            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
              <h3 class="text-xl font-medium text-white">Kitchen</h3>
              <span class="mt-1.5 inline-block bg-rose-600 rounded px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                Shop Now
              </span>
            </div>
          </a>
        </li>
        <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
          <a href="/furniture" class="relative block group">
            <img src="<?= get_template_directory_uri(); ?>/img/custom.jpg" alt="" loading="lazy" class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90" />
            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
              <h3 class="text-xl font-medium text-white">Custom Furniture</h3>
              <span class="mt-1.5 inline-block bg-rose-600 rounded px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                Shop Now
              </span>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

</main><!-- #main -->

<?php
get_footer();
