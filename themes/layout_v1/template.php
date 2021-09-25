<?=$this->insert('header', ['title' => $title, 'company' => $company, 'username' => $username])?>
<?=$this->section('styles')?>
<?php $this->insert('sidebar') ?>
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


<?=$this->section('content')?>

        </div>
    </div>
</div>


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<?=$this->insert('footer')?>
<?=$this->section('scripts')?>

</body>
<!-- END: Body-->

</html>
