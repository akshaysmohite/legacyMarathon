<div class="row">
    <div class="col-lg-12">
        <input type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-primary pull-right" value="Upload PDF">
    </div>
</div>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Image Upload</h4>
            </div> 
            <?php
            $attribute = array('enctype' => 'multipart/form-data', 'name' => 'form1', 'id' => 'form1');
            echo form_open('User/pdf', $attribute);
            ?>
            <div class="modal-body">
                <h5 style="color: red"></h5>

                <div class="form_group">
                    Choose your file: <br /> 
                    <input name="file" type="file" id="file" class="form-control" />
                </div>
                <br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="save"  name="submit" class="btn btn-primary">Save</button>

                </div>
            </div>
            </form>
        </div>
    </div>
</div>