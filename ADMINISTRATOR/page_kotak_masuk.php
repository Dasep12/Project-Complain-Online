   <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
  
        <!-- Header-->

<!-- /header -->
        <!-- Header-->

<?php include'header.php'; ?>

        <div class="content mt-3">
            <div class="animated fadeIn">
<?php
$teks = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


?>
<div class="row">
<div class="col-md-12">
    <div class="card" >
        <div class="card-header" >
            <strong class="card-title">Kotak Masuk Saran</strong>
        </div>
        <div style="display: grid;">
        
        <!--kotak masuk-->
        <div class="inbox-saran">
        <label>Dari<i class="badge badge-danger org"> : Dasep</i></label><br>
        <a class="date"><?php echo "Tanggal <i class='badge badge-danger org'>: " . date('Y-m-d / h:i:s') ."</i>"; ?></a>
        <p>
        <?php
            if (strlen($teks)<=200) {
                echo $teks;
            }else{
                $y = substr($teks, 0,190) ."...<a href='#'style='border-radius:6px;padding : 2px 3px;' class='btn btn-primary btn-sm'>Read More</a>";
                echo $y;
            }
        ?>
        </p>
        </div>
        <!--end of kotak masuk-->

        <!--kotak masuk-->
        <div class="inbox-saran">
        <label>Dari<i class="badge badge-danger org"> : Dasep</i></label><br>
        <a class="date"><?php echo "Tanggal <i class='badge badge-danger org'>: " . date('Y-m-d / h:i:s') ."</i>"; ?></a>
        <p>
        <?php
            if (strlen($teks)<=200) {
                echo $teks;
            }else{
                $y = substr($teks, 0,190) ."...<a href='#'style='border-radius:6px;padding : 2px 3px;' class='btn btn-primary btn-sm'>Read More</a>";
                echo $y;
            }
        ?>
        </p>
        </div>
        <!--end of kotak masuk-->


        </div>
    </div>
</div>
</div>

</div>





    </div> <!-- .content -->
</div><!-- /#right-panel -->




</body>

</html>
    