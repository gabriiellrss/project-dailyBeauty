<?php

$Title = "Exemplo de Título";  
$Card = [
    ['imagem' => 'https://th.bing.com/th/id/OIP.Q7WUVPpgS5JOVqHL4kq_ggHaEK?rs=1&pid=ImgDetMain', 'title' => 'gabriel', 'subTitle' => 'teste', 'descricao' => 'teste',], 
    ['imagem' => 'https://th.bing.com/th/id/OIP.Q7WUVPpgS5JOVqHL4kq_ggHaEK?rs=1&pid=ImgDetMain', 'title' => 'teste', 'subTitle' => 'teste', 'descricao' => 'teste'],
    ['imagem' => 'https://th.bing.com/th/id/OIP.Q7WUVPpgS5JOVqHL4kq_ggHaEK?rs=1&pid=ImgDetMain', 'title' => 'teste', 'subTitle' => 'teste', 'descricao' => 'teste'],
    ['imagem' => 'https://th.bing.com/th/id/OIP.Q7WUVPpgS5JOVqHL4kq_ggHaEK?rs=1&pid=ImgDetMain', 'title' => 'teste', 'subTitle' => 'teste', 'descricao' => 'teste'],
    ['imagem' => 'https://th.bing.com/th/id/OIP.Q7WUVPpgS5JOVqHL4kq_ggHaEK?rs=1&pid=ImgDetMain', 'title' => 'teste', 'subTitle' => 'teste', 'descricao' => 'teste'],

];
?>

<div class="align-items-center justify-content-between mt-3 mr- ml-4 position-relative" style="width: 100%; overflow: hidden; height: 700px">
  <h1 class="ms-4"><?php echo $Title; ?></h1>

    <button id="scrollLeft" class="btn btn-custom">
      <svg style="color: blue; fill: blue" height="2em" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg">
        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Rounded" transform="translate(-652.000000, -2464.000000)">
            <g id="Hardware" transform="translate(100.000000, 2404.000000)">
              <g id="-Round-/-Hardware-/-keyboard_arrow_left" transform="translate(544.000000, 54.000000)">
                <g>
                  <rect id="Rectangle-Copy-104" x="0" y="0" width="50" height="50"></rect>
                  <path d="M14.71,15.88 L10.83,12 L14.71,8.12 C15.1,7.73 15.1,7.1 14.71,6.71 C14.32,6.32 13.69,6.32 13.3,6.71 L8.71,11.3 C8.32,11.69 8.32,12.32 8.71,12.71 L13.3,17.3 C13.69,17.69 14.32,17.69 14.71,17.3 C15.09,16.91 15.1,16.27 14.71,15.88 Z" id="Icon-Color"></path>
                </g>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </button>
  
  <div id="scrollContainer" class="d-flex" style="scroll-behavior: initial; column-gap: 10px; 
  overflow: hidden; ">

    <?php 
        foreach ($Card as $index => $Card): 
    ?>
      <div 
      <?php echo ($index == 0 ? 'class="card ms-4"' : 'class="card"') . '"'; ?> 
      <?php echo 'style="width: 300px; min-width: 300px; max-height: auto; border-radius: 15px; max-height: 100% !important;' . ($index == count($Card) +1 ? ' margin-right: 2em;' : '') . '"'; ?>
      >
        <img <?php echo 'src="' . $Card['imagem'] . '"'; ?>  class="card-img-top" style="min-width: 300px; width: 300px; " alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $Card['title']?></h5>
          <h6 class="card-subtitle mb-2 text-muted "><?php $Card['subTitle']?></h6>
          <p class="card-text"><?php echo $Card['descricao']?></p>
          b5
        </div>
      </div>
        
    <?php 
        endforeach; 
    ?>

  </div>

    <button id="scrollRight" class="btn btn-custom">
      <svg height="2em" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg">
        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Rounded" transform="translate(-687.000000, -2464.000000)">
            <g id="Hardware" transform="translate(100.000000, 2404.000000)">
              <g id="-Round-/-Hardware-/-keyboard_arrow_right" transform="translate(578.000000, 54.000000)">
                <g>
                  <rect id="Rectangle-Copy-105" x="0" y="0" width="50px" height="50px"></rect>
                  <path d="M9.29,15.88 L13.17,12 L9.29,8.12 C8.9,7.73 8.9,7.1 9.29,6.71 C9.68,6.32 10.31,6.32 10.7,6.71 L15.29,11.3 C15.68,11.69 15.68,12.32 15.29,12.71 L10.7,17.3 C10.31,17.69 9.68,17.69 9.29,17.3 C8.91,16.91 8.9,16.27 9.29,15.88 Z" id="Icon-Color"></path>
                </g>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </button>

  
</div>

<script>
  document.getElementById('scrollLeft').addEventListener('click', function() {
    const scrollContainer = document.getElementById('scrollContainer');
    scrollContainer.scrollBy({
      left: -300,
      behavior: 'smooth'
    });
  });

  document.getElementById('scrollRight').addEventListener('click', function() {
    const scrollContainer = document.getElementById('scrollContainer');
    scrollContainer.scrollBy({
      left: 300,
      behavior: 'smooth'
    });
  });
</script>
