    
<?php if ($this->session->userdata('Designation') == 'TM') { ?>
    <div class="row">
        <div class="col-xs-3">
             <a href="<?php echo site_url('User/addDoctor'); ?>" class="btn btn-warning">Add Doctor</a>
        </div>
        <div class="col-xs-3">
               <a class="btn btn-info" href="<?php echo site_url('User/addchemist'); ?>" > Chemist </a>
        </div>
        <div class="col-xs-3">
           <a class="btn btn-success" href="<?php echo site_url('User/SCAT'); ?>" >   SCAT  </a>
        </div>
        <div class="col-xs-3">
            <a class="btn btn-primary"  href="<?php echo site_url('User/Taxi'); ?>" > Taxi</a>

                    

        </div>
    </div>
<?php } ?>
<div class="row">
    <div style="padding-top: 5px" class="col-md-3 col-sm-3 col-xs-12">
        <div class="panel-body  bg-green" >
            <div class="col-xs-3">
                <i class="fa fa-5x fa-user-md"></i>
            </div>
            <div class="col-xs-9" align="right">
                <h2 style="margin-top: 0px"><b><?php  echo $dashboardstatus->doctor; ?></b></h2>
                <h4 style="margin-top: 0px">Total  Doctor</h4>   

            </div><!-- /.info-box -->
        </div>
        <div class="panel-footer" style="background-color: #fff">
            <a href="<?php echo site_url('User/view_doctor'); ?>" ><b>View Detail</b> <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
    
      
            <div style="padding-top: 5px" class="col-md-3 col-sm-3 col-xs-12">
        <div class="panel-body bg-red" >
            <div class="col-xs-3">
                <i class="fa fa-5x fa-user-md"></i>
            </div>
            <div class="col-xs-9 " align="right">        
                <h2 style="margin-top: 0px"><b><?php  echo $dashboardstatus1->CHEMIST; ?></b></h2>
                <h4 style="margin-top: 0px">Total Chemist</h4>
            </div><!-- /.info-box -->
        </div>
        
        
        
        <div class="panel-footer" style="background-color: #fff">
            <a href="<?php echo site_url('User/view_chemist'); ?>" ><b>View Detail</b> <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>

 <div style="padding-top: 5px" class="col-md-3 col-sm-3 col-xs-12">
        <div class="panel-body  bg-blue" >
            <div class="col-xs-3">
                <i class="fa fa-5x fa-user-md"></i>
            </div>
            <div class="col-xs-9" align="right">
                <h2 style="margin-top: 0px"><b><?php echo $dashboardstatus2->Scat; ?></b></h2>
                <h4 style="margin-top: 0px">Total Scat</h4>   

            </div><!-- /.info-box -->
        </div>
        <div class="panel-footer" style="background-color: #fff">
            <a href="<?php echo site_url('User/view_scat'); ?>" ><b>View Detail</b> <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>

<div style="padding-top: 5px" class="col-md-3 col-sm-3 col-xs-12">
        <div class="panel-body  bg-orange" >
            <div class="col-xs-3">
                <i class="fa fa-5x fa-user-md"></i>
            </div>
            <div class="col-xs-9" align="right">
                <h2 style="margin-top: 0px"><b><?php  echo $dashboardstatus3->taxi; ?></b></h2>
                <h4 style="margin-top: 0px">Total Tour Car</h4>   
  <h2 style="margin-top: 0px"><b><?php  echo $dashboardstatu3->bike; ?></b></h2>
                <h4 style="margin-top: 0px">Total Tour Bike</h4> 
            </div><!-- /.info-box -->
        </div>
        <div class="panel-footer" style="background-color: #fff">
            <a href="<?php echo site_url('User/view_tour'); ?>" ><b>View Detail</b> <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>