<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>

<body>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique totam recusandae vero praesentium deserunt aliquid reiciendis amet vel cumque labore magni quia nulla laboriosam optio impedit, mollitia sequi iste dolor.
                Nemo quod doloremque consequatur. Aperiam doloribus velit quis dolorem accusamus, veniam alias omnis cum corporis repudiandae modi obcaecati optio officia itaque cumque hic, recusandae sunt rerum pariatur voluptatem voluptas officiis!
                Aspernatur quas praesentium, corrupti itaque, rem numquam porro, nesciunt ratione dicta saepe facilis. Voluptate ex modi fuga quibusdam labore. Quas sapiente possimus, rerum sit tempora consequuntur? Nulla facilis non hic?
                At, quibusdam. Voluptate mollitia eum earum ab necessitatibus neque, tempora voluptatibus rem modi. Sequi velit quia quisquam itaque dolore autem eius ex, voluptatum distinctio cumque, voluptas eveniet maiores accusamus error.
                Neque illum alias, quasi incidunt voluptates ipsam, soluta ad quo cum ab debitis pariatur ex deleniti recusandae ratione eligendi vitae doloremque numquam autem omnis eaque, consequatur repudiandae perspiciatis! Libero, quasi.</p>

                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique totam recusandae vero praesentium deserunt aliquid reiciendis amet vel cumque labore magni quia nulla laboriosam optio impedit, mollitia sequi iste dolor.
                Nemo quod doloremque consequatur. Aperiam doloribus velit quis dolorem accusamus, veniam alias omnis cum corporis repudiandae modi obcaecati optio officia itaque cumque hic, recusandae sunt rerum pariatur voluptatem voluptas officiis!
                Aspernatur quas praesentium, corrupti itaque, rem numquam porro, nesciunt ratione dicta saepe facilis. Voluptate ex modi fuga quibusdam labore. Quas sapiente possimus, rerum sit tempora consequuntur? Nulla facilis non hic?
                At, quibusdam. Voluptate mollitia eum earum ab necessitatibus neque, tempora voluptatibus rem modi. Sequi velit quia quisquam itaque dolore autem eius ex, voluptatum distinctio cumque, voluptas eveniet maiores accusamus error.
                Neque illum alias, quasi incidunt voluptates ipsam, soluta ad quo cum ab debitis pariatur ex deleniti recusandae ratione eligendi vitae doloremque numquam autem omnis eaque, consequatur repudiandae perspiciatis! Libero, quasi.</p>
        </div>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach ($currentPost['tags'] as $tag) : ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach ($categories as $category) : ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
    <?php
    include_once("templates/footer.php")
    ?>