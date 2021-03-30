<div class="box">

    <div class="box-header">

    



        <ul class="nav nav-tabs nav-tabs-left">

            <li>

            <a  data-toggle="tab"><i class="icon-plus"></i>

                    <?php echo get_phrase('Cancer Predwection');?>

            </a></li>

        </ul>

      
        

    </div>

    <div class="box-content padded">

        <div class="tab-content">      
         <img src="<?php echo base_url();?>uploads/cancer.png"  style=" width="700 height="466"/>      

            <div class="tab-pane box active" id="Modaling">   

                    <h2 style="marker-mid: 20px">  Prediction of Breast Cancer</h2>
                    <H3>   It's task is to classify tumors into malignant (cancer) or benign using features obtained from several cell images.</H3>
                   
                   
            <br>    
            </div>         
              

        </div>


            

            

            <!----CREATION FORM STARTS---->

            <div class="tab-pane box" id="add" style="padding: 5px">

                <div class="box-content">

                    <?php echo form_open('doctor/predection' , array('class' => 'form-horizontal validatable'));?>

                        <div class="padded">

                      
                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Radius Mean');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="radius_mean"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Texture Mean');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="texture_mean"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Concavity Mean');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="concavity_mean"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Concave Points Mean');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="concave points_mean"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Area SE');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="area_se"/>

                                </div>

                            </div>

                             <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Radius Worst');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="radius_worst"/>

                                </div>

                            </div>

                              <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Texture Worst');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="texture_worst"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Perimeter Worst');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="perimeter_worst"/>

                                </div>

                            </div>

                              <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Area worst');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="area_worst"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Concavity Worst');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="concavity_worst"/>

                                </div>

                            </div>
                            

                             <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Concave Points Worst');?></label>

                                <div class="controls">

                                    <input type="text" class="" name="concave points_worst"/>

                                </div>

                            </div>



                        </div>

                        <div class="form-actions">

                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('Predect');?></button>

                        </div>

                    <?php echo form_close();?>                

                </div>                

            </div>

            <!----CREATION FORM ENDS--->

            

        </div>

    </div>

</div>