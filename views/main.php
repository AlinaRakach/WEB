<?php
$is_image = $url == '/main/image';
$is_info = $url == '/main/info';
?>

<h1>Главная страница</h1>
<?php
$is_image = $url == "/main/image";
?>
<ul class="list-group">
  <li class="list-group-item">

    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" <?= $is_image ? "active" : '' ?> href="/brit">
          <button type="button" class="btn btn-primary">Британская кошка</button>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" <?= $is_image ? "active" : '' ?> href="/brit/image">
          <button type="button" class="btn btn-link">Картинка</button>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" <?= $is_image ? "active" : '' ?> href="/brit/info">
          <button type="button" class="btn btn-link">Описание</button>
        </a>
      </li>
    </ul>
  </li>
  <li class="list-group-item">

    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/scot">
          <button type="button" class="btn btn-primary">Шотландская кошка</button>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/scot/image">
          <button type="button" class="btn btn-link">Картинка</button>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= $is_image ? "active" : '' ?>" href="/scot/info">
          <button type="button" class="btn btn-link">Описание</button>
        </a>
      </li>
    </ul>
  </li>
</ul>

<?php if ($is_image) { ?>
  <img src="..." alt="">
<?php } else if ($is_info) { ?>
<?php } ?>