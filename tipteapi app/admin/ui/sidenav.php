<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="dashboard.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Asset Entry
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="addVideoForm.php"><div class="sb-nav-link-icon"><i class="fas fa-video"></i></div>Add Video Assets</a>
                        <a class="nav-link" href="addAudioForm.php"><div class="sb-nav-link-icon"><i class="fas fa-headphones"></i></div>Add Audio Assets</a>
                        <a class="nav-link" href="addImageForm.php"><div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>Add Image Assets</a>
                        <a class="nav-link" href="addFileForm.php"><div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>Add File Assets</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    View Assets 
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="../process/videoListProcess.php"><div class="sb-nav-link-icon"><i class="fas fa-video"></i></div>Video Assets</a>
                        <a class="nav-link" href="../process/audioListProcess.php"><div class="sb-nav-link-icon"><i class="fas fa-headphones"></i></div>Audio Assets</a>
                        <a class="nav-link" href="../process/imageListProcess.php"><div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>Image Assets</a>
                        <a class="nav-link" href="../process/fileListProcess.php"><div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>File Assets</a>
                    </nav>
                </div>
                 <a class="nav-link" href="../process/userListProcess.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                    User List
                </a>
            </div>
        </div>
    </nav>
</div>