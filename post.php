<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
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
      <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum voluptatem repudiandae ex quibusdam nisi laudantium voluptate illum laborum, enim dolorum eveniet placeat nam esse labore nostrum cumque temporibus dolorem sed!
      Explicabo alias fugiat inventore at illo atque soluta molestias assumenda veritatis, doloribus architecto dolor asperiores ipsa, odio sapiente quam aut esse iste voluptas? Doloribus iure labore dolorem saepe architecto! Voluptas.
      Autem asperiores maiores vitae quam saepe aut at! Minus veniam dicta, adipisci asperiores numquam nulla. Provident doloremque sapiente, laudantium autem tempora porro, reprehenderit accusamus minus, temporibus asperiores ab officiis iste.
      Ut iure asperiores quam ducimus accusantium officia, sed corrupti voluptatibus non possimus natus numquam incidunt quod aut omnis quas veritatis adipisci architecto? Praesentium rerum aspernatur veniam corporis inventore error dolores!
      Et veniam eligendi illo. Earum cumque eveniet, in id enim repellat saepe, fugiat nemo fugit impedit quae recusandae rem. Reiciendis, aliquam consequatur blanditiis fugiat consectetur ipsam perspiciatis beatae nostrum aspernatur?</p>
      <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum voluptatem repudiandae ex quibusdam nisi laudantium voluptate illum laborum, enim dolorum eveniet placeat nam esse labore nostrum cumque temporibus dolorem sed!
      Explicabo alias fugiat inventore at illo atque soluta molestias assumenda veritatis, doloribus architecto dolor asperiores ipsa, odio sapiente quam aut esse iste voluptas? Doloribus iure labore dolorem saepe architecto! Voluptas.
      Autem asperiores maiores vitae quam saepe aut at! Minus veniam dicta, adipisci asperiores numquam nulla. Provident doloremque sapiente, laudantium autem tempora porro, reprehenderit accusamus minus, temporibus asperiores ab officiis iste.
      Ut iure asperiores quam ducimus accusantium officia, sed corrupti voluptatibus non possimus natus numquam incidunt quod aut omnis quas veritatis adipisci architecto? Praesentium rerum aspernatur veniam corporis inventore error dolores!
      Et veniam eligendi illo. Earum cumque eveniet, in id enim repellat saepe, fugiat nemo fugit impedit quae recusandae rem. Reiciendis, aliquam consequatur blanditiis fugiat consectetur ipsam perspiciatis beatae nostrum aspernatur?</p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>


<?php
  include_once("templates/footer.php");
?>