<style>
    .content-wrapper{
        min-height: 775px;
    }    

    .leftpad{
        padding-left: 0;
    }
</style>
<?php
$attribute = array('id' => 'valid');
echo form_open('User/addchemist', $attribute);
?>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <div class="form-group">
            No Of Chemist Met
            <input type="text" class="form-control" value="" name="No_of_Chemist_Met" placeholder="No Of Chemist Met" />
        </div>
        <div class="form-group">
            POB Of ASTHALIN MDI
            <input type="number" class="form-control" value="" name="ASTHALIN_MDI" placeholder=" POB Of ASTHALIN MDI" /> </div>
        <div class="form-group">
            POB Of ASTHALIN DPI
            <input type="number" class="form-control" value="" name="ASTHALIN_DPI" placeholder="POB Of ASTHALIN DPI"/> </div>
        <div class="form-group">
            POB Of AEROCORT FORTE ROTACAPS
            <input type="number"  class="form-control" name="AEROCORT_FORTE_ROTACAPS" placeholder="POB Of AEROCORT FORTE ROTACAPS" >
        </div>	    
        <div class="form-group">
            POB Of AEROCORT ROTACAPS
            <input type="number"  class="form-control" name="AEROCORT_ROTACAPS" required="" placeholder="POB Of AEROCORT ROTACAPS" >
        </div>	
        <div class="form-group">
            POB Of AEROCORT MDI
            <input type="number"  class="form-control" name="AEROCORT_MDI" placeholder=" POB Of AEROCORT MDI" >
        </div>	
        <div class="form-group">
            POB Of Other
            <input type="number"  class="form-control" name="Other" placeholder="POB Of Other" >
        </div>	
        <div class="row">

            <div class="form-group">
                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-7">
                    Name of Chemist Met
                    <input type="text" class="form-control" value="" name="Legendary_Chemist_Met" placeholder="Name of Chemist Met"/> 
                </div>  
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-5 leftpad">
                    Mobile No
                    <input type="number" class="form-control" value="" name="Mobile_no" placeholder="Mobile No" /> 
                </div>
            </div> 
        </div> <br>
        <div class="row">
            <div class="form-group">

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-7">
                    <input type="text" class="form-control" value="" name="Legendary_Chemist_Met1" placeholder="Name of Chemist Met"/> 
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-5 leftpad">
                    <input type="number" class="form-control" value="" name="Mobile_no1" placeholder="Mobile No" /> 

                </div> 
            </div>
        </div><br>
        <div class="row"> 
            <div class="form-group">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-7"> 
                    <input type="text" class="form-control" value="" name="Legendary_Chemist_Met2" placeholder="Name of Chemist Met"/> 
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-5 leftpad">
                    <input type="number" class="form-control" value="" name="Mobile_no2" placeholder="Mobile No" /> 

                </div> 
            </div>
        </div> <br>
        <div class="row">
            <div class="form-group">

                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-7">
                    <input type="text" class="form-control" value="" name="Legendary_Chemist_Met3" placeholder="Name of Chemist Met"/> 
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-5 leftpad">
                    <input type="number" class="form-control" value="" name="Mobile_no3" placeholder="Mobile No" />
                </div>
            </div> 
        </div> <br>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-7">
                    <input type="text" class="form-control" value="" name="Legendary_Chemist_Met4" placeholder="Name of Chemist Met"/>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-5 leftpad">
                    <input type="number" class="form-control" value="" name="Mobile_no4" placeholder="Mobile No" />
                </div>
            </div>
        </div> <br>

        <div class="form-group">
            <button class="btn btn-block btn-success " type="submit">Save</button>
        </div>
    </div>
</div>
</form>
<script src="<?php echo asset_url() ?>js/formValidation.min.js" type="text/javascript"></script>
<script src="<?php echo asset_url() ?>js/bootstrap.min.js" type="text/javascript"></script>
<script>
    $('document').ready(function () {
        $('#valid').formValidation({
            icon: {
            },
            fields: {
                No_of_Chemist_Met: {
                    validators: {
                        notEmpty: {
                            message: 'The No of ChemistMet  is required'
                        }
                    }
                },
                Legendary_Chemist_Met: {
                    validators: {
                        notEmpty: {
                            message: 'Legendary Chemist Met is required'
                        }
                    }
                },
                Mobile_no: {
                    validators: {
                        notEmpty: {
                            message: 'Mobile No is required'
                        }
                    }
                },
            }

        });
    });
</script>