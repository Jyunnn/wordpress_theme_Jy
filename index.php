<?php get_header(); ?>

<div class="container mx-auto">
    <div>
        <h2 class="text-2xl font-black text-center sm:text-left">公告內容</h2>
        <?php
            while(have_posts()) {
                the_post(); ?>
                <div>
                    <a href="<?php the_permalink(); ?>"> <?php the_title();?></a>
                    <p> 發布日期: <?php the_date('Y F, j');?></p>
                    <hr>
                </div>    
            <?php
            };
        ?>
    </div>
    <div class="flex mx-auto py-4 sm:px-0 grid md:grid-cols-4 sm:grid-cols-2 gap-4 ">
        <div class="">
            <div class="border-5 border-yellow-400">
                <img src=<?php echo get_theme_file_uri('/images/office_supplies.jpg'); ?> alt="">
            </div>
            <div class="mt-3">
                <div class="box-text-area">
                    <h3 class="text-2xl font-black text-center sm:text-left">文具用品批發</h3>
                    <p class="py-2">各式品牌書寫用品、黏貼包裝材料、桌上五金用品、檔案收納資料整理、辦公紙品便條紙、圖畫紙工業用紙、事務機器電腦耗材、茶水招待…等等，商品最齊全的文具供應商。</p>
                </div>
            </div>
        </div>

        <div class="">
            <div>
                <img class="" src=<?php echo get_theme_file_uri('/images/office_furniture.jpg'); ?> alt="">
            </div>
            <div class="mt-3">
                <div class="box-text-area">
                    <h3 class="text-2xl font-black text-center sm:text-left">辦公空間規劃</h3>
                    <p class="py-2">辦公家具、效率櫃、舒美櫃、簡報書報架、工業零件箱工作站，提供您最優質最優惠的辦公家具及完善的售前售後服務。</p>
                </div>
            </div>
        </div>

        <div class="">
            <div>
                <img class="rounded-md" src=<?php echo get_theme_file_uri('/images/design.jpg'); ?> alt="">
            </div>
            <div class="mt-3">
                <div class="box-text-area">
                    <h3 class="text-2xl font-black text-center sm:text-left">印刷設計業務</h3>
                    <p class="py-2">一般印刷業務，公司信封、信紙、名片及各式周邊，旌旗、布條、宣傳用品；電腦報表單訂製、T-shirt服裝印製、禮品挑選製作。專業設計部門替您服務。</p>
                </div>  
            </div>
        </div>

        <div class="">
            <div>
                <img class="rounded-md" src=<?php echo get_theme_file_uri('/images/tools.jpg'); ?>  alt="">
            </div>
            <div class="mt-3">
                <div class="box-text-area">
                    <h3 class="text-2xl font-black text-center sm:text-left">五金用品批發</h3>
                    <p class="py-2">精選出最好用的品牌五金用品、工業用品、無塵室用品、清潔用品、衛生紙、環境清理用品。讓您不再花時間比較商品效力。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-red-400 py-12" style=" background: url( <?php echo get_theme_file_uri('/images/wqn_bg.png'); ?> ) no-repeat center center / 100%">
    <div class="max-w-7xl mx-auto py-3 hidden md:block" style="background: rgba(255,255,255,0.7) ;">
        <p class="text-4xl font-black py-1 text-center"> 關於文光行 </p>
        <br>
        <p class="text-center py-1">
            成立於民國52年，新竹地區文具批發商之一，全台皆在服務範圍內，以誠信經營、服務客戶為目的，販賣項目從文具五金到日常用品應有盡有
        </p>
        <p class="text-center py-1">
            企業桃竹苗都可送貨，可配合月結，歡迎來電詢問
        </p>
    </div>
</div>

<?php get_footer(); ?>