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
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Kotak Masuk Saran</strong>
                            </div>
                            <div class="card-body" style="position: relative;display: inherit;">
                            
                            <!--kotak masuk-->
                            <div class="size" style="width: 50%;border:1px solid #ddd;">
                            <label>Pengirim :</label><span> <i> Dasep</i></span><br>
                            <p><?php echo  date('Y-m-d'); ?></p>
                            <p>
                            <?php
                                if (strlen($teks)<=200) {
                                    echo $teks;
                                }else{
                                    $y = substr($teks, 0,150) ."<a href class='btn btn-danger btn-sm' style='border-radius:6px;padding : 2px 3px;'>....Read More</a>";
                                    echo $y;
                                }
                            ?>
                            </p>
                            </div>
                            <!--end of kotak masuk-->
                            <!--kotak masuk-->
                            <div class="size" style="width: 50%;border:1px solid #ddd;">
                            <label>Pengirim :</label><span> <i> Dasep</i></span><br>
                            <p><?php echo  date('Y-m-d'); ?></p>
                            <p>
                            <?php
                                if (strlen($teks)<=200) {
                                    echo $teks;
                                }else{
                                    $y = substr($teks, 0,150) ."<a href class='btn btn-danger btn-sm' style='border-radius:6px;padding : 2px 3px;'>....Read More</a>";
                                    echo $y;
                                }
                            ?>
                            </p>
                            </div>
                            <!--end of kotak masuk--> 
                             <!--kotak masuk-->
                            <div class="size" style="width: 50%;border:1px solid #ddd;">
                            <label>Pengirim :</label><span> <i> Dasep</i></span><br>
                            <p><?php echo  date('Y-m-d'); ?></p>
                            <p>
                            <?php
                                if (strlen($teks)<=200) {
                                    echo $teks;
                                }else{
                                    $y = substr($teks, 0,150) ."<a href class='btn btn-danger btn-sm' style='border-radius:6px;padding : 2px 3px;'>....Read More</a>";
                                    echo $y;
                                }
                            ?>
                            </p>
                            </div><br>
                            <!--end of kotak masuk-->   

                            <!--kotak masuk-->
                            <div class="size" style="width: 50%;border:1px solid #ddd;">
                            <label>Pengirim :</label><span> <i> Dasep</i></span><br>
                            <p><?php echo  date('Y-m-d'); ?></p>
                            <p>
                            <?php
                                if (strlen($teks)<=200) {
                                    echo $teks;
                                }else{
                                    $y = substr($teks, 0,150) ."<a href class='btn btn-danger btn-sm' style='border-radius:6px;padding : 2px 3px;'>....Read More</a>";
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