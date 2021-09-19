<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body class="relative mb-16 md:mb-24 lg:m-0">
    <nav class="items-top justify-center shadow dark:bg-gray-900 hidden lg:block sm:pt-0">
        <div class="container mx-auto flex items-center">
            <a href=<?php echo site_url('/'); ?>>
                <img class="w-28 md:w-44 py-4" src=<?php echo get_theme_file_uri('/images/wqn_logo.png'); ?> alt="">
            </a>
            <div class="mx-5">
                <a class="p-6 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href=<?php echo site_url('/'); ?>>首頁</a>
                <a class="p-6 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href=<?php echo site_url('/shop'); ?>>商品</a>
                <a class="p-6 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href="/">型錄</a>
                <a class="p-6 inline-block border-b-2 border-white hover:border-b-2 hover:border-yellow-400" href="/">聯繫我們</a>
            </div>
            <div class="flex ml-auto hidden md:block border-2">
                <form class="p-1 rounded" action="" method="get">
                    <input name="keyword" class="p-2 border-0" type="text" placeholder="請輸入搜尋項目">
                    <button class="p-2 rounded hover:bg-yellow-300" type="submit">搜尋</button>
                </form>
            </div>
        </div>
    </nav>

    <nav class="lg:hidden py-2 w-full fixed flex justify-around items-center bottom-0 bg-yellow-500 text-white shadow-inner z-50">
        <label class="flex flex-col justify-center items-center px-5 py-2 inline-block" for="mobilebar_handle" href="/">
            <i class="lni lni-menu"></i>
            分類
        </label>
        <a class="px-5 inline-block flex flex-col justify-center items-center" href=<?php echo site_url('/'); ?>>
            <i class="lni lni-home"></i>
            <p class="">首頁</p>
        </a>
        <a class="px-5 inline-block flex flex-col justify-center items-center" href=<?php echo site_url('/shop'); ?>>
            <i class="lni lni-ruler-pencil"></i>
            <p class="">商品</p>
        </a>
        <a class="px-5 inline-block flex flex-col justify-center items-center" href="/">
            <i class="lni lni-book"></i>
            <p class="">型錄</p>
        </a>
    </nav>