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

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas pariatur tempora nam nemo, provident, autem porro, exercitationem nihil suscipit tempore repellat error ad reiciendis? Iste cum sunt eius consequuntur nam.
            Ratione, maiores voluptate eos impedit voluptatum, in veritatis at assumenda eaque, aperiam nam dolorum eveniet sed? Voluptates perspiciatis nam enim deleniti nemo, possimus porro eos nihil id eaque quaerat reprehenderit.
            Molestiae voluptatibus et odio dolores quasi ad doloribus perferendis necessitatibus, explicabo dicta accusantium cupiditate architecto ipsum pariatur illo fugit similique tenetur dolorum numquam eius iure quae ab corporis laudantium! Dignissimos.
            Consequatur assumenda nisi veniam nemo ab optio porro in corporis architecto repudiandae perspiciatis, saepe maiores iure ex error sequi expedita at placeat a alias omnis dolorem quae sunt! Architecto, officiis.
            At voluptate quam cumque id aspernatur modi dolores quasi, aperiam quae quis minima similique enim repellendus perferendis iure voluptatibus fugiat! Voluptatum assumenda, quas nesciunt illum ipsa quos voluptate distinctio hic.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas pariatur tempora nam nemo, provident, autem porro, exercitationem nihil suscipit tempore repellat error ad reiciendis? Iste cum sunt eius consequuntur nam.
            Ratione, maiores voluptate eos impedit voluptatum, in veritatis at assumenda eaque, aperiam nam dolorum eveniet sed? Voluptates perspiciatis nam enim deleniti nemo, possimus porro eos nihil id eaque quaerat reprehenderit.
            Molestiae voluptatibus et odio dolores quasi ad doloribus perferendis necessitatibus, explicabo dicta accusantium cupiditate architecto ipsum pariatur illo fugit similique tenetur dolorum numquam eius iure quae ab corporis laudantium! Dignissimos.
            Consequatur assumenda nisi veniam nemo ab optio porro in corporis architecto repudiandae perspiciatis, saepe maiores iure ex error sequi expedita at placeat a alias omnis dolorem quae sunt! Architecto, officiis.
            At voluptate quam cumque id aspernatur modi dolores quasi, aperiam quae quis minima similique enim repellendus perferendis iure voluptatibus fugiat! Voluptatum assumenda, quas nesciunt illum ipsa quos voluptate distinctio hic.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas pariatur tempora nam nemo, provident, autem porro, exercitationem nihil suscipit tempore repellat error ad reiciendis? Iste cum sunt eius consequuntur nam.
            Ratione, maiores voluptate eos impedit voluptatum, in veritatis at assumenda eaque, aperiam nam dolorum eveniet sed? Voluptates perspiciatis nam enim deleniti nemo, possimus porro eos nihil id eaque quaerat reprehenderit.
            Molestiae voluptatibus et odio dolores quasi ad doloribus perferendis necessitatibus, explicabo dicta accusantium cupiditate architecto ipsum pariatur illo fugit similique tenetur dolorum numquam eius iure quae ab corporis laudantium! Dignissimos.
            Consequatur assumenda nisi veniam nemo ab optio porro in corporis architecto repudiandae perspiciatis, saepe maiores iure ex error sequi expedita at placeat a alias omnis dolorem quae sunt! Architecto, officiis.
            At voluptate quam cumque id aspernatur modi dolores quasi, aperiam quae quis minima similique enim repellendus perferendis iure voluptatibus fugiat! Voluptatum assumenda, quas nesciunt illum ipsa quos voluptate distinctio hic.</p>
    </div>
</main>
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

<?php
include_once("templates/footer.php")
?>