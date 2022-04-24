<meta charset='utf-8'>
<?php require("./libs/posts-lib.php");?>
<?php $posts = getPostByCategory(7); ?>

<div class="row">
    <?php foreach($posts as $key => $post): ?>
        <?php $image = "/nblog/blog/resblog/blogadmin/images/" . $post["photo"] ?>
        <?php $date = date_create($post["date"]); ?>
        <?php
            $id = $post["id"];
            $link = "noticia.php?id=$id";
        ?>
        <div class="col-md-6 padlr10">
            <div class="card post-card">
                <div class="row">
                    <div class="col-md-5 wrapthumbnail">
                        <a href="<?php echo $link ?>">
                            <div class="thumbnail" style="background-image:url(<?= $image; ?>)"></div>
                        </a>
                    </div>
                    <div class="col-md-7">
                        <div class="card-block">
                            <h2 class="card-title">
                                <a href="<?php echo $link ?>">
                                    <?= substr($post["title"], 0, 50); ?>
                                </a>
                            </h2>
                            <span class="card-text d-block">
                                <?= substr(strip_tags($post["content"]), 0, 300) ?>...
                            </span>
                            <div class="metafooter">
                                <div class="post-date">
                                    <?= date_format($date, 'd-m-Y'); ?>
                                </div>

                                <a href="<?php echo $link ?>" class="btn btn-sm btn-primary">Leer más</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
