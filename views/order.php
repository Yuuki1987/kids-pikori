<?php include('../views/layouts/contents-header.php'); ?>
<head>
    <title>順序の学習</title>
</head>


<div class="container text-center">
    <div class="d-flex justify-content-center">
        <div class="d-flex">
            
            <table class="table table-borderless">
                <thead>
                    <tr class="direction-title">
                    <th scope="col" colspan="12"><h2 class="fs-3 fw-bold">順序と方向プログラム</h2>
                    <h3>前から後から何番目</h3></th>
                    </tr>
            </thead>
            <tbody>
                <tr>
                <?php foreach($Lines as $key => $Line) :?>
                        <th> 
                            <?php if($number == $key): ?>
                        <button type="button"  value="<?php echo $key ?>" onclick="seikai();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true"  title="<img src=../img/seikai.png width=200px> " >
                            <img src="<?php echo $Line ?>" width="200px">
                        </buton>    
                        <?php else: ?>
                            <button type="button"  onclick="bathu();" class="btn btn-outline-primary btn-lg " data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-html="true" title="<img src=../img/bathu.png width=200px> " >
                                <img src="<?php echo $Line ?>" width="200px">
                            </button>
      
                             <?php endif ?>   
                        </th>
                            <?php endforeach ?>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    <div>
        <p class="fs-4"><?php if($front_back == 1):?>前（まえ）から<?php else: ?>後（うしろ）から<?php endif ?><?php echo $random ?>番目（ばんめ）は誰（だれ）どこですか？</p>
    </div>
    <form action="" method="GET">
        <button class="btn btn-outline-primary fs-3">次へ</button>
    </form>
        </div>



            <?php include('../views/layouts/contents-list.php'); ?>
            <?php include('../views/layouts/footer.php'); ?>


    







