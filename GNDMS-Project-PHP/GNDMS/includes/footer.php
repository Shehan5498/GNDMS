<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>About US</h3>
                    </div>
                    <?php
                    $ret = mysqli_query($con, "select * from  tblpage where PageType='aboutus'");
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($ret)) {
                    ?>
                        <p> <?php echo $row['PageDescription']; ?>.</p><?php } ?>

                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Information Link</h3>
                    </div>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="announcement.php">Announcement</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="admin/index.php">Admin</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Contact Details</h3>
                    </div>
                    <?php
                    $ret = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($ret)) {
                    ?>
                        <ul class="footer-links">

                            <li><?php echo $row['Email'] ?></li>
                            <li><?php echo $row['PageDescription'] ?></li>
                            <li>+<?php echo $row['MobileNumber'] ?></li>
                        </ul><?php  } ?>
                </div><!-- end clearfix -->
            </div><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-center">
                <p class="footer-company-name" style="color: white;">Online Grama Niladhari Division Management System by Team Phoenix | @ 2024</p>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>